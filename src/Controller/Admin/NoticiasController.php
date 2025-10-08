<?php
// src/Controller/Admin/EventosController.php
  namespace App\Controller\Admin;

  use App\Controller\AppController;
  use Cake\Event\Event;
  use Cake\Http\Exception\NotFoundException;
  use Cake\Validation;


  class NoticiasController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Noticias.tituloN' => 'desc']
    ];


    //muestra un listado con los noticias que hay almacenados en la BD
    public function listar(){
        // carga del layout para la accion
        $this->viewBuilder()->setLayout('privado');

        $this->paginate = [
          'limit' => 6,
          'order' => ['Noticias.fechaN' => 'desc'],
        ];


        $noticias = $this->paginate($this->Noticias->find());
        $this->set('noticias', $noticias);
    }


    // añadir una nueva noticia a la BD
    public function add(){

      //cargar el layout privado
      $this->viewBuilder()->setLayout('privado');

      //se recupera la lista de todos los eventos disponibles y se pasan a la vista
      $eventos= $this->Noticias->Eventos->find('list',['order' => ['fechaE' => 'desc']]);

      $this->set('eventos',$eventos);

      //creacion de la nueva entidad
      $noticia = $this->Noticias->newEntity();

      // si la peticion es tipo post
      if($this->request->is('post')){
        
        // validacion de campos antes de copiar datos a la entidad
        $this->Noticias->patchEntity($noticia, $this->request->getData());
  
        if($this->Noticias->save($noticia)){

          //almacenamiento foto noticia: Se realiza despues del save para poder acceder al "id" de la noticia ya que hasta crear la entidad no se puede recuperar su valor

          // ruta donde se guardará la foto
          $ruta_foto = $_SERVER['DOCUMENT_ROOT'] . '/edpap/webroot/files/Noticias/fotoN/'. $noticia->id . '/';

          //array con datos de la foto
          $foto = $this->request->getData('fotoN');

          // funcion para subida de archivo al servidor
          $this->subirArchivo($foto, $ruta_foto);

          //actualizacion de la BD almacenando el nombre de la foto
          $noticia->fotoN = $this->request->getData('fotoN.name');

          // guardado en la BD + confirmacion + redireccion
          $this->Noticias->save($noticia);

            $this->Flash->success(__('La noticia <strong>'. $noticia->tituloN . ' </strong> ha sido creada correctamente.'),['escape' => false]);
            return $this->redirect(['action' => 'listar']);
        }
        $this->Flash->error(__('La noticia no ha podido ser creada. Por favor, vuelva a intentarlo.'));

      }
      $this->set('noticia', $noticia);
    }


    // edicion de una noticia
     public function edit($slug){

      // carga layout privado
      $this->viewBuilder()->layout('privado');


      //se recupera la lista de todos los eventos disponibles y se pasan a la vista
      $eventos= $this->Noticias->Eventos->find('list',[

          'order' => ['Eventos.fechaE' => 'desc']
        ]);

      $this->set('eventos',$eventos);


      $noticia = $this->Noticias->findBySlug($slug)->firstOrFail();


      // variable con el nombre de la foto almacenado en la BD
      $nombre_foto = $noticia->fotoN;

       if(!$noticia)//si no encuentra la noticia,lanza excepcion
      {
        throw new NotFoundException("Noticia no encontrada");

      }
      if ($this->request->is(['post', 'put'])) {

           // validacion de campos antes de copiar datos a la entidad

          $this->Noticias->patchEntity($noticia, $this->request->getData());

          if ($this->Noticias->save($noticia)) {

            //SI NO SE AÑADE FOTO NUEVA EN EL FORM, SE DEJA LA QUE ESTA ACTUALMENTE Y SE GUARDA SU NOMBRE EN LA BD
            if(empty($this->request->getData('fotoN.name'))){

              //actualizacion de la BD con el nombre de la foto que había actualmente
              $noticia->fotoN = $nombre_foto;
              $this->Noticias->save($noticia);

            }else{//actualización de la foto de la noticia

              // ruta de la foto almacenada
              $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Noticias/fotoN/'. $noticia->id . '/';
              // datos foto añadida en el formulario
              $foto= $this->request->getData('fotoN');

              //modificacion de la foto almacenada en el servidor
              $this->modificarArchivo($foto, $ruta_foto);


              //actualizacion de la base de datos con el nombre de la foto
              $noticia->fotoN = $this->request->getData('fotoN.name');
              $this->Noticias->save($noticia);

            }

            $this->Flash->success(__('La información de la noticia <strong>'. $noticia->tituloN . '</strong> se ha actualizado correctamente.'),['escape' => false]);

            return $this->redirect(['action' => 'listar']);


          }
        $this->Flash->error(__('La información de la noticia no se ha podido actualizar.'));
      }
      $this->set('noticia', $noticia);

    }


    public function delete($id){

      //si se intenta eliminar utilizando una petición get, "allowMethod" devuelve una excepción
      $this->request->allowMethod(['post', 'delete']);

      //busqueda de la noticia segun el id pasado como parametro
      $noticia = $this->Noticias->get($id);


      $ruta_foto = $_SERVER['DOCUMENT_ROOT'] .'/edpap/webroot/files/Noticias/fotoN/'. $noticia->id . '/';

      // metodo para borrado recursivo de carpetas subcarpetas y archivo
      $this->borrarDir($ruta_foto);

      if ($this->Noticias->delete($noticia)) {

          $this->Flash->success(__('La noticia <strong>'. $noticia->tituloN . '</strong> se ha eliminado correctamente.'),['escape' => false]);
          
      }else{
          $this->Flash->error(__('La noticia no ha podido ser eliminada, inténtalo de nuevo.'),['escape' => false]);
      }

      return $this->redirect(['action' => 'listar']);
    }


    // mostrar información detallada de cada noticia en la parte privada
    public function verPrivado($slug){

      $this->viewBuilder()->setLayout('privado');

      //busqueda de la noticia principal + relacion con la tabla eventos por si hay algun evento relacionado con esta noticia

      $noticia_principal = $this->Noticias->findBySlug($slug)->contain(['Eventos'])->firstOrFail();

       $this->set('noticia_principal',$noticia_principal);

      //paginacion para listado seccion más noticias que son diferentes a la noticia principal mostrada, es decir, todas menos esa, que ya se muestra.

      $this->paginate = [
        'limit' => 5,
        'order' => ['Noticias.fechaN' => 'desc'],
        'conditions' => ['Noticias.id NOT LIKE' => $noticia_principal->id]
      ];

      $this->set('mas_noticias',$this->paginate());


    }


    // permite que los datos de una noticia se muestren o no al usuario visitante
    public function visible($id){

      //recuperacion de los datos del noticia seleccionado
      $noticia = $this->Noticias->get($id);

      if($noticia->visible == "0"){

        $noticia->id=$id;
        /*no acepta esta sentencia, en cakephp 2.6 si que aceptaba.Fatal error*/
        // $this->Noticias->save(['visible' =>"1"]);
        $noticia->visible="1";
        $this->Noticias->save($noticia);
        $this->Flash->success(__('La información de la noticia ha cambiado a <strong>visible</strong>.'),['escape' => false]);


      }
      else{
        $noticia->id=$id;
        $noticia->visible="0";
        $this->Noticias->save($noticia);
        $this->Flash->success(__('La información de la noticia ha cambiado a <strong class="text-danger">oculta</strong>.'),['escape' => false]);
      }

      /*permitirá pasar a la vista noticias de la zona pública solo la información de las noticias que el adminitrador ponga como visible*/
      // $this->set('noticias', $this->Noticias->find('all',['conditions'=>['visible'=>'1']]));
      return $this->redirect(['action'=> 'listar']);

    }

  

  }
?>
