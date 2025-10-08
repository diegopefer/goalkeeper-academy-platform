<?php


$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset('utf-8') ?>
    <html lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>

      <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?= $this->Html->css('estilos') ?>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

</head>
<body class="bg-light">

  <div class="d-flex" id="wrapper">

    <!-- sidebar lateral -->
    <aside>
    <div class="bg-dark" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <br>
      </div>
      <nav class="nav">
        <li class="nav-item w-100">
          <?= $this->Html->link('<i class="fas fa-calendar-check mr-2"></i>EVENTOS',['controller' => 'Eventos', 'action' => 'listar'],['class' => 'nav-link px-4 py-3 bg-dark text-light','escape' => false]) ;?>
        </li>
        <li class="nav-item w-100">
          <?= $this->Html->link('<i class="fas fa-newspaper mr-2"></i>NOTICIAS',['controller' => 'Noticias', 'action' => 'listar'],['class' => 'nav-link px-4 py-3 bg-dark text-light','escape' => false]) ;?>
        </li>
        <li class="nav-item w-100">
           <?= $this->Html->link('<i class="fas fa-hand-paper mr-2"></i>PORTEROS',['controller' => 'Porteros', 'action' => 'listar'],['class' => 'nav-link px-4 py-3 bg-dark text-light','escape' => false]) ;?>
        </li>
        <li class="nav-item w-100">
           <a href="#submenu" data-toggle="collapse" class="nav-link px-4 py-3 bg-dark text-light" aria-expanded="false"><i class="fas fa-folder mr-2"></i>MULTIMEDIA <i class="fas fa-chevron-down ml-3"></i></a>

          <ul id="submenu" class="collapse p-0">
              <li class="nav-item w-100 d-flex justify-content-center">
                
                <?= $this->Html->link('<i class="fas fa-images mr-2"></i>FOTOGRAFÍAS',['controller' => 'Albumes', 'action' => 'listar'],['class' => 'col-10 nav-link px-4 py-3 text-light','escape' => false]) ;?>
              </li>
              <li class="nav-item w-100 d-flex justify-content-center">
                <?= $this->Html->link('<i class="fas fa-video mr-2"></i>VÍDEOS',['controller' => 'Videos', 'action' => 'listar'],['class' => 'col-10 nav-link px-4 py-3 text-light','escape' => false]) ;?>
              </li>
          </ul>
        </li>
      
         <li class="nav-item w-100 border-top border-secondary">
           <?= $this->Html->link('<i class="fas fa-user mr-2"></i>USUARIOS',['controller' => 'Users', 'action' => 'listar'],['class' => 'nav-link px-4 py-3 bg-dark text-light','escape' => false]) ;?>
           
        </li>

           
      </nav>
    </div>
    </aside>


    <!-- navbar + contentido principal-->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
          <button class="btn btn-outline-dark" id="menu-toggle"><i class="fas fa-bars fa text-light"></i></button>

            <ul class="navbar-nav mt-0 d-flex align-items-center">
              <li class="nav-item">
              <?= $this->Html->link(
                  $this->Html->image('logos/logo_edpap2.png', [
                      'width' => 58,
                      'height' => 38,
                      'alt' => 'Logotipo escuela de porteros'
                  ]),
                  ['controller' => 'Users', 'action' => 'admin'],
                  ['class' => 'navbar-brand nav-link p-0', 'escape' => false]
              ) ?>              </li>
            </ul>
            <ul class="navbar-nav mt-0 d-flex align-items-center">
              <li class="nav-item">
                <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i>',['controller' => 'Users','action' => 'logout'],['class' => 'nav-link text-light','escape' => false]);?>
              </li>
            </ul>

        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-between my-3">
        
                  <span class="badge badge-dark d-flex align-items-center"><p class="d-inline-block mb-0">Conectado como: &nbsp;</p> <p class="d-inline-block mb-0 text-warning"><?= $this->getRequest()->getSession()->read('Auth.User.username');?></p></span>
  
  
                </div>
                <div class="col-lg-12">
                  <?= $this->Flash->render() ?>
                  <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>


  </div>
  
  <!-- script con js que al hacer click en el boton añade/elimina la clase toggled para ocultar o mostrar la sidebar -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
    <?= $this->fetch('script') ?>
</html>
