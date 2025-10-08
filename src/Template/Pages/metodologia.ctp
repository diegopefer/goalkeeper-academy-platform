
<?php $this->assign('title', 'Metodología | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'La escuela de porteros se centra en la utilización de una metología que busca potenciar diferentes aspectos en los porteros.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Metodologia de una escuela de porteros, metodologia escuela de porteros en Ourense, metodologia entrenamiento de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Metodología | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'La escuela de porteros se centra en la utilización de una metología que busca potenciar diferentes aspectos en los porteros.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/metodologia' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:width', 'content' => '500','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:image:height', 'content' => '900','block' => true]);?>


<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Metodología | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'La escuela de porteros se centra en la utilización de una metología que busca potenciar diferentes aspectos en los porteros.','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:image', 'content' => $_SERVER['HTTP_HOST'] .'/img/logos/logo_edpap.png','block' => true]);?>



<div class="container">
  <header>
     <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">METODOLOGÍA</h2>
  </header>

  <div class="row my-4">
    <div class="col-12 mb-4">
        <p class="text-justify">El <strong>Método de Trabajo</strong> de la Escuela de Porteros se centra en la formación de porter@s resaltando los aspectos técnicos, tácticos, físicos y psicológicos que un porter@ de fútbol va a experimentar durante la competición. Principalmente se caracteriza por:</p>
        <ul>
          <li>Grupos reducidos de trabajo según niveles y edades.(Podrán ser modificados por nivel, ya que a veces el nivel no corresponde con la edad.)</li>
          <li>Sesiones de trabajo de intensidad elevada.</li>
          <li>Contenidos según etapas formativas con sus respectivos objetivos marcados.</li>
          <li>Inculcar valores educativos como esfuerzo, humildad y compañerismo.</li>
        </ul>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
       <div class="col-12 col-sm-8 col-lg-4 my-4">
        <div class="text-center">
          <a href="#"><i class="fas fa-5x fa-play-circle mb-2 text-success" tool-tip-toogle="tooltip-demo" data-original-title="Iniciación y conocimiento de habilidades"></i></a>
          <h5 class="font-weight-bold">INICIO</h5>
        </div>
          
          <p class="text-justify">Etapa donde se realiza la introducción de los conocimientos necesarios para tod@ porter@ de fútbol y donde se comienzan a trabajar las habilidades básicas.</p>

          <div class="row d-flex flex-column justify-content-center">
            <ul class="col-3 mx-auto">
              <li>Coordinación</li>
              <li>Posicionamiento</li>
              <li>Técnica</li>
            </ul>
          </div>
      </div>
      <div class="col-sm-8 col-lg-4 my-4">
        <div class="text-center">
          <a href="#"><i class="fas fa-5x fa-sort-amount-up mb-2 text-success" tool-tip-toogle="tooltip-demo" data-original-title="Perfeccionamiento y aparición de nuevas habilidades"></i></a>
          <h5 class="font-weight-bold">DESARROLLO</h5>
        </div>
         <p class="text-justify">Potenciación y mejora de las habilidades adquiridas anteriormente y descubrimiento de nuevas habilidades.</p>
        <div class="row d-flex flex-column justify-content-center">
          <ul class="col-3 mt-3 mx-auto">
              <li>Tácticas</li>
              <li>Físicas</li>
              <li>Psicológicas</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-8 col-lg-4 my-4">
        <div class="text-center">
          <a href="#"><i class="fas fa-5x fa-user-cog mb-2 text-success" tool-tip-toogle="tooltip-demo" data-original-title="Dominio de las habilidades trabajadas"></i></a>
          <h5 class="font-weight-bold">ESPECIALIZACIÓN</h5>
        </div>
      
        <p class="text-justify">Conseguir que l@s porter@s dominen las habilidades adquiridas para que puedan utilizarlas en los diferentes momentos del juego.</p>
       
      </div>
    </div>


  </div>

  <!-- script que permite que al pasar sobre el enlace se desplegue una ventanita con texto en la parte superior del enlace. -->
  <script type="text/javascript">
      $(document).ready(function(){
          $('[tool-tip-toogle="tooltip-demo"]').tooltip({
              placement: 'top'
          });
      });
  </script>
