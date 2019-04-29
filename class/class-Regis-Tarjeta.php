<?php

	class Regis_Tarjeta{

		private $codigo_regis_tarjeta;
		private $codigo_usuario;
		private $codigo_tipo_tarjeta;
		private $nombre_usuario;
		private $apellido_usuario;
		private $numero_de_tarjeta;
		private $codigo_de_seguridad;
		private $fecha_vencimiento;

		public function __construct($codigo_regis_tarjeta,
                                    $codigo_usuario,
                                    $codigo_tipo_tarjeta,
                                    $nombre_usuario,
                                    $apellido_usuario,
                                    $numero_de_tarjeta,
                                    $codigo_de_seguridad,
                                    $fecha_vencimiento){
			$this->codigo_regis_tarjeta = $codigo_regis_tarjeta;
			$this->codigo_usuario = $codigo_usuario;
			$this->codigo_tipo_tarjeta = $codigo_tipo_tarjeta;
			$this->nombre_usuario = $nombre_usuario;
			$this->apellido_usuario = $apellido_usuario;
			$this->numero_de_tarjeta = $numero_de_tarjeta;
			$this->codigo_de_seguridad = $codigo_de_seguridad;
			$this->fecha_vencimiento = $fecha_vencimiento;
        }
        
        //Setters y Getters
		public function getCodigo_regis_tarjeta(){
			return $this->codigo_regis_tarjeta;
		}
		public function setCodigo_regis_tarjeta($codigo_regis_tarjeta){
			$this->codigo_regis_tarjeta = $codigo_regis_tarjeta;
		}
		public function getCodigo_usuario(){
			return $this->codigo_usuario;
		}
		public function setCodigo_usuario($codigo_usuario){
			$this->codigo_usuario = $codigo_usuario;
		}
		public function getCodigo_tipo_tarjeta(){
			return $this->codigo_tipo_tarjeta;
		}
		public function setCodigo_tipo_tarjeta($codigo_tipo_tarjeta){
			$this->codigo_tipo_tarjeta = $codigo_tipo_tarjeta;
		}
		public function getNombre_usuario(){
			return $this->nombre_usuario;
		}
		public function setNombre_usuario($nombre_usuario){
			$this->nombre_usuario = $nombre_usuario;
		}
		public function getApellido_usuario(){
			return $this->apellido_usuario;
		}
		public function setApellido_usuario($apellido_usuario){
			$this->apellido_usuario = $apellido_usuario;
		}
		public function getNumero_de_tarjeta(){
			return $this->numero_de_tarjeta;
		}
		public function setNumero_de_tarjeta($numero_de_tarjeta){
			$this->numero_de_tarjeta = $numero_de_tarjeta;
		}
		public function getCodigo_de_seguridad(){
			return $this->codigo_de_seguridad;
		}
		public function setCodigo_de_seguridad($codigo_de_seguridad){
			$this->codigo_de_seguridad = $codigo_de_seguridad;
		}
		public function getFecha_vencimiento(){
			return $this->fecha_vencimiento;
		}
		public function setFecha_vencimiento($fecha_vencimiento){
			$this->fecha_vencimiento = $fecha_vencimiento;
		}
		public function toString(){
			return "Codigo_regis_tarjeta: " . $this->codigo_regis_tarjeta . 
				" Codigo_usuario: " . $this->codigo_usuario . 
				" Codigo_tipo_tarjeta: " . $this->codigo_tipo_tarjeta . 
				" Nombre_usuario: " . $this->nombre_usuario . 
				" Apellido_usuario: " . $this->apellido_usuario . 
				" Numero_de_tarjeta: " . $this->numero_de_tarjeta . 
				" Codigo_de_seguridad: " . $this->codigo_de_seguridad . 
				" Fecha_vencimiento: " . $this->fecha_vencimiento;
        }

				//Otros Metodos
				
				public function insertarTarjeta($conexion){

					$instruccion = "";

					$conexion->ejecutarConsulta($instruccion);
					//$conexion->commit();

					if($conexion->ejecutarConsulta($instruccion))
					{
						$msj['mensaje'] = "Se ha insertado la tarjeta con exito!!!";
						return json_encode($msj);
					}
					else
					{
						$msj['mensaje'] = "No se inserto la tarjeta!!!";
						return json_encode($msj);
					}

				}
        
	}
?>