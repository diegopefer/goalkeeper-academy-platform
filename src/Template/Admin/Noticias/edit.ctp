<?php $this->assign('title', 'Editar noticia | Administración EDPAP'); ?>

<section class="my-4">
  <div class="row">
    <div class="col-12">
      <?= $this->Form->create($noticia, ['novalidate','type'=> 'file']);?>
      <div class="card border-0 shadow">
        <div class="card-header bg-dark">
          <h5 class="mb-0 text-light font-weight-bold">EDITAR NOTICIA</h5>
        </div>


        <div class="card-body">

          <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-5">
                <?php
                  if (!empty($noticia->fotoN)){
                    echo $this->Html->image('../files/Noticias/fotoN/'. $noticia->id . '/' . $noticia->fotoN, ['class'=>'img-fluid w-100 rounded mb-3']);

                  }else{}?>
              
               <div class="form-group">
                      
                <?= $this->Form->control('fotoN', ['type' => 'file','class'=> 'form-control-file','label' => false ,'escape' => false]);?>
                <small class="form-text text-muted">Tipos de archivos aceptados: jpg, jpeg, png y gif.</small>
              </div>

            </div>

            <div class="col-12 col-lg-7">
               <div class="form-group">
                  <label class="font-weight-bold">Título</label>
                  <?= $this->Form->control('tituloN',['class' =>'form-control','placeholder' => 'Título','label' => false ,'escape' => false]);?>
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Fecha <small class="form-text text-muted d-inline"> (actualmente en la base de datos: <b><?= $noticia->fechaN->i18nFormat('dd/MM/yyyy') ?></b>)</small></label>
                  <?= $this->Form->control('fechaN', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
                </div>

                 <div class="form-group">
                  <label class="font-weight-bold">Descripción</label>
                  <?= $this->Form->control('descripcionN',['type'=>'textarea','rows' => '9','id' => 'summerNote2','class' =>'form-control','label' =>false ,'escape' => false] );?>
									</div>
									<script>
										$(document).ready(function() {
											$('#summerNote2').summernote({
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
                    
                    $(".note-editable").css("font-size","14px");            
                    $(".note-editable").css("font-family","Roboto");
									</script>
					

                 <!-- select para si hay una noticia que pertenece a un evento -->
                <div class="form-group">
                  <label class="font-weight-bold">Evento relacionado</label>
                  <?= $this->Form->control('evento_id',['type'=>'select','options' => $eventos, 'empty' => 'Ninguno','class' => 'form-control','label' => false,'escape' => false]); ?>
                </div>
       
            </div>

            <div class="col-12 d-flex justify-content-end">
              <?= $this->Html->link('Cancelar',['controller'=> 'Noticias','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
              <?= $this->Form->button(__('Actualizar noticia'), ['class'=>'btn btn-success ml-2']);?>

              <?= $this->Form->end() ?>
            </div>
          </div>
            
        </div>
          
      </div>

    </div>
  </div>
</section>
