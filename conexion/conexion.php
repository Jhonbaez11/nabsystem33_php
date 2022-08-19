﻿<?php	
	//conexion.php
	$mysqli=new mysqli("localhost","root","root","sistemas"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	//connect_db.php
	/*
	$link =mysqli_connect("localhost","root","Baez.1013607454");
	if($link){
		mysqli_select_db("sistemas",$link);
	}
	*/
	
	//conex.php
	//$con=mysql_connect("nabsystem33.freevar.com","root","root");
    //$bd=mysql_select_db("tecnologia");
?>