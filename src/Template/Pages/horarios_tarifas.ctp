<?php $this->assign('title', 'Horarios y tarifas | Escuela de porteros'); ?>

<?php $this->Html->meta(
    'description',
    'Conoce la información referente a horarios, tarifas e inscripción de la escuela de porteros.',
    ['block' => true]);
?>


<?= $this->Html->meta(
    'keywords',
    'Horarios escuela de porteros, Horarios escuela de porteros en ourense, tarifas escuela de porteros en Ourense, cuanto cuesta una escuela de porteros',
    ['block' => true]
);
?>

<?= $this->Html->meta(['property' => 'og:type', 'content' => 'article','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:title', 'content' => 'Horarios y tarifas | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:description', 'content' => 'Conoce la información referente a horarios, tarifas e inscripción de la escuela de porteros.','block' => true]);?>
<?= $this->Html->meta(['property' => 'og:url', 'content' => $_SERVER['HTTP_HOST'] . '/horarios-tarifas' ,'block' => true]);?>
<?= $this->Html->meta(['property' => 'og:site_name', 'content' => 'Escuela de porteros','block' => true]);?>


<?= $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:title', 'content' => 'Horarios y tarifas | Escuela de porteros','block' => true]);?>
<?= $this->Html->meta(['name' => 'twitter:description', 'content' => 'Conoce la información referente a horarios, tarifas e inscripción de la escuela de porteros.','block' => true]);?>


