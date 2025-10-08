<?php $this->assign('title', 'Nuestra escuela | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Conoce un poco más de la escuela de porteros, su fundación y su propósito general. Entrenamientos específicos para niños a partir de 6 años.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Que es escuela de porteros, propósito de la escuela de porteros Ourense',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Nuestra escuela | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce un poco más de la escuela de porteros, su fundación y su propósito general. Entrenamientos específicos para niños a partir de 6 años.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/nuestra-escuela' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/nuestraescuela.jpg','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '900','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '500','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Nuestra escuela | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce un poco más de la escuela de porteros, su fundación y su propósito general. Entrenamientos específicos para niños a partir de 6 años.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/nuestraescuela.jpg','block' => true]);?>


<section class="my-4">
  <div class="container">

    <header>
       <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">NUESTRA ESCUELA</h2>
    </header>

    <div class="row d-flex justify-content-center">
      <div class="col-xl-6">
        <p class="text-justify">
          La <strong>Escuela de Porteros</strong> es una escuela de entrenamientos de tecnificación para porter@s de futbol, fundada en el año 2018 con la colaboración del Concello Municipal de Deportes de Ourense, el Ourense C.F. S.A.D. y la U.D. Ourense.<br><br>
        Esta iniciativa ha sido llevada a cabo para dotar del entrenamiento y la preparación adecuada a los porteros que no se conforman con la atención ofrecida por sus entrenadores y equipos siendo conscientes de que para su mejora será necesario un entrenamiento específico.<br><br>
        En base a la demanda y necesidad y para así suplir el déficit de entrenamiento de porteros en la ciudad de Ourense, los jóvenes guardametas podrán adquirir un mayor nivel fútbolístico, además de transmitir todos aquellos valores positivos que ayuden al tanto a su crecimiento deportivo como personal.<br><br>
        La escuela está a disposición de todos aquell@s niñ@s <strong>a partir de 6 años</strong> que deseen aprender y pasar un buen rato con nosotros.</p>

      </div>
      <div class="col-xl-6">
        <?= 
    $this->Html->image(
        'carousel/img_slide1.webp',
        [
            'class' => 'img-fluid w-100 shadow mb-3',
            'alt' => 'Foto de la sección nuestra escuela',
        ]
    )
 ?>
      </div>

      </div>
    </div>
</section>
