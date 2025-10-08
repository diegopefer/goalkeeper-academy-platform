<?php $this->assign('title', 'Localización | Escuela de porteros'); ?>

<?php $this->Html->meta(
	'description',
	'La escuela de porteros tiene su sede en el Campo Municipal Os Carrís (Barbadás), a tan solo 5 minutos del centro de la ciudad de Ourense.',
	['block' => true]
);
?>


<?= $this->Html->meta(
	'keywords',
	'Donde esta la escuela de porteros, campo de entrenamiento escuela de porteros , campo de entrenamiento de porteros en Ourense',
	['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Localización | Escuela de porteros', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'La escuela de porteros tiene su sede en el Campo Municipal Os Carrís (Barbadás), a tan solo 5 minutos del centro de la ciudad de Ourense.', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/localizacion', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] . '/img/instalaciones/oscarris2.jpg', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500', 'block' => true]); ?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '900', 'block' => true]); ?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image', 'block' => true]); ?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Localización | Escuela de porteros', 'block' => true]); ?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'La escuela de porteros tiene su sede en el Campo Municipal Os Carrís (Barbadás), a tan solo 5 minutos del centro de la ciudad de Ourense.', 'block' => true]); ?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] . '/img/instalaciones/oscarris2.jpg', 'block' => true]); ?>

<div class="container">
	<header>
		<h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">LOCALIZACIÓN</h2>
	</header>
	<div class="row my-3">
		<div class="col-12">
			<p class="text-justify">La <strong>Escuela de Porteros</strong> tiene su sede deportiva en el Campo Municipal Os Carrís, en el barrio de A Valenzá-Barbadás, a tan solo 5 minutos del centro de la ciudad de Ourense. El complejo deportivo dispone de:
			<ul>
				<li>Campo de fútbol 11 y fútbol 8.</li>
				<li>Cafetería y vestuarios.</li>
				<li>Amplia zona para aparcamiento de vehículos.</li>

			</ul>
			</p>
		</div>
	</div>


	<!-- galeria imagenes localizacion -->
	<div class="row">
		<div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">

			<?= $this->Html->image(
				'instalaciones/oscarris2.jpg',
				[
					'class' => 'w-100 shadow galeria_img',
					'alt' => 'Campo Municipal Os Carrís',
				]

			) ?>




		</div>
		<div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">
			<?= $this->Html->image(
				'instalaciones/oscarris4.jpg',
				[
					'class' => 'w-100 shadow galeria_img',
					'alt' => 'Campo Municipal Os Carrís',
				]

			) ?>
		</div>
		<div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">
			<?= $this->Html->image(
				'instalaciones/oscarris1.webp',
				[
					'class' => 'w-100 shadow galeria_img',
					'alt' => 'Polideportivo Os Carrís',
				]

			) ?>
		</div>

		<div class="col-12 col-sm-6 col-md-3 mb-2 mb-md-0">
			<?= $this->Html->image(
				'instalaciones/oscarris5.webp',
				[
					'class' => 'w-100 shadow galeria_img',
					'alt' => 'Pistas de pádel Os Carrís',
				]

			) ?>
		</div>

	</div>

	<div class="row mt-4 mb-4">
		<div class="col-12">
			<p class="text-justify">
				El campo de fútbol donde realiza la escuela sus entrenamientos se encuentra dentro del <strong>Complejo Deportivo Os Carrís</strong>, donde encontrarás más instalaciones para realizar otra muchas actividades, ya que dispone de:
			<ul>
				<li>Polideportivo cubierto con cancha multideporte y gimnasio.</li>
				<li>Pistas de padel y piscina.</li>
				<li>Restaurantes, barbacoas, parque infantil...</li>
			</ul>
			</p>
		</div>
	</div>
	<!-- como llegar  -->
	<!-- <div class="row my-4">
		<div class="col-12 text-center">
			<h5 class="font-weight-bold"><i class="fas fa-map-marker-alt"></i> CÓMO LLEGAR</h5>
			<p class="h6 text-muted">Calzada Romana, s/n, 32002 A Valenza-Barbadás, Ourense</p>
		</div>
	</div>
	<div class="row mb-4">
		<div class="col-12 text-center">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.4356163735!2d-7.883713084679335!3d42.311906679190066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2ff8d0605a6503%3A0x59038fb1dd72c8c2!2sCampo%20Municipal%20Os%20Carris!5e0!3m2!1ses!2ses!4v1598262568540!5m2!1ses!2ses" width="100%" height="370" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>


	</div> -->
</div>