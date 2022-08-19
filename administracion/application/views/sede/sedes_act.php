<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR SEDE</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">            	
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/sede/Sedes_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>NOMBRE DE SEDE</b></td>
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <!-- <td></td> -->
	                  <input style="width: 30px;" type="hidden" name="id_sede" value="<?php echo $ver->id_sede; ?>">
	                  <td>
                      <select name="nombre_sede" class="form-control">
                        <option name="nombre_sede" value="<?php echo $ver->nombre_sede; ?>"><?php echo $ver->nombre_sede; ?></option>
                        <option name="nombre_sede" value="<?php echo $ver->nombre_sede; ?>">-------------</option>
                        <option name="nombre_sede" value="CALLE 34">CALLE 34</option>
                        <option name="nombre_sede" value="CALLE 56">CALLE 56</option>
                        <option name="nombre_sede" value="CALLE 80">CALLE 80</option>
                        <option name="nombre_sede" value="UNICENTRO">UNICENTRO</option>
                        <option name="nombre_sede" value="CORABASTOS">CORABASTOS</option>
                        <option name="nombre_sede" value="COLISIÓN LIVIANOS">COLISIÓN LIVIANOS</option>
                        <option name="nombre_sede" value="COLISIÓN PESADOS">COLISIÓN PESADOS</option>
                        <option name="nombre_sede" value="AMERICAS">AMERICAS</option>
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