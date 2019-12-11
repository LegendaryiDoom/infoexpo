<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container">
<br>
<h1>Empresa:</h1>
<?php 
echo validation_errors(); 
$empresa = $empresas[0];
?>
 <br>
 <div class="row">
    <div class="col s12 m6">
      <div class="card">
          <span class="card-title">Empresa</span>
        <div class="card-content teal">
        <p>Nombre de la empresa:</p>
          <p><?php echo $empresa['nombreE']?></p>
          <p>Correo de la empresa:</p>
          <p><?php echo $empresa['correoE']?></p>
          <p>Dirección de la empresa:</p>
          <p><?php echo $empresa['direccionE']?></p>
          <p>Telefono de la empresa:</p>
          <p><?php echo $empresa['telefonoE']?></p>
          <p>Categoria de la empresa:</p>
          <p><?php echo $empresa['categoria']?></p>
        </div>
        <div class="card-action">
        </div>
      </div>
    </div>
  </div>
      
 
        <div class="text-center">
                                <a href="<?php echo base_url('empresas/ver') ?>" type="submit"
                                 class="card-panel teal lighten-2">Ver más empresas</a>
                            </div>

    </div>
    <?php echo form_close();?>

</div>
