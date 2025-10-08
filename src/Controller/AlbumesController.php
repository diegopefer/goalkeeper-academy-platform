<?php
// src/Controller/AlbumesController.php

namespace App\Controller;

class AlbumesController extends AppController
{
   // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Albumes.fechaA' => 'desc']
    ];


	

	public function index(){

		$this->viewBuilder()->setLayout('publico');

		$albumes = $this->Albumes->find()
								->where(['Albumes.visible' => 1])
								->order(['Albumes.fechaA' => 'DESC']);
								
		
		$this->set('albumes', $albumes);

	}

}

?>