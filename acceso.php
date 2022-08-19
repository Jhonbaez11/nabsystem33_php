<?php
session_start();
/*
Importante: La función session_start() debe ir primero que cualquier código
*/
require_once("conexion/conexion.php");
//***************************************************************************
//Preguntamos si el usuario existe en la base de datos
$sql="select usuario from usuarios
where
usuario='".$_POST["user"]."'";
//$res=mysql_db_query($bd,$sql,$con);
$res=mysql_query($sql,$link);
if (mysql_num_rows($res) == 0)
{
	echo "<script type='text/javascript'>
		alert('El usuario ".$_POST["user"]." no existe en la base de datos');
		window.location='index.php';
	</script>";
}else
{
//******************************************************************************
//Ahora preguntamos el el login y el password coinciden en la base de datos
$consulta="select * from  usuarios
where
usuario='".$_POST["user"]."'
and
Password='".$_POST["pass"]."' ";
$result=mysql_query($consulta,$link);
if (mysql_num_rows($result) == 0)
{
	echo "<script type='text/javascript'>
		alert('El usuario y el password ingresados no conciden');
		window.location='index.php';
	</script>";
}else
{
//******************************************************************************
//Ahora le damos acceso a nuestros contenidos restringidos
	$_SESSION["usuario"]=$_POST["user"];
	header("Location: perfil.php");
//******************************************************************************
}
//******************************************************************************
}
/*
create table usuarios 
(
 id_usuario int not null auto_increment primary key, 
 nombre varchar (100), 
 user varchar (50), 
 pass varchar (50)
)
*/
?>