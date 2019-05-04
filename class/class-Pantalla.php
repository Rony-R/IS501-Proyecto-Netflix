<?php

	class Pantalla{

		private $codigo_pantalla;
		private $codigo_usuario;
		private $codigo_madurez;
		private $codigo_idioma_lenguaje;
		private $codigo_estilo_sub;
		private $codigo_config_repro;
		private $nombre_pantalla;
		private $correo_pantalla;
		private $url_img_pantalla;

		public function __construct($codigo_pantalla,
																$codigo_usuario,
																$codigo_madurez,
																$codigo_idioma_lenguaje,
																$codigo_estilo_sub,
																$codigo_config_repro,
																$nombre_pantalla,
																$correo_pantalla,
																$url_img_pantalla){
			$this->codigo_pantalla = $codigo_pantalla;
			$this->codigo_usuario = $codigo_usuario;
			$this->codigo_madurez = $codigo_madurez;
			$this->codigo_idioma_lenguaje = $codigo_idioma_lenguaje;
			$this->codigo_estilo_sub = $codigo_estilo_sub;
			$this->codigo_config_repro = $codigo_config_repro;
			$this->nombre_pantalla = $nombre_pantalla;
			$this->correo_pantalla = $correo_pantalla;
			$this->url_img_pantalla = $url_img_pantalla;
		}

		//Getters y Setters
		public function getCodigo_pantalla(){
			return $this->codigo_pantalla;
		}
		public function setCodigo_pantalla($codigo_pantalla){
			$this->codigo_pantalla = $codigo_pantalla;
		}
		public function getCodigo_usuario(){
			return $this->codigo_usuario;
		}
		public function setCodigo_usuario($codigo_usuario){
			$this->codigo_usuario = $codigo_usuario;
		}
		public function getCodigo_madurez(){
			return $this->codigo_madurez;
		}
		public function setCodigo_madurez($codigo_madurez){
			$this->codigo_madurez = $codigo_madurez;
		}
		public function getCodigo_idioma_lenguaje(){
			return $this->codigo_idioma_lenguaje;
		}
		public function setCodigo_idioma_lenguaje($codigo_idioma_lenguaje){
			$this->codigo_idioma_lenguaje = $codigo_idioma_lenguaje;
		}
		public function getCodigo_estilo_sub(){
			return $this->codigo_estilo_sub;
		}
		public function setCodigo_estilo_sub($codigo_estilo_sub){
			$this->codigo_estilo_sub = $codigo_estilo_sub;
		}
		public function getCodigo_config_repro(){
			return $this->codigo_config_repro;
		}
		public function setCodigo_config_repro($codigo_config_repro){
			$this->codigo_config_repro = $codigo_config_repro;
		}
		public function getNombre_pantalla(){
			return $this->nombre_pantalla;
		}
		public function setNombre_pantalla($nombre_pantalla){
			$this->nombre_pantalla = $nombre_pantalla;
		}
		public function getCorreo_pantalla(){
			return $this->correo_pantalla;
		}
		public function setCorreo_pantalla($correo_pantalla){
			$this->correo_pantalla = $correo_pantalla;
		}
		public function getUrl_img_pantalla(){
			return $this->url_img_pantalla;
		}
		public function setUrl_img_pantalla($url_img_pantalla){
			$this->url_img_pantalla = $url_img_pantalla;
		}
		public function toString(){
			return "Codigo_pantalla: " . $this->codigo_pantalla . 
				" Codigo_usuario: " . $this->codigo_usuario . 
				" Codigo_madurez: " . $this->codigo_madurez . 
				" Codigo_idioma_lenguaje: " . $this->codigo_idioma_lenguaje . 
				" Codigo_estilo_sub: " . $this->codigo_estilo_sub . 
				" Codigo_config_repro: " . $this->codigo_config_repro . 
				" Nombre_pantalla: " . $this->nombre_pantalla . 
				" Correo_pantalla: " . $this->correo_pantalla . 
				" Url_img_pantalla: " . $this->url_img_pantalla;
		}

		//Otros Metodos
		public function insertarPantalla($conexion){

			$instruccion = "CALL P_INSERTAR_PANTALLA($this->codigo_usuario, $this->codigo_madurez, $this->codigo_idioma_lenguaje, $this->codigo_estilo_sub, $this->codigo_config_repro, '$this->nombre_pantalla')";

			$result = $conexion->ejecutarConsulta($instruccion);

			if($result)
				return 1;
			else
				return 0;
		}

		public function actualizarPantalla($conexion){

			$instruccion = "CALL P_ACTUALIZAR_PANTALLA ($this->codigo_madurez, $this->codigo_idioma_lenguaje, '$this->nombre_pantalla','$this->correo_pantalla', $this->codigo_usuario)";

			$result = $conexion->ejecutarConsulta($instruccion);

			if($result)
				return 1;
			else
				return 0;

		}

		public function pantallaInicio($conexion){

			$instruccion = "SELECT CODIGO_PANTALLA, NOMBRE_PANTALLA FROM TBL_PANTALLAS WHERE CODIGO_PANTALLA = $this->codigo_pantalla";

			$resultado = array();

			$resultado = $conexion->obtenerFila($instruccion);

			return json_encode($resultado);
			
		}

	}
?>