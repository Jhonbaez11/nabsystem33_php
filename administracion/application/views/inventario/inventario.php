<?php $this->load->view('template/nav'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">INVENTARIO</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 "> 
        <br>
        <a href="<?php echo $directorio; ?><?php base_url();?>index.php/Inventario/Excel_Inventario" target="_blank">
        <!--<input type="button" name="exportar" value="EXPORTAR INVENTARIO" class="botonExcel btn btn-success">-->
         <span class="glyphicon glyphicon-export btn-lg" title="Exportar Inventario"> Exportar</span>
        </a> 
        <br><br><br>
        <table id="my-table" class="table table-bordered table-condensed table-striped" style="text-align: center;">
          <thead>
            <tr>
              <td><b>ID</b></td>
              <td><b>NOMBRE PRODUCTO</b></td>
              <td><b>CATEGORIA</b></td>
              <td><b>SUBCATEGORIA</b></td>
              <td colspan="2"><b><a href="" title="Nuevo" data-toggle="modal" data-target="#nuevo"><span class="glyphicon glyphicon-plus"></span></a></b></td>
            </tr>
          </thead>
          <tbody>            
            <?php
            foreach ($queryallprin as $ver2) {         
            ?> 
            <tr>
              <td><?php echo $ver2->id; ?></td>
              <td><?php echo $ver2->nombre; ?></td>              
              <td><?php echo $ver2->nom_categoria; ?></td>
              <td><?php echo $ver2->nom_subcategoria; ?></td>
              <td><a href="<?php echo $directorio;?><?php base_url();?>index.php/Inventario/Inventario_Detalles?id=<?php echo $ver2->id; ?>"><input class="btn btn-primary btn-xs" type="button" name="detalles" value="Ver Detalles"></a></td>
              <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/Inventario/Inventario_Eliminar?id=<?php echo $ver2->id; ?>" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php } ?> 
          </tbody>
        </table>
      </div>
    </div>    
  </div>
</div>


<style>
    #mdialTamanio{
      width: 85% !important;
    }
  </style>
<!-- Modal -->
<div id="nuevo" class="modal fade" role="dialog">
  <!--<div class="modal-dialog modal-lg">-->
    <div class="modal-dialog" id="mdialTamanio">    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center" style="color: #449d44;font-size: 30px;"><b>INGRESAR NUEVO REGISTRO AL INVENTARIO</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
              <form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/Inventario/Inventario_Insertar">
              <table class="table" style="text-align: center;">
                <tr>
                  <td><b>NOMBRE DE PRODUCTO</b></td>
                  <td><b>CATEGORIA</b></td>
                  <td><b>SUBCATEGORIA</b></td> 
                </tr>                
                <tr>                                    
                  <td>
                    <input style='text-transform:uppercase;' class="form-control" style="width: 100%;" type="text" name="nombre">
                  </td>
                  <td>
                    <select name="id_categoria" class="form-control">
                        <?php foreach ($queryallcategoria as $categoria) {  ?>
                        <option name="id_categoria" value="<?php echo $categoria->id_categoria; ?>"><?php echo $categoria->nom_categoria; ?></option>
                        <?php } ?> 
                    </select>
                  </td>
                  <td>
                    <select name="id_subcategoria" class="form-control">
                        <?php foreach ($queryallsubcategoria as $subcategoria) {  ?>
                        <option name="id_subcategoria" value="<?php echo $subcategoria->id_subcategoria; ?>"><?php echo $subcategoria->nom_subcategoria; ?></option>
                        <?php } ?> 
                    </select>
                  </td>
                </tr> 
                <tr>
                  <td><b>DESCRIPCIÓN</b></td>
                  <td><b>PRECIO</b></td>
                  <td><b>UNIDADES</b></td> 
                </tr>
                <tr>
                  <td><input class="form-control" style="width: 100%;" type="text" name="descripcion"></td>
                  <td><input class="form-control" style="width: 100%;" type="text" name="precios"></td>
                  <td><input class="form-control" style="width: 100%;" type="text" name="unid"></td>
                </tr>
                <tr>
                  <td colspan="3"><input type="submit" name="nuevo" value="Ingresar" class="btn btn-success"></td>
                </tr>
              </table>              
              </form>
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div> -->
    </div>
  </div>
</div>
</section>