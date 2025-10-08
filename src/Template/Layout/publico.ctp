
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <html lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title><?= $this->fetch('title') ?></title>
    <?= $this->fetch('meta') ?>
  
    <?= $this->Html->meta('icon') ?>

   <!-- css -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?= $this->Html->css('estilos') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">

    
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
  

    <?= $this->fetch('css') ?>

</head>
<body>

 <section>
    <div class="container-fluid px-0">

      <div class="container">
        <div class="col-12 d-flex justify-content-center justify-content-md-end">
          <ul class="list-unstyled list-inline my-1 py-1">
              <li class="list-inline-item mx-2"><a href="" class="text-dark" target="_blank"><i class="fab fa-facebook-f text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-twitter text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-youtube text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-instagram text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-google text-dark rrss_icono"></i></a></li>
          </ul>
        </div>
      </div>
        <!-- Barra de navegacion-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">

            <a class="navbar-brand mx-3" href="/">
            <?= $this->Html->image(
              'logos/logo_edpap2.png',
              [
                  'class' => 'logo_principal',
                  'alt' => 'Logo escuela de porteros',
                  'url' => ['prefix'=> false,'controller' => 'Noticias', 'action' => 'index'] // ejemplo
              ]
          ) ?>  
            </a>
      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse text-lg-center" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item  mx-0 mx-lg-1 section dropdown">
                <a class="nav-link py-3 px-0 px-lg-3 text-light font-weight-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">QUIÉNES SOMOS<i class="d-lg-none fas fa-angle-down arrow"></i></a>
                <ul class="dropdown-menu border-0 bg-dark mt-0" role="menu">
                  <li><?= $this->Html->link('NUESTRA ESCUELA',['prefix' => false,'controller' => 'Pages','action' => 'nuestraEscuela'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                  <li><?= $this->Html->link('METODOLOGÍA',['prefix' => false,'controller' => 'Pages','action' => 'metodologia'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                  <li><?= $this->Html->link('OBJETIVOS',['prefix' => false,'controller' => 'Pages','action' => 'objetivos'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                  <li><?= $this->Html->link('ENTRENAMIENTOS',['prefix' => false,'controller' => 'Pages','action' => 'entrenamientos'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                  <li><?= $this->Html->link('EQUIPO DE TRABAJO',['prefix' => false,'controller' => 'Pages','action' => 'equipoTrabajo'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                </ul>
              </li>
              <li class="nav-item  mx-0 mx-lg-1 section dropdown">
                <a class="nav-link py-3 px-0 px-lg-3 text-light font-weight-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LA ESCUELA<i class="d-lg-none fas fa-angle-down arrow"></i></a>
                <ul class="dropdown-menu border-0 bg-dark mt-0" role="menu">
                  <li><?= $this->Html->link('LOCALIZACIÓN',['prefix' => false,'controller' => 'Pages','action' => 'localizacion'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                  <li><?= $this->Html->link('HORARIOS Y TARIFAS',['prefix' => false,'controller' => 'Pages','action' => 'horariosTarifas'],['class' => 'dropdown-item text-light text-decoration-none','escape' => false]);?></li>
                </ul>
              </li>
              <li class="nav-item mx-0 mx-lg-1">
              <?= $this->Html->link(
                  'NUESTROS PORTEROS',
                  ['prefix' => false,'controller' => 'Porteros', 'action' => 'index'],
                  ['class' => 'nav-link py-3 px-0 px-lg-3 text-light font-weight-bold']
              ) ?>              </li>

              <li class="nav-item mx-0 mx-lg-1">
                              <?= $this->Html->link(
                  'NOTICIAS',
                  ['prefix' => false,'controller' => 'Noticias', 'action' => 'verTodas'],
                  ['class' => 'nav-link py-3 px-0 px-lg-3 text-light font-weight-bold']
              ) ?>  
              </li>

              <li class="nav-item dropdown mx-0 mx-lg-1 section">
                <a class="nav-link py-3 px-0 px-lg-3 text-light font-weight-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MULTIMEDIA<i class="d-lg-none fas fa-angle-down arrow"></i></a>
                <ul class="dropdown-menu border-0 bg-dark mt-0" role="menu">
                  <li><?= $this->Html->link('GALERÍA FOTOGRÁFICA',['prefix' => false,'controller' => 'Albumes','action' => 'index'],['class' => 'dropdown-item text-light','escape' => false]);?></li>
                  <li><?= $this->Html->link('VIDEOTECA',['prefix' => false,'controller' => 'Videos','action' => 'index'],['class' => 'dropdown-item text-light','escape' => false]);?></li>
                </ul>
              </li>

              <li class="nav-item mx-0 mx-lg-1">
                <?= $this->Html->link('CONTACTO',['prefix' => false,'controller' => 'Pages','action' => 'contacto'],['class' => 'nav-link py-3 px-0 px-lg-3 text-light font-weight-bold','escape' => false]);?>
              </li>
            </ul>
          </div>
        </div>
    </nav>

  </div>
</section>


  <div class="container-fluid px-0">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>

      <a id="ir_arriba"><i class="fas fa-angle-up"></i></a>
  </div>

  <!-- pie de pagina -->
<section class="footer">
  <div class="container-fluid px-0">
    <footer class="py-3 bg-dark">
      <div class="container">
        <!-- lista redes sociales -->
        <div class="row">
          <div class="col-12 mt-2 mt-sm-4 py-3">
              <ul class="list-unstyled list-inline text-center">
      						<li class="list-inline-item mx-2"><a href="" class="text-dark" target="_blank"><i class="fab fa-2x fa-facebook-f text-light rrss_icono"></i></a></li>
      						<li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-2x fa-twitter text-light rrss_icono"></i></a></li>
                  <li class="list-inline-item mx-2"><a href="#" target="_blank"><i class="fab fa-2x fa-youtube text-light rrss_icono"></i></a></li>
                  <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-2x fa-instagram text-light rrss_icono"></i></a></li>
                   <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-2x fa-google text-light rrss_icono"></i></a></li>
      				</ul>
            </div>
          </div>

          <!-- lista patrocinadores -->
          <div class="row d-flex align-items-center my-4">
            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="http://www.deportesourense.com/" class="d-flex justify-content-center" target="_blank">
                <?= $this->Html->image(
              'patrocinadores/consellodeportesou.png',
              [
                  'class' => 'img-fluid w-50 patrocinador',
                  'alt' => 'Logotipo del Consello Municipal de Deportes de Ourense'
              ]
          ) ?>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="https://www.barbadas.es/es/" class="d-flex justify-content-center" target="_blank">
                <?= $this->Html->image(
              'patrocinadores/concellobarbadas.png',
              [
                  'class' => 'img-fluid w-50 patrocinador',
                  'alt' => 'Logotipo del Concello de Barbadás'
              ]
          ) ?>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="https://www.facebook.com/Coolsportcustom/" class="d-flex justify-content-center" target="_blank">
                 <?= $this->Html->image(
              'patrocinadores/coolsport-logo.png',
              [
                  'class' => 'img-fluid w-50 patrocinador',
                  'alt' => 'Logotipo de Coolsport'
              ]
              
          ) ?>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="https://www.tecnopolesportcenter.com/" class="d-flex justify-content-center" target="_blank">
                <?= $this->Html->image(
              'patrocinadores/tecnopolesportcenter.png',
              [
                  'class' => 'img-fluid w-100 patrocinador',
                  'alt' => 'Logotipo de Tecnópole Sport Center'
              ]
              
          ) ?>
            </div>

            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="http://rosasrotulacion.com/empresa/" class="d-flex justify-content-center" target="_blank">
                <?= $this->Html->image(
              'patrocinadores/rosasrotulacion.jpg',
              [
                  'class' => 'img-fluid w-50 patrocinador',
                  'alt' => 'Logotipo Rosa\'s rotulación'
              ]
              
          ) ?>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-2">
              <a href="https://www.facebook.com/tamayosps" class="d-flex justify-content-center" target="_blank">
              <?= $this->Html->image(
              'patrocinadores/tamayosps.png',
              [
                  'class' => 'img-fluid w-50 patrocinador',
                  'alt' => 'Logotipo de Tamayo sistemas de protección solar'
              ]
              
          ) ?>  
        </a>
            </div>

          </div>

          <div class="row text-center">
            <div class="col-12 col-sm-6 col-md-3">
                <p class="h6 text-light font-weight-bold">QUIÉNES SOMOS</p>
                <ul class="list-unstyled">
                  <li class="list-item"><?= $this->Html->link('<small>NUESTRA ESCUELA</small>',['prefix' => false,'controller' => 'Pages','action' => 'nuestraEscuela'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                  <li class="list-item"><?= $this->Html->link('<small>METODOLOGÍA</small>',['prefix' => false,'controller' => 'Pages','action' => 'metodologia'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                  <li class="list-item"><?= $this->Html->link('<small>OBJETIVOS</small>',['prefix' => false,'controller' => 'Pages','action' => 'objetivos'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                  <li class="list-item"><?= $this->Html->link('<small>EQUIPO DE TRABAJO</small>',['prefix' => false,'controller' => 'Pages','action' => 'equipoTrabajo'],['class' => 'text-light text-decoration-none','escape' => false]);?>></li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <p class="h6 text-light font-weight-bold">LA ESCUELA</p>
              <ul class="list-unstyled">
                <li class="list-item"><?= $this->Html->link('<small>LOCALIZACIÓN</small>',['prefix' => false,'controller' => 'Pages','action' => 'localizacion'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                <li class="list-item"><?= $this->Html->link('<small>HORARIOS Y TARIFAS</small>',['prefix' => false,'controller' => 'Pages','action' => 'horariosTarifas'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
              </ul>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <p class="h6 text-light font-weight-bold">MULTIMEDIA</p>
              <ul class="list-unstyled">
                <li class="list-item"><?= $this->Html->link('<small>GALERÍA FOTOGRÁFICA</small>',['prefix' => false,'controller' => 'Albumes','action' => 'index'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                <li class="list-item"><?= $this->Html->link('<small>VIDEOTECA</small>',['prefix' => false,'controller' => 'Videos','action' => 'index'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
              </ul>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <p class="h6 text-light font-weight-bold">OTRAS SECCIONES</p>
              <ul class="list-unstyled">
                <li class="list-item"><?= $this->Html->link('<small>NUESTROS PORTEROS</small>',['prefix' => false,'controller' => 'Porteros','action' => 'index'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                <li class="list-item"><?= $this->Html->link('<small>NOTICIAS</small>',['prefix' => false,'controller' => 'Noticias','action' => 'verTodas'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                <li class="list-item"><?= $this->Html->link('<small>EVENTOS</small>',['prefix' => false,'controller' => 'Eventos','action' => 'index'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
                <li class="list-item"><?= $this->Html->link('<small>CONTACTO</small>',['prefix' => false,'controller' => 'Pages','action' => 'contacto'],['class' => 'text-light text-decoration-none','escape' => false]);?></li>
              </ul>
            </div>


          </div>

          <!-- logotipo escuela de porteros -->
          <div class="row py-2 d-flex justify-content-center">
            <?= $this->Html->image(
    'logos/logo_edpap2.png',
    [
        'class' => 'logo_principal',
        'alt' => 'Logotipo escuela de porteros',
        'url' => ['prefix' => false,'controller' => 'Noticias', 'action' => 'index'] // ejemplo
    ]
    
) ?> 
          </div>

          <!-- copyright -->
          <div class="row py-2 text-light d-flex justify-content-around">
            <small>
              Desarrollado por 
              <a class="text-light" href="mailto:diegopenfer@gmail.com" target="_top"><strong>Diego Pena</strong></a> 
              par<?= $this->Html->link(
              'a',
              ['prefix'=>'admin','controller' => 'users','action' => 'login'],
              ['class' => 'text-light text-decoration-none']
          ) ?> EDPAP
              
            </small>
          </div>

      </div>
    </footer>
  </div>
</section>


  <!-- script boton ir arriba -->
  <script type="text/javascript">

    // conocer la posición actual del scroll para ocultar o mostrar el botón
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300) {
          $('#ir_arriba').fadeIn('slow');
      } else {
          $('#ir_arriba').fadeOut('slow');
      }
  });

  // definicion de la accion click(se anula el click primero) del botón para que al clickar vuelva a la tope superior de la pantalla en un tiempo de 600ms
  $('#ir_arriba').click(function(event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 600);
  });
  </script>

    <!-- script con js que al hacer click en el boton añade/elimina la clase toggled para ocultar o mostrar la sidebar -->
    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<!-- script funcionamiento lightbox -->
<script type="text/javascript">
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
       event.preventDefault();
       $(this).ekkoLightbox();
  });
</script>

</body>

    <?= $this->fetch('script') ?>
</html>
