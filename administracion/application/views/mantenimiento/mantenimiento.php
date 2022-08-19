<?php $this->load->view('template/nav'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">MANTENIMIENTO</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 "> 
        <br>
        <a href="<?php echo $directorio; ?><?php base_url();?>index.php/Mantenimiento/Excel_Mantenimiento" target="_blank">
        <!--<input type="button" name="exportar" value="EXPORTAR INVENTARIO" class="botonExcel btn btn-success">-->
         <span class="glyphicon glyphicon-export btn-lg" title="Exportar Inventario"> Exportar</span>
        </a> 
        <br><br><br>
        <form method="post" name="form" action="<?php echo $directorio; ?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Actualizar">
        <table id="my-table" class="table table-bordered table-condensed table-striped" style="text-align: center;">
          <thead>
            <tr>
              <!--<td><b>ID</b></td>-->
              <td><b>SERIAL EQUIPO</b></td>
              <td><b>USUARIO DOMINIO</b></td>
              <td><b>NOMBRE EQUIPO</b></td>
              <td><b>FECHA MANTENIMIENTO</b></td>
              <td><b>RESPONSABLE</b></td>
              <td colspan="2"><b><a href="" title="Nuevo" data-toggle="modal" data-target="#nuevo"><span class="glyphicon glyphicon-plus"></span></a></b></td>
            </tr>
          </thead>
          <tbody>            
            <?php
            foreach ($queryall as $ver2) {         
            ?> 
            <tr>
              <?php $ver2->id_mantenimiento; ?>
              <td><?php echo $ver2->serie_equipo; ?></td>
              <td><?php echo $ver2->usuario_dominio; ?></td>
              <td><?php echo $ver2->nombre_equipo; ?></td>
              <td><?php echo $ver2->fecha_mantenimiento; ?></td>
              <td><?php echo $ver2->tecnico_mantenimiento; ?></td>            
             <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Idv_Act?id_mantenimiento=<?php echo $ver2->id_mantenimiento; ?>"  data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></a></td>
              <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Eliminar?id_mantenimiento=<?php echo $ver2->id_mantenimiento; ?>" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php } ?> 
          </tbody>
        </table>
      </form>
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
        <h4 class="modal-title" align="center" style="color: #449d44;font-size: 30px;"><b>INGRESAR NUEVO REGISTRO</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
              <form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Insertar">
              <table class="table" style="text-align: center;">
                <tr>
                  <td><b>SERIAL EQUIPO</b></td>
                  <td><b>USUARIO DOMINIO</b></td>
                  <td><b>NOMBRE EQUIPO</b></td> 
                </tr>                
                <tr>                                    
                  <td><input  style="width: 100%;" type="text" name="serie_equipo"></td>
                  <td><input  style="width: 100%;" type="text" name="usuario_dominio"></td>
                  <td><input  style="width: 100%;" type="text" name="nombre_equipo"></td>
                </tr>  
                <tr>
                  <td><b>FECHA MANTENIMIENTO</b></td>
                  <td><b></b></td>
                  <td><b>RESPONSABLE</b></td> 
                </tr>  
                <tr>
                  <td><input  style="width: 100%;" type="date" name="fecha_mantenimiento"></td>
                  <td></td>
                  <td>
                    <select name="tecnico_mantenimiento" class="form-control">
                        <?php foreach ($queryallusuario as $usu) {  ?>
                        <option name="tecnico_mantenimiento" value="<?php echo $usu->nombre_completo; ?>"><?php echo $usu->nombre_completo; ?></option>
                        <?php } ?> 
                    </select>
                  </td>
                </tr>                  
                <tr>
                  <td colspan="5"><input type="submit" name="nuevo" value="INGRESAR" class="btn btn-success"></td>
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

<!-- Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog" id="mdialTamanio">
    <?php $this->load->view('Mantenimiento/Mantenimiento_act'); ?>
  </div>
</div>

</section>