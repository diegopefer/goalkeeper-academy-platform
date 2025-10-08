<?php $this->assign('title', 'Escuela de porteros en Ourense'); ?>

<?php $this->Html->meta(
    'description',
    'La Escuela de Porteros, situada en Ourense (Galicia) se centra en la formación de porteros en base a una metodología y objetivos específicos.',
    ['block' => true]);
?>
<?= $this->Html->meta(
    'keywords',
    'Escuela de porteros de fútbol en Ourense, Academia de porteros de fútbol en Ourense, Entrenamiento de porteros Ourense, tecnificación de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'website','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Escuela de porteros en Ourense','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'La Escuela de Porteros, situada en Ourense (Galicia) se centra en la formación de porteros en base a una metodología y objetivos específicos.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/carousel/img_slide1.webp','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '320','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Escuela de porteros en Ourense','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'La Escuela de Porteros, situada en Ourense (Galicia) se centra en la formación de porteros en base a una metodología y objetivos específicos.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/carousel/img_slide1.webp','block' => true]);?>



    <div id="carouselprincipal" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselprincipal" data-slide-to="0" class="active"></li>
        <li data-target="#carouselprincipal" data-slide-to="1"></li>
        <li data-target="#carouselprincipal" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <?= $this->Html->image(
              'carousel/img_slide1.webp',
              [
                  'class' => 'w-100'
              ]
          ) ?>

          <div class="carousel-caption d-flex h-100 justify-content-center align-items-end">
            
          
              <div class="col-12 mb-3 mb-lg-4 animate__animated animate__bounceInDown animate__slow animate__delay-1s">
                <div class="row d-flex justify-content-center">
                  <div class="col-5 col-sm-4 col-lg-3 h-100">
                   <?= $this->Html->image(
                      'logos/logo_edpap2.png',
                      [
                          'class' => 'img-fluid mb-3 h-50 w-100',
                          'alt' => 'Logotipo escuela de porteros'
                      ]
                  ) ?>
                  </div>
                </div>
                
                <h1 class="font-weight-bold slideprincipal_titulo1">ESCUELA DE PORTEROS</h1>
                <h1 class="font-weight-bolder slideprincipal_titulo2">EDPAP</h1>
              </div>
          </div>

        </div>

         <div class="carousel-item">

          <?= $this->Html->image(
              'carousel/img_slide2.webp',
              [
                  'class' => 'w-100'
              ]
          ) ?>

          <div class="carousel-caption d-flex flex-column justify-content-center align-items-end">
            <div class="col-12 mb-2 animate__animated animate__bounceInDown animate__slow animate__delay-1s">
              <h3 class="font-weight-bold slide_titulo">VARIEDAD DE ENTRENAMIENTOS</h3>
              <p class="h5 font-weight-normal slide_subtitulo">APRENDIZAJE Y MEJORA SIGUIENDO UNA BUENA METODOLOGÍA DE TRABAJO</hp>
            </div>
            <div class="col-12 mb-3 mt-md-2 my-lg-3 animate__animated animate__bounceInUp animate__slow animate__delay-2s">
    
              <?= $this->Html->link('ENTRENAMIENTOS', ['controller' => 'Pages', 'action' => 'entrenamientos'],['class' => 'link-carousel d-inline-block']); ?>
            </div>

          </div>

        </div>

         <div class="carousel-item">
           <?= $this->Html->image(
              'carousel/img_slide3.webp',
              [
                  'class' => 'w-100'
              ]
          ) ?>

            <div class="carousel-caption d-flex flex-column justify-content-center align-items-end">
              <div class="col-12 mb-2 animate__animated animate__bounceInDown animate__slow animate__delay-1s">
                <h3 class="font-weight-bold slide_titulo">¿TE INTERESA NUESTRA PROPUESTA?</h3>
                <p class="h5 font-weight-normal slide_subtitulo">NO DUDES Y PONTE EN CONTACTO CON NOSOTROS </p>

              </div>

              <div class="col-12 mb-3 mt-md-2 my-lg-3 animate__animated animate__bounceInUp animate__slow animate__delay-2s">
                <?= $this->Html->link('CONTÁCTANOS', ['controller' => 'Pages', 'action' => 'contacto'],['class' => 'link-carousel d-inline-block']); ?>
              </div>
            </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselprincipal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselprincipal" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>


