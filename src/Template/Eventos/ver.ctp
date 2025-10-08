
<?php $this->assign('title', $evento_principal->tituloE . ' | Escuela de porteros  '); ?>

<?php $this->Html->meta(
    'description',
    'Conoce más información sobre el evento ' . $evento_principal->tituloE . ' de la escuela de porteros  .',
    ['block' => true]);
?>
<?= $this->Html->meta(
    'keywords',
    $evento_principal->tituloE .' escuela de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => $evento_principal->tituloE . ' | Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce más información sobre el evento ' . $evento_principal->tituloE . ' de la escuela de porteros  .','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'].'/eventos'.'/'. $evento_principal->slug ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/files/Eventos/fotoE/'. $evento_principal->id . '/' . $evento_principal->fotoE,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => $evento_principal->tituloE . ' | Escuela de porteros  ','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce más información sobre el evento ' . $evento_principal->tituloE . ' de la escuela de porteros  .','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/files/Eventos/fotoE/'. $evento_principal->id . '/' . $evento_principal->fotoE,'block' => true]);?>

<div class="container">
	<section class="my-5">
		<div class="row">
				<!-- evento principal -->
			<div class="col-12 col-lg-8">
					<div class="card bg-dark text-light border-0 shadow mb-5">
						<div class="card-header d-flex align-items-center justify-content-center">
								<h3 class="card-title font-weight-bold text-uppercase text-center text-light mb-0"><?= $evento_principal->tituloE?></h3>
						</div>
						<div class="card body p-0 border-0">
								 <?= $this->Html->image('../files/Eventos/fotoE/'. $evento_principal->id . '/' . $evento_principal->fotoE, ['class'=>'img-fluid w-100 ev-no-pub_img']);?>
						</div>

						<div class="card-footer">
							<div class="row d-flex align-items-center">

								<div class="col-12 d-flex flex-column flex-md-row justify-content-center justify-content-md-around">
								
									<p class="text-success text-center font-weight-bold"><i class="fas fa-calendar-day"></i> <?= $evento_principal->fechaE->i18nformat('dd/MM/yyyy');; ?></p>
									<p class="text-success text-center font-weight-bold mb-2 mb-md-0"><i class="fas fa-clock"></i> <?= $evento_principal->horaE->i18nformat('HH:mm'); ?> horas</p>
									
								</div>
										
								<?php if(!empty($evento_principal->localizacionE)) { ?>
								<div class="col-12 d-flex justify-content-center">
									
									
									<a href="<?= $evento_principal->enlace_localizacionE ?>" target="_blank" class="text-success font-weight-bold text-decoration-none d-block"><i class="fas fa-map-marker-alt mr-2 mt-3 mb-md-0"></i> <?= $evento_principal->localizacionE ;?></a>
								
									
								</div>
								<?php } else{} ?>

								
							</div>
							<div class="d-flex justify-content-center justify-content-md-end mt-3">
								<!-- share social buttons AddToAny BEGIN -->
								<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
									<a class="a2a_button_facebook"></a>
									<a class="a2a_button_whatsapp"></a>
									<a class="a2a_button_twitter"></a>
									<a class="a2a_button_email"></a>
									<a class="a2a_button_copy_link"></a>
								</div>
								<script async src="https://static.addtoany.com/menu/page.js"></script>
								<!-- AddToAny END -->
							</div>
						</div>

						<div class="card-body">
						
						<div class="text-light text-justify"><?= nl2br($evento_principal->descripcionE); ?></div>

						<!-- noticias relacionadas con el evento principal-->
						<?php if(!empty($evento_principal->noticias)){ ?>
							<hr>
							<p class="h6 font-weight-bold mb-3"> NOTICIAS RELACIONADAS</p>

							<?php foreach($evento_principal->noticias as $noticia): ?>

								<p class="mb-2 text-white"><i class="fas fa-newspaper"></i> <?= $this->Html->link($noticia->tituloN, ['controller' => 'noticias', 'action' => 'ver',$noticia->slug],['class' => 'text-white text-decoration-none' ,'escape' => false]);?></p>
							<?php endforeach; ?>

						<?php } else {} ?>
						</div>
					</div>
			</div>

			<!-- otros eventos -->
			<div class="col-12 col-lg-4">
				<?php if($mas_eventos->count() != 0){ ?>
					<h5 class="font-weight-bold mt-4 mt-lg-0 mb-3">OTROS EVENTOS</h5>

					<ul class="list-group border-0 shadow">

						<?php foreach ($mas_eventos as $evento): ?>

							<li class="list-group-item bg-dark border-0 shadow mb-1">
								<?= $this->Html->link($evento->tituloE, ['controller' => 'Eventos','action' => 'ver', $evento->slug],['class' => 'text-light d-block text-center font-weight-bold text-uppercase text-decoration-none']); ?>
								<div class="row d-flex justify-content-around mt-2">
									<p class="px-2 py-1 rounded bg-success text-light">
										<i class="fas fa-calendar-day"></i> <?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?>
									</p>
									<p class="px-2 py-1 rounded bg-success text-light">
                            			<i class="fas fa-clock"></i> <?= $evento->horaE->i18nformat('HH:mm'); ?>
                          			</p>

								</div>
							</li>
						<?php endforeach;?>

					</ul>
					<div class="card border-0 shadow bg-light w-100 mt-5 d-none d-lg-block">
					<div class="card-body p-3">
						<ul class="list-unstyled list-inline text-center my-1 py-1">
								<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f mx-2 text-dark rrss_icono"></i></a></li>
								<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter mx-2  text-dark rrss_icono"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fab fa-youtube mx-2  text-dark rrss_icono"></i></a></li>
								<li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-instagram mx-2  text-dark rrss_icono"></i></a></li>
						</ul>
					</div>
				</div>
				<?php } else{} ?>

				


			</div>

		</div>

	</section>


</div>
