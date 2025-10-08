<?php
// src/Controller/VideosController.php

namespace App\Controller;

class VideosController extends AppController
{
   // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Videos.fechaV' => 'desc']
    ];


	public function index(){

		$this->viewBuilder()->setLayout('publico');

		$videos = $this->Videos->find()
								->where(['Videos.visible' => 1])
								->order(['Videos.fechaV' => 'DESC']);
							
		$this->set('videos', $videos);

	}

}

?>