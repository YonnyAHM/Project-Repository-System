<?php 
	require_once 'models/Usuario.php';
	require_once 'models/Facilitador.php';
	require_once 'models/Estudiante.php';


		class LoginController extends Usuario
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

			public function login()
			{
				$datos = $this->getSesion($_POST['inputCorreo'], $_POST['inputPass']);
				return $datos;
			}

		}

		
 ?>
 