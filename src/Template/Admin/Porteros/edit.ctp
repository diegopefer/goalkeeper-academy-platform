<?php $this->assign('title', 'Editar portero | Administración EDPAP'); ?>

<section class="my-4">

  <div class="row">
    <div class="col-12">
      <?= $this->Form->create($portero, ['novalidate','type'=> 'file']);?>
      <div class="card border-0 shadow">
        <div class="card-header bg-dark">
          <h5 class="mb-0 text-light font-weight-bold">EDITAR PORTERO</h5>
        </div>


        <div class="card-body">

          <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-5">
                <?php
                  if (!empty($portero->fotoP)){
                    echo $this->Html->image('../files/Porteros/fotoP/'. $portero->id . '/' . $portero->fotoP, ['class'=>'img-fluid w-100 rounded mb-3']);

                  }else{}?>
              
               <div class="form-group">
                      
                <?= $this->Form->control('fotoP', ['type' => 'file','class'=> 'form-control-file','label' => false ,'escape' => false]);?>
                <small class="form-text text-muted">Tipos de archivos aceptados: jpg, jpeg, png y gif.</small>
              </div>

            </div>

            <div class="col-12 col-lg-7">
              <div class="row">
                  <div class="col-6 form-group">
                    <label class="font-weight-bold">Nombre</label>
                    <?= $this->Form->control('nombre',['class' =>'form-control','placeholder' => 'Nombre','label' => false ,'escape' => false]);?>
                  </div>
                  <div class="col-6 form-group">
                    <label class="font-weight-bold">Apellidos</label>
                    <?= $this->Form->control('apellidos',['class' =>'form-control','placeholder' => 'Apellidos','label' => false ,'escape' => false]);?>
                  </div>
                  <div class="col-6 form-group">
                    <label class="font-weight-bold">Fecha <small class="form-text text-muted d-inline"> (actualmente en la base de datos: <b><?= $portero->fecha_nacimiento->i18nFormat('dd/MM/yyyy') ?></b>)</small></label>
                    <?= $this->Form->control('fecha_nacimiento', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6 form-group">
                        <label class="font-weight-bold">Apodo</label>
                        <?= $this->Form->control('apodo',['placeholder'=> 'Apodo','class'=>'form-control','label' => false,'escape' => false])?>
                      </div>

                      <div class="col-6 form-group">
                         <!-- creacion de select integrado con bootstrap 4 -->
                         <label class="font-weight-bold">Pie hábil</label>
                         <?= $this->Form->control('pie_dominante',
                         ['type'=>'select',
                         'options' => ['Izquierdo'=>'Izquierdo','Derecho'=>'Derecho','Ambos'=>'Ambos'],
                         'empty' => 'Selecciona uno',
                         'class' => 'form-control',
                         'label' => false,
                         'escape' => false
                         ])?>
                     </div>
                </div>
                <hr>
                <div class="row">
                    <div class=" col-6 form-group">
                      <!-- creacion de select integrado con bootstrap 4 -->
                       <label class="font-weight-bold">Categoría</label>
                      <?= $this->Form->control('categoria',
                      ['type'=>'select',
                      'options' => ['Prebenjamin'=>'Prebenjamín','Benjamin'=>'Benjamín','Alevin'=>'Alevín','Infantil'=>'Infantil','Cadete'=>'Cadete','Juvenil'=>'Juvenil','Senior'=>'Senior'],
                      'empty' => 'Selecciona una',
                      'class' => 'form-control',
                      'label' => false,
                      'escape' => false
                      ])?>
                    </div>

                    <div class="col-6 form-group">
                         <label class="font-weight-bold">Equipo</label>
                        <?= $this->Form->control('equipo',['placeholder'=> 'Equipo','class'=>'form-control','label' => false,'escape' => false])?>
                    </div>
                   
                  </div>
                  <div class="row">

                  <div class="col-12 form-group">
                    <label class="font-weight-bold">Descripción</label>
                    <?= $this->Form->control('descripcion',['type'=>'textarea','rows' => '5','class'=>'form-control','placeholder'=>'Descripcion','label' => false,'escape' => false])?>
                  </div>

                  <div class="col-12 form-group">
                    <label class="font-weight-bold">Frase personal</label>
                    <?= $this->Form->control('slogan',['type'=>'textarea','rows' => '2','class'=>'form-control','placeholder'=>'Frase personal','label' => false,'escape' => false])?>
                  </div>

                </div>
                   
              </div>

             
            </div>

            <div class="col-12 d-flex justify-content-end">
              <?= $this->Html->link('Cancelar',['controller'=> 'Porteros','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
              <?= $this->Form->button(__('Actualizar portero'), ['class'=>'btn btn-success ml-2']);?>

              <?= $this->Form->end() ?>
            </div>
          </div>
            
        </div>
          
      </div>

    </div>
  </div>
</section>




