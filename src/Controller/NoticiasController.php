<?php
  namespace App\Controller;

  class NoticiasController extends AppController
  {

    // variable para paginacion
    public $paginate = [
        'limit' => 4,
        'order' => ['Noticias.tituloN' => 'desc']
    ];

    // mostrar las noticias que el administrador mantiene como visibles en la parte publica de la aplicacion web
    public function index(){

      // carga del layout para la accion
        $this->viewBuilder()->setLayout('publico');

      // carga de los modelos dentro del modelo Noticias
        $this->loadModel('Eventos');
        $this->loadModel('Albumes');
        $this->loadModel('Videos');

        $noticias = $this->Noticias->find('all',[

          'order' => ['Noticias.fechaN' => 'desc'],
          'limit' => 4,
          'conditions' => ['Noticias.visible' => 1]
        ]
      );

      $eventos = $this->Eventos->find('all',
        ['limit' => 2,
          'order' => ['Eventos.fechaE' => 'desc'],
          'conditions' => ['Eventos.visible' => 1]

        ]
      );
      $albumes = $this->Albumes->find('all',
        ['limit' => 3,
          'order' => ['Albumes.fechaA' => 'desc'],
          'conditions' => ['Albumes.visible' => 1]

        ]
      );
      $videos = $this->Videos->find('all',
        ['limit' => 3,
          'order' => ['Videos.fechaV' => 'desc'],
          'conditions' => ['Videos.visible' => 1]

        ]
      );
    
      $this->set('noticias',$noticias);
      $this->set('eventos',$eventos);
      $this->set('albumes',$albumes);
      $this->set('videos',$videos);
    }



    // ver en detalle cada noticia en la parte publica
    public function ver($slug){

      // carga del layout para la accion
        $this->viewBuilder()->setLayout('publico');


      //busqueda de la noticia principal + relacion con la tabla eventos por si hay algun evento relacionado con esta noticia
      $noticia_principal = $this->Noticias->findBySlug($slug)->contain(['Eventos'])->firstOrFail();

       $this->set('noticia_principal',$noticia_principal);

      //paginacion para listado seccion más noticias que son diferentes a la noticia principal mostrada, es decir, todas menos esa, que ya se muestra.

      $this->paginate = [
          'limit' => 6,
          'order' => ['Noticias.fechaN' => 'desc'],
          'conditions' => ['Noticias.visible' => 1, 'Noticias.id NOT LIKE' => $noticia_principal->id ]
        ];

        $mas_noticias = $this->paginate();
        $this->set('mas_noticias',$mas_noticias);

    }



    // ver todas las noticias visibles para el usuario visitante de la web
    public function verTodas(){

       // carga del layout para la accion
        $this->viewBuilder()->setLayout('publico');

        //recuperacion de la noticia más reciente para poner en  principal
       $noticia_reciente = $this->Noticias
                  ->find()
                  ->where(['visible' => 1])
                  ->order(['fechaN' => 'DESC'])
                  ->first();

        $this->set('noticia_reciente', $noticia_reciente);

        // recuperación de las demás noticias (todas las visibles menos la más reciente)

        $this->paginate = [
          'limit' => 9,
          'order' => ['Noticias.fechaN' => 'desc'],
          'conditions' => ['Noticias.visible' => 1, 'Noticias.id NOT LIKE' => $noticia_reciente->id ]
        ];

        $mas_noticias = $this->paginate();
        $this->set('mas_noticias',$mas_noticias);

    }

  }
?>
