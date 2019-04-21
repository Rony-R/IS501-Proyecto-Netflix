<?php

	class Contenido{

		private $codigo_contenido;
		private $codigo_tipo_contenido;
		private $codigo_estudio;
		private $codigo_idioma;
		private $codigo_calif_edad;
		private $nombre_contenido;
		private $descripcion;
		private $fecha_subida;

		public function __construct($codigo_contenido,
                                    $codigo_tipo_contenido,
                                    $codigo_estudio,
                                    $codigo_idioma,
                                    $codigo_calif_edad,
                                    $nombre_contenido,
                                    $descripcion,
                                    $fecha_subida){
			$this->codigo_contenido = $codigo_contenido;
			$this->codigo_tipo_contenido = $codigo_tipo_contenido;
			$this->codigo_estudio = $codigo_estudio;
			$this->codigo_idioma = $codigo_idioma;
			$this->codigo_calif_edad = $codigo_calif_edad;
			$this->nombre_contenido = $nombre_contenido;
			$this->descripcion = $descripcion;
			$this->fecha_subida = $fecha_subida;
        }
        
        //Getters y Setters
		public function getCodigo_contenido(){
			return $this->codigo_contenido;
		}
		public function setCodigo_contenido($codigo_contenido){
			$this->codigo_contenido = $codigo_contenido;
		}
		public function getCodigo_tipo_contenido(){
			return $this->codigo_tipo_contenido;
		}
		public function setCodigo_tipo_contenido($codigo_tipo_contenido){
			$this->codigo_tipo_contenido = $codigo_tipo_contenido;
		}
		public function getCodigo_estudio(){
			return $this->codigo_estudio;
		}
		public function setCodigo_estudio($codigo_estudio){
			$this->codigo_estudio = $codigo_estudio;
		}
		public function getCodigo_idioma(){
			return $this->codigo_idioma;
		}
		public function setCodigo_idioma($codigo_idioma){
			$this->codigo_idioma = $codigo_idioma;
		}
		public function getCodigo_calif_edad(){
			return $this->codigo_calif_edad;
		}
		public function setCodigo_calif_edad($codigo_calif_edad){
			$this->codigo_calif_edad = $codigo_calif_edad;
		}
		public function getNombre_contenido(){
			return $this->nombre_contenido;
		}
		public function setNombre_contenido($nombre_contenido){
			$this->nombre_contenido = $nombre_contenido;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFecha_subida(){
			return $this->fecha_subida;
		}
		public function setFecha_subida($fecha_subida){
			$this->fecha_subida = $fecha_subida;
		}
		public function toString(){
			return "Codigo_contenido: " . $this->codigo_contenido . 
				" Codigo_tipo_contenido: " . $this->codigo_tipo_contenido . 
				" Codigo_estudio: " . $this->codigo_estudio . 
				" Codigo_idioma: " . $this->codigo_idioma . 
				" Codigo_calif_edad: " . $this->codigo_calif_edad . 
				" Nombre_contenido: " . $this->nombre_contenido . 
				" Descripcion: " . $this->descripcion . 
				" Fecha_subida: " . $this->fecha_subida;
        }
        
        //Otros metodos

	}
?>