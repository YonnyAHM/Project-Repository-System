<?php 
	
	require_once 'models/Estudiante.php';

	class EstudianteController extends Estudiante
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$r = $this->listar();
			return $r;
		}

		public function add($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $periodo_esc, $semestre, $pass)
		{
			$this->set('nombre', $nombre);
			$this->set('nombre_secun', $nombre_secun);
			$this->set('apellido', $apellido);
			$this->set('apellido_secun', $apellido_secun);
			$this->set('cedula', $cedula);
			$this->set('fecha_n', $fecha_n);
			$this->set('direccion', $direccion);
			$this->set('correo', $correo);
			$this->set('correo_secun', $correo_secun);
			$this->set('telefono', $telefono);
			$this->set('telefono_secun', $telefono_secun);
			$this->set('periodo_esc', $periodo_esc);
			$this->set('semestre', $semestre);
			$this->set('pass', $pass);
			

			$r = $this->crear($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $periodo_esc, $semestre, $pass);
			return $r; 
		}

		public function delete($id)
		{
			$r = $this->eliminar($id);
			return $r;
		}

		public function edit($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $periodo_esc, $semestre, $pass, $id)
		{
			$r = $this->editar($nombre, $nombre_secun, $apellido, $apellido_secun, $cedula, $fecha_n, $direccion, $correo, $correo_secun, $telefono, $telefono_secun, $periodo_esc, $semestre, $pass, $id);
			return $r;
		}

		public function view($id)
		{
			$this->set('id', $id);
			$data = $this->ver($id);
			return $data;
		}

		public function login()
		{
			$datos = $this->getSesion($_POST['inputCorreo'], $_POST['inputPass']);
			return $datos;
		}
	}



?>