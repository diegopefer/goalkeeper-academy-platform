<?php $this->assign('title', 'Galería fotográfica | Admin EDPAP'); ?>

<section class="my-4">
  <div class="row">
    <div class="col-12">
      <div class="card border-0 shadow">
        <div class="card-header bg-dark text-light d-flex align-items-center justify-content-between">
          <h5 class="mb-0 font-weight-bold"><i class="fas fa-images mr-2"></i>ÁLBUMES</h5>
          <?= $this->Html->link('<i class="far fa-plus-square text-success"></i> Añadir',['controller' => 'albumes', 'action'=>'add', ],['role'=>'button', 'class'=> 'btn btn-sm btn-light','escape' => false]); ?>
        </div>

        <div class="card-body">

          <div class="row mb-2">
            <div class="col-12 d-flex justify-content-end">
                <div class="dropdown dropleft show">
                       
                   <a class="btn btn-sm btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ordenar
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <?= $this->Paginator->sort('tituloA','<p  class="dropdown-item mb-0"><i class="fas fa-font"></i> Nombre</p>', ['class' => 'text-dark font-weight-bold text-decoration-none','escape' => false]);?>
                    <?= $this->Paginator->sort('fechaA','<p  class="dropdown-item mb-0"><i class="fas fa-calendar-day"></i> Fecha</p>', ['escape' => false]);?>
                    <?= $this->Paginator->sort('visible','<p  class="dropdown-item mb-0"><i class="fas fa-eye"></i> Visibilidad</p>',['escape' => false]);?>
                  </div>
                </div>
            
            </div>
          </div>

          <div class="row">
            <?php foreach ($albumes as $album): ?>
            <div class="col-12 col-sm-6 col-xl-4 d-flex align-items-strech">
              <div class="card border-0 bg-dark shadow mb-3 w-100">
                <div class="card-header d-flex flex-column flex-fill border-0">
                  <p class="text-center mb-3"><span class="badge badge-success"><i class="fas fa-calendar-day mr-1"></i><?= $album->fechaA->i18nformat('dd/MM/yyyy'); ?></span></p>
                  <h6 class="text-light font-weight-bold text-uppercase text-center"><?= $album->tituloA; ?> </h6>
                  
                  
                </div>
                 <div class="album">
                    <?= $this->Html->image(
                          $album->enlace_imagenA,
                          [
                              'alt' => 'Álbum ' . h($album->tituloA),
                              'class' => 'img-fluid w-100 h-100',
                              'style' => 'object-fit: cover;'
                          ]
                      ); ?>
                
                     <div class="caption_album_admin d-flex align-items-center justify-content-center">
                      <div class="row">
                      
                        <div class="col-12 text-center">

                     
                          <?= $this->Html->link(
                              '<i class="fas fa-search-plus"></i>',
                              $album->enlaceA,
                              [
                                  'class' => 'btn btn-outline-secondary',
                                  'role' => 'button',
                                  'target' => '_blank',
                                  'escape' => false // importante para que se renderice el <i>
                              ]
                          ); ?>
                          <?= $this->Html->link('<i class="fas fa-edit"></i>',['action'=>'edit',$album->slug],['role'=>'button','class'=>'btn btn-outline-warning','escape' => false]);?>
                          <?= $this->Form->postLink('<i class="fas fa-trash"></i>',
                         ['action' => 'delete', $album->id],['role'=>'button', 'class'=> 'btn btn-outline-danger btn_eliminar','escape' => false]);?>
                        </div>
                      </div>
                  
                     </div>
              
                  </div>
                <div class="card-footer border-0">
                  <?php if($album->visible == 0){

                          echo $this->Html->link('<i class="far fa-eye-slash text-danger"></i>',['action'=>'visible',$album->id],['class' => 'd-block text-center','escape' => false]);

                        }else{
                              echo $this->Html->link('<i class="far fa-eye text-success"></i>',['action'=>'visible',$album->id],['class' => 'd-block text-center','escape' => false]);

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
            <div class="col-12">
             <p class="d-flex align-items-center justify-content-center mb-0"><b>Total álbumes &nbsp; </b> <span class="badge badge-pill badge-success">
               <?= $albumes->count();?>
             </span></p>
        
            </div>
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
