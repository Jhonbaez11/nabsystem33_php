<section>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h2 class="fuente">HISTORICO DE MANTENIMIENTOS - SERIAL: <?php echo $n_serial; ?></h2>
		<table class="table table-condensed table-striped">
			<tr>
				<!--<td><b>SERIAL EQUIPO</b></td>-->
				<td><b>USUARIO DOMINIO</b></td>
				<td><b>NOMBRE EQUIPO</b></td>
				<td><b>FECHA MANTENIMIENTO</b></td>				
				<td><b>TECNICO RESPONSABLE</b></td>
			</tr>
		<?php
	        foreach ($queryidmantenimiento as $detalle) {          
	    ?>
	    	<tr>
            	<!--<td><input class="form-control" type="text" disabled="" name="serie_equipo" value="<?php echo $detalle->serie_equipo; ?>"></td>-->
            	<td><input class="form-control" type="text" disabled="" name="usuario_dominio" value="<?php echo $detalle->usuario_dominio; ?>"></td>
            	<td><input class="form-control" type="text" disabled="" name="nombre_equipo" value="<?php echo $detalle->nombre_equipo; ?>"></td>
            	<td><input class="form-control" type="date" disabled="" name="fecha_mantenimiento" value="<?php echo $detalle->fecha_mantenimiento; ?>"></td>            	
            	<td><input class="form-control" type="text" disabled="" name="tecnico_mantenimiento" value="<?php echo $detalle->tecnico_mantenimiento; ?>"></td>
            </tr>
            <?php } ?>
        </table>	    
	</div>
	<div class="col-md-1"></div>
</div>
