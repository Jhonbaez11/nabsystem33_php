<?php echo $tipo = $this->session->userdata('tipo_usuario'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR' OR $tipo=='ESTANDAR') ) { ?>
        <li class="active"><a href="<?php echo $directorio;?><?php base_url();?>index.php/home/inicio"><span class="glyphicon glyphicon-home"></span>   Home</a></li>
        <?php } ?>
        <!--
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR' OR $tipo=='ESTANDAR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/Backup/Backup_Idv"><span class="glyphicon glyphicon-hdd"></span>   Backups</a></li>
        <?php } ?>
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR' OR $tipo=='ESTANDAR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/Mantenimiento/Mantenimiento_Idv"><span class="glyphicon glyphicon-wrench"></span>   Mantenimiento</a></li>
        <?php } ?>
        -->
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/inventario/inventario_idv"><span class="glyphicon glyphicon-th-list"></span>   Inventario</a></li>  
        <?php } ?>      
      </ul>
      <ul class="nav nav-sidebar">
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/user/User_Idv"><span class="glyphicon glyphicon-user"></span>   Usuarios</a></li>
        <?php } ?>    
        <!-- <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/dominio/dominio_idv"><span class="glyphicon glyphicon-tower"></span>   Dominio</a></li>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/Equipos/equipos_Idv"><span class="glyphicon glyphicon-blackboard"></span>   Equipos</a></li>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/Perifericos/perifericos_Idv"><span class="glyphicon glyphicon-print"></span>   Perifericos</a></li>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/net_red/Red_Idv"><span class="glyphicon glyphicon-globe"></span>   Red</a></li>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/software/software_idv"><span class="glyphicon glyphicon-cd"></span>   Sofware</a></li>   
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/coa/coa_idv"><span class="glyphicon glyphicon-barcode"></span>   Coa</a></li>      -->       
        <!--
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/sede/sedes_idv"><span class="glyphicon glyphicon-road"></span>   Sedes</a></li>
        <?php } ?> 
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/area/area_idv"><span class="glyphicon glyphicon-briefcase"></span>   Areas</a></li> 
        <?php } ?>   
        -->
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/categoria/categoria_idv"><span class="glyphicon glyphicon-king"></span>   Categorias</a></li> 
        <?php } ?>     
        <?php if (isset($tipo) AND ($tipo=='ADMINISTRADOR') ) { ?>
        <li><a href="<?php echo $directorio;?><?php base_url();?>index.php/subcategoria/subcategoria_idv"><span class="glyphicon glyphicon-queen"></span>   Subcategorias</a></li> 
        <?php } ?>         
      </ul>   
    </div>
  </div>    
</div>