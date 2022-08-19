<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR MANTENIMIENTO</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">            	
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>SERIE DE EQUIPO</b></td>
                    <td><b>USUARIO DOMINIO</b></td>
                    <td><b>NOMBRE EQUIPO</b></td>
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <!-- <td></td> -->
	                  <input style="width: 30px;" type="hidden" name="id_mantenimiento" value="<?php echo $ver->id_mantenimiento; ?>">
	                  <td><input class="form-control" type="text" name="serie_equipo" value="<?php echo $ver->serie_equipo; ?>"></td>
                    <td><input class="form-control" type="text" name="usuario_dominio" value="<?php echo $ver->usuario_dominio; ?>"></td>
                    <td><input class="form-control" type="text" name="nombre_equipo" value="<?php echo $ver->nombre_equipo; ?>"></td>
	                </tr>	                
	                <?php } ?>
                  <tr>
                    <td><b>FECHA MANTENIMIENTO</b></td>
                    <td><b></b></td>
                    <td><b>RESPONSABLE</b></td>
                  </tr>
                  <?php foreach ($query as $ver) {  ?>
                  <tr>
                    <!-- <td></td> -->
                    <input style="width: 30px;" type="hidden" name="id_mantenimiento" value="<?php echo $ver->id_mantenimiento; ?>">
                    <td><input class="form-control" type="date" name="fecha_mantenimiento" value="<?php echo $ver->fecha_mantenimiento; ?>"></td>
                    <td></td>
                    <td>
                      <select name="tecnico_mantenimiento" class="form-control">
                        <option name="tecnico_mantenimiento" value="<?php echo $ver->tecnico_mantenimiento; ?>"><?php echo $ver->tecnico_mantenimiento; ?></option>
                        <option name="tecnico_mantenimiento" value="<?php echo $ver->tecnico_mantenimiento; ?>">---------------------</option>
                        <?php foreach ($queryallusuario as $usu) {  ?>
                        <option name="tecnico_mantenimiento" value="<?php echo $usu->nombre_completo; ?>"><?php echo $usu->nombre_completo; ?></option>
                        <?php } ?> 
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"><input type="submit" name="actualizar" value="Actualizar" class="btn btn-warning"></td>
                  </tr>
                  <?php } ?>
	              </table>
              	</form>                  	
            </div>
            <div class="col-md-2"></div>
          </div>
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
      </div>
      <div class="modal-footer">
      	<input type="button" onclick="javascript:window.location.reload();" name="cerrar" class="btn btn-danger" value="Cerrar">
      </div> 
    </div>