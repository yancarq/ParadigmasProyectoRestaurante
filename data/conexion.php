<?php
	class Conexion{
		private $user;
		private $pass;
		private $server;
		private $db;
		private $link;

		public function  Conexion(){

			$this->user="root";
			$this->pass="";
			$this->server="127.0.0.1";
			$this->db="dbproyectorestaurante";
		}

		public function crearConexion(){
			$this->link = new mysqli($this->server,$this->user,$this->pass,$this->db);
			if ($this->link->connect_error) {
    			die("error");
			} else{
				return $this->link;
			}
			
		}
		public function cerrarConexion(){
			mysqli_close($this->link);
		}

	}
?>
