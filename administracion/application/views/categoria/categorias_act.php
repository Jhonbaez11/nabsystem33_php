<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>ACTUALIZAR CATEGORIA</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">            	
            	<form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/categoria/Categoria_Actualizar">
	              <table class="table" style="text-align: center;">
	                <tr>
	                  <td><b>NOMBRE DE CATEGORIA</b></td>
	                </tr>
	                <?php foreach ($query as $ver) {  ?>
	                <tr>
	                  <!-- <td></td> -->
	                  <input style="width: 30px;" type="hidden" name="id_categoria" value="<?php echo $ver->id_categoria; ?>">
	                  <td>
                    <select name="nom_categoria" class="form-control">
                      <option name="nom_categoria" value="<?php echo $ver->nom_categoria; ?>"><?php echo $ver->nom_categoria; ?></option>
                      <option name="nom_categoria" value="<?php echo $ver->nom_categoria; ?>">-------------</option>
                      <option name="nom_categoria" value="PLAYSTATION">PLAYSTATION</option>
                      <option name="nom_categoria" value="XBOX">XBOX</option>                     
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