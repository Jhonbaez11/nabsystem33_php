<?php
session_start();
    require_once 'conexion/conexion.php';
    //require_once 'funciones/funciones.php';
if ($_SESSION["usuario"])
{
    
    //Inicializas las variables
$v1 = "";
$v2 = "";
$v3 = "";
$v4 = "";

//Suponiendo que ya tienes creada la conexión a la BD paso directamente al query MySQL y su ejecución
$query = "SELECT * FROM usuarios WHERE usuario='".$_SESSION['usuario']."'";

//echo $query;

$execute = mysql_query($query, $link);    /* $conexion es la variable de la conexión a la BD */

//Compruebo si hay algún resultado
if($row = mysql_fetch_array($execute)){
   //Guardo los datos de la BD en las variables de php
   $v1 = $row["id"];
   $v2 = $row["usuario"];
   $v3 = $row["password"];
   $v4 = $row["perfil"];    
   //echo '<br>';
   //echo $var4;
}
/*Aquí la búsqueda de datos en la BD es una sola vez, si quieres más de una fila te recomiendo agregar el ciclo Do-While*/
    
        $_SESSION["perfil"]=$v4;
        //echo $_SESSION["perfil"];
 if ($v4==1){
			header("location:admin-index.php"); 
				}else
			{
					header("location:empleado-index.php");
				}
//    
//}else
//{
//	echo "<script type='text/javascript'>
//		alert('Debe estar registrado para ver este contenido!');
//		window.location='index.php';
//	</script>";
//}
}else
{
	echo "<script type='text/javascript'>
		alert('Debe estar registrado para ver este contenido!');
		window.location='index.php';
	</script>";
}
?>