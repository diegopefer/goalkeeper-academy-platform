<?php $this->assign('title', 'Nuestros porteros | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Conoce los porteros que actualmente están entrenando en la escuela de porteros, con su información detallada.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Porteros escuela de porteros, porteros escuela de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Nuestros porteros | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce los porteros que actualmente están entrenando en la escuela de porteros, con su información detallada.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/porteros' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Nuestros porteros | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce los porteros que actualmente están entrenando en la escuela de porteros, con su información detallada.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>


<div class="container">
  <header>
			<h2 class="mt-4 px-2 py-3 text-dark text-center font-weight-bold">NUESTROS PORTEROS</h2>
	</header>


  <section class="my-4">
    <div class="row">
        <?php foreach ($porteros as $portero): ?>
      <div class="col-12 col-md-6 col-lg-4 mb-3">
        <!-- link en tag "a" que engloba al elemento div de portero para que cuando sea hover se pueda clickar en toda la zona de imagen" -->
        <!-- url->build para construcción de url -->

        <!-- link con hover imagen con escala y escurecimiento -->
        <a href="<?= $this->Url->build(["controller" => "porteros","action" => "ver", $portero->slug]);?>">
          <div class="portero shadow border">
            <?= $this->Html->image('../files/Porteros/fotoP/'. $portero->id . '/' . $portero->fotoP,['alt' => 'Imagen del portero '. $portero->nombre .' ' . $portero->apellidos]); ?>
            <div class="caption_portero d-flex flex-column justify-content-center align-items-center">
   
                <?= $this->Html->image(
                 'logos/logo_edpap2.png',
                 [
                  'alt' => 'Logotipo escuela de porteros',
              ]
              
          ) ?> 
                <h2 class="text-light font-weight-bold text-center text-uppercase"><?= $portero->apodo;?></h2>
            
            </div>
          </div>
        </a>

        </div>
       <?php endforeach; ?>

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
  </section>
</div>
