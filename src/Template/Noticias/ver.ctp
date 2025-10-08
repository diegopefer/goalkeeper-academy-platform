<?php $this->assign('title', $noticia_principal->tituloN . ' | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Conoce más información sobre la noticia ' . $noticia_principal->tituloN . ' de la escuela de porteros.',
    ['block' => true]);
?>
<?= $this->Html->meta(
    'keywords',
    $noticia_principal->tituloN .' escuela de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => $noticia_principal->tituloN . ' | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce más información sobre la noticia ' . $noticia_principal->tituloN . ' de la escuela de porteros.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'].'/noticias'.'/'. $noticia_principal->slug ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/files/Noticias/fotoN/'. $noticia_principal->id . '/' . $noticia_principal->fotoN,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => $noticia_principal->tituloN . ' | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce más información sobre la noticia ' . $noticia_principal->tituloN . ' de la escuela de porteros.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/files/Noticias/fotoN/'. $noticia_principal->id . '/' . $noticia_principal->fotoN,'block' => true]);?>

<div class="container">
	<section class="my-5 noticia_principal">
		<div class="row">
				<!-- NOTICIA PRINCIPAL -->
			<div class="col-12 col-lg-8">
				<div class="card border-0 shadow mb-5">
					<div class="card-body">
						<h1 class="card-title font-weight-bold"><?= $noticia_principal->tituloN; ?> </h1>
						
							<p class="text-success mb-2"><i class="fas fa-calendar-day"></i> <?= $noticia_principal->fechaN->i18nformat('dd/MM/yyyy');?></p>

						 	<?= $this->Html->image('../files/Noticias/fotoN/'. $noticia_principal->id . '/' . $noticia_principal->fotoN, ['class'=>'img-fluid w-100 ev-no-pub_img','alt' =>$noticia_principal->tituloN]);?>

						 <!-- share buttons social AddToAny BEGIN -->
							<div class="a2a_kit a2a_kit_size_32 a2a_default_style my-3 d-flex justify-content-center justify-content-md-end">
								
								<a class="a2a_button_facebook"></a>
								<a class="a2a_button_whatsapp"></a>
								<a class="a2a_button_twitter"></a>
								<a class="a2a_button_email"></a>
								<a class="a2a_button_copy_link"></a>
							</div>
							<script>
							var a2a_config = a2a_config || {};
							a2a_config.locale = "es";
							</script>
							<script async src="https://static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->
						<div class="text-justify">
						<?= nl2br($noticia_principal->descripcionN); ?>
						</div>
						 
					
							<!-- NOTICIA RELACIONADA O NO CON UN EVENTO -->
						 <?php if(isset($noticia_principal->evento)){ ?>
							<hr>
							<p class="h6 font-weight-bold mb-3">EVENTO RELACIONADO</p>

							<p class="mb-2 text-secondary"><i class="fas fa-calendar-check"></i> <?= $this->Html->link($noticia_principal->evento->tituloE, ['controller' => 'eventos', 'action' => 'ver',$noticia_principal->evento->slug],['class' => 'text-secondary text-decoration-none','escape' => false]);?></p>

						<?php }else{} ?>

					</div> <!--card body-->


				</div>

			</div>

			<!-- MAS NOTICIAS -->
			<div class="col-12 col-lg-4">
				<h5 class="font-weight-bold mt-4 mt-lg-0 mb-3">NOTICIAS RECIENTES</h5>
				<div class="row">
					<?php foreach ($mas_noticias as $noticia): ?>
						<div class="col-12 col-md-6 col-lg-12 d-flex align-items-strech">
							<div class="card border-0 shadow mb-2 w-100">
								<div class="card-body">
									<div class="row">
									<div class="col-5 col-xl-4">
									<?= $this->Html->link($this->Html->image('../files/Noticias/fotoN/'. $noticia->id . '/' . $noticia->fotoN, ['class'=>'h-100 w-100', 'style="object-fit: cover;"','alt' =>$noticia->tituloN]),['action' => 'ver', $noticia->slug],['escape' => false]);?>
									</div>
									<div class="col-7 col-xl-8">
									<p class="card-subtitle text-success my-1"><small><i class="fas fa-calendar-day mr-1"></i><?= $noticia->fechaN->i18nformat('dd/MM/yyyy');?></small></p>
									<?= $this->Html->link($noticia->tituloN, ['action' => 'ver', $noticia->slug],['class' => 'h6 card-title font-weight-bold text-dark text-decoration-none']); ?>
									</div>
									
									</div>
									
								</div>
							</div>
						</div>

				<?php endforeach; ?>
				<!-- REDES SOCIALES  -->
				<div class="col-12 my-4">
					<div class="card border-0 shadow bg-dark w-100 d-none d-lg-block">
						<div class="card-body p-3">
							<ul class="list-unstyled list-inline text-center my-1 py-1">
									<li class="list-inline-item"><a href="" target="_blank"><i class="fab fa-facebook-f mx-2 text-light rrss_icono"></i></a></li>
									<li class="list-inline-item"><a href="" target="_blank"><i class="fab fa-twitter mx-2  text-light rrss_icono"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fab fa-youtube mx-2  text-light rrss_icono"></i></a></li>
									<li class="list-inline-item"><a href="" target="_blank"><i class="fab fa-instagram mx-2  text-light rrss_icono"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>

		</div>
	</section>

</div>
