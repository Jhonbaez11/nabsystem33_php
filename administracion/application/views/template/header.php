<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $directorio;?><?php base_url();?>index.php/home/inicio">JHON BAEZ QUINTERO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">    
            <?php if($this->session->userdata('logueado')==TRUE){         ?>            
            <li>            
            <a href="<?php echo $directorio; ?><?php base_url();?>index.php/usuarios/cerrar_sesion">Cerrar Sesión</a></li>
            <?php } ?>
          </ul>          
        </div>
      </div>
    </nav>