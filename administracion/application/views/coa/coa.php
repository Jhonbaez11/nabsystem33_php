<?php $this->load->view('template/nav'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">CERTIFICADO DE AUTENTICIDAD (COA)</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 ">        
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo</button>   -->              
        <br><br>
        <table class="table table-bordered table-condensed table-striped" style="text-align: center;">   
          <tr>
            <td><b>ID SOFTWARE</b></td>
            <td><b>NOMBRE</b></td>
            <td><b>LICENCIA</b></td>
            <td><b>VERSION</b></td>
            <td><b>ARQUITECTURA</b></td>
            <td><b>N_FACTURA</b></td>
            <td><b>FECHA_COMPRA</b></td>            
            <td><b>USUARIO ASIGNADO</b></td>
            <td><b>COA</b></td>             
          </tr>
          <?php
          foreach ($queryall as $ver2) {          
          ?>
          <tr>
            <td style="width: 10px;"><?php echo $ver2->id_software;  ?></td>
            <td><?php echo $ver2->nombre; ?></td> 
            <td><?php echo $ver2->licencia; ?></td>
            <td><?php echo $ver2->version; ?></td>
            <td><?php echo $ver2->arquitectura; ?></td>
            <td><?php echo $ver2->n_factura; ?></td>
            <td><?php echo $ver2->fecha_compra; ?></td> 
            <?php   
              $id_usu_dom = $ver2->id_usu_dom; 
              $id         = $id_usu_dom;
              $tabla      = 'usuario_dominio';
              $campo      = 'id_usu_dom';
              $data       = $this->App_Model->get_id($id, $tabla, $campo);         
              foreach ($data as $ver)
              {
            ?>
            <td><?php echo $ver->usuario; ?></td> 
            <td colspan="2"><a href="<?php echo $directorio;?><?php base_url();?>index.php/coa/coa_Idv_Act?id=<?php echo $ver2->id_software; ?>" title="Subir COA" data-toggle="modal" data-target="#coa"><span class="glyphicon glyphicon-plus"></span></a></td>
            <?php
              }
            ?>    
          </tr>  
          <?php } ?>               
        </table>
      </div>
    </div>    
  </div>
</div>

<!-- Modal -->
<div id="nuevo" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center"><b>CERTIFICADO DE AUTENTICIDAD (COA)</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
                     
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal -->
<div id="coa" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <?php $this->load->view('coa/coa_up'); ?>
  </div>
</section>