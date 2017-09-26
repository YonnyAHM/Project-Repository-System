<?php  
	
	require_once 'Conexion.php';
	
	class Code extends Conexion
	{
		
		private $code;	

		public function __construct()
		{
			parent::__construct();
		}

		public function listar()
		{
			$sql = "SELECT * FROM code";
			$datos = $this->queryBack($sql);
			return $datos;
		}

		public function getSesion($code)
		{	
			$this->code = $code;

			$sql = "SELECT * FROM code WHERE code = '$this->code'";
			$data = $this->queryBack($sql);

			if($this->numRows($data) > 0)
			{
				$fila = $this->getRows($data);

				//$this->loguear($fila['correo']);
				header('location:'. 'registrarp.php');
			}
			else
			{
				echo "USUARIO NO REGISTRADO";
				return false;
			}
		}

		public function set($atributo, $contenido)
		{
			$this->atributo = $contenido;
		}

		public function get($atributo)
		{
			return $this->atributo;
		}

		public function crear( $usuario, $clave)
		{
		
			$this->usuario = $usuario;
			$this->clave = $clave;

			$sql = "INSERT INTO login( usuario, clave) VALUES( '$this->usuario', '$this->clave')";
			$data = $this->query($sql);
			return $data;
		}

		public function eliminar($id)
		{	
			$this->id = $id;
			$sql = "DELETE FROM login WHERE id = '$this->id'";
			$data = $this->query($sql);
			return $data;
		}

		public function ver()
		{
			$sql = "SELECT * FROM login WHERE id = '{$this->id}'";
			$result = $this-->queryBack($sql);

			$row = $this->usuario->getRows($result);

			$this->id = $rows['id'];
		$this->usuario = $rows['usuario'];
			$this->clave = $rows['clave'];
			$this->email = $rows['usuario'];
		}

		public function editar()
		{
			$sql = "UPDATE `login` SET `usuario`='{$this->usuario}',`clave`='{$this->clave}' WHERE id = '{$this->id}'";
			$this->query($sql);
		}

		public function loguear($usuario)
		{
			return $_SESSION['login'] = array('usuario' => $usuario);
		}
	}



?>