<?php $this->assign('title', 'Editar evento | Administración EDPAP'); ?>
<section class="my-4">

  <div class="row">
    <div class="col-12">
      <?= $this->Form->create($evento, ['novalidate','type'=> 'file']);?>
      <div class="card border-0 shadow">
        <div class="card-header bg-dark">
          <h5 class="mb-0 text-light font-weight-bold">EDITAR EVENTO</h5>
        </div>


        <div class="card-body">

          <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-5">
                <?php
                  if (!empty($evento->fotoE)){
                    echo $this->Html->image('../files/Eventos/fotoE/'. $evento->id . '/' . $evento->fotoE, ['class'=>'img-fluid w-100 rounded mb-3']);

                  }else{}?>
              
               <div class="form-group">
                      
                <?= $this->Form->control('fotoE', ['type' => 'file','class'=> 'form-control-file','label' => false ,'escape' => false]);?>
                <small class="form-text text-muted">Tipos de archivos aceptados: jpg, jpeg, png y gif.</small>
              </div>

            </div>

            <div class="col-12 col-lg-7">
              <div class="row">
                  <div class="col-12 form-group">
                    <label class="font-weight-bold">Título</label>
                    <?= $this->Form->control('tituloE',['class' =>'form-control','placeholder' => 'Título','label' => false ,'escape' => false]);?>
                  </div>
                  <div class="col-12 col-sm-6 form-group">
                    <label class="font-weight-bold">Fecha <small class="form-text text-muted d-inline"> (actualmente en la base de datos: <b><?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?></b>)</small></label>
                    <?= $this->Form->control('fechaE', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
                  </div>
                  <div class="col-12 col-sm-6 form-group">
                    <label class="font-weight-bold">Hora</label><small id="fileHelp" class="form-text text-muted d-inline"> (actualmente en la base de datos: <b><?= $evento->horaE->i18nformat('HH:mm'); ?> horas</b>)</small>
                    <?= $this->Form->time('horaE', ['type' =>'time','class'=> 'form-control','label' => false]); ?>
                  </div>
                  <div class="col-12 form-group">
                    <label class="font-weight-bold">Localización</label>
                     <?= $this->Form->input('localizacionE',['class' =>'form-control','placeholder' => 'Localización','label' => false,'escape' => false]);?>
                  </div>
                  <div class="col-12 form-group">
                      <label class="font-weight-bold">Link localización</label>
                      <?= $this->Form->control('enlace_localizacionE',['class' =>'form-control','placeholder' => 'Link localización','label' => false ,'escape' => false]);?>
                  </div>
                </div>
                  <div class="form-group">
                  <?= $this->Form->control('descripcionE',['type'=>'textarea','id' => 'summerNote4','class' =>'form-control','label' =>false ,'escape' => false] );?>
										<script>
										$(document).ready(function() {
											$('#summerNote4').summernote({
												placeholder: 'Descripción',
												height: 300,

												toolbar: [
												['style', ['style']],
												['fontname',['fontname']],
												['font', ['bold', 'italic', 'underline', 'clear']],
												['fontsize', ['fontsize']],
												['color', ['color']],
												['para', ['ul', 'ol', 'paragraph']],
												['height', ['height']],
												['table', ['table']],
												['insert', ['link', 'hr']],
												['view', ['fullscreen', 'codeview']],
												['help', ['help']]
												],

												popover: {
												image: [],
												link: [],
												air: []
												}
											});
										});
									</script>
                </div>      
            </div>

            <div class="col-12 d-flex justify-content-end">
              <?= $this->Html->link('Cancelar',['controller'=> 'Eventos','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
              <?= $this->Form->button(__('Actualizar evento'), ['class'=>'btn btn-success ml-2']);?>

              <?= $this->Form->end() ?>
            </div>
          </div>
            
        </div>
          
      </div>

    </div>
  </div>
</section>
