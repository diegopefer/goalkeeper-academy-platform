<?php
// src/Controller/Admin/AlbumesController.php

namespace App\Controller\Admin;

  use App\Controller\AppController;
  use Cake\Event\Event;
  use Cake\Http\Exception\NotFoundException;
  use Cake\Validation;


class AlbumesController extends AppController
{
   // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Albumes.fechaA' => 'desc']
    ];


	//muestra un listado con los albumes que hay almacenados en la BD
	public function listar(){
		
	    // carga del layout para la accion
	    $this->viewBuilder()->setLayout('privado');

	    $this->paginate = [
	      'limit' => 8,
	      'order' => ['Albumes.fechaA' => 'desc'],
	    ];

	    $albumes = $this->paginate($this->Albumes->find());
	    $this->set('albumes', $albumes);

	}

	public function add() {

		//cargar el layout privado
	 	 $this->viewBuilder()->setLayout('privado');

	 	 // creacion nueva entidad
	    $album = $this->Albumes->newEntity();

	    if ($this->request->is('post')) {

	    	// validacion de campos antes de copiar datos a la entidad
	        $this->Albumes->patchEntity($album, $this->request->getData());

	        if ($this->Albumes->save($album)) {

	            $this->Flash->success(__('El álbum ha sido <strong>' . $album->tituloA . '</strong> ha sido creado correctamente.'),['escape' => false]);
	            return $this->redirect(['action' => 'listar']);
	        }
	        $this->Flash->error(__('El álbum no ha podido ser creado. Por favor, vuelva a intentarlo.'));
	    }

	    $this->set('album', $album);
    }

    public function edit($slug){

    	$this->viewBuilder()->setLayout('privado');

 		$album = $this->Albumes->findBySlug($slug)->firstOrFail();

 		if(!$album)
	    {
	        throw new NotFoundException("Vídeo no encontrado");

	    }
	    if($this->request->is(['post', 'put'])){

	    	$this->Albumes->patchEntity($album, $this->request->getData());

	    	if($this->Albumes->save($album)){

	    		$this->Flash->success(__('La información del vídeo <strong>' . $album->tituloA . '</strong> se ha actualizado correctamente.'),['escape' => false]);
		        return $this->redirect(['action' => 'listar']);
	    	}
	    	$this->Flash->error(__('La información del vídeo no se ha podido actualizar.'),['escape' => false]);

	    }

	    $this->set('album', $album);

	}

	public function delete($id){
	    $this->request->allowMethod(['post', 'delete']);

	    $album = $this->Albumes->get($id);

	    if ($this->Albumes->delete($album)) {

	        $this->Flash->success(__('El álbum <strong>'. $album->tituloA . ' </strong> se ha eliminado correctamente.'),['escape' => false]);

	        return $this->redirect(['action' => 'listar']);
	    }
	}

     // permite que los datos de un album se muestren o no al usuario visitante
    public function visible($id)
    {
        //recuperacion de los datos del album seleccionado
        $album=$this->Albumes->get($id);

        if($album->visible == "0"){

          $album->id=$id;
          
          $album->visible="1";
          $this->Albumes->save($album);
          $this->Flash->success(__('La información sobre el álbum <strong>'. $album->tituloA . '</strong> ha cambiado a <strong>visible</strong>.'),['escape' => false]);


        }
        else{
          $album->id=$id;
          $album->visible="0";
          $this->Albumes->save($album);
          $this->Flash->success(__('La información sobre el álbum <strong>'. $album->tituloA . '</strong> ha cambiado a <strong class="text-danger">oculta</strong>.'),['escape' => false]);
        }
        return $this->redirect(['action'=> 'listar']);

    }

}

?>