<?php
// src/Controller/Admin/EventosController.php
  namespace App\Controller\Admin;

  use App\Controller\AppController;
  use Cake\Event\Event;
  use Cake\Http\Exception\NotFoundException;
  use Cake\Validation;

  class EventosController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Eventos.fechaE' => 'desc']
    ];


     //muestra un listado con los eventos que hay almacenados en la BD
    public function listar(){
        // carga del layout para la accion
        $this->viewBuilder()->setLayout('privado');

        $this->paginate = [
          'limit' =>6,
          'order' => ['Eventos.fechaE' => 'desc'],
        ];

        $eventos= $this->paginate($this->Eventos->find());
        $this->set('eventos',$eventos);

    }

    // añadir una nuevo evento a la BD
    public function add(){

      //cargar el layout privado
      $this->viewBuilder()->setLayout('privado');

      //creacion de la nueva entidad
      $evento = $this->Eventos->newEntity();

      // si la peticion es tipo post
      if($this->request->is('post')){

        // validacion de campos antes de copiar datos a la entidad
        $evento = $this->Eventos->patchEntity($evento, $this->request->getData());


        if($this->Eventos->save($evento)){

          //almacenamiento foto evento: Se realiza despues del save para poder acceder al "id" de la evento ya que hasta crear la entidad no se puede recuperar su valor

          // ruta donde se guardará la foto
          $ruta_foto = $_SERVER['DOCUMENT_ROOT'] . '/edpap/webroot/files/Eventos/fotoE/'. $evento->id . '/';
          // array de datos de la foto
          $foto = $this->request->getData('fotoE');

          // funcion subir foto a servidor
          $this->subirArchivo($foto,$ruta_foto);


          //actualizacion de la BD almacenando el nombre de la foto
          $evento->fotoE = $this->request->getData('fotoE.name');

          // guardado en la BD + confirmacion + redireccion
           $this->Eventos->save($evento);

            $this->Flash->success(__('El evento <strong>'. $evento->tituloE . '</strong> ha sido creado correctamente.'),['escape' => false]);
            return $this->redirect(['action' => 'listar']);
          }
          $this->Flash->error(__('El evento no ha podido ser creado. Por favor, vuelva a intentarlo.'));

        }
        $this->set('evento', $evento);
    }


     // edicion de un evento
     public function edit($slug){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

      $evento = $this->Eventos->findBySlug($slug)->firstOrFail();


      $nombre_foto = $evento->fotoE;

      if(!$evento)//si no encuentra el evento,lanza excepcion
      {
        throw new NotFoundException("Evento no encontrado");

      }
      if ($this->request->is(['post', 'put'])){

           // validacion de campos antes de copiar datos a la entidad
          $this->Eventos->patchEntity($evento, $this->request->getData());


          if ($this->Eventos->save($evento)){

            //SI NO SE AÑADE FOTO NUEVA EN EL FORM, SE DEJA LA QUE ESTA ACTUALMENTE Y SE GUARDA SU NOMBRE EN LA BD
            if(empty($this->request->getData('fotoE.name'))){
              //actualizacion de la base de datos con el nombre de la foto que había actualmente
              $evento->fotoE = $nombre_foto;
              $this->Eventos->save($evento);

            }
            else{//actualización de la foto del evento

              // ruta foto almacenada
              $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Eventos/fotoE/'. $evento->id . '/';

              // datos foto añadida en el formulario
              $foto= $this->request->getData('fotoE');

              //modificacion de la foto almacenada en el servidor
              $this->modificarArchivo($foto, $ruta_foto);

              //actualizacion de la base de datos con el nombre de la foto
              $evento->fotoE = $this->request->getData('fotoE.name');
              $this->Eventos->save($evento);
            }

              $this->Flash->success(__('La información del evento <strong>'. $evento->tituloE . '</strong> se ha actualizado correctamente.'),['escape' => false]);
            

              return $this->redirect(['action' => 'listar']);
          }
          $this->Flash->error(__('La información del evento no se ha podido actualizar.'),['escape' => false]);
      }

      $this->set('evento', $evento);
    }


    public function delete($id){

      //si se intenta eliminar utilizando una petición get, "allowMethod" devuelve una excepción
      $this->request->allowMethod(['post', 'delete']);

      //busqueda del evento segun el id pasado como parametro
      $evento =  $this->Eventos->get($id);


      $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Eventos/fotoE/'. $evento->id . '/';

      // metodo para borrado recursivo de carpetas subcarpetas y archivo
      $this->borrarDir($ruta_foto);

      if ($this->Eventos->delete($evento)) {

          $this->Flash->success(__('El evento <strong>'. $evento->tituloE . ' </strong> se ha eliminado correctamente.'), ['escape' => false]);
          
      }else{
          $this->Flash->error(__('El evento <strong>'. $evento->tituloE . ' </strong> no ha podido ser eliminado, inténtalo de nuevo.'),['escape' => false]);
      }

      return $this->redirect(['action' => 'listar']);
    }


    
    // mostrar información detallada de cada evento en la parte privada
    public function verPrivado($slug){

      $this->viewBuilder()->setLayout('privado');



       //busqueda del evento principal + relacion con la tabla noticias por si hay (0,n) noticias relacionadas con este 

      // consulta del evento por slug determinado, devuelve el primero o lanza NotFoundException
      $evento_principal = $this->Eventos->findBySlug($slug)->contain(['Noticias'])->firstOrFail();

      $this->set('evento_principal',$evento_principal);

      //paginacion para listado seccion más eventos que son diferentes al evento principal mostrado, es decir, todos menos ese, que ya se muestra.
      $this->paginate = [
        'limit' => 5,
        'order' => ['Eventos.fechaE' => 'desc'],
        'conditions' => ['Eventos.id NOT LIKE' => $evento_principal->id]
      ];

      $this->set('mas_eventos',$this->paginate());
    }


    // permite que los datos de un evento se muestren o no al usuario visitante
    public function visible($id)
    {
        //recuperacion de los datos del evento seleccionado
        $evento=$this->Eventos->get($id);

        if($evento->visible == "0"){

          $evento->id=$id;
          /*no acepta esta sentencia, en cakephp 2.6 si que aceptaba.Fatal error*/
          // $this->Eventos->save(['visible' =>"1"]);
          $evento->visible="1";
          $this->Eventos->save($evento);
          $this->Flash->success(__('La información sobre el evento <strong>'. $evento->tituloE . '</strong> ha cambiado a <strong>visible</strong>.'),['escape' => false]);


        }
        else{
          $evento->id=$id;
          $evento->visible="0";
          $this->Eventos->save($evento);
          $this->Flash->success(__('La información sobre el evento <strong>'. $evento->tituloE . '</strong> ha cambiado a <strong class="text-danger">oculta</strong>.'),['escape' => false]);
        }

        /*permitirá pasar a la vista eventos de la zona pública solo la información de los eventos que el adminitrador ponga como visible*/
        // $this->set('eventos', $this->Eventos->find('all',['conditions'=>['visible'=>'1']]));
        return $this->redirect(['action'=> 'listar']);

    }


  }
?>
