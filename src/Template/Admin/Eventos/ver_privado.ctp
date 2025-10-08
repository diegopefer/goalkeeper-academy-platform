<?php $this->assign('title', $evento_principal->tituloE . ' | Administración EDPAP'); ?>

<section class="my-4">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-lg-7">
			<div class="card border-0 bg-dark shadow">
				<div class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-end align-items-center">
					<span class="badge badge-dark m-2 p-1"><p class="mb-0 text-warning"><i class="fas fa-edit"></i> <b>Última modificación: </b><?= $evento_principal->created->format('d-m-Y H:i:s');?></p></span>
					<?= $this->Html->link('<i class="fas fa-edit"></i> Editar',['controller' => 'Eventos', 'action'=>'edit',$evento_principal->slug],['role'=>'button', 'class'=> 'btn btn-sm btn-warning m-2','escape' => false]); ?>
				</div>
				<div class="card-body p-0">
					<h3 class="card-title text-center text-light text-uppercase font-weight-bold my-3"><?= $evento_principal->tituloE; ?> </h3>

					<?= $this->Html->image('../files/Eventos/fotoE/'. $evento_principal->id . '/' . $evento_principal->fotoE, ['class'=>'img-fluid w-100']); ?>

				</div>
				<div class="card-footer border-0">
					<div class="row d-flex align-items-center">

						<div class="col-12 d-flex flex-column flex-md-row justify-content-center justify-content-md-around">
							<p class="text-light text-center font-weight-bold"><i class="fas fa-calendar-day"></i> <?= $evento_principal->fechaE->i18nformat('dd/MM/yyyy'); ?></p>
							<p class="text-light text-center font-weight-bold mb-2 mb-md-0"><i class="fas fa-clock"></i> <?= $evento_principal->horaE->i18nformat('HH:mm'); ?> horas</p>
						</div>
								
						<?php if(!empty($evento_principal->localizacionE)) { ?>
						<div class="col-12 d-flex justify-content-center">
						
							
							<a href="<?= $evento_principal->enlace_localizacionE ?>" target="_blank" class="text-light font-weight-bold text-decoration-none d-block"><i class="fas fa-map-marker-alt mr-2 mt-3 mb-md-0"></i> <?= $evento_principal->localizacionE ;?></a>
						</div>
						<?php } else{} ?>
					</div>
				</div>
				<div class="card-body text-light text-justify">
				<?= nl2br($evento_principal->descripcionE) ?>

					<!-- noticias relacionadas con el evento principal-->
					<?php if(!empty($evento_principal->noticias)){ ?>
						<hr>
						<p class="h6 text-light font-weight-bold mb-3"> NOTICIAS RELACIONADAS</p>

						<?php foreach($evento_principal->noticias as $noticia): ?>

						<p class="mb-2 text-light"><i class="fas fa-newspaper"></i> <?= $this->Html->link($noticia->tituloN, ['controller' => 'noticias', 'action' => 'verPrivado',$noticia->id],['class' => 'text-secondary text-decoration-none' ,'escape' => false]);?></p>
						<?php endforeach; ?>

					<?php } else {} ?>
				</div>

			</div>
		</div>
		<div class="col-12 col-lg-4">
			<?php if($mas_eventos->count() != 0){ ?>
			<h5 class="font-weight-bold mt-4 mt-lg-0 mb-3">OTROS EVENTOS</h5>

			<ul class="list-group bg-light border-0 shadow">

				<?php foreach ($mas_eventos as $evento): ?>

					<li class="list-group-item border-0 bg-dark shadow mb-1">
						<?= $this->Html->link($evento->tituloE, ['controller' => 'Eventos','action' => 'verPrivado', $evento->slug],['class' => 'text-light d-block text-center font-weight-bold text-uppercase text-decoration-none']); ?>
						<div class="row d-flex justify-content-around mt-2">
							<span class="badge badge-success p-2">
								<i class="fas fa-calendar-day"></i> <?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?>
							</span>
							<span class="badge badge-success p-2">
								<i class="fas fa-clock"></i> <?= $evento->horaE->i18nformat('HH:mm'); ?>
							</span>

						</div>
					</li>
				<?php endforeach;?>

			</ul>
			
			<?php } else{} ?>

		</div>

		<!-- paginador -->
		<div class="col-12 mt-2">
			<!-- PAGINADOR -->
	        <!-- setTemplates permite cambiar/personalizar las plantillas utilizadas por el paginationhelper en tiempo de ejecucion -->
	            <?php
	            $paginator = $this->Paginator->setTemplates([
	                'number' =>'<li class="page-item"><a href="{{url}}" class="page-link text-dark">{{text}}</a></li>',
	                'current' =>'<li class="page-item active"><a href="{{url}}" class="page-link bg-dark border-dark">{{text}}</a></li>',
	                'first' =>'<li class="page-item"><a href="{{url}}" class="page-link text-dark">&laquo;</a></li>',
	                'last' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&raquo</a></li>',
	                'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&lt</a></li>',
	                'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link text-dark">&gt</a></li>',
	              ]); ?>
	            <nav>
	              <ul class="pagination">
	                <?php
	                  echo $paginator->first();
	                  if($paginator->hasPrev){
	                    echo $paginator->prev();
	                  }
	                  echo $paginator->numbers();
	                  if($paginator->hasNext()){
	                    echo $paginator->next();
	                  }
	                  echo $paginator->last();
	                 ?>
	              </ul>

	           </nav>
		</div>
	</div>
</section>