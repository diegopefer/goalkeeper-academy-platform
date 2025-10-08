<?php $this->assign('title', 'Porteros | Admin EDPAP'); ?>

<section class="my-4">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-lg-10 col-xl-9">
      <div class="card border-0 shadow">
        <div class="card-header bg-dark text-light d-flex align-items-center">
           <h5 class="mb-0 font-weight-bold"><i class="fas fa-hand-paper mr-2"></i>PORTEROS</h5>
          <?= $this->Html->link('<i class="far fa-plus-square text-success"></i> Añadir',['controller' => 'Porteros', 'action'=>'add', ],['role'=>'button', 'class'=> 'btn btn-sm btn-light ml-auto','escape' => false]); ?>
        </div>

        <div class="card-body">
            <!-- tabla de porteros -->
          <div class="table-responsive">
            <table class="table table-hover">
              <tr class="thead-dark text-center">
                <th scope="col"><?= $this->Paginator->sort('visible','<i class="fas fa-eye text-light">',['escape' => false]);?></i></th>
                <th scope="col"><?= $this->Paginator->sort('nombre','<p class="text-light d-inline">Nombre</p>', ['escape' => false]);?></th>

                <th scope="col"><?= $this->Paginator->sort('categoria','<p class="text-light d-inline">Categoría</p>', ['escape' => false]);?></th>
                <th scope="col"></th>

              </tr>

              <?php foreach ($porteros as $portero): ?>
                <tr class="text-center">
                    <td class="align-middle">
                      <?php if($portero->visible == 0){

                          echo $this->Html->link('<i class="far fa-eye-slash text-danger"></i>',['controller' => 'Porteros', 'action'=>'visible',$portero->id],['escape' => false]);

                        }else{
                              echo $this->Html->link('<i class="far fa-eye text-success"></i>',['controller' => 'Porteros', 'action'=>'visible',$portero->id],['escape' => false]);

                        }

                    ?></td>
                    <td class="align-middle font-weight-bold"><?= $this->Html->link($portero->nombre . " ". $portero->apellidos,['controller' => 'Porteros', 'action'=>'verPrivado',$portero->slug],['class'=> 'text-dark font-weight-bold text-decoration-none','escape' => false]); ?></td>
                    <td class="align-middle"><?= $portero->categoria ?> </td>
                    <td class="align-middle">
                      <div class="btn-group mr-2">


                        <?= $this->Html->link('<i class="fas fa-edit"></i>',['action'=>'edit',$portero->slug],['role'=>'button', 'class'=> 'btn btn-outline-dark','escape' => false]); ?>

                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>',
                         ['action' => 'delete', $portero->id],['role'=>'button', 'class'=> 'btn btn-outline-dark btn_eliminar','escape' => false]
                         )
                     ?>

                      </div>
                    </td>

                </tr>
                  <?php endforeach; ?>
            </table>

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

        <div class="card-footer bg-dark text-light">
          <p class="d-flex align-items-center justify-content-center mb-0"><b>Total porteros &nbsp; </b> <span class="badge badge-pill badge-success">
               <?= $porteros->count();?>
             </span></p>
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
