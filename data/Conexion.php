<<<<<<< HEAD
<?php
	class Conexion{
		private $user;
		private $pass;
		private $server;
		private $db;
		private $link;

		public function  __construct(){

			$this->user="root";
			$this->pass="";
			$this->server="127.0.0.1";
			$this->db="dbproyectorestaurante";
		}

		public function crearConexion(){
			$this->link = new mysqli($this->server,$this->user,$this->pass,$this->db);
			if ($this->link->connect_error) {
    			die("ERROR AL CONECTAR CON LA BASE DATOS<br>");
			} else{
				echo ("CONECTO CON LA BASE DATOS<br>");
				return $this->link;
			}
			
		}
		public function cerrarConexion(){
			mysqli_close ($this->link);
		}

	}
?>
=======
<?php
	class Conexion{
		private $user;
		private $pass;
		private $server;
		private $db;
		private $link;

		public function  __construct(){

			$this->user="root";
			$this->pass="";
			$this->server="127.0.0.1";
			$this->db="dbproyectorestaurante";
		}

		public function crearConexion(){
			$this->link = new mysqli($this->server,$this->user,$this->pass,$this->db);
			if ($this->link->connect_error) {
    			die("ERROR AL CONECTAR CON LA BASE DATOS<br>");
			} else{
				echo ("CONECTO CON LA BASE DATOS<br>");
				return $this->link;
			}
			
		}
		public function cerrarConexion(){
			mysqli_close ($this->link);
		}

	}
?>
>>>>>>> 65d94f7dee9debd164090d86c6751a080e75d704
