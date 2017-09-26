<?php  
	
	require_once 'models/Usuario.php';

	class UsuarioController extends Usuario
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

		public function add( $usuario, $clave, $id)
		{
			$r = $this->crear( $usuario, $clave, $id);
			return $r; 
		}

		public function delete($id)
		{
			$r = $this->eliminar($id);
			return $r;
		}

		public function editar()
		{
			$this->set('id', $id);
			$this->ver();
			$this->crear();
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