﻿<?php 
		class Conexion{
			var $host;
			var $usuario;
			var $contrasena;
			var $baseDatos;
		
			function Conexion(){
				$this->host="localhost"; // Nos indica el nombre del servidor local.
				$this->usuario="root"; //Nombre de usuario del servidor local
				$this->contrasena=""; //contraseña de usuario del servidor local
				$this->baseDatos="test"; //Nombre de la base de datos.
			}
			
			function conectarse(){
				$enlace = mysqli_connect($this->host, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
				}else{
					die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
				}
				return($enlace);
				mysqli_close($enlace); 
				     }
		}

?>
