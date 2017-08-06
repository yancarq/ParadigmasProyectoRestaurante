<?php
	class Conexion{
		private $user;
		private $pass;
		private $server;
		private $db;
		private $link;
		function __construct(){
			$this->user="root@localhost";
			$this->pass="admin";
			$this->server="localhost";
			$this->db="dbproyectorestaurante";			
		}

		function crearConexion(){
			$this->link =mysqli_connect($this->server,$this->user,$this->pass,$this->db);			
			return $this->link;		
		}
		function cerrarConexion(){
			mysqli_close ($this->link);
		}
		
	}
?>
