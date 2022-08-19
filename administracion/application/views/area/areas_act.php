<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR ÁREA</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">            	
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/area/Area_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>NOMBRE DE ÁREA</b></td>
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <!-- <td></td> -->
	                  <input style="width: 30px;" type="hidden" name="id_area" value="<?php echo $ver->id_area; ?>">
	                  <td>
                    <select name="nombre_area" class="form-control">
                      <option name="nombre_area" value="<?php echo $ver->nombre_area; ?>"><?php echo $ver->nombre_area; ?></option>
                      <option name="nombre_area" value="<?php echo $ver->nombre_area; ?>">-------------</option>
                      <option name="nombre_area" value="VENTAS">VENTAS</option>
                      <option name="nombre_area" value="CENTRAL DE BENEFICIOS">CENTRAL DE BENEFICIOS</option>
                      <option name="nombre_area" value="NEGOCIOS FI">NEGOCIOS FI</option>
                      <option name="nombre_area" value="GERENCIA">GERENCIA</option>
                      <option name="nombre_area" value="SISTEMAS">SISTEMAS</option>
                      <option name="nombre_area" value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
                      <option name="nombre_area" value="CALLCENTER">CALLCENTER</option>
                      <option name="nombre_area" value="TESORERIA">TESORERIA</option>
                      <option name="nombre_area" value="CONTRALORIA">CONTRALORIA</option>
                      <option name="nombre_area" value="CALIDAD">CALIDAD</option>
                      <option name="nombre_area" value="CULTURA DE SERVICIO">CULTURA DE SERVICIO</option>
                      <option name="nombre_area" value="CONTABILIDAD">CONTABILIDAD</option>
                      <option name="nombre_area" value="SEGURIDAD">SEGURIDAD</option>
                      <option name="nombre_area" value="PUBLICIDAD - MERCADEO">PUBLICIDAD - MERCADEO</option>
                      <option name="nombre_area" value="CONTROL DE GASTOS">CONTROL DE GASTOS</option>
                      <option name="nombre_area" value="ACCESORIOS">ACCESORIOS</option>
                      <option name="nombre_area" value="SITCAR">SITCAR</option>
                      <option name="nombre_area" value="ASARU">ASARU</option>
                      <option name="nombre_area" value="CHEVYPLAN">CHEVYPLAN</option>
                    </select>
                    </td>
	                </tr>
	                <tr>
	                  <td><input type="submit" name="actualizar" value="Actualizar" class="btn btn-warning"></td>
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