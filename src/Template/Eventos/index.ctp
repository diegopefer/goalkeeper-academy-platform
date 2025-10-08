
<?php $this->assign('title', 'Eventos | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'La escuela de porteros ofrece información sobre los eventos que se desarrollarán durante la temporada.',
    ['block' => true]);
?>
<?= $this->Html->meta(
    'keywords',
    'Escuela de porteros de fútbol en Ourense, Academia de porteros de fútbol en Ourense, Entrenamiento de porteros Ourense, tecnificación de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Escuela de porteros en Ourense','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'La escuela de porteros ofrece información sobre eventos que desarrollarán durante la temporada.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'].'/eventos' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Escuela de porteros en Ourense','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'La escuela de porteros ofrece información sobre eventos que desarrollarán durante la temporada.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>


<div class="container">
  <header>
      <h3 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">EVENTOS</h3>
  </header>

    <!-- LISTA DE EVENTOS -->
    <section class="my-4">
        <div class="row">
            <?php
              if(count($eventos) != 0){
              foreach ($eventos as $evento) : ?>
              <div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
                  <div class="card border-0 shadow mb-3 w-100">
                      <div class="card-header bg-dark d-flex justify-content-center align-items-center flex-fill border-0">
                          <p class="h5 card-title text-center mb-0 font-weight-bold text-uppercase"><?= $this->Html->link($evento->tituloE, ['action' => 'ver',$evento->slug],['class' => 'text-light text-decoration-none']); ?></p>
                      </div>

                      <a href="<?= $this->Url->build(["controller" => "eventos","action" => "ver", $evento->slug]);?>">
                        <div class="evento">
                          <?= $this->Html->image('../files/Eventos/fotoE/'. $evento->id . '/' . $evento->fotoE, ['class'=>' d-block w-100 h-100']);?>

                          <div class="caption_evento d-flex justify-content-center align-items-center">
                            <div class="row">
                              <div class="col-12">
                                  <i class="fas fa-2x fa-search-plus text-light"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                     </a>

                      <div class="card-footer bg-dark">
                        <div class="row">
                          <div class="col-12 d-flex justify-content-around">
                            <p class="text-light font-weight-bold mb-0"><i class="fas fa-calendar-day mr-1"></i><?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?></p>
                            <p class="text-light font-weight-bold mb-0"><i class="fas fa-clock mr-1"></i><?= $evento->horaE->i18nformat('HH:mm'); ?></p>
                          </div>
                          
                         
                        </div>
                    </div>
                </div>
              </div>
              <?php endforeach;
              }else{ ?>
                <div class="col-12">
                  <p class="text-justify text-center text-dark">Actualmente no hay ningún evento disponible.</p>
                </div>
              <?php } ?>

              <div class="col-12">
                <!-- PAGINADOR -->
                  <!-- setTemplates permite cambiar/personalizar las plantillas utilizadas por el paginationhelper en tiempo de ejecucion -->
                  <?php
                  $paginator = $this->Paginator->setTemplates([
                      'number' =>'<li class="page-item"><a href="{{url}}" class="page-link text-dark">{{text}}</a></li>',
                      'current' =>'<li class="page-item active"><a href="{{url}}" class="page-link bg-dark border-dark">{{text}}</a></li>',
                      'first' =>'<li class="page-item"><a href="{{url}}" class="page-link text-dark">&laquo;</a></li>',
                      'last' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&raquo</a></li>',
                      'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&lt</a></li>',
                      'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&gt</a></li>',
                    ]); ?>
                  <nav>
                    <ul class="pagination">
                      <?php
                        echo $paginator->first();
                        if($paginator->hasPrev){
                          echo $paginator->prev();
                        }
                        echo $paginator->numbers();
                        if($paginator->hasNext()){
                          echo $paginator->next();
                        }
                        echo $paginator->last();
                       ?>
                    </ul>

                  </nav>
              </div>

        </div>
    </section>
</div>
