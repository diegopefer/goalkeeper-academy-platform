<?php $this->assign('title', 'Entrenamientos | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Los entrenamientos en la Escuela de porteros se realizan siguiendo una metodología para la realización de las diferentes tareas.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Como son los entrenamientos en una escuela de porteros, entrenamientos porteros de futbol, entranamientos porteros fútbol en Ourense',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Entrenamientos | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Los entrenamientos en la Escuela de porteros se realizan siguiendo una metodología para la realización de las diferentes tareas.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/entrenamientos' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/entrenamientos.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '900','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Entrenamientos | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Los entrenamientos en la Escuela de porteros se realizan siguiendo una metodología para la realización de las diferentes tareas.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/entrenamientos.png','block' => true]);?>


<div class="container">

  <header>
      <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">ENTRENAMIENTOS</h2>
  </header>

  <div class="row my-5">
    <div class="col-12 text-justify">
      <p>
        Los entrenamientos de la <strong>Escuela de Porteros </strong>se realizan siguiendo nuestra metodología y utilizando material específico para el desarrollo de las diferentes tareas que se irán planteando.
      </p>
      <div class="row py-3">
        <div class="col-md-12 col-lg-3 d-flex flex-column flex-md-row flex-lg-column justify-content-around">

          <div class="row py-3 py-md-5 my-2 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">COLOCACIÓN <i class="d-block mt-1 fas fa-2x fa-crosshairs text-success"></i></h5>
            </div>

          </div>
          <div class="row py-3 py-md-5 my-2 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">COORDINACIÓN <i class="d-block mt-1 fas fa-2x fa-list-ul text-success"></i></h5>
            </div>

          </div>

          <div class="row py-3 py-md-5 my-1 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">CONDICIÓN FÍSICA <i class="d-block mt-1 fas fa-2x fa-heartbeat text-success"></i></h5>
            </div>

          </div>

        </div>

        <div class="col-12 col-lg-6 d-flex justify-content-center">
          <?= $this->Html->image(
                 'otras_imagenes/entrenamientos.png',
                 [
                  'class' => 'img-fluid',
                  'alt' => 'Imagen de la sección entrenamientos',
              ]
              
          ) ?> 
        </div>

        <div class="col-md-12 col-lg-3 d-flex flex-column flex-md-row flex-lg-column justify-content-around">

          <div class="row py-3 py-md-5 my-2 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">TÉCNICA <i class="d-block mt-1 fas fa-2x fa-futbol text-success"></i></h5>
            </div>

          </div>
          <div class="row py-3 py-md-5 my-2 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">PSICOLOGÍA <i class="d-block mt-1  fas fa-2x fa-brain text-success"></i></h5>
            </div>

          </div>

          <div class="row py-3 py-md-5 my-1 my-md-5">
            <div class="col-md-12 d-flex justify-content-center text-center
            ">
              <h5 class="font-weight-bold">TÁCTICA <i class="d-block mt-1 fas fa-2x fa-draw-polygon text-success"></i></h5>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
</div>
