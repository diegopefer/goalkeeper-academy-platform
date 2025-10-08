<?php $this->assign('title', 'Videoteca | Admin EDPAP'); ?>

<section class="my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-0 shadow">
        <div class="card-header bg-dark text-light d-flex align-items-center justify-content-between">
          <h5 class="mb-0 font-weight-bold"><i class="fas fa-video mr-2"></i>VÍDEOS</h5>
          <?= $this->Html->link('<i class="far fa-plus-square text-success"></i> Añadir',['controller' => 'videos', 'action'=>'add', ],['role'=>'button', 'class'=> 'btn btn-sm btn-light','escape' => false]); ?>
        </div>
        <div class="card-body">
          <div class="row mb-2">
            <div class="col-12 d-flex justify-content-end">
                <div class="dropdown dropleft show">
                       
                   <a class="btn btn-sm btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <?= $this->Paginator->sort('tituloV','<p class="dropdown-item mb-0"><i class="fas fa-font"></i> Nombre</p>', ['class' => 'text-dark font-weight-bold text-decoration-none','escape' => false]);?>
                    <?= $this->Paginator->sort('fechaV','<p class="dropdown-item mb-0"><i class="fas fa-calendar-day"></i> Fecha</p>', ['escape' => false]);?>
                    <?= $this->Paginator->sort('visible','<p class="dropdown-item mb-0"><i class="fas fa-eye"></i> Visibilidad</p>',['escape' => false]);?>
                  </div>
                </div>
            </div>
          </div>

          <div class="row">
            <?php foreach ($videos as $video): ?>
            <div class="col-12 col-sm-6 col-xl-4 d-flex align-items-strech">
              <div class="card border-0 bg-dark shadow mb-3 w-100">
                <div class="card-header d-flex flex-column flex-fill border-0">
                   <div class="dropdown show text-right">
                          <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v px-1 text-light"></i>
                          </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">

                          <a href="<?= $video->enlaceV;?>" class="dropdown-item text-dark text-decoration-none" target="_blank"><i class="fas fa-search-plus"></i> Visualizar</a>
                          <?= $this->Html->link('<i class="fas fa-edit"></i> Editar',['action'=>'edit',$video->slug],['class' => 'dropdown-item text-dark text-decoration-none','escape' => false]);?>
                          <?= $this->Form->postLink('<i class="fas fa-trash"></i> Eliminar',
                           ['action' => 'delete', $video->id],['class'=> 'dropdown-item text-dark text-decoraction-none btn_eliminar','escape' => false]);?>
                        </div>
                      </div>
                   <p class="mb-2 text-center"><span class="badge badge-success"><i class="fas fa-calendar-day mr-1"></i><?= $video->fechaV->i18nformat('dd/MM/yyyy'); ?></span></p>
                  <h6 class="text-light font-weight-bold text-uppercase text-center"><?= $video->tituloV; ?> </h6>

                </div>
       
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="<?= $video->enlaceV; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="p-2 text-center">
                  <?php if($video->visible == 0){

                          echo $this->Html->link('<i class="far fa-eye-slash text-danger"></i>',['action'=>'visible',$video->id],['escape' => false]);

                        }else{
                              echo $this->Html->link('<i class="far fa-eye text-success"></i>',['action'=>'visible',$video->id],['escape' => false]);

                        }
                    ?>
                </div>

              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="row">
            <div class="col-12">
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
          <div class="col-12">
               <p class="d-flex align-items-center justify-content-center mb-0"><b>Total vídeos &nbsp; </b> <span class="badge badge-pill badge-success">
               <?= $videos->count();?>
             </span></p>
          </div>
        </div>
        
                 
      </div>

    </div>
  </div>
</section>

<!-- script pop-up para confirmación de borrado con sweetalert2 -->
<script type="text/javascript">

 $(".btn_eliminar").attr("onclick", "").unbind("click"); //borrado de la función onclick del botón. modifica atributo onclick y elimina el click del boton

$(document).on('click', '.btn_eliminar', function () {
    let borrar_form = $(this).parent().find('form'); //busca el padre del elemento y lo guarda en variable local

    // constante con los estilos personalizados de botones de sweetalert2 con estilos de bootstrap
    const boton_swal = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-danger ml-2',
        cancelButton: 'btn btn-outline-dark'
      },
      buttonsStyling: false
    })

    // configuración de los botones con estilos sweetalert2
    boton_swal.fire({
      title: '<h5 class="font-weight-bold">¿Estás seguro de eliminar?</h5>',
      text: '',
      icon: 'warning',
      showConfirmButton: true,
      showCancelButton: true,
      confirmButtonText: 'Si, eliminar',
      cancelButtonText: 'Volver',
      reverseButtons: true
    }).then((result) => { //then devuelve un resultado segun el botón pulsado (eliminar o volver)
        if (result.value) { 

        //si es exitoso (eliminar) ejecuta el submit de borrado y muestra el mensaje de exito
            borrar_form.submit();
            boton_swal.fire({
              title:  '<h5 class="font-weight-bold">Eliminado correctamente!</h5>',
              text: '',
              icon: 'success',
              showConfirmButton: false
            })

        }else if(result.dismiss === Swal.DismissReason.cancel){ } // si el resultado es erroneo  y coincide con el cancel del swal (clicka volver), no muestra nada
       
    });
});

</script>
