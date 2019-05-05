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
		
		//Otros metodos
        
        public function insertarPelicula($conexion){

			$sql = "CALL P_INSERTAR_PELI($this->codigo_pelicula, $this->codigo_unidad, $this->duracion_peli)";

			$result = $conexion->ejecutarConsulta($sql);

			if($result)
				return 1;
			else
				return 0;

        }

	}
?>