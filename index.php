<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	
	<h1>Hola</h1>	
	<?php

	//Incluimos todas las clases y funciones del proyecto
	require_once ("inc/functions.php");
	 
	//insertamos el header
	require_once ("mod/header.php");
	 
	//Mostramos todos los datos de la tabla1
	$permiso = new Permiso();
	print_r($permiso->getAllInfo());
	  
	?>
	<h2>Adios</h2>
	
</body>
</html>


