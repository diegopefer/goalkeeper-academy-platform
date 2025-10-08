<?php $this->assign('title', 'Añadir portero | Admin EDPAP'); ?>

<section class=" my-4">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-xl-10">
        <div class="card border-0 shadow">
  				<div class="card-header bg-dark">
  					<h5 class="mb-0 text-light font-weight-bold">AÑADIR PORTERO</h5>
  				</div>
  					<div class="card-body">
              <?= $this->Form->create($portero, ['novalidate','type'=> 'file']);?>
              <fieldset>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="row">
                      <div class="col-6 form-group">
                        <label class="font-weight-bold">Nombre</label>
                        <?= $this->Form->control('nombre',['placeholder'=> 'Nombre','class'=>'form-control','label' => false,'escape' => false])?>
                      </div>

                      <div class="col-6 form-group">
                        <label class="font-weight-bold">Apellidos</label>
                          <?= $this->Form->control('apellidos',['placeholder'=> 'Apellidos','class'=>'form-control','label' => false,'escape' => false])?>
                      </div>

                  </div>
                  <div class="row">
                      <div class="col-12 col-sm-6 form-group">

                        <label class="font-weight-bold">Fecha de nacimiento</label>
                        <?= $this->Form->control('fecha_nacimiento',['type' => 'date', 'class' => 'form-control','label' => false])?>
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
                    <div class="col-12 form-group">
                      <label class="font-weight-bold">Foto</label>
                      <?= $this->Form->control('fotoP', ['type' => 'file', 'class' => 'form-control-file','label' => 'Foto','label' => false,
                      'escape' => false]); ?>
                      <small class="form-text text-muted">Tipos de archivos aceptados: jpg, jpeg, png y gif.</small>

                    </div>
                  </div>


                </div>
                <div class="col-12 col-lg-6">

                  <div class="form-group">
                    <label class="font-weight-bold">Descripción</label>
                    <?= $this->Form->control('descripcion',['type'=>'textarea','rows' => '5','class'=>'form-control','placeholder'=>'Descripcion','label' => false,'escape' => false])?>
                  </div>

                  <div class="form-group">
                    <label class="font-weight-bold">Frase personal</label>
                    <?= $this->Form->control('slogan',['type'=>'textarea','rows' => '2','class'=>'form-control','placeholder'=>'Frase personal','label' => false,'escape' => false])?>
                  </div>

                </div>

                <div class="col-12 d-flex justify-content-end">
                   <?= $this->Html->link('Cancelar',['controller'=> 'Porteros','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
                    <?= $this->Form->button(__('Crear portero'), ['class'=>'btn btn-success ml-2']);?>

                  <?= $this->Form->end();?>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </section>
