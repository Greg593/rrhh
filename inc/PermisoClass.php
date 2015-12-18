<?php
	
	/** Archivo   .: PermisoClass.php
	 ** Autor     .: Morales Cedillos, Víctor Manuel						
	 ** Fecha     .: Diciembre 2015
	 ** Descripcion: Clase que contiene funciones necesarios para gestionar la tabla PERMISO de la Base de Datos
	 **/

	class Permiso{

		public $ID = 0;

		/**
		* Crea una nueva fila en la tabla permiso.
		* @param type $IDPermiso
		* @param type $DesPermiso
		* @return type
		*/
		
		function create($campo1,$campo2){
			$connect = new Tools();
			$conexion = $connect->connectDB();

			$sql = "INSERT INTO permiso (IDPermiso,DesPermiso) VALUES ('.$campo1.','".$campo2."');";
			$consulta = mysqli_query($conexion,$sql);
				if(!$consulta){
					echo "No se ha podido insertar en la base de datos<br><br>".mysqli_error($conexion);
				}
			$connect->disconnectDB($conexion);
			return $consulta;
		}
		

		/**
		* Modifica la tabla con los datos introducidos
		* @param type $IDPermiso
		* @param type $DesPermiso
		* @return type
		*/
		function update($campo1,$campo2){

			$connect = new Tools();
			$conexion = $connect->connectDB();

			$sql = "UPDATE permiso SET ". "DesPermiso = '$campo2' WHERE ID = $this->ID ;";		
			$consulta = mysqli_query($conexion,$sql);
				if(!$consulta){
					echo "No se ha podido modificar la base de datos<br><br>".mysqli_error($conexion);
				}
			$connect->disconnectDB($conexion);
			return $consulta;
		}


		/**
		* Borra el elemento a partir de un ID dado
		* @param type $ID
		* @return type
		*/ 
		function delete($ID){
			$connect = new Tools();
			$conexion = $connect->connectDB();

			$sql = "DELETE FROM permiso WHERE ID=$ID;";
			$consulta = mysqli_query($conexion,$sql);
				if(!$consulta){
					echo "No se ha podido borrar la permiso<br><br>".mysqli_error($conexion);
				}
			$connect->disconnectDB($conexion);
			return $consulta;
		}


		/**
		* Devuelve un array con la información de una fila a partir de un ID
		* @return type
		*/
		function getData(){
			//Creamos la consulta
			$sql = "SELECT * FROM permiso WHERE ID = $this->ID;";
			//obtenemos el array
			$tool = new Tools();
			$array = $tool->getArraySQL($sql);
			return $array;
		}


		/**
		* Devuelve Toda la información de la tabla permiso
		* @return type
		*/
		function getAllInfo(){
			//Creamos la consulta
			$sql = "SELECT * FROM permiso;";
			//obtenemos el array
			$tool = new Tools();
			$array = $tool->getArraySQL($sql);
			$arra2 = $tool->displayTable($array);
			//return $arra2;
		}
	}

?>