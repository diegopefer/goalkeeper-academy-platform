<?php $this->assign('title', 'Contacto | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Información de contacto y localización de la escuela de porteros .',
    ['block' => true]);
?>
<?= $this->Html->meta(
    'keywords',
    'como contactar con escuela de porteros, telefono escuela de porteros , correo electronico escuela de porteros , donde esta la escuela de porteros , escuela de porteros en Ourense',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Contacto | Escuela de porteros ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Información de contacto y localización de la escuela de porteros .','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'].'/contacto' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Contacto | Escuela de porteros ','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Información de contacto y localización de la escuela de porteros .','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>

<div class="container">
  <header>
      <h1 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">CONTACTO</h1>
  </header>
  <div class="row my-3">
    <div class="col-12">
      <p class="text-justify">Si tienes alguna duda o consulta puedes ponerte en contacto con nosotros por vía telefónica, correo electrónico, dirección postal o redes sociales.</p>
    </div>
    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
      <h5 class="mt-4 font-weight-bold text-center"><i class="fas fa-phone mr-2"></i> TELÉFONOS</h5>
      <hr class="mt-1">
      <p class="mb-2 text-center"><strong>Entrenador 1</strong> xxx xx xx xx</p>
      <p class="mb-2 text-center"><strong>Entrenador 2</strong> xxx xx xx xx</p>

      
      
    </div>
    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
    <h5 class="mt-4 font-weight-bold text-center"><i class="fas fa-envelope mr-2"></i> CORREO ELECTRÓNICO</h5>
      <hr class="mt-1">
     
      <a href="" class="d-block text-dark text-center text-decoration-none">xxxxx@gmail.com</a>


    </div>
    <div class="col-12 col-lg-4 mb-4 mb-lg-0">
    <h5 class="mt-4 font-weight-bold text-center"><i class="fas fa-share-alt mr-2"></i> REDES SOCIALES</h5>
      <hr class="mt-1">
      
      <ul class="list-unstyled list-inline text-center my-1 py-1">
              <li class="list-inline-item mx-2"><a href="" class="text-dark" target="_blank"><i class="fab fa-facebook-f text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-twitter text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="#"><i class="fab fa-youtube text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-instagram text-dark rrss_icono"></i></a></li>
              <li class="list-inline-item mx-2"><a href="" target="_blank"><i class="fab fa-google text-dark rrss_icono"></i></a></li>
          </ul>

    </div>
    
    <div class="col-12">
      <h5 class="mt-4 font-weight-bold text-center"><i class="fas fa-map-marker-alt mr-2"></i> LOCALIZACIÓN</h5>
      <hr class="mt-1">

      <!-- <h5 class="text-center"><strong>Campo Municipal Os Carrís</strong></h5> <p class="h6 text-muted text-center"></p> -->

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.4356163735!2d-7.883713084679335!3d42.311906679190066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2ff8d0605a6503%3A0x59038fb1dd72c8c2!2sCampo%20Municipal%20Os%20Carris!5e0!3m2!1ses!2ses!4v1598298112710!5m2!1ses!2ses" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
</div>
