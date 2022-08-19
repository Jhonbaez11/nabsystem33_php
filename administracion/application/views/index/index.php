<section>
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <br>
    <!--<img src="<?php echo $directorio ?><?php base_url();?>assets/img/inter.png">-->
    <form action="<?php echo $directorio; ?><?php base_url();?>index.php/usuarios/iniciar_sesion_post" method="post" >
    <table class="table">
    <tr style="text-align: center;">
    <td><label>USUARIO</label></td>
    <td><input class="inp2" type="text" name="nombre" /></td>
    </tr>
    <tr style="text-align: center;">
    <td><label>CONTRASEÑA</label></td>
    <td><input class="inp2" type="password" name="clave" /></td>
    </tr>
    <tr style="text-align: center;">
    <td colspan="2"><input name="enviar" type="submit" class="btn btn-primary" value="Ingresar"/></td>
    </tr>
    </table>            
    </form> 
    <br>
  </div>
</div>      
<div class="col-md-4"></div>
</div>
</section>