<div class="container">
  <header>
      <h2 class="my-4 px-2 py-3 text-dark text-center font-weight-bold">HORARIOS Y TARIFAS</h2>
  </header>

  <div class="row my-3">

  	<div class="col-12">

      <!-- HORARIOS -->
      <section>
        <h5 class="mt-4 font-weight-bold"><i class="far fa-clock"></i> HORARIOS</h5>
        <hr class="mt-1">
        <ul>
          <li><p class="h6 d-inline-block mb-0"><strong>Fecha de inicio: &nbsp</strong><p class="h6 d-inline-block text-success font-weight-bold"> Martes, 15 de Octubre de 2020.</p></li>
          <li><p class="h6"><strong>Día de la semana:</strong> Martes de 18:00 a 21:00 (<a href="#tabla_horarios" class="text-dark">consultar tabla de horarios</a>).</p></li>
          <li><p class="h6"><strong>Duración de la sesión:</strong> 1 hora.</p></li>
          <li><p class="h6"><strong>Periodo de la tecnificación:</strong> De Octubre a Mayo (ambos inclusive).</p></li>
          <li><p class="h6"><strong>Campo de entrenamiento: </strong> Campo Municipal Os Carrís (consultar localización)</p></li>
        </ul>

        <p class="my-4 text-justify">El horario de entrenamiento se asignará a cada portero en función de su <strong>edad, categoría o aptitudes técnicas.</strong> Los grupos de entrenamiento serán de un máximo de 6 alumnos por monitor.</p>

        <!-- tabla horarios -->
        <div class="d-flex justify-content-center mb-5">
          <div class="col-12 col-md-7 table-responsive-sm">
            <table class="table table-hover border-0" id="tabla_horarios">
              <thead class="thead-dark text-center">
                <tr class=" border-0">
                  <th colspan="3"class="h5 font-weight-bold">HORARIOS</th>
                </tr>
                <tr>
                  <th scope="col">TURNO</th>
                  <th scope="col">CATEGORÍA</th>
                  <th scope="col">HORARIO</th>
                </tr>

              </thead>
              <tbody class="table-success text-center font-weight-bold">
                <tr>
                  <td>1</td>
                  <td>PREBENJAMÍN - ALEVÍN</td>
                  <td>18:00 a 19:00</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>INFANTIL - CADETE</td>
                  <td>19:00 a 20:00</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>JUVENIL - SENIOR</td>
                  <td>20:00 a 21:00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
  	  
      <!-- INSCRIPCIÓN -->
      <section>
        <h5 class="mt-4 font-weight-bold"><i class="fas fa-pencil-alt"></i> INSCRIPCIÓN</h5>
        <hr class="mt-1">

        <ul>
          <li><p>La inscripción se realizará cumplimentando el <a href="#formulario_inscripcion" class="text-dark text-decoration-none"><strong>formulario de inscripción</strong></a>, al que puede acceder haciendo click <a href="#formulario_inscripcion" class="text-dark">aquí</a>.</p></li>
          <li><p>Para la inscripción a la escuela <strong>no será necesario</strong> ningún abono de matrícula.</p></li>
          <li><p>En caso de <strong>causar baja</strong>, deberá ser notificada a la escuela lo antes posible.</p></li>
        </ul>

      </section>

      <!-- TARIFAS -->
      <section>
        
        <h5 class="mt-4 font-weight-bold"><i class="fas fa-money-check-alt"></i> TARIFAS</h5>
        <hr class="mt-1">

        <div class="row d-flex justify-content-center">
          <div class="col-12">
              <ul>
                <li><p>La cuota deberá abonarse mensualmente (del día 1 al 10 de cada mes) e incluye:</p>
                  <ul>
                    <li><p>Participación en cada sesión semanal de entrenamiento.</p></li>
                    <li><p>Seguro de accidentes.</p></li>
                    <li><p>25% descuento en la inscripción de la batalla de porteros <strong>Escuela de Porteros 2020.</strong></p></li>
                    <li><p>Importantes descuentos para nuestr@s porter@s y familiares gracias al acuerdo de colaboración con <a class="text-dark font-weight-bold text-decoration-none" href="https://www.tecnopolesportcenter.com/" target="_blank">Tecnopole Sport Center</a>.</p></li>
                  </ul>
                </li>
                <li><p>El pago de la cuota mensual se realizará en el nº de cuenta <strong>ES 2145 1452 3625</strong> indicando como concepto "Escuela de porteros".</p></li>
            </ul>

            <p class="text-justify my-4"><strong>*IMPORTANTE: </strong> El pack de entrenamiento específico de la escuela (pantalón corto, camiseta corta y sudadera) tiene un precio de 40€ y no va incluido en el precio de la cuota, deberá ser comprado en <a class="text-dark font-weight-bold text-decoration-none" href="https://www.facebook.com/pages/category/Sports---Recreation/Coolsport-441475055901124/" target="_blank">Coolsport</a>. Será obligatorio la uniformidad de los porteros de la escuela en las sesiones de entrenamiento.</p>
          </div>
          <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3">
            
            <div class="card border-0 shadow mb-4">
                <div class="h4 card-header text-light bg-dark text-center font-weight-bold">CUOTA MENSUAL</div>
                <div class="card-body">
                  <p class="card-text h1 text-success font-weight-bold text-center">25<i class="fas fa-euro-sign"></i></p>
              </div>
            </div>

             <a href="https://forms.gle/DBTTkAqcaHyy9MZS9" target="_blank" role="button" class="btn btn-lg btn-success w-100" id="formulario_inscripcion"> ¡QUIERO INSCRIBIRME!</a>
          </div>

        </div>

      </section>
      
      <br><br>

      <!-- mas informacion -->
      <section class="my-3">
      
        <h5 class="font-weight-bold text-center text-lg-left"><i class="fas fa-info"></i> Más información</h5>
        <hr class="mt-1 mb-3">

         <div class="row">

          <div class="col-12 col-lg-4 text-center mb-4">
            <i class="fas fa-3x fa-phone d-block text-success mb-3"></i>
            
                 <p class="mb-2"><strong>Entrenador 1</strong> xxx xx xx xx</p>
                 <p class="mb-2"><strong>Entrenador 2</strong> xxx xx xx xx </p>

          </div>
          <div class="col-12 col-lg-4 text-center mb-4">
            <i class="fas fa-3x fa-envelope text-success mb-3"></i><a href="" class="d-block text-dark font-weight-bold text-decoration-none">xxxxxx@gmail.com</a>
            
          </div>
          <div class="col-12 col-lg-4 text-center mb-4">
             <i class="fas fa-3x fa-map-marker-alt text-success mb-3"></i>
                <p class="h5 mb-0 font-weight-bold">OURENSE</p>
                <p class="text-muted">Campo Municipal Os Carrís (A Valenzá-Barbadás)</p>

        
          </div>
          <div class="col-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1475.193365601252!2d-7.883994137048338!3d42.31294952477307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2ff8d0605a6503%3A0x59038fb1dd72c8c2!2sCampo%20Municipal%20Os%20Carris!5e0!3m2!1ses!2ses!4v1598191102299!5m2!1ses!2ses" width="100%" height="365" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>

      </section>

    </div>
  </div>
</div>
