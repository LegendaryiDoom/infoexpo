<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
<br>
<h1>Editar empresa</h1>
<?php 
echo validation_errors(); 
$empresa = $empresas[0];
?>

<?php echo form_open_multipart('empresas/update/'.$empresa['id_emp']); ?>

    <div class="modal-content">

    <div class="col">
            <label for="nombreE">Nombre de la empresa</label>
        </div>
        <div class="col">
            <input type="input" name="nombreE" value="<?php echo $empresa['nombreE'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="correoE">Correo de la empresa</label>
        </div>
        <div class="col">
            <input type="input" name="correoE" value="<?php echo $empresa['correoE'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="direccionE">Dirección de la empresa</label>
        </div>
        <div class="col">
            <input type="input" name="direccionE" value="<?php echo $empresa['direccionE'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="telefonoE">Telefono de la empresa</label>
        </div>
        <div class="col">
            <input type="input" name="telefonoE" value="<?php echo $empresa['telefonoE'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="categoria">Categoria de la empresa</label>
        </div>
        <div class="col">
            <input type="input" name="categoria" value="<?php echo $empresa['categoria'] ?>" class="form-control col-sm-5" />
        </div>
       
        <br>
        <div class="col">
            <input type="submit" id="btn-save" value="Guardar cambios" class="btn btn-primary col-sm-3" />
        </div>
       

    </div>
    <?php echo form_close();?>

</div>
<script src="<?php echo base_url(); ?>js/validacionesEmpresa.js"></script>