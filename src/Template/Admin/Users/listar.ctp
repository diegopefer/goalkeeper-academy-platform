<?php $this->assign('title', 'Usuarios | Admin EDPAP'); ?>

<section class="my-4">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-lg-10 col-xl-9">

      <div class="card border-0 shadow">
        <div class="card-header bg-dark text-light d-flex align-items-center">
           <h5 class="mb-0 font-weight-bold"><i class="fas fa-user mr-2"></i>USUARIOS</h5>
          <?= $this->Html->link('<i class="far fa-plus-square text-success"></i> Añadir',['controller' => 'Users', 'action'=>'add', ],['role'=>'button', 'class'=> 'btn btn-light ml-auto','escape' => false]); ?>
        </div>

        <div class="card-body">
            <!-- tabla de usuario -->
          <div class="table-responsive">
            <table class="table table-hover">
              <tr class="thead-dark text-center">
                
                <th scope="col"><?= $this->Paginator->sort('username','<p class="text-light d-inline">Nombre de usuario</p>', ['escape' => false]);?></th>
                <th scope="col"><?= $this->Paginator->sort('created','<p class="text-light d-inline">Fecha creación</p>', ['escape' => false]);?></th>
                 <th scope="col"><?= $this->Paginator->sort('modified','<p class="text-light d-inline">Fecha modificación</p>', ['escape' => false]);?></th>
                <th scope="col"></th>

              </tr>

              <?php foreach ($usuarios as $usuario): ?>
                <tr class=" text-center">
                   
                    <td class="align-middle font-weight-bold">
                      <!-- permite mostrar un numero determido de palabras con "..." concatenado si supera el maximo establecido-->
                    <?= $usuario->username; ?>


                    </td>
                    <td class="align-middle"><?= $usuario->created->i18nformat('dd/MM/yyyy'); ?></td>
                    <td class="align-middle"><?= $usuario->modified->i18nformat('dd/MM/yyyy'); ?></td>
                    <td class="align-middle">
          


                      

                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>',
                         ['action' => 'delete', $usuario->id],['role'=>'button', 'class'=> 'btn btn-outline-danger btn_eliminar','escape' => false]);?>

                   
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
