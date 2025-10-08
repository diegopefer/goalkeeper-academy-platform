<?php
  namespace App\Controller;

  class EventosController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Eventos.fechaE' => 'desc']
    ];

    public function index(){

      // carga del layout para la accion
      $this->viewBuilder()->setLayout('publico');

      $this->paginate =[
              'limit' => 6,
              'order' => ['Eventos.fechaE' => 'desc', 'Eventos.horaE' =>'desc'],
              'conditions' => ['Eventos.visible' => 1]
      ];

      $eventos = $this->paginate();

      $this->set('eventos',$eventos);

    }


    // ver en detalle cada evento en la parte publica
    public function ver($slug){

      // carga del layout para la accion
        $this->viewBuilder()->setLayout('publico');

       //busqueda del evento principal + relacion con la tabla noticias por si hay (0,n) noticias relacionadas con este
      $evento_principal = $this->Eventos->findBySlug($slug)->contain(['Noticias'])->firstOrFail();
      
      $this->set('evento_principal',$evento_principal);


      //paginacion para listado seccion otros eventos que son diferentes al evento principal mostrado, es decir, todos menos ese, que ya se muestra.

      $this->paginate = [
          'limit' => 5,
          'order' => ['Eventos.fechaE' => 'desc', 'Eventos.horaE' =>'desc'],
          'conditions' => ['Eventos.visible' => 1, 'Eventos.id NOT LIKE' => $evento_principal->id ]
        ];

        $mas_eventos = $this->paginate();
        $this->set('mas_eventos',$mas_eventos);

    }

  }
?>
