<?php
// src/Controller/Admin/PorterosController.php
  namespace App\Controller\Admin;

  use App\Controller\AppController;
  use Cake\Event\Event;
  use Cake\Http\Exception\NotFoundException;
  use Cake\Validation;

  class PorterosController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Porteros.nombre' => 'asc']
    ];

     //muestra un listado con los porteros que hay almacenados en la BD
    public function listar(){
        // carga del layout para la accion
        $this->viewBuilder()->setLayout('privado');

        $this->paginate = [
          'limit' => 6,
          'order' => ['Porteros.nombre' => 'asc'],
        ];

        $porteros= $this->paginate($this->Porteros->find());
        $this->set('porteros',$porteros);

    }

    // añadir nuevo portero a la bd
    public function add(){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

        // creacion de la nueva entidad
        $portero = $this->Porteros->newEntity();

        if ($this->request->is('post')) {//si la peticion es tipo post

          // validacion antes de copiar los datos a la entidad
            $portero = $this->Porteros->patchEntity($portero, $this->request->getData());

            if ($this->Porteros->save($portero)) {

                //ruta de la carpeta donde se almacenará la foto. se realiza despues del save para poder acceder al id del portero ya que hasta que no se crea la entidad no se puede recuperar el valor del id
                $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Porteros/fotoP/'. $portero->id . '/';

                // array de datos de la foto
                $foto = $this->request->getData('fotoP');

                // funcion para subida de archivo al servidor
                $this->subirArchivo($foto, $ruta_foto);

                //actualizacion de la base de datos con el nombre de la foto
                $portero->fotoP = $this->request->getData('fotoP.name');

                // guardado en la BD + confirmacion + redireccion
                $this->Porteros->save($portero);

                $this->Flash->success(__('El portero <strong>'. $portero->nombre . ' ' . $portero->apellidos . ' </strong> ha sido creado correctamente.'), ['escape' => false]);

                return $this->redirect(['action' => 'listar']);
            }
            $this->Flash->error(__('El portero no ha podido ser creado. Por favor, vuelva a intentarlo.'));
        }
        $this->set('portero', $portero);
    }


    // edicion de un portero
    public function edit($slug){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

      $portero = $this->Porteros->findBySlug($slug)->firstOrFail();

      // variable con nombre de la foto almacenado en la bd
      $nombre_foto = $portero->fotoP;

      if(!$portero)//si no encuentra el portero,lanza excepcion
      {
        throw new NotFoundException("Portero no encontrado");

      }
      if ($this->request->is(['post', 'put'])) {

           // validacion de campos antes de copiar datos a la entidad
          $this->Porteros->patchEntity($portero, $this->request->getData());


          if ($this->Porteros->save($portero)) {

            //SI NO SE AÑADE FOTO NUEVA EN EL FORM, SE DEJA LA QUE ESTA ACTUALMENTE Y SE GUARDA SU NOMBRE EN LA BD
            if(empty($this->request->getData('fotoP.name'))){

              //actualizacion de la base de datos con el nombre de la foto que había actualmente
              $portero->fotoP = $nombre_foto;
              $this->Porteros->save($portero);

            }
           else{//actualización de la foto del portero

              // ruta foto almacenada
              $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Porteros/fotoP/'. $portero->id . '/';

               // datos foto añadida en el formulario
              $foto= $this->request->getData('fotoP');

              //modificacion de la foto almacenada en el servidor
              $this->modificarArchivo($foto, $ruta_foto);

              //actualizacion de la base de datos con el nombre de la foto
              $portero->fotoP = $this->request->getData('fotoP.name');
              $this->Porteros->save($portero);
            }

              $this->Flash->success(__('La información del portero <strong>'. $portero->nombre . ' ' . $portero->apellidos . ' </strong> se ha actualizado correctamente.'),['escape' => false]);
         
              return $this->redirect(['action' => 'listar']);
          }
          $this->Flash->error(__('La información del portero no se ha podido actualizar.'), ['escape' => false]);
      }

      $this->set('portero', $portero);
    }

        
    public function delete($id){

      //si se intenta eliminar utilizando una petición get, "allowMethod" devuelve una excepción
      $this->request->allowMethod(['post', 'delete']);

      //busqueda del portero a borrar segun el id pasado como parametro
      $portero = $this->Porteros->get($id);

      $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Porteros/fotoP/'. $portero->id . '/';
      // debug($ruta_foto); die;

      // metodo para borrado recursivo de carpetas subcarpetas y archivo
      $this->borrarDir($ruta_foto);

      if ($this->Porteros->delete($portero)) {
        
          $this->Flash->success(__('El portero'. $portero->nombre .' '. $portero->apellidos.' ha sido eliminado.'),['escape' => false]);
          
          return $this->redirect(['action' => 'listar']);
      }
    }



    public function verPrivado($slug){
      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

      $portero = $this->Porteros->findBySlug($slug)->firstOrFail();
      $this->set(compact('portero'));

      $porteros = $this->Porteros->find('all',[
        'order' => ['Porteros.nombre' => 'asc'],
        'conditions' => ['Porteros.id NOT LIKE' => $portero->id]
      ]);
      $this->set('porteros',$porteros);
    }

    public function admin(){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('privado');

      // carga de modelos de otros controllers
      $this->loadModel('Eventos');
      $this->loadModel('Noticias');
      $this->loadModel('Albumes');
      $this->loadModel('Videos');
      $this->loadModel('Users');

      // consultas para contar numero total de porteros eventos y noticias
      $total_porteros = $this->Porteros->find()->count();
      $total_eventos = $this->Eventos->find()->count();
      $total_noticias = $this->Noticias->find()->count();
      $total_albumes = $this->Albumes->find()->count();
      $total_videos = $this->Videos->find()->count();
      $total_usuarios = $this->Users->find()->count();

      // paso de variables a la vista correspondiente
      $this->set('total_porteros', $total_porteros);
      $this->set('total_eventos', $total_eventos);
      $this->set('total_noticias', $total_noticias);
      $this->set('total_albumes', $total_albumes);
      $this->set('total_videos', $total_videos);
      $this->set('total_usuarios', $total_usuarios);

    }

     // permite que los datos de un portero se muestren o no al usuario visitante
    public function visible($id){

      //recuperacion de los datos del portero concreto que se ha seleccionado
      $portero=$this->Porteros->get($id);

      if($portero->visible == "0"){

        $portero->id=$id;
        /*no acepta esta sentencia, en cakephp 2.6 si que aceptaba.Fatal error*/
        // $this->Porteros->save(['visible' =>"1"]);
        $portero->visible="1";
        $this->Porteros->save($portero);
        $this->Flash->success(__('La información sobre el portero <strong> '. $portero->nombre .' '. $portero->apellidos .' </strong> ha cambiado a <strong>visible</strong>.'),['escape' => false]);


      }
      else{
        $portero->id=$id;
        $portero->visible="0";
        $this->Porteros->save($portero);
        $this->Flash->success(__('La información sobre el portero <strong> '. $portero->nombre . ' '. $portero->apellidos .'</strong> ha cambiado a <strong class="text-danger">oculta</strong>.'),['escape' => false]);
      }

      /*permitirá pasar a la vista porteros de la zona pública solo la información de los porteros que el adminitrador ponga como visible*/
      // $this->set('porteros', $this->Porteros->find('all',['conditions'=>['visible'=>'1']]));
      return $this->redirect(['action'=> 'listar']);

    }


  }
?>
