<?php

	class Temporada{

		private $codigo_reg_temp;
		private $codigo_serie;
		private $numero;
		private $descripcion;

		public function __construct($codigo_reg_temp,
					$codigo_serie,
					$numero,
					$descripcion){
			$this->codigo_reg_temp = $codigo_reg_temp;
			$this->codigo_serie = $codigo_serie;
			$this->numero = $numero;
			$this->descripcion = $descripcion;
        }
        
        //Getters y Setters
		public function getCodigo_reg_temp(){
			return $this->codigo_reg_temp;
		}
		public function setCodigo_reg_temp($codigo_reg_temp){
			$this->codigo_reg_temp = $codigo_reg_temp;
		}
		public function getCodigo_serie(){
			return $this->codigo_serie;
		}
		public function setCodigo_serie($codigo_serie){
			$this->codigo_serie = $codigo_serie;
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
			return "Codigo_reg_temp: " . $this->codigo_reg_temp . 
				" Codigo_serie: " . $this->codigo_serie . 
				" Numero: " . $this->numero . 
				" Descripcion: " . $this->descripcion;
        }
        
        //Otros metodos

        public function insertarTemporada($conexion){

					$sql = "CALL P_INSERTAR_TEMPORADA($this->codigo_serie, $this->numero, '$this->descripcion')";

					$result = $conexion->ejecutarConsulta($sql);

					if($result)
						return 1;
					else
						return 0;

				}
				
				public function obtenerIdTemporada($conexion){

					$instruccion = "SELECT CODIGO_REGISTRO_TEMPORADA FROM TBL_TEMPORADAS WHERE CODIGO_SERIE = $this->codigo_serie AND DESCRIPCION_TEMPORADA = '$this->descripcion'";

					$result = array();

					$result = $conexion->obtenerFila($instruccion);

					return json_encode($result);

				}

	}
?>