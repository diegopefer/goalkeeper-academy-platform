<?php $this->assign('title', 'Añadir evento | Administración EDPAP'); ?>
<section class="my-4">
	<div class="row d-flex justify-content-center">

		<div class="col-12 col-xl-10">
			<div class="card border-0 shadow">
				<div class="card-header bg-dark">
					<h5 class="mb-0 text-light font-weight-bold">AÑADIR EVENTO</h5>
				</div>
					<div class="card-body">
						<?= $this->Form->create($evento, ['novalidate', 'type' => 'file']) ?>
						<fieldset>
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="form-group">
										<label class="font-weight-bold">Título</label>
										<?= $this->Form->control('tituloE',['class' =>'form-control','placeholder' => 'Título','label' => false ,'escape' => false]);?>
									</div>
									<div class="row">
										<div class="col-6 form-group">
											<label class="font-weight-bold">Fecha</label>
											<?= $this->Form->control('fechaE', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
										</div>
										<div class="col-6 form-group">
											<label class="font-weight-bold">Hora</label>
											<?= $this->Form->control('horaE', ['type' =>'time','class'=> 'form-control','label' => false]); ?>
										</div>
									</div>
									<div class="form-group">
										<label class="font-weight-bold">Localización</label>
											<?= $this->Form->control('localizacionE',['class' =>'form-control','placeholder' => 'Localización','label' => false ,'escape' => false]);?>
										</div>
									<div class="form-group">
										<label class="font-weight-bold">Link localización</label>
										<?= $this->Form->control('enlace_localizacionE',['class' =>'form-control','placeholder' => 'Link localización','label' => false ,'escape' => false]);?>
									</div>
									
									<div class="form-group">
										<label class="font-weight-bold">Foto</label>
										<?= $this->Form->control('fotoE', ['type' => 'file','class'=> 'form-control-file','label' => false ,'escape' => false]);?>
										<small class="form-text text-muted">Tipos de archivos aceptados: jpg, jpeg, png y gif.</small>
									</div>
								</div>

								<div class="col-12 col-lg-6">

									<div class="form-group">
										<label class="font-weight-bold">Descripción</label>
										<?= $this->Form->control('descripcionE',['type'=>'textarea','id' => 'summerNote3','class' =>'form-control','label' =>false ,'escape' => false] );?>
										<script>
										$(document).ready(function() {
											$('#summerNote3').summernote({
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
											<?= $this->Form->button(__('Crear evento'),['class' => 'btn btn-success ml-2'])?>


											<?= $this->Form->end() ?>

									</div>

							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</section>
