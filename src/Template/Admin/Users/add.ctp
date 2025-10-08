<?php $this->assign('title', 'Añadir usuario | Admin EDPAP'); ?>

<section class="my-4">
	<div class="row d-flex justify-content-center">

		<div class="col-12 col-md-6">
			<div class="card border-0 shadow">
				<div class="card-header bg-dark">
					<h5 class="mb-0 text-light font-weight-bold">AÑADIR USUARIO</h5>
				</div>
					<div class="card-body">
						<?= $this->Form->create($usuario, ['novalidate']) ?>

						<fieldset>
							<div class="row">
								
									<div class="col-12 form-group">
										<label class="font-weight-bold">Nombre de usuario</label>
										<?= $this->Form->control('username',['class' =>'form-control','placeholder' => 'Nombre de usuario','label' => false ,'escape' => false]);?>
									</div>
									<div class="col-12 form-group">
								
										<label class="font-weight-bold">Contraseña</label>
										<?= $this->Form->control('password', ['class'=> 'form-control','placeholder' => 'Contraseña','label' => false]); ?>
									</div>
									

								<div class="col-12 d-flex justify-content-end">
									<?= $this->Html->link('Cancelar',['controller'=> 'Users','action' => 'listar'],['role' => 'button', 'class' => 'btn btn-outline-success']);?>
									<?= $this->Form->button(__('Crear usuario'),['class' => 'btn btn-success ml-2'])?>

								</div>
							</div>
						</fieldset>
						<?= $this->Form->end() ?>
					</div>
			</div>

		</div>

	</div>
</section>

