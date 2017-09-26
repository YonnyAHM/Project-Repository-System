<?php  

	class Enrutador
	{

		public function loadView($view)
		{
			switch ($view) 
			{
				
				case 'index':
					require_once 'views/'. $view .'.php';
					break;
				case 'logout':
					session_start();
					session_destroy();
					header('location:'.URL);
					 if(!isset($_SESSION['indexU']));
				        else{
		         	header("location:/index.php");
		         }
		         	break;
		        case 'loginE':
					require_once 'views/'. $view .'.php';
					break;
				case 'logout':
					session_start();
					session_destroy();
					header('location:'.URL);
					 if(!isset($_SESSION['indexE']));
				        else{
		         	header("location:/loginE.php");
		         }
		         	break;
		         case 'loginF':
					require_once 'views/'. $view .'.php';
					break;
				case 'logout':
					session_start();
					session_destroy();
					header('location:'.URL);
					 if(!isset($_SESSION['indexF']));
				        else{
		         	header("location:/loginF.php");
		         }
		         	break;
		         case 'loginA':
					require_once 'views/'. $view .'.php';
					break;
				case 'logout':
					session_start();
					session_destroy();
					header('location:'.URL);
					 if(!isset($_SESSION['indexU']));
				        else{
		         	header("location:/loginA.php");
		         }
		         	break;
				case 'registrar':
					require_once 'views/'. $view .'.php';
					break;
				case 'registrarp':
					require_once 'views/'. $view .'.php';
					break;
				case '1vista':
					require_once 'views/'. $view .'.php';
					break;
				case 'nuevo':
					require_once 'views/'. $view .'.php';
					break;
				case 'validar':
					require_once 'views/'. $view .'.php';
					break;
				case 'indexV':
					require_once 'views/'. $view .'.php';
					break;
				

				default:
				require_once 'views/1vista.php';
					break;
			}
		}

		public function validarGET($variable)
		{
			if(!isset($_GET[$variable]))
			{
				require_once 'views/1vista.php';
				return false;
			}
			else
			{
				$this->loadView($_GET[$variable]);
			}
		}
	}


?>