<?php

	class Pantalla{

		private $codigo_pantalla;
		private $codigo_usuario;
		private $codigo_img_pantalla;
		private $codigo_madurez;
		private $codigo_idioma_lenguaje;
		private $codigo_estilo_sub;
		private $nombre_pantalla;
		private $correo_pantalla;
		private $chk_ninios;

		public function __construct($codigo_pantalla,
                                    $codigo_usuario,
                                    $codigo_img_pantalla,
                                    $codigo_madurez,
                                    $codigo_idioma_lenguaje,
                                    $codigo_estilo_sub,
                                    $nombre_pantalla,
                                    $correo_pantalla,
                                    $chk_ninios){
			$this->codigo_pantalla = $codigo_pantalla;
			$this->codigo_usuario = $codigo_usuario;
			$this->codigo_img_pantalla = $codigo_img_pantalla;
			$this->codigo_madurez = $codigo_madurez;
			$this->codigo_idioma_lenguaje = $codigo_idioma_lenguaje;
			$this->codigo_estilo_sub = $codigo_estilo_sub;
			$this->nombre_pantalla = $nombre_pantalla;
			$this->correo_pantalla = $correo_pantalla;
			$this->chk_ninios = $chk_ninios;
        }
        
        //Setters y Getters
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
		public function getCodigo_img_pantalla(){
			return $this->codigo_img_pantalla;
		}
		public function setCodigo_img_pantalla($codigo_img_pantalla){
			$this->codigo_img_pantalla = $codigo_img_pantalla;
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
		public function getChk_ninios(){
			return $this->chk_ninios;
		}
		public function setChk_ninios($chk_ninios){
			$this->chk_ninios = $chk_ninios;
		}
		public function toString(){
			return "Codigo_pantalla: " . $this->codigo_pantalla . 
				" Codigo_usuario: " . $this->codigo_usuario . 
				" Codigo_img_pantalla: " . $this->codigo_img_pantalla . 
				" Codigo_madurez: " . $this->codigo_madurez . 
				" Codigo_idioma_lenguaje: " . $this->codigo_idioma_lenguaje . 
				" Codigo_estilo_sub: " . $this->codigo_estilo_sub . 
				" Nombre_pantalla: " . $this->nombre_pantalla . 
				" Correo_pantalla: " . $this->correo_pantalla . 
				" Chk_ninios: " . $this->chk_ninios;
        }

        //Otros Metodos
        
	}
?>