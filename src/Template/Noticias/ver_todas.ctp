<?php $this->assign('title', 'Noticias | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Últimas noticias relacionadas con la escuela de porteros.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Noticias escuela de porteros, noticias de porteros en Ourense, noticias de porteros.',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Noticias | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Últimas noticias relacionadas con la escuela de porteros.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/noticias' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '900','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Noticias | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Últimas noticias relacionadas con la escuela de porteros.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>


<div class="container">
	<header>
		<h2 class="mt-4 px-2 py-3 text-dark text-center font-weight-bold">NOTICIAS</h2>
	</header>
	<?php if($mas_noticias->count() == 0 && $noticia_reciente->count() ==0){ ?>
		<p class="text-center">Actualmente no hay noticias para mostrar</p>
	<?php }else{ ?>
	<!-- noticia + reciente -->
	<section class="mb-4">
		<div class="row">
			<div class="col-12">

				<div class="card border-0 shadow noticia_reciente">
					<?= $this->Html->image('../files/Noticias/fotoN/'. $noticia_reciente->id . '/' . $noticia_reciente->fotoN, ['class'=>'img-fluid w-100', 'alt' =>$noticia_reciente->tituloN ]);?>

					<div class="card-img-overlay shadow p-0 d-flex align-items-end text-light">
						<div class="p-3 w-100" style="background: rgba(0,0,0,0.8);">
							<p class="text-success my-1"><i class="fas fa-calendar-day mr-1"></i><?= $noticia_reciente->fechaN->i18nformat('dd/MM/yyyy');?></p>
							<h1 class="card-title font-weight-bold"><?= $noticia_reciente->tituloN?></h1>
							<div class="card-subtitle d-none d-lg-block mb-2 text-light">
								<?php
									$tit = $noticia_reciente->descripcionN;
									$longitud = 30;
									$palabras = explode(' ', $tit);
									if (count($palabras) > $longitud)
									{
									 $tit = implode(' ', array_slice($palabras, 0, $longitud)) ."...";
									 echo $tit;
								 }else{
									 echo $tit;
								 }
									?>
							</div>
							 <?= $this->Html->link('Leer más',['action'=>'ver',$noticia_reciente->slug],['role'=>'button', 'class'=> 'btn btn-sm btn-success','escape' => false]); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- más noticias(todas las noticias menos la mas reciente, mostrada arriba ) -->
	<?php if($mas_noticias->count() == 0){

	}else{ ?>
	<section class="my-4">
		<div class="row">
				<?php foreach ($mas_noticias as $noticia) : ?>
				<div class="col-12 col-md-6 col-lg-4 d-flex align-items-strech">
					<div class="card border-0 shadow mb-3">
						<?= $this->Html->link($this->Html->image('../files/Noticias/fotoN/'. $noticia->id . '/' . $noticia->fotoN, ['class'=>' noticia_img','alt' =>$noticia->tituloN]),['action' => 'ver',$noticia->slug],['escape'=>false]);?>

						<div class="card-body p-3">
							<h6 class="text-success"><small><i class="fas fa-calendar-day"></i> <?= $noticia->fechaN->i18nformat('dd/MM/yyyy');?></small></h6>
							<h5 class="card-title font-weight-bold"><?= $this->Html->link($noticia->tituloN, ['action' => 'ver', $noticia->slug],['class' => 'text-dark text-decoration-none']); ?></h5>

						</div>
					</div>
				</div>
				<?php endforeach; ?>

				<div class="col-12 mt-2">
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

		<?php } ?>
	<?php } ?>
</div>
