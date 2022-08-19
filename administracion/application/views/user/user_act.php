<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR USUARIOS</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/user/user_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>CEDULA</b></td>
                    <td><b>NOMBRE COMPLETO</b></td>
                    <td><b>TELEFONO / EXTENCIÓN</b></td>
                    <td><b>EMAIL</b></td> 
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <td><input style="width: 100px;" type="text" name="id_codigo_cc" value="<?php echo $ver->id_codigo_cc; ?>"></td>
	                  <td><input style="text-align: center; width: 300px;" type="text" autofocus name="nombre_completo" value="<?php echo $ver->nombre_completo; ?>"></td>
                    <td><input style="text-align: center;" type="text" autofocus name="tel_extencion" value="<?php echo $ver->tel_extencion; ?>"></td>
                    <td><input style="text-align: center;" type="text" autofocus name="email" value="<?php echo $ver->email; ?>"></td>                    
	                </tr>
                  <tr>
                    <td><b>CARGO</b></td>
                    <td><b>ESTADO</b></td>
                    <td><b>TIPO DE USUARIO</b></td>
                    <td><b>PASSWORD</b></td>
                  </tr>
                  <tr>
                    <td><input style="width: 100px;" type="text" name="cargo" value="<?php echo $ver->cargo; ?>"></td>
                    <?php 
                      $estado=$ver->estado;
                      if ($estado==1) {
                        $estado="ACTIVO";
                      }
                      elseif ($estado==2) {
                        $estado="INACTIVO";
                     }
                    ?>
                    <td>
                      <select name="estado" class="form-control" >
                        <option name="estado" value="<?php echo $ver->estado; ?>"><?php echo $estado; ?></option>
                        <option name="estado" value="<?php echo $ver->estado; ?>">-------------</option>
                        <option name="estado" value="1">ACTIVO</option>
                        <option name="estado" value="2">INACTIVO</option>
                      </select>                     
                    </td>
                    <td>
                       <select name="tipo_usuario" class="form-control">
                        <option name="tipo_usuario" value="<?php echo $ver->tipo_usuario; ?>"><?php echo $ver->tipo_usuario; ?></option>
                        <option name="tipo_usuario" value="<?php echo $ver->tipo_usuario; ?>">-------------</option>
                        <option name="tipo_usuario" value="ADMINISTRADOR">ADMINISTRADOR</option>
                        <option name="tipo_usuario" value="ESTANDAR">ESTANDAR</option>
                      </select>
                    </td>
                    <td><input style="text-align: center;" type="password" autofocus name="password" value="<?php echo $ver->password; ?>"></td>                    
                  </tr>
	                <tr>
	                  <td colspan="5"><input type="submit" name="actualizar" value="Actualizar" class="btn btn-warning"></td>
	                </tr>
	                <?php } ?>
	              </table>
              	</form>    
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
      </div>
      <div class="modal-footer">
      	<input type="button" onclick="javascript:window.location.reload();" name="cerrar" class="btn btn-danger" value="Cerrar">
      </div> 
    </div>