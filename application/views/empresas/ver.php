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


        <div class="table-responsive">

        <table class="table table-bordered table-sm">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Empresa</th>
                    <th>Correo electronico</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
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

                    <td><?php echo $empresa['categoria']; ?></td>
                    <td>
                    <i class="ni ni-chart-bar-32"><a class ="editar"  href="<?php echo base_url('empresas/detalle/'.$empresa['id_emp'])?>">Detalle</a></i>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>

    </div>
</div>


</div>





