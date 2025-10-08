<?php $this->assign('title', 'Añadir vídeo | Admin EDPAP'); ?>

<section class="my-4">
	<div class="row d-flex justify-content-center">

		<div class="col-12 col-md-6">
			<div class="card border-0 shadow">
				<div class="card-header bg-dark">
					<h5 class="mb-0 text-light font-weight-bold">AÑADIR VÍDEO</h5>
				</div>
					<div class="card-body">
						<?= $this->Form->create($video, ['novalidate']) ?>

						<fieldset>
							<div class="row">
								
									<div class="col-12 form-group">
										<label class="font-weight-bold">Título</label>
										<?= $this->Form->control('tituloV',['class' =>'form-control','placeholder' => 'Título','label' => false ,'escape' => false]);?>
									</div>


									<div class=" col-6 form-group">
										<label class="font-weight-bold">Fecha</label>
										<?= $this->Form->control('fechaV', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
									</div>
									<div class="col-12 form-group">
										<label class="font-weight-bold">Link vídeo</label>
										<?= $this->Form->control('enlaceV',['class' =>'form-control','placeholder' => 'Link vídeo','label' => false ,'escape' => false]);?>
									</div>

								<div class="col-12 d-flex justify-content-end">
									<?= $this->Html->link('Cancelar',['controller'=> 'videos','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
									<?= $this->Form->button(__('Crear vídeo'),['class' => 'btn btn-success ml-2'])?>

									<?= $this->Form->end() ?>
								</div>
							</div>
						</fieldset>
					</div>
			</div>

		</div>

	</div>
</section>
