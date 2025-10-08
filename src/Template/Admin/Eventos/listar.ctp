<?php $this->assign('title', 'Eventos | Administración EDPAP'); ?>

<section class="my-4">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-lg-10 col-xl-9">
      <div class="card border-0 shadow">

        <div class="card-header bg-dark text-light d-flex align-items-center">
          <h5 class="mb-0 font-weight-bold"><i class="fas fa-calendar-day mr-2"></i>EVENTOS</h5>
          <?= $this->Html->link('<i class="far fa-plus-square text-success"></i> Añadir',['controller' => 'Eventos', 'action'=>'add', ],['role'=>'button', 'class'=> 'btn btn-sm btn-light ml-auto','escape' => false]); ?>
        </div>

        <div class="card-body">
        	<!-- tabla de eventos -->
          <div class="table-responsive">
          	<table class="table table-hover">
              <tr class="thead-dark text-center">
                <th scope="col"><?= $this->Paginator->sort('visible','<i class="fas fa-eye text-light">',['escape' => false]);?></i></th>
                <th scope="col"><?= $this->Paginator->sort('tituloE','<p class="text-light d-inline">Titulo</p>', ['escape' => false]);?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaE','<p class="text-light d-inline">Fecha</p>', ['escape' => false]);?></th>
                <th scope="col"></th>

              </tr>

              <?php foreach ($eventos as $evento): ?>
                <tr class="text-center">
                    <td class="align-middle">
                      <?php if($evento->visible == 0){

                          echo $this->Html->link('<i class="far fa-eye-slash text-danger"></i>',['controller' => 'Eventos', 'action'=>'visible',$evento->id],['escape' => false]);

                        }else{
                              echo $this->Html->link('<i class="far fa-eye text-success"></i>',['controller' => 'Eventos', 'action'=>'visible',$evento->id],['escape' => false]);

                        }

                    ?></td>
                    <td class="align-middle font-weight-bold">
                      <?php

                        $titulo_evento = $evento->tituloE;
                        $longitud = 5;
                        $palabras = explode(' ', $titulo_evento);
                        if (count($palabras) > $longitud)
                        {
                         $titulo_evento = implode(' ', array_slice($palabras, 0, $longitud)) ."...";

                         echo $this->Html->link($titulo_evento,['controller' => 'eventos', 'action'=>'verPrivado'],['class'=> 'text-dark font-weight-bold text-decoration-none','escape' => false]);
                       }else{
                          echo $this->Html->link($titulo_evento,['controller' => 'eventos', 'action'=>'verPrivado',$evento->slug],['class'=> 'text-dark font-weight-bold text-decoration-none','escape' => false]);
                       }
                        ?>
                    </td>
                    <td class="align-middle"><?= $evento->fechaE->i18nformat('dd/MM/yyyy'); ?></td>
                    <td class="align-middle">
                      <div class="btn-group mr-2">

                        <?= $this->Html->link('<i class="fas fa-edit"></i>',['controller' => 'eventos' ,'action'=>'edit',$evento->slug],['role'=>'button', 'class'=> 'btn btn-outline-dark','escape' => false]); ?>

                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>',
                         ['action' => 'delete', $evento->id],['role'=>'button', 'class'=> 'btn btn-outline-dark btn_eliminar','escape' => false]);?>

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
          <p class="d-flex align-items-center justify-content-center mb-0"><b>Total eventos &nbsp; </b> <span class="badge badge-pill badge-success">
               <?= $eventos->count();?>
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
