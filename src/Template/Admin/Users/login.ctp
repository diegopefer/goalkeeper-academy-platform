<?php $this->assign('title', 'Acceso administración | Escuela de porteros'); ?>

<div class="container-fluid bg-light">
	
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
			<section class="my-5">
			<?= $this->Flash->render(); ?>				
			
			<div class="card border-0 shadow">
				<div class="card-body text-center">
					<?= $this->Html->image(
                 'logos/logo_edpap.png',
                 [
                  'class' => 'mb-4',
                  'alt' => 'Logotipo escuela de porteros',
				  'style' => 'width: 7rem; height: 5rem;',
              ]
              
          ) ?> 
			
      
				<h1 class="h4 mb-3 font-weight-bold">Acceso administración</h1>
				<?= $this->Form->create(null, ['url' => ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'login']]) ?>

				<fieldset>
				<?= $this->Form->error('username') ?>
				<?= $this->Form->control('username',['class' =>'form-control mb-2','placeholder' => 'Nombre de usuario','label' => false , 'required','escape' => false]);?>
				
				
				<?= $this->Form->control('password',['class' =>'form-control mb-2','placeholder' => 'Contraseña','label' => false ,'required','escape' => false]);?>
				<?= $this->Form->error('password') ?>

				<?= $this->Form->button(__('Acceder'),['class' => 'btn btn-lg btn-success w-100 my-3'])?>
				<?= $this->Form->end() ?>
				</fieldset>
				</div>
			</div>
	
			</section>
		</div>
	</div>
</div>

</div>		