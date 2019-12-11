<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">

    <br>
            <?php echo validation_errors(); ?>
    <br>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-10">
                <h1>Empresas</h1>
                <br>
            </div>
            
         

        </div>
        <a id="btn-modal" class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

        <div class="table-responsive">

        <table class="table table-bordered table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Empresa</th>
                    <th>Correo electronico</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Visitas</th>
                    <th>Categoria</th>
                    <th width="300">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa) { ?>
                <tr>
                    <td><?php echo $empresa['id_emp']; ?></td>
                    <td><?php echo $empresa['nombreE']; ?></td>
                    <td><?php echo $empresa['correoE']; ?></td>
                    <td><?php echo $empresa['direccionE']; ?></td>
                    <td><?php echo $empresa['telefonoE']; ?></td>
                    <td><?php echo $empresa['visitasE']; ?></td>
                    <td><?php echo $empresa['categoria']; ?></td>
                    <td>
                    <i class="ni ni-chart-bar-32"><a class ="editar" href="<?php echo base_url('empresas/edit/'.$empresa['id_emp'])?>">Editar</a></i>
                    <i class="ni ni-chart-bar-32"><a class =" text-danger"  href="<?php echo base_url('empresas/delete?id_emp='.$empresa['id_emp'])?>">Eliminar</a></i>


                  </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    </div>
</div>




<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4> Insertar </h4>
    <?php echo form_open_multipart('empresas/new',array('id'=>'form-empresas')); ?>

                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="nombreE" id="nombreE" class="form-control " placeholder="Nombre de la empresa" type="text">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="correoE" id="correoE" class="form-control " placeholder="Correo de la empresa" type="email">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="direccionE" id="direccionE" class="form-control " placeholder="Direccion de la empresa" type="text">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="telefonoE" id="telefonoE" class="form-control " placeholder="telefono de la empresa" type="text">
                                  </div>
                                </div>
                                
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="categoria" id="categoria" class="form-control " placeholder="Categoria de la empresa" type="text">
                                  </div>
                                </div>
                                <div class="text-center">
                                  <input id="btn-save" type="submit" class="btn btn-primary my-4" value="Guardar">
                                </div>
                              <?php echo form_close();?>
  </div>
  
</div>





