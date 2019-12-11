<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
<br>
<h1>Editar usuario</h1>
<?php 
echo validation_errors(); 
$usuario = $usuarios[0];
?>

<?php echo form_open_multipart('usuarios/update/'.$usuario['id_usu']); ?>

    <div class="">

    <div class="col">
            <label for="nombreU">Nombre del usuario</label>
        </div>
        <div class="col">
            <input type="input" name="nombreU" value="<?php echo $usuario['nombreU'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="correoU">Correo del usuario </label>
        </div>
        <div class="col">
            <input type="input" name="correoU" value="<?php echo $usuario['correoU'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="contraU">Contraseña del usuario</label>
        </div>
        <div class="col">
            <input type="input" name="contraU" value="<?php echo $usuario['contraU'] ?>" class="form-control col-sm-5" />
        </div>
        <div class="col">
            <label for="telefonoU">Telefono del usuario</label>
        </div>
        <div class="col">
            <input type="input" name="telefonoU" value="<?php echo $usuario['telefonoU'] ?>" class="form-control col-sm-5" />
        </div>
       
       
        <br>
        <div class="col">
            <input id="btn-save" type="submit" value="Guardar cambios" class="btn btn-primary col-sm-3" />
        </div>
    </div>
    <?php echo form_close();?>

</div>
<script src="<?php echo base_url(); ?>js/validacionesUsuario.js"></script>