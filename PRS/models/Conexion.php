<?php  

	class Conexion
	{
		private $link;
		private $host;
		private $user;
		private $pass;
		private $db;

		public function __construct()
		{
			$this->host = 'localhost';
			$this->user = 'root';
			$this->pass = '';
			$this->db = 'srp';

			$this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		}

		public function queryBack($sql)
		{
			$datos = mysqli_query($this->link, $sql)or die(mysqli_error($this->link));
			return $datos;
		}

		public function query($sql)
		{
			return mysqli_query($this->link, $sql)or die(mysqli_error($this->link));
		}

		public function getRows($result)
		{
			$data = mysqli_fetch_array($result)or die(mysqli_error($this->link));
			return $data;
		}

		public function numRows($result)
		{
			$r = mysqli_num_rows($result)or die(mysqli_error($this->link));
			return $r;
		}

		public function cerrar()
		{
			return mysqli_close($this->link);
		}

	}


?>