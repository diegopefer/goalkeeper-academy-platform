<!-- File: /src/Template/Porteros/view.ctp -->

   <section class="my-4">

     <div class="row d-flex justify-content-center">
       <div class="col-12 col-xl-10">
         <div class="card border-0 shadow">
          <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-row justify-content-center justify-content-sm-end align-items-center">
              <span class="badge badge-dark m-2 p-1"><p class="mb-0 text-warning"><i class="fas fa-edit"></i> <b>Última modificación: </b><?= $portero->created->i18nformat('dd/MM/yyyy HH:mm:ss');?></p></span>
               <?= $this->Html->link('<i class="fas fa-edit"></i> Editar',['controller' => 'Porteros', 'action'=>'edit',$portero->slug],['role'=>'button', 'class'=> 'btn btn-sm btn-warning m-2','escape' => false]); ?>
            </div>
          </div>
            <div class="row">
              <div class="col-12 col-md-5 col-lg-6 d-flex flex-column align-self-center align-self-md-end align-self-lg-center">

                <div class="text-center">

                  <button class="btn btn-success my-4" type="button" data-toggle="collapse" data-target="#collapsePorteros" aria-expanded="false" aria-controls="collapsePorteros">Selecciona un portero <i class="fas fa-caret-down mx-1"></i></button>
                  <div class="collapse" id="collapsePorteros">
                    <div class="card card-body border-success shadow p-1">
                        <div class="row">

                          <?php foreach ($porteros as $portero_p) : ?>
                            <div class="col-4">
                              <?= $this->Html->link($portero_p->apodo,['action' => 'verPrivado', $portero_p->slug],['class' => ' dropdown-item text-dark font-weight-bold']) ?>
                            </div>

                          <?php endforeach; ?>
                          </div>
                    </div>
                  </div>
                </div>
              
                  <!-- apodo + slogan portero -->
                 <h1 class="display-3 card-title text-dark text-center font-weight-bold px-2"><?= $portero->apodo; ?></h1>
                 <blockquote class="blockquote px-2 text-center">
                    <p class="mb-0 text-dark">"<?= $portero->slogan?>"</p>
                  </blockquote>
            
              </div>

              <div class="col-12 col-md-7 col-lg-6">
                <div class="row d-flex flex-column-reverse flex-md-column">
                  <div class="col-12 d-flex justify-content-center justify-content-md-end">
               
                    
                
                  </div>
                  <div class="col-12">
                    <?= $this->Html->image('../files/Porteros/fotoP/'. $portero->id . '/' . $portero->fotoP, ['class'=>'img-fluid w-100']);?>
                  </div>
                  
                    </div>
              </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
     <div class="col-12 col-xl-10">
       <div class="card border-0 shadow mt-1">
         <div class="col-12">
           <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                 <a class="nav-link text-dark active" id="biografia-tab" data-toggle="tab" href="#biografia" role="tab" aria-controls="biografia" aria-selected="true">Biografía</a>
               </li>
               <li class="nav-item" role="presentation">
                 <a class="nav-link text-dark" id="descripcion-tab" data-toggle="tab" href="#descripcion" role="tab" aria-controls="descripcion" aria-selected="false">Descripción</a>
               </li>

             </ul>
             <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="biografia" role="tabpanel" aria-labelledby="biografia-tab">
                 <div class="container">
                   <div class="row">
                     <div class="col-12 col-sm-4">
                 
                         <dl class="dl-horizontal my-2 p-2 text-center">
                           <dt>Nombre completo</dt>
                           <dd class="text-success"><?= $portero->nombre .' '. $portero->apellidos ;?></dd>

                           <dt>Fecha de nacimiento</dt>
                           <dd class="text-success"><?= $portero->fecha_nacimiento->i18nformat('dd/MM/yyyy');?></dd>
                         </dl>
                     
                     </div>
                     <div class="col-12 col-sm-4">
                
                         <dl class="dl-horizontal my-2 p-2 text-center">
                           <dt>Apodo</dt>
                           <dd class="text-success"><?= $portero->apodo;?></dd>

                           <dt>Pie dominante</dt>
                           <dd class="text-success"><?= $portero->pie_dominante;?></dd>
                         </dl>
                 
                     </div>
                     <div class="col-12 col-sm-4">
                
                         <dl class="dl-horizontal my-2 p-2 text-center">
                           <dt>Categoría</dt>
                           <dd class="text-success"><?= $portero->categoria;?></dd>

                           <dt>Equipo</dt>
                           <dd class="text-success"><?= $portero->equipo;?></dd>
                         </dl>

                    
                     </div>

                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
                 <div class="card-body mt-3">
                   <p class="text-justify"><?= nl2br($portero->descripcion) ?></p>
                 </div>

               </div>
             </div>
         </div>
       </div>
     </div>
    </div>

  </section>

