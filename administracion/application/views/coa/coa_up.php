<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:window.location.reload();" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>CERTIFICADO DE AUTENTICIDAD (COA)</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->            
            	<div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form enctype="multipart/form-data" name="form1" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/coa/do_upload">
                <?php foreach ($query as $ver) {  
                 ?>
                <input style="width: 30px;" type="hidden" name="id_software" value="<?php echo $ver->id_software; ?>">
                <?php
                }
                ?>
                  <table>
                    <tr>
                      <td><input type="file" name="userfile" size="20" value="" /></td>
                    </tr>
                    <tr>
                      <td><hr></td>
                    </tr>
                    <tr>
                      <td><input type="submit" value="SUBIR COA" class="btn btn-primary" /></td>
                    </tr>
                  </table>
                </form> 
              </div>
              <div class="col-md-3"></div>
          </div>  
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
      </div>
      <div class="modal-footer">
      	<input type="button" onclick="javascript:window.location.reload();" name="cerrar" class="btn btn-danger" value="Cerrar">
      </div> 
    </div>