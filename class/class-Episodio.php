<?php

	class Episodio{

		private $codigo_episodio;
		private $codigo_temporada;
		private $cod_unidad_duracion;
		private $duracion;
		private $nombre;
		private $numero;
		private $descripcion;

		public function __construct($codigo_episodio,
					$codigo_temporada,
					$cod_unidad_duracion,
					$duracion,
					$nombre,
					$numero,
					$descripcion){
			$this->codigo_episodio = $codigo_episodio;
			$this->codigo_temporada = $codigo_temporada;
			$this->cod_unidad_duracion = $cod_unidad_duracion;
			$this->duracion = $duracion;
			$this->nombre = $nombre;
			$this->numero = $numero;
			$this->descripcion = $descripcion;
        }
        
        //Setters y Getters
		public function getCodigo_episodio(){
			return $this->codigo_episodio;
		}
		public function setCodigo_episodio($codigo_episodio){
			$this->codigo_episodio = $codigo_episodio;
		}
		public function getCodigo_temporada(){
			return $this->codigo_temporada;
		}
		public function setCodigo_temporada($codigo_temporada){
			$this->codigo_temporada = $codigo_temporada;
		}
		public function getCod_unidad_duracion(){
			return $this->cod_unidad_duracion;
		}
		public function setCod_unidad_duracion($cod_unidad_duracion){
			$this->cod_unidad_duracion = $cod_unidad_duracion;
		}
		public function getDuracion(){
			return $this->duracion;
		}
		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getNumero(){
			return $this->numero;
		}
		public function setNumero($numero){
			$this->numero = $numero;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function toString(){
			return "Codigo_episodio: " . $this->codigo_episodio . 
				" Codigo_temporada: " . $this->codigo_temporada . 
				" Cod_unidad_duracion: " . $this->cod_unidad_duracion . 
				" Duracion: " . $this->duracion . 
				" Nombre: " . $this->nombre . 
				" Numero: " . $this->numero . 
				" Descripcion: " . $this->descripcion;
        }

        //Otros metodos

        public function insertarEpisodio($conexion){

					$instruccion = "CALL P_INSERTAR_EPISODIO ($this->codigo_temporada, 5, $this->duracion, '$this->nombre', $this->numero, '$this->descripcion')";

					$result = $conexion->ejecutarConsulta($instruccion);

					if($result)
						return 1;
					else
						return 0;

        }
        
	}
?>