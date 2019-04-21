<?php

	class Usuario{

		private $codigo_usuario;
		private $codigo_tipo_plan;
		private $codigo_genero;
		private $correo;
		private $contrasenia;
		private $telefono;

		public function __construct($codigo_usuario,
									$codigo_tipo_plan,
									$codigo_genero,
									$correo,
									$contrasenia,
									$telefono){
			$this->codigo_usuario = $codigo_usuario;
			$this->codigo_tipo_plan = $codigo_tipo_plan;
			$this->codigo_genero = $codigo_genero;
			$this->correo = $correo;
			$this->contrasenia = $contrasenia;
			$this->telefono = $telefono;
		}

		//Setters y Getters
		public function getCodigo_usuario(){
			return $this->codigo_usuario;
		}
		public function setCodigo_usuario($codigo_usuario){
			$this->codigo_usuario = $codigo_usuario;
		}
		public function getCodigo_tipo_plan(){
			return $this->codigo_tipo_plan;
		}
		public function setCodigo_tipo_plan($codigo_tipo_plan){
			$this->codigo_tipo_plan = $codigo_tipo_plan;
		}
		public function getCodigo_genero(){
			return $this->codigo_genero;
		}
		public function setCodigo_genero($codigo_genero){
			$this->codigo_genero = $codigo_genero;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasenia(){
			return $this->contrasenia;
		}
		public function setContrasenia($contrasenia){
			$this->contrasenia = $contrasenia;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function toString(){
			return "Codigo_usuario: " . $this->codigo_usuario . 
				" Codigo_tipo_plan: " . $this->codigo_tipo_plan . 
				" Codigo_genero: " . $this->codigo_genero . 
				" Correo: " . $this->correo . 
				" Contrasenia: " . $this->contrasenia . 
				" Telefono: " . $this->telefono;
		}

		//Otros Metodos

	}
?>