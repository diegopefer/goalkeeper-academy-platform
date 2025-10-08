<?php $this->assign('title', $noticia_principal->tituloN . ' | Administración EDPAP'); ?>

<section class="my-4">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-lg-7">
			<div class="card border-0 shadow">
				<div class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-end align-items-center">
					<span class="badge badge-dark m-2 p-1"><p class="mb-0 text-warning"><i class="fas fa-edit"></i> <b>Última modificación: </b><?= $noticia_principal->created->format('d-m-Y H:i:s');?></p></span>
					<?= $this->Html->link('<i class="fas fa-edit"></i> Editar',['controller' => 'Noticias', 'action'=>'edit',$noticia_principal->slug],['role'=>'button', 'class'=> 'btn btn-sm btn-warning m-2','escape' => false]); ?>
				</div>
				<div class="card-body">
					
					<h3 class="card-title font-weight-bold"><?= $noticia_principal->tituloN; ?> </h3>
			
					<p class="text-muted mb-2"><i class="fas fa-calendar-day"></i> <?= $noticia_principal->fechaN->i18nformat('dd/MM/yyyy');?></p>

					<?= $this->Html->image('../files/Noticias/fotoN/'. $noticia_principal->id . '/' . $noticia_principal->fotoN, ['class'=>'img-fluid w-100']);?>	
			
					<div class="text-justify mt-4">
						<?= nl2br($noticia_principal->descripcionN); ?>
					</div>
					

						<!-- NOTICIA RELACIONADA O NO CON UN EVENTO -->
					 <?php if(!empty($noticia_principal->evento)){ ?>
						<hr>
						<p class="h6 font-weight-bold mb-3">EVENTO RELACIONADO</p>

						<p class="mb-2 text-secondary"><i class="fas fa-calendar-check"></i> <?= $this->Html->link($noticia_principal->evento->tituloE, ['controller' => 'eventos', 'action' => 'verPrivado',$noticia_principal->evento->id],['class' => 'text-secondary text-decoration-none','escape' => false]);?></p>

					<?php }else{} ?>

				</div> <!--card body-->

			</div>
		</div>

		<!-- MAS NOTICIAS -->
		<div class="col-12 col-lg-4">
			<?php if($mas_noticias->count() != 0){ ?>
			<h5 class="font-weight-bold mt-4 mt-lg-0 mb-3">MÁS NOTICIAS</h5>
			<div class="row">
				<?php foreach ($mas_noticias as $noticia): ?>
					<div class="col-12 col-md-6 col-lg-12 d-flex align-items-strech">
						<div class="card border-0 shadow mb-2 w-100">
							<div class="card-body p-3">
								<?= $this->Html->link($noticia->tituloN, ['action' => 'verPrivado', $noticia->slug],['class' => 'h6 card-title font-weight-bold text-dark text-decoration-none']); ?>
								<p class="card-subtitle text-muted my-1"><small><i class="fas fa-calendar-day"></i> <?= $noticia->fechaN->i18nformat('dd/MM/yyyy');?></small></p>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
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
	            <nav class="float-right">
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
