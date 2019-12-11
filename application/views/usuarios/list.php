<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
    <br>
            <?php echo validation_errors(); ?>
    <br>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-10">
                <h1>Usuarios</h1>
                <br>
            </div>
            
            <div class="col-2">
                <!-- 
            -->
             
            </div>

        </div>

        <div class="table-responsive">
        <a id="btn-modal" class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

<div class="table-responsive">

        <table class="table table-bordered table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre del usuario</th>
                    <th>Correo electronico</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    
                    <th width="300">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?php echo $usuario['id_usu']; ?></td>
                    <td><?php echo $usuario['nombreU']; ?></td>
                    <td><?php echo $usuario['correoU']; ?></td>
                    <td><?php echo $usuario['contraU']; ?></td>
                    <td><?php echo $usuario['telefonoU']; ?></td>
                    <td>
                    <i class="ni ni-chart-bar-32"><a class ="editar" href="<?php echo base_url('usuarios/edit/'.$usuario['id_usu'])?>">Editar</a></i>
                    <i class="ni ni-chart-bar-32"><a class =" text-danger"  href="<?php echo base_url('usuarios/delete?id_usu='.$usuario['id_usu'])?>">Eliminar</a></i>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    </div>
</div>



<!-- Modal -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4> Insertar </h4>
            <?php echo form_open_multipart('usuarios/new',array('id'=>'form-usuarios')); ?>

                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="nombreU" id="nombreU" class="form-control " placeholder="Nombre del usuario" type="text">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="correoU" id="correoU" class="form-control " placeholder="Correo del usuario" type="email">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="contraU" id="contraU" class="form-control " placeholder="Contraseña del usuario" type="password">
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                  <div class="input-group input-group-alternative">
                                    <input name="telefonoU" id="telefonoU" class="form-control " placeholder="Telefono del usuario" type="text">
                                  </div>
                                </div>
                                <div class="text-center">
                                  <input id="btn-save" type="submit" class="btn btn-primary my-4" value="Guardar">
                                </div>
                              <?php echo form_close();?>
                            </div>
            </div>
           
        </div>
  