<div class="container">


	<section class="my-5">

		<div class="row">
    	<!--NOTICIAS -->
			<div class="col-12">

            <div class="card-header mb-2 bg-dark border-0 shadow">
                <h4 class="card-title font-weight-bold text-light text-center mb-0"> <i class="fas fa-newspaper"></i> ÚLTIMAS NOTICIAS</h4>
              </div>
             

                <?php if($noticias->count() != 0){ ?>
                  <div class="row">
                    <?php foreach ($noticias as $noticia) : ?>
                    <div class="col-12 col-md-6 d-flex align-items-strech">
                      <div class="card border-0 shadow mb-3 w-100">
                        <?= $this->Html->link($this->Html->image('../files/Noticias/fotoN/'. $noticia->id . '/' . $noticia->fotoN, ['class'=>' noticia_img','alt' => $noticia->tituloN]),['action' => 'ver',$noticia->slug],['escape'=>false]);?>

                        <div class="card-body p-3">
                          <h6 class="text-success"><small><i class="fas fa-calendar-day"></i> <?= $noticia->fechaN->i18nformat('dd/MM/yyyy'); ?></small></h6>
                          <h5 class="card-title font-weight-bold"><?= $this->Html->link($noticia->tituloN, ['action' => 'ver', $noticia->slug],['class' => 'text-dark text-decoration-none']); ?></h5>

                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <div class="text-center">

          					<?= $this->Html->link('MÁS NOTICIAS',['action' => 'verTodas'],['role' => 'button','class' => 'btn btn-sm btn-dark','escape' => false]);?>
          				</div>
                  <?php }else{ ?>
                  <p class="text-center">Actualmente no hay noticias disponibles.</p>
                <?php } ?>
         
      </div>
    </div>
  </section>
  
  <section class="mb-5">
    <div class="row">
      <!-- EVENTOS-->
			<div class="col-12">
        <div class="card-header mb-2 bg-dark border-0 shadow">
            <h4 class="font-weight-bold text-light text-center mb-0"> <i class="fas fa-calendar-check"></i> EVENTOS</h4>
        </div>
        <div class="row">
          <?php 
          if($eventos->count() != 0){
            foreach ($eventos as $evento): ?>
                <div class="col-12 col-sm-6">
                  <div class="card border-0 shadow mb-1">
                    <div class="card-body text-center p-3 w-100">
                      <?= $this->Html->link($evento->tituloE, ['controller' => 'Eventos','action' => 'ver', $evento->slug],['class' => 'text-dark h6 text-uppercase font-weight-bold text-decoration-none']); ?>

                      <div class="d-flex justify-content-around mt-2">
                    
                          <p class="px-2 py-1 rounded bg-success text-light">
                           <i class="fas fa-calendar-day"></i> <?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?>
                          </p>

                          <p class="px-2 py-1 rounded bg-success text-light">
                            <i class="fas fa-clock"></i> <?= $evento->horaE->i18nformat('HH:mm'); ?>
                          </p>
                  
                      </div>

                    </div>
                  </div>
                </div>

            <?php endforeach;?>
   
            <div class="col-12 text-center mt-2">
                <?= $this->Html->link('MÁS EVENTOS', ['controller' => 'eventos', 'action' => 'index'],['role'=> 'button', 'class' => 'btn btn-sm btn-dark', 'escape' => false]);?>
            </div>
          <?php }else{?>
            <div class="col-12">
              <p class="text-center mt-2">Actualmente no hay ningun evento disponible.</p>
            </div>

          <?php } ?>
            
			  </div>
    </div>
  </section>
          
  <!-- ALBUMES FOTOGRAFICOS -->
  <section class="mb-5">
    <div class="row">
      <div class="col-12">
          <div class="card-header mb-2 bg-dark border-0 shadow">
              <h4 class="font-weight-bold text-light text-center mb-0"> <i class="fas fa-images"></i> ÁLBUMES FOTOGRÁFICOS</h4>
          </div>

          <?php if($albumes->count() > 0){ ?>
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <?php foreach ($albumes as $album) : ?>
                      <div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
                        <a href="<?= $album->enlaceA;?>" class="d-block w-100 h-100">
                            <div class="album border-0 shadow mb-3">
                              <?= $this->Html->image(
												$album->enlace_imagenA,
												[
													'alt' => 'Álbum ' . h($album->tituloA),
													'class' => 'h-100 w-100',
												]
											); ?>
                              <div class="caption_album p-0 d-flex align-items-end">
                                <div class="p-3 w-100" style="background: rgba(0,0,0,0.7);">
                                  <h6 class="card-title font-weight-bold text-uppercase text-light"><i class="far fa-images mr-2"></i><?= $album->tituloA; ?> </h6>
                                  <p class="card-subtitle text-light"><small><?= $album->fechaA->i18nformat('dd/MM/yyyy'); ?></small></p>
                                <div>
                              
                              </div>
                              
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>	
              
                  <?php endforeach;?>
                    <div class="col-12 text-center">
                      <?= $this->Html->link('MÁS ÁLBUMES', ['controller' => 'albumes', 'action' => 'index'],['role'=> 'button', 'class' => 'btn btn-sm btn-dark', 'escape' => false]);?>
                  </div>
                </div>

              </div>	
          
            </div>
          <?php } else { ?>
            <div class="row">
              <div class="col-12">
              <p class="text-center mt-2">Actualmente no hay ningún álbum fotográfico disponible.</p>
              </div>
            </div>
          <?php } ?>
      </div>
    </div>
  </section>
          
  <!-- VIDEOTECA -->
  <section class="mb-5">
    <div class="row">
      <div class="col-12">
          <div class="card-header mb-2 bg-dark border-0 shadow">
              <h4 class="font-weight-bold text-light text-center mb-0"> <i class="fas fa-video"></i> VIDEOTECA</h4>
          </div>
          
              <?php if($videos->count() > 0){ ?>
                <div class="row">
             
                  <?php foreach ($videos as $video): ?>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
                      <div class="card border-0 shadow mb-3 w-100">
                        <div class="card-header bg-dark d-flex flex-column flex-fill border-0">
                          <p class="text-center mb-3"><span class="badge badge-success"><i class="fas fa-calendar-day mr-1"></i><?= $video->fechaV->i18nformat('dd/MM/yyyy'); ?></span></p>
                          <h6 class="font-weight-bold text-uppercase text-light text-center"><?= $video->tituloV; ?> </h6>
                          
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="<?= $video->enlaceV; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                      </div>
                      
                    </div>
                    
                  <?php endforeach; ?>
                  <div class="col-12 text-center">
                      <?= $this->Html->link('MÁS VÍDEOS', ['controller' => 'videos', 'action' => 'index'],['role'=> 'button', 'class' => 'btn btn-sm btn-dark', 'escape' => false]);?>
                  </div>
                  
                </div>
              <?php } else { ?>
                <div class="row">
                  <div class="col-12">
                    <p class="text-center mt-2">Actualmente no hay ningún vídeo disponible.</p>
                  </div>
                </div>
              <?php } ?>

      </div>
    </div>
  </section>
  <hr>
  <!-- facebook-twitter -->
  <section class="mb-5">
    <div class="row">
      
      <div class="col-12 col-md-4 d-flex align-items-strech mb-3">
        <div class="card border-0 shadow w-100">
          <div class="card-header bg-light border-0">
            <h6 class="font-weight-bold text-center mb-0"><i class="fab fa-facebook-f mr-1"></i> FACEBOOK</h6>
          </div>
          
          <div class="card-body d-flex align-items-center justify-content-center">
          
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v8.0" nonce="zmc6IQLt"></script>
              <div class="fb-like" data-href="" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
            
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4 d-flex align-items-strech mb-3">
        <div class="card border-0 shadow w-100">
          <div class="card-header bg-light border-0">
            <h6 class="font-weight-bold text-center mb-0"><i class="fab fa-instagram mr-1"></i> INSTAGRAM</h6>
          </div>
          
          <div class="card-body d-flex align-items-center justify-content-center">
            <small>
              <span style="background-color:indianred" class="rounded py-1 px-2">
                <a href="" target="_blank" title="Perfil de instagram de escuela de porteros" class="text-white font-weight-bold text-decoration-none"><i class="fab fa-instagram mx-1"></i></a>
              </span>
            </small>
          </div>
        </div>
      </div> 

      <div class="col-12 col-md-4 d-flex align-items-strech mb-3">
        <div class="card border-0 shadow w-100">
          <div class="card-header bg-light border-0">
                <h6 class="font-weight-bold text-center mb-0"><i class="fab fa-twitter mr-1"></i> TWITTER</h6>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
            <a href="" class="twitter-follow-button" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          
          </div>
          
        </div>
      </div>         

    </div>
  </section>
	
</div>
 