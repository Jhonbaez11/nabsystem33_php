<?php $this->load->view('template/nav'); ?> 
<script language="JavaScript">
//Actualizar una vez al cargar página
window.onunload = sale
var valor;
if(document.cookie){
    galleta = unescape(document.cookie)
    galleta = galleta.split(';')
    for(m=0; m<galleta.length; m++){
        if(galleta[m].split('=')[0] == "recarga"){
        valor = galleta[m].split('=')[1]
        break;
        }
    }
if(valor == "sip"){
    document.cookie = "recarga=nop"; 
    window.onunload = function(){}
    document.location.reload()
    }
else{
window.onunload=sale
    }
}

function sale(){
document.cookie ="recarga=sip"
}
</script>
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">DETALLES DE INVENTARIO</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 ">    
        <div class="usuario">
          <form method="post" name="form" action="<?php echo $directorio; ?><?php base_url();?>index.php/Inventario/Inventario_Actualizar">
          <table class="table table-condensed table-striped">
            <tr>
              <td colspan="4"><hr class="division_detalles"></td>
            </tr>
            <?php
                foreach ($queryallinventario as $detalle) {          
              ?>
            <tr>
              <td><b>NOMBRE</b></td>
              <td><b>CATEGORIA</b></td>
              <td><b>SUBCATEGORIA</b></td>              
            </tr>              
              <input style="width: 30px;" type="hidden" name="id" value="<?php echo $detalle->id; ?>">
            <tr>
              <td><input style='text-transform:uppercase;' class="form-control" type="text" name="nombre" value="<?php echo $detalle->nombre; ?>"></td>
              <td>
                <select name="id_categoria" class="form-control">
                  <option name="id_categoria" value="<?php echo $detalle->id_categoria; ?>"><?php echo $detalle->nom_categoria; ?></option>
                  <option name="id_categoria" value="<?php echo $detalle->id_categoria; ?>">----------------------</option>
                  <?php foreach ($queryallcategoria as $categoria) {  ?>
                  <option name="id_categoria" value="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->nom_categoria; ?></option>
                  <?php } ?> 
                </select> 
              </td>
              <td>
                <select name="id_subcategoria" class="form-control">
                  <option name="id_subcategoria" value="<?php echo $detalle->id_subcategoria; ?>"><?php echo $detalle->nom_subcategoria; ?></option>
                  <option name="id_subcategoria" value="<?php echo $detalle->id_subcategoria; ?>">----------------------</option>
                  <?php foreach ($queryallsubcategoria as $subcategoria) {  ?>
                  <option name="id_subcategoria" value="<?php echo $subcategoria->id_subcategoria; ?>"><?php echo $subcategoria->nom_subcategoria; ?></option>
                  <?php } ?> 
                </select> 
              </td>
            </tr>    
            <tr>
              <td><b>DESCRIPCIÓN</b></td>
              <td><b>PRECIO</b></td>
              <td><b>UNIDADES DISPONIBLES</b></td>              
            </tr> 
            <tr>
              <td><input class="form-control" type="text" name="descripcion" value="<?php echo $detalle->descripcion; ?>"></td>
              <td><input class="form-control" type="text" name="precios" value="<?php echo $detalle->precios; ?>"></td>
              <td><input class="form-control" type="text" name="unid" value="<?php echo $detalle->unid; ?>"></td>
            </tr>                   
            <?php } ?>            
            <tr>
              <td colspan="4"><hr class="division_detalles"></td>
            </tr> 
            <tr>
              <td colspan="4" align="center">
                <input class="btn btn-warning btn-xl" type="submit" name="actualizar" value="ACTUALIZAR">
              </td>              
            </tr>  
            <tr>
              <td colspan="4"><hr class="division_detalles"></td>
            </tr>                      
          </table>
          </form>       
            <div class="row">
              <div class="col-md-12">
                <h2 class="fuente3">IMAGEN DEL PRODUCTO</h2>            
                <form enctype="multipart/form-data" name="form1" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/coa/do_upload">
                <?php foreach ($queryallinventario as $ver) {  
                 ?>             
                <input style="width: 30px;" type="hidden" name="id" value="<?php echo $ver->id; ?>">
                <?php if (($ver->coa)<>NULL) { ?>
                <img width="400px" height="200px" src="<?php echo $directorio ?><?php base_url();?>uploads/coa/<?php echo $ver->coa ?>">
                <?php } else { ?>
                <img width="400px" height="200px" src="<?php echo $directorio ?><?php base_url();?>uploads/coa/0-sinimagen.png">
                <?php } ?>
                <br><br>
                <?php
                }
                ?>
                  <table>
                    <tr>
                      <td><input required="" type="file" name="userfile" size="20" value="" /></td>
                    </tr>
                    <tr>
                      <td><hr></td>
                    </tr>
                    <tr>
                      <td align="center"><input type="submit" value="SUBIR IMAGEN" class="btn btn-primary" /></td>
                    </tr>
                    <tr>
                      <td colspan="4"><hr class="division_detalles"></td>
                    </tr> 
                  </table>
                </form> 
              </div>   
              
          
        </div>        
      </div> 
      </div>
    </div>         
  </div>
</div>



</section>