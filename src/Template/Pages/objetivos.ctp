<?php $this->assign('title', 'Objetivos | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Conoce los objetivos, tanto generales como específicos, que la escuela de porteros busca conseguir durante toda la temporada.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Objetivos de una escuela de porteros, objetivos del entrenamiento de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Objetivos | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce los objetivos, tanto generales como específicos, que la escuela de porteros busca conseguir durante toda la temporada.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/objetivos' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '900','block' => true]);?>

<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Objetivos | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce los objetivos, tanto generales como específicos, que la escuela de porteros busca conseguir durante toda la temporada.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>


<section class="my-4">
  <div class="container">
  <header>
     <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">OBJETIVOS</h2>
  </header>
  <div class="row">
    <div class="col-12">
      <p class="text-justify">
        La <strong>Escuela de Porteros</strong> presenta una serie de objetivos que se desean alcanzar durante el transcurso del año de trabajo. Se dividen en dos, generales y específicos.
      </p>
      <!-- objetivos generales -->
      <h5 class="mb-0 mt-5 font-weight-bold"> OBJETIVOS GENERALES</h5>
      <hr class="mt-1">

      <ul class="fa-ul">
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Formar a los porter@s adaptando los entrenamientos a las diferentes etapas de apredizaje y ver reflejado un progreso en ellos.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Conocer los límites de habilidad de cada porter@ para así desarrollar los ejercicios de una manera más dinámica.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Perfeccionar la técnica de los porter@s de una forma más individualizada, compatible con su trabajo en sus respectivos equipos.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Buscar la mejora y el progreso individual detectando y corrigiendo errores y potenciando sus virtudes.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Controlar su estado de ánimo, evitando que caigan en la frustración al trabajar algo que aun no dominan.</li>
      </ul>

      <!-- objetivos especificos -->
      <h5 class="mb-0 mt-5 font-weight-bold">OBJETIVOS ESPECÍFICOS</h5>
      <hr class="mt-1">

      <ul class="fa-ul">
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Toma de decisiones adecuada según la situación.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Posicionamiento correcto dependiendo de la acción técnica a realizar (blocaje frontal, media altura, caída lateral, caída media altura, despeje...)</li>
          <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Trabajo y mejora de juego de pies, buscando tomar la mejor opción en las situaciones planteadas.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Trabajo y preparación en el aspecto psicológico.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Aprender a percibir y a mejorar la toma de decisiones.</li>
        <li class="mb-2"><small><i class="fa fa-hand-paper"></i></small> Mejora de la fuerza y de la coordinación, además de los movimientos espacio-temporales.</li>
      </ul>
    </div>

    </div>
  </div>

</section>
