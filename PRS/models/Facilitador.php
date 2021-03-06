<?php  

	
	class Facilitador extends Conexion
	{
		private $nombre;
		private $nombre_secun;
		private $apellido;
		private $apellido_secun;
		private $cedula;
		private $fecha_n;
		private $direccion;
		private $correo;
		private $correo_secun;
		private $telefono;
		private $telefono_secun;
		private $asignatura;
		private $pass;
		private $id;


		public function __construct()
		{
			parent::__construct();
		}

		public function listar()
		{
			$sql = "SELECT * FROM facilitador";
			$datos = $this->queryBack($sql);
			return $datos;
		}

		public function getSesion($correo, $pass)
		{	
			$this->correo = $correo;
			$this->pass = $pass;

			$sql = "SELECT * FROM facilitador WHERE correo = '$this->correo' AND pass = '$this->pass' ";
			$data = $this->queryBack($sql);

			if($this->numRows($data) > 0)
			{
				$fila = $this->getRows($data);

				$this->loguear($fila['nombre']);
				header('location:'. 'indexF.php');
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

		public function crear($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $asignatura, $pass)
		{
			$this->nombre = $nombre;
			$this->nombre_secun = $nombre_secun;
			$this->apellido = $apellido;
			$this->apellido_secun = $apellido_secun;
			$this->cedula = $cedula;
			$this->fecha_n = $fecha_n;
			$this->direccion = $direccion;
			$this->correo = $correo;
			$this->correo_secun = $correo_secun;
			$this->telefono = $telefono;
			$this->telefono_secun = $telefono_secun;
			$this->asignatura = $asignatura;
			$this->pass = $pass;
			
			

			$sql = "INSERT INTO facilitador(nombre, nombre_secun, apellido, apellido_secun, cedula, fecha_n, direccion, correo, correo_secun, telefono, telefono_secun, asignatura, pass) VALUES('$this->nombre', '$this->nombre_secun', '$this->apellido', '$this->apellido_secun', '$this->cedula', '$this->fecha_n', '$this->direccion', '$this->correo', '$this->correo_secun', '$this->telefono', '$this->telefono_secun', '$this->asignatura', '$this->pass')";
			$r = $this->query($sql); 
			return $r;
		}

		public function eliminar($id)
		{	
			$this->id = $id;
			$sql = "DELETE FROM facilitador WHERE id = '$this->id'";
			$data = $this->query($sql);
			return $data;
		}

		public function ver($id)
		{
			$this->id = $id;

			$sql = "SELECT * FROM facilitador WHERE id = '$this->id'";
			$result = $this->queryBack($sql);

			$row = $this->getRows($result);

			$this->id = $row['id'];
			$this->nombre = $row['nombre'];
			$this->nombre_secun = $row['nombre_secun'];
			$this->apellido = $row['apellido'];
			$this->apellido_secun = $row['apellido_secun'];
			$this->cedula = $row['cedula'];
			$this->fecha_n = $row ['fecha_n'];
			$this->direccion = $row['direccion'];
			$this->correo = $row['correo'];
			$this->correo_secun = $row['correo_secun'];
			$this->telefono = $row['telefono'];
			$this->telefono_secun = $row['telefono_secun'];
			$this->asignatura = $row['asignatura'];
			$this->pass = $row['pass'];
			

			return $row;
		}

		public function editar($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $asignatura, $pass, $id)
		{
			$this->nombre = $nombre;
			$this->nombre_secun = $nombre_secun;
			$this->apellido = $apellido;
			$this->apellido_secun = $apellido_secun;
			$this->cedula = $cedula;
			$this->fecha_n = $fecha_n;
			$this->direccion = $direccion;
			$this->correo = $correo;
			$this->correo_secun = $correo_secun;
			$this->telefono = $telefono;
			$this->telefono_secun = $telefono_secun;
			$this->asignatura = $asignatura;
			$this->pass = $pass;
			$this->id = $id;

			$sql = "UPDATE `facilitador` SET `nombre`='$this->nombre', `nombre_secun`='$this->nombre_secun', `apellido`='$this->apellido', `apellido_secun`='$this->apellido_secun', `cedula`='$this->cedula', `fecha_n`='$this->fecha_n', `direccion`='$this->direccion', `correo`='$this->correo', `correo_secun`='$this->correo_secun', `telefono`='$this->telefono', `telefono_secun`='$this->telefono_secun', `asignatura`='$this->asignatura', `pass`='$this->pass' WHERE id = '$this->id'";
			$data = $this->query($sql);
			return $data;
		}
		public function loguear($nombre)
		{
			return $_SESSION['login'] = array('nombre' => $nombre);
		}
	}

	




?>