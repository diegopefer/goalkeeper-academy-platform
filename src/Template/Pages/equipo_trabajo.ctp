<?php $this->assign('title', 'Equipo de trabajo | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'El equipo de trabajo de la escuela de porteros se compone de entrenadores cualificados y con amplia experiencia en el trabajo específico con porteros.El equipo de trabajo de la escuela de porteros se compone de entrenadores cualificados y con amplia experiencia en el trabajo específico con porteros.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Entrenadores de porteros en Ourense, entrenadores escuela de porteros Ourense',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Equipo de trabajo | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'El equipo de trabajo de la escuela de porteros se compone de entrenadores cualificados y con amplia experiencia en el trabajo específico con porteros.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/equipo-trabajo' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/equipotrabajo/portero.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Equipo de trabajo | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'El equipo de trabajo de la escuela de porteros se compone de entrenadores cualificados y con amplia experiencia en el trabajo específico con porteros.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/equipotrabajo/portero.png','block' => true]);?>
<div class="container">

    <header>
        <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">EQUIPO DE TRABAJO</h2>
    </header>

  <div class="row">
      <!--ENTRENADOR 1 -->

        <div class="col-12">
          <div class="card border-0 shadow mb-3">
            <div class="row">
              <div class="col-12 col-md-6 pr-md-0 d-flex justify-content-center">
                <?= $this->Html->image(
                 'equipotrabajo/portero.png',
                 [
                  'class' => 'img-fluid',
                  'alt' => 'Foto de Portero',
              ]
              
          ) ?> 
              </div>
              <div class="col-12 col-md-6 pl-md-0 d-flex align-items-center">
                <div class="card-body h-100 bg-dark text-light">
                  <h3 class="card-title display-5 font-weight-bold text-light">Álvaro Méndez</h3>
                  <h5 class="card-subtitle text-success lead">COFUNDADOR</h5>
                  <hr class="border-light">

                  <ul class="list-unstyled">
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ENTRENADOR NACIONAL </li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>TÉCNICO ESPECIALISTA EN ENTRENAMIENTO DE PORTEROS POR LA R.F.E.F.</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>VIDEOANALISTA DE PORTEROS</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>DIRECTOR DEPORTIVO </li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>EX-ENTRENADOR DE PORTEROS</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ACTUALMENTE ENTRENADOR SIN EQUIPO</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- PORTERO 2 -->

        <div class="col-12">
          <div class="card border-0 shadow mb-3">
            <div class="row">
              <div class="col-12 col-md-6 pr-md-0 d-flex justify-content-center">
                <?= $this->Html->image(
                 'equipotrabajo/portero.png',
                 [
                  'class' => 'img-fluid',
                  'alt' => 'Foto de Portero',
              ]
              
          ) ?> 
              </div>
              <div class="col-12 col-md-6 pl-md-0 d-flex align-items-center">
                <div class="card-body h-100 bg-dark text-light">
                  <h3 class="card-title display-5 font-weight-bold text-light">Pedro Fernández</h3>
                  <h5 class="card-subtitle text-success lead">COFUNDADOR Y MONITOR</h5>
                  <hr class="border-light">

                  <ul class="list-unstyled">
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ENTRENADOR NACIONAL NIVEL 1</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>TÉCNICO ESPECIALISTA EN ENTRENAMIENTO DE PORTEROS POR LA R.F.E.F.</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>EX-PORTERO</li>
                    <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ACTUALMENTE SIN EQUIPO</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- PORTERO 3-->
      <div class="col-12">
        <div class="card border-0 shadow mb-3">
          <div class="row">
            <div class="col-12 col-md-6 pr-md-0 d-flex justify-content-center">
              <?= $this->Html->image(
                 'equipotrabajo/portero.png',
                 [
                  'class' => 'img-fluid',
                  'alt' => 'Foto de Portero',
              ]
              
          ) ?> 
            </div>
            <div class="col-12 col-md-6 pl-md-0 d-flex align-items-center">
              <div class="card-body h-100 bg-dark text-light">
                <h3 class="card-title display-5 font-weight-bold text-light">Raúl Ortega</h3>
                <h5 class="card-subtitle text-success lead">MONITOR</h5>
                <hr class="border-light">

                <ul class="list-unstyled">
                  <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ENTRENADOR NACIONAL NIVEL 1</li>
                  <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>TÉCNICO ESPECIALISTA EN ENTRENAMIENTO DE PORTEROS POR LA R.F.E.F.</li>
                  <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>EX-PORTERO </li>
                  <li class="mb-2"><small><i class="fa fa-hand-paper mr-2"></i></small>ACTUALMENTE ENTRENADOR DE PORTEROS</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>

</div>
