<?php $this->assign('title', 'Editar álbum | Administración EDPAP'); ?>

<section class="my-4">
	<div class="row d-flex justify-content-center">

		<div class="col-12 col-md-6">
			<div class="card border-0 shadow">
				<div class="card-header bg-dark">
					<h5 class="mb-0 text-light font-weight-bold">EDITAR ÁLBUM</h5>
				</div>
					<div class="card-body">
						<?= $this->Form->create($album, ['novalidate']) ?>

						<fieldset>
							<div class="row">
								
									<div class="col-12 form-group">
										<label class="font-weight-bold">Título</label>
										<?= $this->Form->control('tituloA',['class' =>'form-control','placeholder' => 'Nombre','label' => false ,'escape' => false]);?>
									</div>


									<div class=" col-8 form-group">
										<label class="font-weight-bold">Fecha <small class="form-text text-muted d-inline"> (actualmente en la base de datos: <b><?= $album->fechaA->i18nformat('dd/MM/yyyy'); ?></b>)</small></label>
										<?= $this->Form->control('fechaA', ['type' =>'date','class'=> 'form-control','label' => false]); ?>
									</div>
									<div class="col-12 form-group">
										<label class="font-weight-bold">URL imagen álbum</label>
										<?= $this->Form->control('enlace_imagenA',['class' =>'form-control','placeholder' => 'URL imagen álbum','label' => false ,'escape' => false]);?>
									</div>
									<div class="col-12 form-group">
										<label class="font-weight-bold">URL álbum</label>
										<?= $this->Form->control('enlaceA',['class' =>'form-control','placeholder' => 'URL álbum','label' => false ,'escape' => false]);?>
									</div>

									<div class="col-12 d-flex justify-content-end">
										<?= $this->Html->link('Cancelar',['controller'=> 'albumes','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
										<?= $this->Form->button(__('Actualizar álbum'),['class' => 'btn btn-success ml-2'])?>

										<?= $this->Form->end() ?>
									</div>
							</div>
						</fieldset>
					</div>
			</div>

		</div>

	</div>
</section>
