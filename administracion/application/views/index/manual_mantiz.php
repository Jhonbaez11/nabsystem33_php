<?php $this->load->view('template/nav_mantiz'); ?> 
<section>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="row" align="center">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      	<h1 class="page-header fuente" align="center">MANTIZ – MANUAL DE USUARIO</h1>
      </div>
      <div class="col-md-2"></div>
  </div>  
  <div class="row placeholders">
    <div class="row" align="center">
      <div class="col-md-2"></div>
      <div class="col-md-8">      
		<!-- ***************************** CONTENIDO ******************************** -->
		<!-- ******************************* INTRO ********************************** -->
		<div class="m_inicio" id="inicio_info" style="display: block;">
	  		<br><br><br>
	  		<div class="row" align="center">
      			<div class="col-md-6">
      				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/inter.png">	
      			</div>
      			<div class="col-md-6">
      				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/MantizOnline.png">
      			</div>
      		</div>
	  	</div>
		<!-- ******************************* INTRO ********************************** -->
		<!-- **************************** ANFITRIONA ******************************** -->
		<div class="m_anfitriona" id="anfitriona_info" style="display: none;">
		<h3 align="center">ANFITRIONA - LÍNEA PRINCIPAL</h3>
	  	<br>
	  	<p class="texto_manual">
	  		<b>CREACIÓN DE LOGIN</b> <br>
	  		Para la creación de clientes en Mantiz se le conoce como el nombre de “login”, para esto en la pantalla principal de Mantiz vamos a la opción crear en la parte superior:<br>
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona1.png"><br>
	  		Luego de ingresar lo primero que se debe tener en cuenta es buscar el cliente, en caso de que exista se selecciona de lo contrario se le da en la opción “Crear Login”.
			Pantalla Crear: Donde debemos buscar el cliente, si existe se selecciona, sino existe damos click en “Crear Login”<br>
			<img width="50%" height="auto" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona2.png"><br>
			Pantalla de creación de Clientes o Login.<br>
			<img width="50%" height="auto" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona3.png"><br>
			<b><u>IMPORTANTE:</u></b> “Crear Login” solo crea al cliente sin solicitud, mientras que “Crear Login y Solicitud” crea al cliente y a dicho cliente le crea una solicitud.
			En esta pantalla solo ahí que diligenciar los campos. 
			Cuando se cree una empresa, el NIT va sin número de verificación.
			Buscar el cliente antes porque de lo contrario al darle crear login nos dirá que login ya existe y no dejara pasar de la creación.<br>
			<img width="50%" height="auto" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona4.png"><br>
			<b>BIENVENIDA DE CLIENTES</b> <br>
			En el proceso de bienvenida de clientes, tenemos la siguiente pantalla:<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona5.png"><br>
			En este proceso debemos tener en cuenta dos cosas, si es busca asesor o si es cliente de planta (Asignar a Vendedor). Dependiendo esto seleccionamos la opción adecuada: <br>
			<b>1</b>. Si es planta seleccionamos Asignar a vendedor, de lo contrario seleccionamos busca-Asesor. <br>
			<b>2</b>. Seleccionamos al asesor dando click en la casilla Asignar (En este caso está vacía la tabla debido a que el usuario que use no tiene permisos para ver los Asesores Logueados).<br>
			<b>3</b>. Seleccionamos no en caso que sea un busca asesor y este no reemplace a nadie en caso contrario se le da si y se selecciona a que asesor remplaza (Se le conoce internamente como asesores espejo) y solo lo pueden hacer las anfitrionas.
	  	</p>
	  	<h3 align="center">ANFITRIONA - LÍNEA PARALELA</h3>
	  	<br>
	  	<p class="texto_manual">
	  		<b>SIMIT, RUNT Y OFAC:</b> Este es un proceso paralelo que se crea luego de la grabación del negocio, en este proceso se debe marcar las opciones correspodientes del RUNT, SIMIT y OFAC del cliente asi como subir sus respectivos soportes. <br>
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona6.png"><br>
	  	</p>
	  	<h3 align="center">ANFITRIONA - PANEL DE BIENVENIDA CLIENTES</h3>
	  	<br>
	  	<p class="texto_manual">
	  		Nuevo producto que permite a la anfitriona crear mas eficientemente las solicitudes y asignarlas al vendedor, Para usarlo hay que pararse sobre el producto y en la bandeja dar “crear” o “abrir” si ya existe una solicitud creada.<br>
	  		Al igual que el proceso normal, si no se loguea el asesor no aparece en la lista, de igual manera el orden de los asesores en la pantalla es el orden de logueo.<br>
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona7.png"><br>
	  		En este proceso se crea el cliente, se asigna el vendedor asignado, ya sea por asignar a vendedor o busca asesor.
			Al dar siguiente se le asignara la solicitud al vendedor y permanecerá en la misma pantalla para seguir creando solicitudes y asignando clientes.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/anfitriona8.png"><br>
	  	</p>
	  	</div>
		<!-- **************************** ANFITRIONA ******************************** -->
		<!-- ******************************** ASESOR ******************************** -->
		<div class="m_asesor" id="asesor_info" style="display: none;">
  		<h3 align="center">ASESOR - LÍNEA PRINCIPAL</h3>
  		<br>
  		<p class="texto_manual">
  			<b>SELECCIÓN VEHÍCULO:</b> En este proceso básicamente es llenar los datos del cliente y del negocio como el vehículo, color, modelo, plan especial, tipo de pago, etc.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor1.png"><br>
  			Para incluir una retoma nos paramos sobre la pestaña “incluir Datos de Retoma” y marcamos usado en retoma “Si” y llenamos los datos.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor2.png"><br>
  			<b><u>NOTA:</u></b> Este proceso funciona igual en todas las pantallas. Tener en cuenta que estos datos son informativos, el ítem de usado en consignación se ingresa más adelante en los procesos Imprimir Hoja de negocio o Modificar el Negocio en la tabla “Como pagara el vehículo” solo si la retoma es con Internaciona de Vehículos de lo contrario si es de un tercero entra como contado mas adelante y finalmente re calcular precios.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor3.png"><br>
  			<br>
  			<b>IMPRIMIR HOJA DE NEGOCIO:</b> En este proceso manejamos ya los valores del negocio, acá podemos modificar todo el negocio y es el paso previo a la grabación del pedido. En este proceso debemos solo validar que el negocio este bien y completo (Datos y Valores) y dar siguiente. Se le marca “No” en solo cotización si se grabara el pedido de lo contrario “Si” si es una cotización lo cual no generara pedido en DMS.
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor4.png"><br>
  			Los Accesorios del mes se cargaran automáticamente al pedido (parametrización del departamento de accesorios), los accesorios de mes que estén en la lista de precios se les crea automáticamente una nota crédito por el valor total de la suma de estos y no se deben marcar como obsequio por otro lado los combos de mes no generan nota crédito, en caso de ser obsequios se deben marcar como obsequio y pasar por excepción. Para adicionar accesorios, debe hacerse click en “Haga click acá para seleccionar accesorios”, luego en la pantalla se seleccionan todos y se da click en  “cargar Datos seleccionados”, luego en Ok y se cierra la ventana pequeña de accesorios y re calculamos precios, Siempre así el accesorio cargado sea obsequio o valga 0 pesos. Siempre se debe re calcular Precios.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor5.png"><br>
  			<img width="50%" height="auto" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor6.png"><br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor7.png"><br>
  			Para eliminar se marca el accesorio, se selecciona y se da click en borrar (Solo se puede eliminar uno a uno).<br>
			<b><u>NOTA:</u></b> Este proceso funciona igual en todas las pantallas que tengan la opción de incluir accesorios.<br>
			<b>NEGOCIO CREADO:</b> Este es el proceso final, nos muestra el número de pedido en DMS y nos da la opción de ver la hoja de pedido generada para imprimirla, es de vital importancia avanzarla de lo contrario el negocio queda estancado ahí y no fluye hacia los demás procesos. En caso que la grabación genere algún error llegara también a este proceso pero sin número de pedido, en estos casos debe darse click en siguiente para que vuelva a imprimir hoja de negocio y revisar la falla y corregirla, luego ya se grabara el pedido.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor8.png"><br>
  		</p>
  		<h3 align="center">ASESOR - LÍNEA PARALELA</h3>
  		<br>
  		<p class="texto_manual">
  			<b>MODIFICAR EL NEGOCIO:</b> Este proceso no hace parte de la línea principal MantizVehiculos, es una línea paralela que se crea después del siguiente en Negocio Creado, con el fin de poder realizar modificaciones al negocio o novedades, es muy similar a imprimir hoja de negocio y sus funciones son exactamente iguales, salvo que en este proceso el “Siguiente” no es relevante por lo cual existen dos links, uno para actualizar pedido y el otro para generar la hoja de pedido. Salvo se valla pedir ajuste de precios a canal corporativo. Este proceso se ináctiva una vez facturado el negocio<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor9.png"><br>
  			<b>CONFIRMAR DESITIMIENTO:</b> La función de este proceso es confirmar la solicitud de desistimiento de parte de otra área diferente al asesor, se puede enviar desde el departamento de negocios y central de beneficios. En este proceso el asesor debe confirmar si desiste o no el negocio, poner una observación siguiente.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor10.png"><br>
  			<b>INCLUIR ACCESORIOS:</b> Este proceso se crea luego de la Facturación del negocio, cuando se desactiva el proceso de modificar, se puede acceder a este desde la pantalla principal o la consulta de negocios. Su función es la de incluir accesorios a un negocio ya facturado. Esta línea se inactiva luego que el vehiculo sea solicitado a ALDIA (Programación entrega de vehiculo).<br>
			<b><u>IMPORTANTE</b></u>: Siempre que se añadan accesorios se debe, recalcular precios (Esto activa la línea de facturación a accesorios), actualizar pedido y generar hoja de pedido. Igualmente si añaden notas ahí que dar click siempre en “Click acá para actualizar notas en DMS”. Este proceso se ináctiva una vez se halla solicitado el vehículo a ALDIA, despues de esto todo accesorio vendido debe gestionarse por Boutique.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor11.png"><br>
  		</p>
  		<h3 align="center">ASESOR - CONSULTA NEGOCIO</h3>
  		<br>
  		<p class="texto_manual">
  			Se ingresa desde el menú de la parte izquierda en la pantalla principal y se ingresa a la única solicitud que tenga.<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor12.png"><br>
  			Desde acá podemos buscar negocios creados, usando los filtros de búsqueda, y en la opción ver detalle podremos observar el estado del negocio, apoderarnos de la línea modificar negocio, adicionar notas y ver el estado de cada línea en Mantiz. (Excepto este facturado el negocio) y tomar el proceso de Incluir accesorios (Solo se activa cuando el negocio esta facturado).<br>
  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor13.png"><br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor14.png"><br>
  		</p>
  		<h3 align="center">ASESOR - NOTAS IMPORTANTES</h3>
  		<br>
  		<p class="texto_manual">
  			<b>1.</b> Si es una retoma con internacional de vehículos se deben ingresar los datos de la retoma y añadir el ítem de negocio “usado en consignación”, si la retoma la recibe un tercero, entrara como un contado.<br>
			<b>2.</b> Si el tipo de negocio es un Leasing, se marca en forma de pago Leasing y el cliente principal debe ser la financiera y el segundo tercero (Pestaña segundo tercero) iría el cliente.<br>
			<b>3.</b> Para eliminar un segundo tercero solo se le eliminan los campos<br>
			<b>4.</b> Para cambiar al segundo tercero como principal y al principal como segundo tercero, solo se intercambian los datos.<br>
			<b>5.</b> Si es un plan especial, no es una Flota en Mantiz por lo tanto si se incluye un plan debe ir como flota “No”
			<b>6.</b> Si no se permite cambiar el vehículo, color o modelo es porque el vehículo se encuentra asignado o pre-asignado, la solución es desasignar por MANTIZ no DMS desde los procesos de Manuel Ramírez. Esto se puede comprobar en la pestaña “Resultados de Pre-Asignación”.<br>	
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor15.png"><br>
			<b>7.</b> El botón de siguiente en Mantiz es el más importante, salvo en el proceso “Modificar Negocio”, en este proceso no se usa, no tiene ninguna función, a cambio están los links “Click acá para actualizar pedido” y “Generar hoja de pedido”. Excepto para solicitar ajuste de precio por Canal Corporativo o  pedir Excepciones.<br>
			<b>8.</b> Si el negocio se excede del margen de ganancias se le llama excepción, dicha excepción pasa por 4 fases (Excepción gerente de vitrina, coordinación de ventas, canal corporativo y gerencia de ventas) si no aprueban la excepción no se puede grabar el negocio.<br>
			<b>9.</b> La pre-asignación del vehículo pasa por central de beneficios antes de enviarla a Manuel Ramírez.<br>
			<b>10.</b> Si es una Flota se marca como Si y se pone el numero por ejemplo 1 de 3, luego en otra solicitud, negocio aparte se le marca 2 de 3 y finalmente en la última solicitud se le marcaría 3 de 3, las flotas llegan directamente a Carlos Varela para que el recalcule y apruebe el precio final de la flotilla.<br>
			<b>11.</b> Los accesorios de mes se agregaran automáticamente en el proceso de imprimir hoja de negocio (Los Accesorios que estén marcados en la política de accesorios), igualmente cargara automáticamente su nota crédito en caso de ser accesorio del mes obsequio de lista de precios (Kit carretera y tapetes).<br>
			<b>12. Modificaciones:</b><br>
				<b>a.</b> Usados en consignación (crear Ítem si lo recibe internacional de vehículos, en la tabla inferior damos click en nuevo y en la pantalla seleccionamos en “Forma de pago” Usado en Consignación, damos el valor, damos aceptar y recalculamos precios.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor16.png"><br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor17.png"><br>
				<b>b.</b> Si se desea tener el valor Full de los vehículos (lista de precios vigente) se debe dejar el descuento en 0 y recalcular precios. Esto lo realizamos seleccionando descuento y dar click en editar, luego creamos una nota credito por el valor que tenia el descuento originalmente (antes de ponerlo en 0).<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor18.png"><br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor19.png"><br>
				<b>c.</b> Para añadir una nota crédito le damos click en nuevo en la primera tabla y seleccionamos “Nota crédito” en código y ponemos el valor (No marcar como obsequio) y damos en aceptar, luego re calculamos precios (En la tabla inferior se crea un ítem llamado “otros pagos por recibir”.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor20.png"><br>
				Debe quedar de la siguiente manera en las tablas:<br>
				<b>Tabla superior: El siguiente negocio.</b><br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor21.png"><br>
				<b>Tabla inferior: Como pagara el automóvil.</b><br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor22.png"><br>
				<b>d.</b> Si se desea tener el negocio con un precio diferente al de la lista vigente se debe marcar “Solicitar ajuste de precio por canal corporativo” en Sí y dar siguiente, esta solicitud le llega a Carlos Varela para que el ajuste el precio. Es recomendable usar el campo de texto para marcar el valor deseado y la razón de dicho valor, este mensaje lo ve Carlos Varela en la pantalla del proceso por eso es tan importante, le sirve como guia.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asesor23.png"><br>
				<b>e. Reiniciar valores:</b><br>
					<b>i.</b> Para recuperar valores por defecto<br>
					<b>ii.</b> Tomar precio de lista vigente<br>
					<b>iii.</b> Cambiar vehículo o modelo año<br>
					<b>iv.</b> Cambiar plan especial<br>
					<b>v.</b> Cambiar cuota inicial<br>
					<b>vi.</b> Cambiar forma de pago<br>
					<b>vii.</b> Cambiar servicio: público o particular.<br>
				<b>f. Re calcular precios:</b><br>
					<b>i.</b> Adicionar Accesorios<br>
					<b>ii.</b> Adicionar Usado en Consignación<br>
					<b>iii.</b> Adicionar Notas Crédito<br>
					<b>iv.</b> Adicionar cualquier ítem que sume al valor del negocio.<br>
					<b>v.</b> Para tomar el valor full del vehículo (Previamente haber dejado descuento en 0)<br>
					<b>vi.</b> Recomiendo ingresar todos los ítems y luego re calcular precios para así hacer el re calculo una sola vez, aunque no hay impedimento si se re calcula cada vez que se agregue un ítem nuevo<br>
  		</p>
  	</div>
		<!-- ******************************** ASESOR ******************************** -->
		<!-- ****************************** ASISTENTE ******************************* -->
		<div class="m_asistente" id="asistente_info" style="display: none;">
	  		<h3 align="center">ASISTENTES - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>DIGITALIZACION DE DOCUMENTOS:</b> Este proceso consiste en digitalizar los documentos y subirlos, los documentos obligatorios son: Autorización de datos, cedula del cliente o los clientes y hoja de pedido. También se pueden corregir datos básicos del cliente, ingresar notas en DMS, actualizar hoja de pedido y Desistir Solicitudes. Al avanzar esta solicitud en la línea MantizVehiculos, se dirige a F&I Crédito si es un crédito o a central (Espera Cliente) si es un contado, igualmente crea una línea paralela cuyo nombre de línea es Digitalización de Documentos y proceso Digitalización de documentos pendientes.<br>
				También está la opción de avanzar sin Documentación la cual permitirá avanzar sin adjuntar ningún documento obligatorio, aunque pide un campo donde hay que poner quien autoriza.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asistente1.png"><br>
			</p>
			<h3 align="center">ASISTENTES - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				<b>DIGITALIZACIÓN DE DOCUMENTOS PENDIENTES:</b> Esta es una línea paralela la cual no avanza a ningún lado al dar click en siguiente, esta línea se usa para seguir subiendo documentación mientras la principal sigue su curso en el flujo normal de MantizVehiculos, visualmente es idéntica a la línea principal, su unica diferencia es el nombre del proceso y la línea.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asistente2.png"><br>
	  		</p>	
	  	</div>
		<!-- ****************************** ASISTENTE ******************************* -->
		<!-- ****************************** NEGOCIOS ******************************** -->
		<div class="m_negocios" id="negocios_info" style="display: none;">
	  		<h3 align="center">NEGOCIOS F&I - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>F&I CREDITO:</b> En este proceso se deben ingresar los datos de actividad laboral del cliente, consulta Data Crédito, también opciones para cambiar de crédito a contado (Esta opción solo funciona si el asesor cambio la forma de pago a contado, de lo contrario no avanza a central de beneficios) y una opción para aplazar el negocio, el cual lo deja en un proceso llamado Aplazamientos y queda en Otras Solicitudes sin usuario asignado.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios1.png"><br>
				<b>SELECCIONAR BANCO:</b> En este proceso lo que debemos hacer es seleccionar el banco con el cual se harán los tramites y podremos generar la factura proforma (Debe haber un vehículo Asignado). De acá en adelante veremos una nueva función que es devolver la solicitud al proceso o los procesos anteriores.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios2.png"><br>
				<b>ESPERA RESPUESTA BANCO Y ESPERA RESPUESTA BANCO ASISTENTE:</b> En este proceso se ingresan los datos de la aprobación y al tenerlos se debe dar click en ajustar valores para así recalcular los valores del crédito en el negocio, además debemos adjuntar la carta de aprobación del banco o en el caso de GM Financial de Colombia dar click en generar carta GMAC. Este proceso varía según sea la sede principal o no, ya que si es en la sede principal se pone el estado del banco en aprobado y se avanza a Espera Respuesta Banco Asistente donde ingresan el resto de datos de la aprobación, de lo contrario si es cualquier otra sede esos datos se ingresan desde este proceso ya que en las sedes no existe el proceso Espera Respuesta Banco Asistente.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios3.png"><br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios4.png"><br>
				<b>FIRMAS PREDAS:</b> En este proceso se debe poner la fecha y hora en la que el cliente firmo las prendas, si el negocio lleva aval (Activa línea paralela de recaudos al marcarle si), opción si aplica gotp (afecta si se activa o no el proceso de Alistamiento GoTp en la línea principal), campo de observaciones para el aval y la opción debajo para adjuntar documentos y enviar la solicitud de aval también por correo.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios5.png"><br>
				<b>DATOS FACTURA PROFORMA:</b> Este para verificar los datos de la aprobación.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios6.png"><br>
				<b>COTIZAR PVA:</b> Este proceso muestra las garantías extendidas de GM Financial de Colombia (GMAC), al dar siguiente en este proceso llegara la línea principal MantizVehiculos a Asaru.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios7.png"><br>
			</p>
			<h3 align="center">NEGOCIOS F&I - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				 La línea paralela se llamada Negocios F&I la cual se ejecuta después del siguiente en Selección Vehículo si esta como forma de pago crédito. Al avanzar la línea principal MantizVehiculos de Digitalización de documentos se fusionan en una sola la cual sería la Línea MantizVehiculos. Las pantallas son exactamente iguales, excepto que la línea Negocios F&I llega hasta Espera Respuesta Banco (Salas), Espera Respuesta Banco Asistente (Sede Principal). La ultima pantalla es la siguiente y solo queda darle siguiente para finalizar la línea paralela<br>
				 <img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/negocios8.png"><br>
				 En estos casos cuando llegue la línea principal MantizVehículos llegaría en el siguiente proceso, el cual es Firma Prendas.
	  		</p>	
	  	</div>
		<!-- ****************************** NEGOCIOS ******************************** -->
		<!-- ****************************** CENTRAL ********************************* -->
		<div class="m_central" id="central_info" style="display: none;">
	  		<h3 align="center">CENTRAL DE BENEFICIOS - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>ESPERA CLIENTE:</b> Este proceso hace parte de la línea principal MantizVehiculos, llega desde la digitalización de documentos cuando el negocio es de contado. En este proceso ahí que darle que el cliente se presento “Si” de lo contrario no avanza, poner fecha y hora. También tiene la función de enviar a Crédito en caso que cliente decida no pagar de contado, en dicho caso se marca, enviar a créditos “Si” y siguiente (Esta opción solo funciona si el asesor cambio la forma de pago a crédito, de lo contrario no avanza al departamento de creditos).<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central1.png"><br>
				<b>CONTROL ENVIÓ DE DOC. MATRICULA:</b> Este proceso hace parte de la línea principal MantizVehiculos, su misión es para que central de el visto bueno para que el negocio se vaya a Matricula, al marcarle “Si” en revisión completa enviar a alistamiento de matricula.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central2.png"><br>
				<b>PROGRAMACIÓN ENTREGA DE VEHÍCULO:</b> Este proceso hace parte de la línea MantizVehiculos, en el cual se solicita el vehículo a Aldia mediante el link “Solicitar traslado a bodega IDV”, se le marca una fecha y hora de entrega estimada y siguiente para que avance la solicitud a los procesos de Alistamiento, así mismo se crea una línea paralela en central para reprogramar la entrega, la pantalla es similar y se usa para cambiar la fecha y hora estimada de la entrega del vehículo.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central3.png"><br>
				<b>CRUCE DE CUENTAS:</b> Este proceso hace parte de la línea principal MantizVehiculos, en este proceso se revisa el cruce de cuentas del negocio, si todo está en orden se le marca “Si” y siguiente.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central4.png"><br>
				<b>CARPETA COMPLETA:</b> Este proceso hace parte de la línea principal MantizVehiculos es casi el final del negocio, solo es para verificar documentos, eventos en DMS y pagos, luego es solo siguiente.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central5.png"><br>
				<b>ENTREGA DE VEHÍCULO:</b> Este proceso hace parte de la línea principal MantizVehiculos, en este se hace una verificación final del vehículo para la entrega, llenar un formulario para la entrega.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central6.png"><br>
				<b>FIN VENTA DE VEHÍCULO:</b> Este proceso hace parte de la línea principal MantizVehiculos y es el final de toda la línea, solo hay que dar siguiente para dar por finalizada la venta. Es muy importante terminarla ya que esto saca la solicitud de las demás bandejas de los usuarios, finalizando la solicitud.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central7.png"><br>
			</p>
			<h3 align="center">CENTRAL DE BENEFICIOS - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				<b>LLAMADA DE BIENVENIDA:</b> La llamada de bienvenida es una línea paralela que se dispara luego de grabar el pedido, en esta se le hace la llamada y verificación de datos al cliente, en este proceso se pueden ver los datos del negocio, desistir la solicitud y ver documentos del cliente.<br>
				<b><u>IMPORTANTE:</u></b> Para avanzar la solicitud es necesario decirle que si en la información del negocio es correcta, así mismo para poder enviar la pre-asignación. Al avanzarla se creara otra línea paralela que se llama Llamada de control.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central8.png"><br>
				<b>LLAMADA DE CONTROL:</b> La llamada del control es un proceso paralelo que se activa luego de realizar la llamada de bienvenida, en este proceso podemos realizar modificaciones a los datos básicos del cliente, cambiar color del vehículo (Mientras no esté asignado), incluir accesorios (No olvidar recalcular y actualizar), generar hoja de pedido, factura proforma, adjuntar estado de cuenta y solicitar la pre-asignación.<br>
				En la llamada de control también encontramos un link llamado “Facturación acelerada”, este link se usa para avanzar a la facturación sin necesidad de depender de la línea principal MantizVehiculos y el nombre de la línea al llegar a facturación es “Facturación Acelerada”, si en la llamada de control no aparece este link es porque el negocio ya fue facturado (Como en la siguiente imagen donde se muestra el numero de factura en verde).<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central9.png"><br>
				<b>SOLICITUD TRASLADO BODEGA IDV:</b> Este proceso es el mismo de programación entrega de vehiculo de la línea MantizVehiculos, en el cual se solicita el vehículo a Aldia mediante el link “Solicitar traslado a bodega IDV”, se le marca una fecha y hora de entrega estimada, etse proceso se activa luego de la matrícula, para solicitar el vehículo con anterioridad, si lleva accesorios continua por la paralela hasta el alistamiento e instalacion de accesorios.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/central10.png"><br>
	  		</p>	
	  	</div>
		<!-- ****************************** CENTRAL ********************************* -->
		<!-- **************************** EXCEPCIONES ******************************* -->
		<div class="m_excepciones" id="excepciones_info" style="display: none;">
	  		<h3 align="center">EXCEPCIONES - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>EXCEPCIONES DE VENTAS:</b> Este proceso se activa cuando el margen de rentabilidad en un negocio fue excedido, para ello ahí que enviar la solicitud a una excepción de ventas para que aprueben, las solicitudes escalan en 4 rangos: Gerencia de vitrina, Coordinador de ventas, Asistente de Gerencia y Gerencia de ventas.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/excepciones1.png"><br>
				<b>VALORES NEGOCIO CANAL CORPORATIVO:</b> Este proceso llega a Canal Corporativo para ajustar los valores de un negocio, esto puede ser por un precio especial de Flota (<b><u>NO PLAN ESPECIAL</u></b>) o por un descuento especial de algún día especifico o por algún motivo se necesita facturar un vehículo en un valor que no está en la lista de precios vigente. En este proceso solo se pone el valor del vehículo, se reinicia valores, si en aprueba continuidad del negocio y siguiente.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/excepciones2.png"><br>
				<b>EXCEPCIONES COORDINACIÓN DE CANAL CORPORATIVO:</b> Este proceso hace parte de la línea principal MantizVehiculos, esta se dispara después del Siguiente de Asignación Vehículo y antes de Facturación cuando el negocio va con un plan especial. Es importante y de vital importancia adjuntar el soporte exigido para el plan aplicable por ejemplo el carnet de sanidad en el Plan Héroes.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/excepciones3.png"><br>
			</p>
			<h3 align="center">EXCEPCIONES - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				Las excepciones en las líneas paralelas tienen las mismas pantallas y sus funciones son exactamente iguales, su diferencia radica en que son enviadas tambien desde líneas paralelas como por ejemplo Modificar Negocio.<br>
	  		</p>	
	  	</div>
		<!-- **************************** EXCEPCIONES ******************************* -->
		<!-- **************************** FACTURACIÓN ******************************* -->
		<div class="m_facturacion" id="facturacion_info" style="display: none;">
	  		<h3 align="center">ASIGNACIÓN Y FACTURACIÓN - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  		<b>ASIGNACIÓN DE VEHICULO:</b> Este proceso hace parte de la línea principal MantizVehiculos llega después del siguiente al proceso de Asaru (Ver Flujo). Es para hacer la asignación definitiva. Al dar siguiente llegara la línea principal a Facturación y se dispara una línea paralela para facturar los accesorios en caso de tener el negocio.<br>
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion1.png"><br>
	  		<b>SOLICITUD DE COMPRA VEHICULO:</b> Este proceso llega después de la asignación o pre-asignación de vehículo en caso que el vehículo no esté disponible en IDV, es para solicitar a bodega, luego que ya estén disponibles los vehículos de la referencia seleccionada solo es dar click en siguiente para volver al proceso de Asignación o Pre-Asignación según sea el caso y continuar el proceso.<br>
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion2.png"><br>
	  		<b>ESPERA DEVOLUCION POR PROCESO DE ASIGNACION O FACTURACION:</b> Este proceso hace parte de la línea principal, no queda asignado a nadie se utiliza en el departamento de facturación para sacar de la bandeja y notificar a las áreas que el negocio no cumple con los requisitos para ser facturado. Para volver a solicitar la asignación definitiva o la facturación se debe corregir la causal por la cual fue devuelta, marcar la opción Info Corregida en SI y siguiente:
	  		<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion3.png"><br>
	  		Esta opción aparece en los procesos: Llamada de control, Digitalización de Doc Pendientes y Modificar negocio, cuando es devuelta por el área de facturación.<br>
	  		<b>FACTURACIÓN:</b> Este proceso hace parte de la línea MantizVehiculos, en este proceso se da la fecha de la facturación, el número de factura creada y se adjunta la factura generada por DMS. Al dar siguiente llega a Alistamiento Documentos Matricula o Alistamiento GO TP si el negocio va con GMAC.<br>
			<b><u>NOTA:</u></b> La Facturación se realiza por DMS.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion4.png"><br>
			<b>ALISTAMIENTO DOCUMENTOS MATRICULAS:</b> Este proceso hace parte de la línea MantizVehiculos y su función es revisar que todos los documentos requeridos para matricular el vehículo estén completos y cumplan con los requisitos, si todo está en orden se le dará siguiente y llegara a los procesos de SITCAR, igualmente disparara una línea paralela para solicitar el vehículo a ALDIA de manera anticipada por central de beneficios (Traslado Bodega IDV) y de ahí continuar con la instalación de accesorios y alistamiento del vehículo.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion5.png"><br>
			</p>
			<h3 align="center">ASIGNACIÓN Y FACTURACIÓN - LÍNEA PARALELA</h3>
			<br>			
			<p class="texto_manual">
				<b>PRE-ASIGNACIÓN:</b> Es una línea paralela la cual se dispara al dar click en solicitar pre-asignación desde central de beneficios, al avanzarla se creara una línea paralela para desasignar el vehículo.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion6.png"><br>
				<b>DES-ASIGNAR PRE-ASIGNADOS:</b> Esta es una línea paralela que se tiene como función desasignar los vehículos pre-asignados.
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/facturacion7.png"><br>
				<b>SOLICITUD DE COMPRA VEHICULO:</b> Este proceso llega después de la asignación o pre-asignación de vehículo en caso que el vehículo no esté disponible en IDV, es para solicitar a bodega, luego que ya estén disponibles los vehículos de la referencia seleccionada solo es dar click en siguiente para volver al proceso de Asignación o Pre-Asignación según sea el caso y continuar el proceso.<br>
	  		</p>	
	  	</div>
		<!-- **************************** FACTURACIÓN ******************************* -->
		<!-- ****************************** RECAUDOS ******************************** -->
		<div class="m_recaudos" id="recaudos_info" style="display: none;">
	  		<h3 align="center">RECAUDOS - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>ALISTAMIENTO GO TP:</b> Este proceso hace parte de la línea principal MantizVehiculos llega después del siguiente en Facturación si el negocio esta tramitado por GM Financial de Colombia (GMAC), en este proceso se hace el estudio por la financiera, si todo esta Ok se da GO TP o Desembolso y avanza a Alistamiento Documentos Matricula, si queda algo por corregir se deja en retenido y queda en la bandeja, si se rechaza se envía a los procesos de F&I Crédito para cambiar el banco.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/recaudos1.png"><br>
			</p>
			<h3 align="center">RECAUDOS - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				<b>REVISIÓN RECAUDOS:</b> Este proceso es una línea paralela que se dispara si se marca "Si" en aval desde firmas prenda o luego del siguiente en Espera Tramites (Ver Flujo), en este proceso se marca si se recibió la póliza y si se continua el proceso.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/recaudos2.png"><br>
				<b>ENVIAR SOLICITUD A DESEMBOLSO:</b> En este proceso se revisan los datos de la aprobación y se ingresa la fecha en la cual se envía la solicitud de desembolso.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/recaudos3.png"><br>
				<b>REGISTRO DESEMBOLSO:</b> En este proceso se ingresa la fecha del desembolso y el valor del desembolso y permite adjuntar el soporte del desembolso.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/recaudos4.png"><br>
				<b>FIN DESEMBOLSO:</b> En este proceso solo es dar siguiente para que el sistema de por finalizada la línea paralela de Desembolso.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/recaudos5.png"><br>
	  		</p>	
	  	</div>
		<!-- ****************************** RECAUDOS ******************************** -->
		<!-- ******************************** ASARU ********************************* -->
		<div class="m_asaru" id="asaru_info" style="display: none;">
	  		<h3 align="center">ASARÚ - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>ASARÚ SEGUROS:</b> Este proceso hace parte de la línea principal MantizVehiculos en ella se ingresaran los datos de la póliza (Si se tienen, no es obligatorio en este proceso) y contestar si cliente se presento y si firmo póliza con Asaru Seguros, al dar siguiente avanza la línea principal a la Asignación de Vehículo.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asaru1.png"><br>
			</p>
			<h3 align="center">ASARÚ - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
				<b>ASARÚ SEGUROS PARALELO:</b> Este proceso es de una línea paralela que se dispara después del siguiente en Negocio creado, con el fin de adelantar en lo mayor posible los datos de la póliza.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/asaru2.png"><br>
	  		</p>	
	  	</div>
		<!-- ******************************** ASARU ********************************* -->
		<!-- **************************** ALISTAMIENTO ****************************** -->
		<div class="m_alistamiento" id="alistamiento_info" style="display: none;">
	  		<h3 align="center">ALISTAMIENTO - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>ALISTAMIENTO EMBELLECIMIENTO:</b> Este proceso hace parte de la línea principal MantizVehiculos, acá es responder unas preguntas sobre el estado físico del vehículo y su limpieza, se selecciona al coordinador de lavado y la fecha en que se realizo el proceso y si la inspección fue correcta.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento1.png"><br>
				<b>ASEGURAMIENTO DE CALIDAD:</b> Este proceso hace parte de la línea principal MantizVehiculos, acá es responder unas preguntas sobre el estado físico del vehículo y su estado de calidad, se selecciona al coordinador de calidad y la fecha en que se realizo el proceso y si la inspección fue correcta.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento2.png"><br>
				<b>NIÑERA-CARAVANERO:</b> Este proceso hace parte de la línea principal MantizVehiculos, acá es responder unas preguntas sobre el estado físico, su interior, exterior, limpieza, el estado general, si presenta anomalías o no y enviar a parqueadero o vitrina.<br>
				<b><u>NOTA:</u></b> Si el vehículo se va entregar en la sede principal se envía a parqueadero, de lo contrario si se entrega en cualquier otra sala se envía a Vitrina.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento3.png"><br>
				<b>RECEPCIÓN PARQUEADERO:</b> Este proceso hace parte de la línea principal MantizVehiculos, el proceso es el mismo de recepción vitrina pero llega a la sede del parqueadero de la 29, donde llegan los vehículos de bodega que se van a entregar en la sala principal.<br>
				<b><u>NOTA:</u></b> Este proceso solo debe llegar si el negocio es de la sala principal marcando “enviar a parqueadero” en el proceso Niñera-Caravanero.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento4.png"><br>
				<b>RECEPCIÓN VITRINA:</b> Este proceso hace parte de la línea principal MantizVehiculos, es cuando se recibe el vehículo en las salas (Excepto la Principal) es verificar el vehículo y ver si es acto para la entrega.<br>
				<b><u>NOTA:</u></b> Este proceso no debe llegar a la sala principal, si llega a la sala principal es porque marcaron “enviar a vitrina” en el proceso Niñera-Caravanero.<br>
				<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento5.png"><br>
			</p>
			<h3 align="center">ALISTAMIENTO - LÍNEA PARALELA</h3>
			<br>
			<p class="texto_manual">
			<b>TRASLADO BODEGA IDV:</b> Este proceso es de una línea paralela que se dispara al dar siguiente al proceso de Asignación de Placas de la línea MantizVehiculos, en este proceso se revisa el estado del vehículo para la entrega más adelante. Si no tiene accesorios finaliza la línea, en caso contrario avanza a otro proceso llamado Asigna Técnico Accesorios.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento6.png"><br>
			<b>ASIGNAR TÉCNICO ACCESORIOS:</b> En este proceso se verifican los accesorios y se le asigna al técnico que instalara los accesorios.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento7.png"><br>
			<b>ALISTAMIENTO ACCESORIOS:</b> En este proceso se hace la verificación de los accesorios y si es correcta se de la siguiente.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento8.png"><br>
			<b>FIN LINEA DE ALISTAMIENTO DE ACCESORIOS:</b> En este proceso solo hay que dar siguiente para finalizar la línea.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/alistamiento9.png"><br>
	  		</p>
	  	</div>
		<!-- **************************** ALISTAMIENTO ****************************** -->
		<!-- ******************************** SITCAR ******************************** -->
		<div class="m_sitcar" id="sitcar_info" style="display: none;">
	  		<h3 align="center">TRÁMITES (SITCAR) - LÍNEA PRINCIPAL</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>PREPARACIÓN TRAMITES:</b> Este proceso hace parte de la línea principal MantizVehiculos llega después del siguiente en Alistamiento Documentos Matricula si es por cualquier banco excepto GMAC, en caso de ser GMAC llega después del siguiente en el proceso Alistamiento GO TP.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/sitcar1.png"><br>
	  			<b>ASIGNACIÓN PLACA:</b> Este proceso hace parte de la línea principal MantizVehiculos, en este proceso se ingresa la placa, la fecha de la asignación de la placa y la fecha en que se recibe el proceso.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/sitcar2.png"><br>
	  			<b>ESPERA TRAMITES:</b> Es el último proceso de la línea MantizVehiculos en SITCAR, en este proceso se adjunta la Matricula y la fecha en la que se Matricula. Al dar siguiente el proceso principal llegara a central de beneficios en el proceso Programación Entrega de Vehículo.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/sitcar3.png"><br>
			</p>			
	  	</div>
		<!-- ******************************** SITCAR ******************************** -->
		<!-- ***************************** ACCESORIOS ******************************* -->
		<div class="m_accesorios" id="accesorios_info" style="display: none;">
	  		<h3 align="center">DEPTO ACCESORIOS - LÍNEA PARALELA</h3>
	  		<br>
	  		<p class="texto_manual">
	  			<b>FACTURACIÓN DE ACCESORIOS:</b> Este proceso es una línea paralela para facturar los accesorios, se debe Adjuntar la factura, se activa luego del siguiente en el proceso Asignar Vehículo en caso que hayan accesorios en el negocio de lo contrario no se activa. También se activa desde la línea Adicionar Accesorios del asesor o la llamada de control al adicionar accesorios y recalcular precios, siempre y cuando el vehículo este facturado por Mantiz, de lo contrario solo se activaría hasta pasar por la Asignación.<br>
	  			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/accesorios1.png"><br>
			</p>			
	  	</div>
		<!-- ***************************** ACCESORIOS ******************************* -->
		<!-- ******************************* GENERAL ******************************** -->
		<div class="m_general" id="general_info" style="display: none;">
	  		<h3 align="center">NOTAS GENERALES</h3>
	  		<br>
	  		<p class="texto_manual">
	  		<b>1.</b> Las capturas de pantalla de los manuales, son de diferentes solicitudes y negocios.<br>
			<b>2.</b> Contraseña red: 1nt3rNa1*<br>
			<b>3.</b> Proxy: 192.168.11.3 ; 800 ; mantiz.internacionaldevehiculos.co<br>
			<b>4.</b> La línea MantizVehiculos es la línea principal por lo tanto es la que impide que el proceso avance, las demás se conocen como líneas paralelas (Ver Flujo).<br>
			<b>5.</b> En reportes, consulta de negocios, panel de bienvenida clientes y tablero de control solo deja crear una solicitud, en caso de que no exista crearla, de ahí en adelante se trabaja sobre la misma solicitud, ya que saldrá un error al intentar crear una nueva solicitud.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general1.png"><br>
			<b>6.</b> El nombre del proceso actual lo podremos ver en la parte superior izquierda en todos los procesos.<br>
			<b>7.</b> Si, sobre el nombre del proceso sale un candado eso significa que se abrió en modo Consulta lo cual no permitirá modificar nada en la solicitud.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general2.png"><br>
			<b>8.</b> Los colores de los vehículos en Mantiz los ingresa el señor Manuel Ramírez.<br>
			<b>9.</b> La lista de precios en Mantiz la sube el señor Carlos Varela.<br>
			<b>10.</b> Los accesorios en Mantiz los incluye el Departamento de Accesorios.<br>
			<b>11.</b> <b><u>IMPORTANTE:</u></b> Los clientes y las solicitudes son completamente independientes, un cliente puede tener muchas solicitudes, pero no pueden crearse más de un cliente con el mismo número de identificación, lo que se ve en la pantalla principal de Mantiz son solicitudes, no clientes.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general3.png"><br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general4.png"><br>
			<b>12.</b> Para salir de una solicitud es recomendable usar el botón de “No Continuar”.<br>
			<b>13.</b> En la Bienvenida de Clientes la información de porque medio se entero de nuestro productos va directa al Call Center, no saldrá la referencia completa del vehículo, es independiente de la lista que se llama desde DMS de Selección de Vehículo.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general5.png"><br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general6.png"><br>
			<b>14.</b> Cuando un usuario recoge una solicitud desde “Otras Solicitudes” le queda en su bandeja asignada a él.<br>
			<b>15.</b> Si Mantiz se queda cargando en un proceso mucho tiempo, puede ser un problema de sesión vencida, la solución es actualizar pagina (F5).<br>
			<b>16.</b> Los campos obligatorios en Mantiz son mostrados por un triangulo amarillo.<br>
			<b>17.</b> El proceso Aplazamientos de la línea MantizVehiculos queda en otras solicitudes en el área de F&I.<br>
			<b>18.</b> Para desistir solicitudes, solo hay que seleccionar “Si” en desistir y escoger un motivo de desistimiento (En caso de hacerlo un usuario que no sea asesor, se le enviara una solicitud de desistimiento para que el confirme).<br>
			<b>19.</b> Cada vez que se ingrese una nota en Mantiz, hay que dar click en “Actualizar notas en DMS”, para evitar que en otro proceso al dar siguiente se registre esa nota con un nombre de usuario distinto.<br>
			<b>20.</b> <b style="color: #c00000">Línea</b> y <b style="color: #00b0f0">Proceso:</b> La línea principal es MantizVehiculos, las demás son líneas paralelas las cuales se van disparando mediante el avance de la línea principal (Ver Flujo) con el fin de ir adelantando proceso (Negocios FI), mantener control sobre un proceso o modificaciones (Llamada de Control, Modificar Negocio), realizar procesos en simultaneo (Facturación Accesorios).<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general7.png"><br>
			<b>21.</b> El modo Vista nos permite ver datos muy importantes de la solicitud, como estado (Si esta activa o no), línea, proceso con el id de la base de datos como por ejemplo la siguiente imagen. Donde nos muestra que Fin Venta de Vehículos es proceso 149 y MantizVehiculos es la línea 3.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general8.png"><br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general9.png"><br>
			<b>22.</b> Los proceso de los asesores comerciales están diseñados para Tablets, por esto es normal que en PC no se visualicen bien y deben ir marcados en color gris los campos que tiene multiplex opciones para que lo tome el sistema como valido (Como si fuera la pulsación en una tablet).<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general10.png"><br>
			En este caso anterior el sistema tomaría todos los valores excepto Servicio Público porque no está seleccionado, debería estar de la siguiente manera.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general11.png"><br>
			Esto solo sucede con los campos de múltiples opciones que tienen scroll.<br>
			<b>23.</b> En PC en los procesos de los asesores en algunos casos debido a que las opciones son más grandes que el campo en cuestión y no pueden expandirse como en una Tablet queda oculto, se puede ver la opción seleccionada aumentando el Zoom del navegador.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general12.png"><br>
			Luego de hacer Zoom al navegador podremos observar los campos ocultos.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general13.png"><br>
			<b>24.</b> En PC en los proceso de los asesores es recomendable bajar por las opciones una a una con las flechas del teclado, ya que con el mouse se puede saltar alguna que otra opción.<br>
			<b>25.</b> Al agregar Ítems como notas crédito hay que tener muy en cuenta que en PC no se despliega la lista y ahí campos no editables por lo tanto, si se ubica el cursor sobre vehículo por ejemplo bloqueara la ventana y no permitirá editar, toca cerrarla y volverla abrir.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general14.png"><br>
			Luego bajamos con el scroll y seleccionamos la opción sin tocar los campos no editables (Vehículo, Accesorios, Impuesto).<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general15.png"><br>
			Y luego si lo seleccionamos para que quede marcado de color gris, de lo contrario al ingresar el valor quedaría en blanco en la tabla de ítems del negocio y generaría errores.<br>
			<img width="100%" src="<?php echo $directorio ?><?php base_url();?>assets/img/manual_mantiz/general16.png"><br>
			Esto solo sucede en PC en el proceso de los asesores, debido a que estos campos fueron diseñados exclusivamente para tablets y en ellas estos menús se despliegan para luego seleccionarlos cómodamente.<br>
			<b>26.</b> Los negocios solo pueden ser desistidos por el asesor comercial, desde cualquier otra área la opción de desistir envía una notificación al asesor para que este confirme si desiste el negocio o no. El proceso hace parte de la línea principal y se llama confirmar desistimiento.<br>
			<b>27.</b> La Factura Proforma funciona igual a la Hoja de Negocio, con cada cambio se debe actualizar manualmente desde el Link de generar factura proforma (Central de Beneficios y Negocios F&I).<br>
			<b>28. Tareas:</b><br>
				47	-	Generar Hoja de Negocio<br>
				67	-	Actualizar Pedido en DMS<br>
				431	-	Reiniciar Valores<br>
				435 -	Re Calcular Valores<br>
				408	-	Generar Factura Proforma<br>
				521	-	Activa línea paralela de Negocios F&I en espera respuesta banco<br>
				497	-	Correo de solicitud de aval (Recaudos)<br>
				<b>* Usados principalmente para avanzar solicitudes viejas en Espera Tramites.</b><br>
				82	-	SQL Consulta Docs Check List Central de Beneficios<br>
				120	-	SQL Valida Documentos Adjuntos<br>
			<b>29.</b> Si por alguna razón el asesor elimina el descuento en vez de ponerlo en 0 y esto genera un error en el sistema que no permite ingresar a la solicitud no al negocio por DMS, para esto hay dos soluciones, una es ingresar al administrador de Mantiz (Mantiz Windows), entrar al flujo y el proceso de modificar negocio habilitar opción de poder ingresar al proceso con falla. La otra es ejecutar la tarea de reiniciar valores desde el administrador Mantiz.<br>
			<b>30.</b> Las notas se pueden seguir ingresando así el usuario no tenga la solicitud en su bandeja o este desistido, para esto usamos el producto Grabación Notas Negocio.<br>
			<b>31.</b> En la sede principal calle 34 pasa de negocios directamente a la Asignación de vehículo, mientras en las sedes sigue pasando por el proceso de Asaru.<br>
			</p>			
	  	</div>
		<!-- ******************************* GENERAL ******************************** -->
		<!-- ***************************** CONTENIDO ******************************** -->
      </div>
      <div class="col-md-2"></div>
    </div>    
  </div>
</div>
</section>