<?php 
	
	require_once 'models/Doc.php';

	class DocController extends Doc
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

		public function add($titulo, $descripcion, $tamanio, $tipo, $nombre_archivo)
		{
			$this->set('titulo', $titulo);
			$this->set('descripcion', $descripcion);
			$this->set('tamanio', $tamanio);
			$this->set('tipo', $tipo);
			$this->set('nombre_archivo', $nombre_archivo);
			

			$r = $this->crear($titulo, $descripcion, $tamanio, $tipo, $nombre_archivo);
			return $r; 
		}

		public function delete($id_documentos)
		{
			$r = $this->eliminar($id_documentos);
			return $r;
		}

		public function edit($titulo,$descripcion,$tamanio,$tipo,$nombre_archivo, $id_documentos)
		{
			$r = $this->editar($titulo,$descripcion,$tamanio,$tipo,$nombre_archivo, $id_documentos);
			return $r;
		}

		public function view($id_documentos)
		{
			$this->set('id_documentos', $id_documentos);
			$data = $this->ver($id_documentos);
			return $data;
		}
	}



?>