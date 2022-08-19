<?php $this->load->view('template/nav'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">ÁREAS</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 ">        
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo</button>   -->              
        <br><br>
        <table class="table table-bordered table-condensed table-striped" style="text-align: center;">   
          <tr>
            <td><b>ID</b></td>
            <td><b>NOMBRE DE ÁREA</b></td>
            <td colspan="2"><a href="" title="Nuevo" data-toggle="modal" data-target="#nuevo"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>
          <?php
          foreach ($queryall as $ver2) {          
          ?>
          <tr>
            <td style="width: 10px;"><?php echo $ver2->id_area;  ?></td>
            <td><?php echo $ver2->nombre_area;  ?></td>              
            <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/area/Area_Idv_Act?id=<?php echo $ver2->id_area; ?>"  data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></a></td>            
            <!-- <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/sede/Sedes_Idv_Eli?id=<?php echo $ver2->id_sede; ?>" title="Eliminar" data-toggle="modal" data-target="#eliminar"><span class="glyphicon glyphicon-remove"></span></a></td> -->    
            <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/area/Area_Eliminar?id=<?php echo $ver2->id_area; ?>" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>    
          </tr>  
          <?php } ?>               
        </table>
      </div>
    </div>    
  </div>
</div>

<!-- Modal -->
<div id="nuevo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>INGRESAR NUEVA ÁREA</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
          <div class="row" align="center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/area/Area_Insertar">
              <table class="table" style="text-align: center;">
                <tr>
                  <td><b>NOMBRE</b></td>
                </tr>
                <tr>
                  <td>
                    <select name="nombre_area" class="form-control">
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
                  <td><input type="submit" name="nuevo" value="Ingresar" class="btn btn-success"></td>
                </tr>
              </table>
              </form>
            </div>
            <div class="col-md-2"></div>
          </div>
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
  <div class="modal-dialog">
    <?php $this->load->view('area/areas_act'); ?>
  </div>
</div>
</section>