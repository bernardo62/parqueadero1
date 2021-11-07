

<?php

	//conectamos Con el servidor
	$conectar=@MySQLi_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=MySQLi_select_db($conectar, 'parqueadero');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$ID=$_POST['ID'];
    $Cedula=$_POST['Cedula'];
	$Nombres=$_POST['Nombres'];
	$Apellido=$_POST['Apellido'];
	$Tel_Fijo=$_POST['Tel_fijo'];
	$Celular=$_POST['Celular'];
	$Email=$_POST['Email'];
	$Activo=$_POST['Activo'];


	//hacemos la sentencia de sql para tabla usuario
	$sql="INSERT INTO usuario VALUES    ('$ID', 
                                        '$Cedula', 
                                        '$Nombres', 
                                        '$Apellido', 
                                        '$Tel_fijo', 
                                        '$Celular', 
                                        '$Email', 
                                        '$Activo')";
	
    //ejecutamos la sentencia de sql
	$ejecutar=MySQLi_query($conectar, $sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
