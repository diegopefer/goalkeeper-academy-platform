<?php
  namespace App\Controller;

  class PorterosController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Porteros.nombre' => 'asc']
    ];


    public function index(){

      //carga del layout de la parte publica
      $this->viewBuilder()->setLayout('publico');

      $this->paginate = [
          'limit' => 9,
          'order' => ['Porteros.nombre' => 'asc'],
          'conditions' => ['Porteros.visible' => 1]
        ];

      $porteros= $this->paginate();
      $this->set('porteros',$porteros);
    }


    public function ver($slug){
        
      // carga del layout para la accion
      $this->viewBuilder()->setLayout('publico');



      // consulta del portero por slug determinado, devuelve el primero o lanza NotFoundException
      $portero = $this->Porteros->findBySlug($slug)->firstOrFail();
      $this->set('portero',$portero);


        // resto de porteros
       $porteros = $this->Porteros->find('all',[

          'order' => ['Porteros.nombre' => 'asc'],
          'conditions' => ['Porteros.visible' => 1, 'Porteros.id NOT LIKE' => $portero->id]
        ]
      );

        $this->set('porteros',$porteros);

    }

  }
?>
