<?php

	class Pelicula{

		private $codigo_pelicula;
		private $codigo_unidad;
		private $duracion_peli;

		public function __construct($codigo_pelicula,
					$codigo_unidad,
					$duracion_peli){
			$this->codigo_pelicula = $codigo_pelicula;
			$this->codigo_unidad = $codigo_unidad;
			$this->duracion_peli = $duracion_peli;
		}
		public function getCodigo_pelicula(){
			return $this->codigo_pelicula;
		}
		public function setCodigo_pelicula($codigo_pelicula){
			$this->codigo_pelicula = $codigo_pelicula;
		}
		public function getCodigo_unidad(){
			return $this->codigo_unidad;
		}
		public function setCodigo_unidad($codigo_unidad){
			$this->codigo_unidad = $codigo_unidad;
		}
		public function getDuracion_peli(){
			return $this->duracion_peli;
		}
		public function setDuracion_peli($duracion_peli){
			$this->duracion_peli = $duracion_peli;
		}
		public function toString(){
			return "Codigo_pelicula: " . $this->codigo_pelicula . 
				" Codigo_unidad: " . $this->codigo_unidad . 
				" Duracion_peli: " . $this->duracion_peli;
        }
        
        public function insertarPelicula($conexion){

            $instruccion = "CALL P_INSERTAR_PELI($this->codigo_tipo_contenido, $this->codigo_estudio, $this->codigo_idioma, $this->codigo_calif_edad, '$this->nombre_contenido', '$this->urlVideo', '$this->urlMiniatura', '$this->descripcion', $this->fecha_subida)";

            $result = $conexion->ejecutarConsulta($instruccion);

            if($result)
                return 1;
            else
                return 0;
        }

	}
?>