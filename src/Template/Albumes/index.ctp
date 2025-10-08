<?php $this->assign('title', 'Galería fotográfica | Escuela de porteros  '); ?>

<?php $this->Html->meta(
    'description',
    'Descubre las mejores galerías fotográficas de la escuela de porteros  , dónde podrás ver nuestra manera de trabajar.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Fotos escuela de porteros , fotos escuela de porteros Ourense, fotos entrenamiento de porteros ',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Galería fotográfica | Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Descubre las mejores galerías fotograficas de la escuela de porteros  , dónde podrás ver nuestra manera de trabajar.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/galeria-fotografica' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Galería fotográfica | Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Descubre las mejores galerías fotograficas de la escuela de porteros  , dónde podrás ver nuestra manera de trabajar.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>

<div class="container">
	<section class="my-4">
		<header>
			<h2 class="my-2 px-2 py-3 text-black text-center font-weight-bold">GALERÍA FOTOGRÁFICA</h2>
		</header>

		<?php if($albumes->count() > 0){ ?>
			
			<div class="row">
				<!-- si no hay albumes visibles se muestra mensaje -->
				<?php foreach ($albumes as $album) {
					//si no hay albumes de un año determinado, no se añade cabecera
					if($album->fechaA->format("Y") != 2020){

					}else{ ?>
						<div class="col-12">
							<h5 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2020</h5>
						</div>
						<?php break; 
					}
				}?>

				<div class="col-12">
					<div class="row">
						<?php foreach ($albumes as $album) {

							$fecha_album = $album->fechaA->format("Y");
							// se muestran solo albumes de un año determinado
							if($fecha_album == 2020){ ?>
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
								
								
							<?php }
						}?>
					</div>

				</div>	
				
			</div>


			<div class="row">
				<?php foreach ($albumes as $album) {
					//si no hay albumes de un año determinado, no se añade cabecera
					if($album->fechaA->format("Y") != 2019){

					}else{ ?>
						<div class="col-12">
							<h5 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2019</h5>
						</div>
						<?php break; 
					}
				}?>

				<div class="col-12">
					<div class="row">
						<?php foreach ($albumes as $album) {

							$fecha_album = $album->fechaA->format("Y");
							// se muestran solo albumes de un año determinado
							if($fecha_album == 2019){ ?>
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
							<?php }
						}?>
						
					</div>

				</div>	
				
				
			</div>

			<div class="row">
				<?php foreach ($albumes as $album) {
					//si no hay albumes de un año determinado, no se añade cabecera
					if($album->fechaA->format("Y") != 2018){

					}else{ ?>
						<div class="col-12">
							<h6 class="font-weight-bold border-bottom border-grey text-center p-1 my-4"><i class="far fa-calendar-alt mr-2"></i>AÑO 2018</h6>
						</div>
						<?php break; 
					}
				}?>
				<div class="col-12">
					<div class="row">
						<?php foreach ($albumes as $album) {

							$fecha_album = $album->fechaA->format("Y");
							// se muestran solo albumes de un año determinado
							if($fecha_album == 2018){ ?>
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
							<?php }
							
						}?>
						</div>

					</div>	
				
				
			</div>
		<?php } else{ ?>
			<div class="row">
				<div class="col-12">
					<p class="text-center">Actualmente no hay ningún álbum fotográfico disponible.</p>
				</div>
			</div>
		<?php } ?>
	</section>
  
</div>