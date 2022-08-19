<?php
$mes =	date('m');
switch ($mes){
case  1: $mes2='Enero';         break;
case  2: $mes2='Febrero';       break;
case  3: $mes2='Marzo';         break;
case  4: $mes2='Abril';         break;
case  5: $mes2='Mayo';          break;
case  6: $mes2='Junio';         break;
case  7: $mes2='Julio';         break;
case  8: $mes2='Agosto';        break;
case  9: $mes2='Septiembre';    break;
case 10: $mes2='Octubre';       break;
case 11: $mes2='Noviembre';     break; 
case 12: $mes2='Diciembre';     break;}
?>
<section style="font-size: 12px;" >
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php
			foreach ($queryalldetalles as $detalle) {          
		?>
		<table class="table table-condensed table-striped table-bordered" style="text-align: center;">
			<tr>
				<td colspan="2">
					<img height="70px" width="270px" src="<?php echo $directorio ?><?php base_url();?>assets/img/inter.png">
				</td>
				<td>
					<h4>DEPARTAMENTO DE SISTEMAS</h4>
					<h4>INFORMACIÓN TÉCNICA DE EQUIPOS</h4>
				</td>
			</tr>
			<tr>
				<td colspan="3"><b class="fuente2">FECHA:</b></td>
			</tr>
			<tr>
				<td colspan="3"><?php echo date('d'); ?> de <?php echo strtoupper($mes2); ?> del <?php echo date('Y'); ?></td>
			</tr>
			<tr>
				<td colspan="3"><b class="fuente2">DATOS GENERALES</b></td>
			</tr>
			<tr>
				<td><b>TIPO DE EQUIPO</b></td>
				<td><b>MARCA</b></td>
				<td><b>SERIE</b></td>				
			</tr>
			<tr>
				<td><label class="normal"><?php echo $detalle->tipo_equipo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->marca_equipo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->serie_equipo; ?></td>				
			</tr>
			<tr>
				<td colspan="3"><b class="fuente2">HARDWARE</b></td>
			</tr>
			<tr>
				<td><b>PROCESADOR</b></td>
				<td><b>MEMORIA RAM</b></td>
				<td><b>DISCO DURO</b></td>
			</tr>
			<tr>
				<td><label class="normal"><?php echo $detalle->procesador_equipo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->ram_equipo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->dd_equipo; ?></label></td>
			</tr>
			<tr>
				<td colspan="3"><b class="fuente2">DATOS DE USUARIO</b></td>
			</tr>
			<tr>
				<td><b>NOMBRE DE RESPONSABLE</b></td>
				<td><b>SEDE</b></td>
				<td><b>ÁREA</b></td>
			</tr>
			<tr>
				<td><label class="normal"><?php echo $detalle->responsable; ?></label></td>
				<td><label class="normal"><?php echo $detalle->nombre_sede; ?></label></td>
				<td><label class="normal"><?php echo $detalle->nombre_area; ?></label></td>
			</tr>
			<tr>
				<td><b>NOMBRE DE EQUIPO</b></td>
				<td><b>NOMBRE DE USUARIO</b></td>
				<td><b>CONTRASEÑA</b></td>				
			</tr>
			<tr>
				<td><label class="normal"><?php echo $detalle->nombre_equipo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->usuario_dominio; ?></label></td>
				<td><label class="normal_pass"><?php echo $detalle->contra_dominio; ?></label></td>
			</tr>			
			<tr>
				<td colspan="3"><b class="fuente2">MONITOR</b></td>
			</tr>
			<tr>
				<td><b>MONITOR MARCA</b></td>
				<td><b>MONITOR MODELO</b></td>
				<td><b>MONITOR SERIE</b></td>
			</tr>			
			<tr>
				<td><label class="normal"><?php echo $detalle->monitor_marca; ?></label></td>
				<td><label class="normal"><?php echo $detalle->monitor_modelo; ?></label></td>
				<td><label class="normal"><?php echo $detalle->monitor_serie; ?></td>
			</tr>			
            <tr>
				<td colspan="3"><b class="fuente2">MANTENIMIENTO</b></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td><b>FECHA DE MANTENIMIENTO</b></td>
				<td colspan="2"><b>TÉCNICO DE MANTENIMIENTO</b></td>
			</tr>
			<tr>	
				<!--<label class="normal"><?php echo $detalle->mantenimiento_fecha; ?>-->			
				<td><input type="date" name="mantenimiento_fecha"  class="form-control"></td>
				<td colspan="2">
					<select name="tecnico_mantenimiento" class="form-control">
						<option name="tecnico_mantenimiento" value="--------">---------------------------</option>
						<option name="tecnico_mantenimiento" value="--------">ANDREI FORERO</option>
						<option name="tecnico_mantenimiento" value="--------">JHON BAEZ QUINTERO</option>
						<option name="tecnico_mantenimiento" value="--------">LEONARDO DIAZ</option>
					</select>
			</tr>
			<tr>
				<td><b>ELIMINACIÓN DE ARCHIVOS TEMPORALES</b></td>
				<td><b>OPTIMIZACIÓN DEL SISTEMA</b></td>
				<td><b>LIMPIEZA DEL REGISTRO</b></td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" value="" >
				</td>
				<td>
					<input type="checkbox" value="" >
				</td>
				<td>
					<input type="checkbox" value="" >
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<br><br><br><br><br><br>
					----------------------------------------------------
					<br>
					<b>FIRMA DE TÉCNICO RESPONSABLE</b>
				</td>
			</tr>
		</table>		
	</div>
	<div class="col-md-2"></div>
</div>
</section>