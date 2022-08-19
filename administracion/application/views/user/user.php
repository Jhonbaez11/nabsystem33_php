<?php $this->load->view('template/nav'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header fuente" align="center">USUARIOS</h1>
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-12 ">        
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo</button>   -->              
        <br><br>
        <table class="table table-bordered table-condensed table-striped" style="text-align: center;">   
          <tr>
            <td><b>CEDULA</b></td>
            <td><b>NOMBRE COMPLETO</b></td>
            <td><b>TELEFONO / EXTENCIÓN</b></td>
            <td><b>EMAIL</b></td>
            <td><b>CARGO</b></td>
            <td><b>ESTADO</b></td>
            <td><b>TIPO DE USUARIO</b></td>
            <!--<td><b>PASSWORD</b></td>-->
            <td colspan="2"><a href="" title="Nuevo" data-toggle="modal" data-target="#nuevo"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>
          <?php
          foreach ($queryall as $ver2) {          
          ?>
          <tr>
            <td style="width: 10px;"><?php echo $ver2->id_codigo_cc;  ?></td>
            <td><?php echo $ver2->nombre_completo; ?></td> 
            <td><?php echo $ver2->tel_extencion; ?></td>
            <td><?php echo $ver2->email; ?></td>
            <td><?php echo $ver2->cargo; ?></td>  
            <?php 
              $estado=$ver2->estado;
              if ($estado==1) {
                $estado="ACTIVO";
              }
              elseif ($estado==2) {
                $estado="INACTIVO";
              }
            ?>          
            <td><?php echo $estado; ?></td>
            <td><?php echo $ver2->tipo_usuario; ?></td>
            <!--<td><input disabled type="password" name="password" value="<?php echo $ver2->password; ?>"></td>-->
            <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/User/User_Idv_Act?id=<?php echo $ver2->id_codigo_cc; ?>"  data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span></a></td>
            <td style="width: 10px;"><a href="<?php echo $directorio;?><?php base_url();?>index.php/User/User_Eliminar?id=<?php echo $ver2->id_codigo_cc; ?>" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a></td>    
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
        <h4 class="modal-title" align="center"><b>INGRESAR NUEVO USUARIO</b></h4>
      </div>
      <div class="modal-body">
        <!--FORMULARIO DE INGRESO DE REGISTROS-->
              <form name="form" method="post" action="<?php echo $directorio; ?><?php base_url();?>index.php/User/User_Insertar">
              <table class="table" style="text-align: center;">
                <tr>
                  <td><b>CEDULA</b></td>
                  <td><b>NOMBRE COMPLETO</b></td>
                  <td><b>TELEFONO / EXTENCIÓN</b></td>
                  <td><b>EMAIL</b></td>                
                </tr>                
                <tr>
                  <td><input type="text" name="id_codigo_cc"></td>
                  <td><input type="text" name="nombre_completo"></td>
                  <td><input type="text" name="tel_extencion"></td>
                  <td><input type="text" name="email"></td>
                  
                </tr>
                <tr>
                  <td><b>CARGO</b></td>
                  <td><b>ESTADO</b></td>
                  <td><b>TIPO DE USUARIO</b></td>
                  <td><b>PASSWORD</b></td>
                </tr>
                <tr>
                  <td><input type="text" name="cargo"></td>
                  <td>
                    <select name="estado" class="form-control">
                        <option name="estado" value="1">ACTIVO</option>
                        <option name="estado" value="2">INACTIVO</option>
                    </select>   
                  </td>
                  <td>
                    <select name="tipo_usuario" class="form-control">         
                    <option name="tipo_usuario" value="ESTANDAR">ESTANDAR</option>           
                    <option name="tipo_usuario" value="ADMINISTRADOR">ADMINISTRADOR</option>                    
                    </select>
                  </td>
                  <td><input type="text" name="password"></td>
                </tr>
                <tr>
                  <td colspan="5"><input type="submit" name="nuevo" value="Ingresar" class="btn btn-success"></td>
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
  <div class="modal-dialog modal-lg">
    <?php $this->load->view('user/user_act'); ?>
  </div>
</div>
</section>