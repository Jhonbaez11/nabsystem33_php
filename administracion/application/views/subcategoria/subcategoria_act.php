<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR SUBCATEGORIA</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">            	
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/subcategoria/Subcategoria_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>NOMBRE DE SUBCATEGORIA</b></td>
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <!-- <td></td> -->
	                  <input style="width: 30px;" type="hidden" name="id_subcategoria" value="<?php echo $ver->id_subcategoria; ?>">
	                  <td>
                    <select name="nom_subcategoria" class="form-control">
                      <option name="nom_subcategoria" value="<?php echo $ver->nom_subcategoria; ?>"><?php echo $ver->nom_subcategoria; ?></option>
                      <option name="nom_subcategoria" value="<?php echo $ver->nom_subcategoria; ?>">-------------</option>
                      <option name="nom_subcategoria" value="CONSOLAS">CONSOLAS</option>
                      <option name="nom_subcategoria" value="VIDEOJUEGOS">VIDEOJUEGOS</option>                     
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