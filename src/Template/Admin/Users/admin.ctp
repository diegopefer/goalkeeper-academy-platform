
<?php $this->assign('title', 'Administración EDPAP'); ?>
  <section class="my-4">
    <header>
      <h3 class="mb-4 font-weight-bold text-center">PANEL PRINCIPAL DE ADMINISTRACIÓN</h1>
    </header>
    
    <div class="row d-flex my-4 justify-content-center animate__animated animate__bounceInDown animate__slow animate__delay-1s">
      <div class="col-9">
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([
                 "controller" => "eventos",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #28a745;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8 col-xl-8">
                  <p class=" mb-0 font-weight-bold text-success">EVENTOS</p>
                  <p class="h5 text-secondary"><?= $total_eventos; ?></p>

                </div>
                <div class="col-3 col-sm-4 col-xl-4">
                  <i class="fas fa-2x fa-calendar-check text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

       <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([
                 "controller" => "noticias",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #28a745;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8">
                  <p class=" mb-0 font-weight-bold text-success">NOTICIAS</p>
                  <p class="h5 text-secondary"><?= $total_noticias; ?></p>

                </div>
                <div class="col-3 col-sm-4">
                  <i class="fas fa-2x fa-newspaper text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

        <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([
                 "controller" => "porteros",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #28a745;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8 ">
                  <p class=" mb-0 font-weight-bold text-success">PORTEROS</p>
                  <p class="h5 text-secondary"><?= $total_porteros; ?></p>

                </div>
                <div class="col-3 col-sm-4">
                  <i class="fas fa-2x fa-hand-paper text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>


        <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([
                 "controller" => "albumes",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #28a745;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8 ">
                  <p class=" mb-0 font-weight-bold text-success">ÁLBUMES</p>
                  <p class="h5 text-secondary"><?= $total_albumes; ?></p>

                </div>
                <div class="col-3 col-sm-4">
                  <i class="fas fa-2x fa-images text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>



        <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([
                 "controller" => "videos",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #28a745;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8">
                  <p class=" mb-0 font-weight-bold text-success">VÍDEOS</p>
                  <p class="h5 text-secondary"><?= $total_videos; ?></p>

                </div>
                <div class="col-3 col-sm-4">
                  <i class="fas fa-2x fa-video text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>

       <div class="col-12 col-sm-6 col-xl-4">
        <a href="<?= $this->Url->build([ 'prefix' => 'admin',
                 "controller" => "users",
                 "action" => "listar"]);?>" class="text-decoration-none">
          <div class="card shadow mb-2 list-group-item-action" style="border-left: 4px solid #007bff;">
            <div class="card-body">
              <div class="row d-flex align-items-center">

                <div class="col-9 col-sm-8">
                  <p class=" mb-0 font-weight-bold text-primary">USUARIOS</p>
                  <p class="h5"><?= $total_usuarios; ?></p>

                </div>
                <div class="col-3 col-sm-4">
                  <i class="fas fa-2x fa-user text-secondary"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
        </div>
      </div>
     
    </div>

    <div class="row d-flex justify-content-center my-4 animate__animated animate__bounceInUp animate__slow animate__delay-2s">
      <div class="col-6 col-sm-5 col-lg-4 col-xl-3">
         <?= $this->Html->image(
            'logos/logo_edpap.png',
            [
                'alt' => 'Logotipo Escuela de porteros',
                'class' => 'img-fluid w-100 mt-4'
            ]
        ); ?>
      </div>
    </div>

  </section>



