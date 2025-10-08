<?php
// src/Controller/Admin/VideosController.php

namespace App\Controller\Admin;

  use App\Controller\AppController;
  use Cake\Event\Event;
  use Cake\Http\Exception\NotFoundException;
  use Cake\Validation;

class VideosController extends AppController
{
   // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Videos.fechaV' => 'desc']
    ];


	//muestra un listado con los videos que hay almacenados en la BD
	public function listar(){
	    // carga del layout para la accion
	    $this->viewBuilder()->setLayout('privado');

	    $this->paginate = [
	      'limit' => 6,
	      'order' => ['Videos.fechaV' => 'desc'],
	    ];


	    $videos = $this->paginate($this->Videos->find());
	    $this->set('videos', $videos);

	}

	public function add() {

		//cargar el layout privado
	 	 $this->viewBuilder()->setLayout('privado');

		  // creacion nueva entidad

		$video = $this->Videos->newEntity();
	

	    if ($this->request->is('post')) {
			
	    	// validacion de campos antes de copiar datos a la entidad
			$this->Videos->patchEntity($video, $this->request->getData());

	        if ($this->Videos->save($video)) {
		
	            $this->Flash->success(__('El vídeo ha sido <strong>' . $video->tituloV . '</strong> ha sido creado correctamente.'),['escape' => false]);
	            return $this->redirect(['action' => 'listar']);
	        }
	        $this->Flash->error(__('El vídeo no ha podido ser creado. Por favor, vuelva a intentarlo.'));
	    }

	    $this->set('video', $video);
    }

    public function edit($slug){

    	$this->viewBuilder()->setLayout('privado');

 		$video = $this->Videos->findBySlug($slug)->firstOrFail();
		// pr($video);die();
 		if(!$video)
	    {
	        throw new NotFoundException("Vídeo no encontrado");

	    }
	    if($this->request->is(['post', 'put'])){

	    	$this->Videos->patchEntity($video, $this->request->getData());

	    	if($this->Videos->save($video)){

	    		$this->Flash->success(__('La información del vídeo <strong>' . $video->tituloV . '</strong> se ha actualizado correctamente.'),['escape' => false]);
		        return $this->redirect(['action' => 'listar']);
	    	}
	    	$this->Flash->error(__('La información del vídeo no se ha podido actualizar.'),['escape' => false]);

	    }

	    $this->set('video', $video);

	}



	public function delete($id){
	    $this->request->allowMethod(['post', 'delete']);

	    $video = $this->Videos->get($id);

	    if ($this->Videos->delete($video)) {

	        $this->Flash->success(__('El vídeo <strong>'. $video->tituloV . ' </strong> se ha eliminado correctamente.'),['escape' => false]);

	        return $this->redirect(['action' => 'listar']);
	    }
	}

      // permite que los datos de un video se muestren o no al usuario visitante
    public function visible($id)
    {
        //recuperacion de los datos del video seleccionado
        $video=$this->Videos->get($id);

        if($video->visible == "0"){

          $video->id=$id;
          
          $video->visible="1";
          $this->Videos->save($video);
          $this->Flash->success(__('La información sobre el vídeo <strong>'. $video->tituloV . '</strong> ha cambiado a <strong>visible</strong>.'),['escape' => false]);


        }
        else{
          $video->id=$id;
          $video->visible="0";
          $this->Videos->save($video);
          $this->Flash->success(__('La información sobre el vídeo <strong>'. $video->tituloV . '</strong> ha cambiado a <strong class="text-danger">oculta</strong>.'),['escape' => false]);
        }
        return $this->redirect(['action'=> 'listar']);

    }

}

?>