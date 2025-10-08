<?php $this->assign('title', 'Videoteca | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'La videoteca de la escuela de porteros ofrece vídeos para que puedas descubrir nuestra manera de trabajar.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Videos de la escuela de porteros, videos entrenamientos de porteros, videos entrenamientos de porteros en Ourense, videos tecnificacion de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Videoteca | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'La videoteca de la escuela de porteros ofrece vídeos para que puedas descubrir nuestra manera de trabajar.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/videoteca' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Videoteca | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'La videoteca de la escuela de porteros ofrece vídeos para que puedas descubrir nuestra manera de trabajar.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>

<div class="container">
	<section class="my-4">
		<h2 class="my-4 px-2 py-3 text-black text-center font-weight-bold">VIDEOTECA</h2>
		<!-- si no hay videos visibles se muestra mensaje -->
		<?php if($videos->count() > 0){ ?>
	
		<div class="row">
			<?php foreach ($videos as $video) {
				//si no hay videos de un año determinado, no se añade cabecera
				if($video->fechaV->format("Y") != 2020){

				}else{ ?>
					<div class="col-12">
						<h5 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2020</h5>
					</div>
					<?php break; 
				}
			}?>
			<div class="col-12">
				<div class="row">
					<?php foreach ($videos as $video) {
			
						$fecha_video = $video->fechaV->format("Y");
						// se muestran solo videos de un año determinado
						if($fecha_video == 2020){ ?>
				            <div class="col-12 col-md-6 d-flex align-items-strech">
				              <div class="card border-0 bg-dark shadow mb-3 w-100">
				                <div class="card-header d-flex flex-column flex-fill border-0">
				                	<p class="text-center mb-3"><span class="badge badge-success"><i class="fas fa-calendar-day mr-1"></i><?= $video->fechaV->i18nformat('dd/MM/yyyy'); ?></span></p>
				        			<h6 class="font-weight-bold text-uppercase text-light text-center"><?= $video->tituloV; ?> </h6>
				                  
				                </div>
				                <div class="embed-responsive embed-responsive-16by9">
				                    <iframe class="embed-responsive-item" src="<?= $video->enlaceV; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				                  </div>
				                
				           
				              </div>
				              
				            </div>
				            
	            		 <?php }
	            	}?>
				</div>

			</div>
		</div>
		<div class="row">
			<?php foreach ($videos as $video) {
				//si no hay videos de un año determinado, no se añade cabecera
				if($video->fechaV->format("Y") != 2019){

				}else{ ?>
					<div class="col-12">
						<h5 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2019</h5>
					</div>
					<?php break; 
				}
			}?>
			<div class="col-12">
				<div class="row">
					<?php foreach ($videos as $video) {
			
						$fecha_video = $video->fechaV->format("Y");
						// se muestran solo videos de un año determinado
						if($fecha_video == 2019){ ?>
				            <div class="col-12 col-md-6 d-flex align-items-strech">
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
				            
	            		 <?php }
	            	}?>
				</div>

			</div>
		</div>
		<div class="row">
			<?php foreach ($videos as $video) {
				//si no hay videos de un año determinado, no se añade cabecera
				if($video->fechaV->format("Y") != 2018){

				}else{ ?>
					<div class="col-12">
						<h5 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2018</h5>
					</div>
					<?php break; 
				}
			}?>
			<div class="col-12">
				<div class="row">
					<?php foreach ($videos as $video) {
			
						$fecha_video = $video->fechaV->format("Y");
						// se muestran solo videos de un año determinado
						if($fecha_video == 2018){ ?>
				            <div class="col-12 col-md-6 d-flex align-items-strech">
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
				            
	            		 <?php }
	            	}?>
				</div>

			</div>
		</div>
	<?php } else{ ?>
		<div class="row">
			<div class="col-12">
				<p class="text-center">Actualmente no hay ningún vídeo disponible.</p>
			</div>
		</div>
	<?php } ?>
	</section>
</div>