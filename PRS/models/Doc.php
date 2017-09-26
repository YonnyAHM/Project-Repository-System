<?php  

	
	class Doc extends Conexion
	{
		private $id_documentos;
		private $titulo;
		private $descripcion;
		private $tamanio;
		private $tipo;
		private $nombre_archivo;
		


		public function __construct()
		{
			parent::__construct();
		}

		public function listar()
		{
			$sql = "SELECT * FROM doc";
			$datos = $this->queryBack($sql);
			return $datos;
		}

		public function set($atributo, $contenido)
		{
			$this->atributo = $contenido;
		}

		public function get($atributo)
		{
			return $this->atributo;
		}

		public function crear($titulo, $descripcion, $tamanio, $tipo,$nombre_archivo)
		{
			$this->nombres = $titulo;
			$this->apellidos = $descripcion;
			$this->cedula = $tamanio;
			$this->direccion = $tipo;
			$this->correo = $nombre_archivo;
			
			

			$sql = "INSERT INTO doc(titulo, descripcion, tamanio, tipo, nombre_archivo) VALUES('$this->titulo', '$this->descripcion', '$this->tamanio', '$this->tipo', '$this->nombre_archivo')";
			$r = $this->query($sql);
			return $r;
		}

		public function eliminar($id)
		{	
			$this->id = $id;
			$sql = "DELETE FROM doc WHERE id_documentos = '$this->id'";
			$data = $this->query($sql);
			return $data;
		}

		public function ver($id_documentos)
		{
			$this->id_documentos = $id_documentos;

			$sql = "SELECT * FROM doc WHERE id_documentos = '$this->id'";
			$result = $this->queryBack($sql);

			$row = $this->getRows($result);

			$this->id = $row['id_documentos'];
			$this->nombres = $row['titulo'];
			$this->apellidos = $row['descripcion'];
			$this->cedula = $row['tamanio'];
			$this->direccion = $row['tipo'];
			$this->correo = $row['nombre_archivo'];
			

			return $row;
		}

		public function editar($titulo, $descripcion, $tamanio, $tipo, $nombre_archivo,  $id_documentos)
		{
			
			$this->titulo = $titulo;
			$this->descripcion = $descripcion;
			$this->tamanio = $tamanio;
			$this->tipo = $tipo;
			$this->nombre_archivo = $nombre_archivo;
			$this->id_documentos = $id_documentos;

			$sql = "UPDATE `doc` SET `titulo`='$this->titulo', `descripcion`='$this->descripcion', `tamanio`='$this->tamanio', `tipo`='$this->tipo', `nombre_archivo`='$this->nombre_archivo' WHERE id_documentos = '$this->id_documentos'";
			$data = $this->query($sql);
			return $data;
		}
	}






?>