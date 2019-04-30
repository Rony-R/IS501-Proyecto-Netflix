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

		public function insertarUsuario($conexion){

			$instruccion = "INSERT INTO TBL_USUARIOS (CODIGO_USUARIO, CODIGO_TIPO_PLAN, CODIGO_GENERO, CORREO, CONTRASENIA, TELEFONO) VALUES ($this->codigo_usuario, $this->codigo_tipo_plan, $this->codigo_genero, '$this->correo', '$this->contrasenia', '$this->telefono')";

			$conexion->ejecutarConsulta2($instruccion);
			//$conexion->commit();

			if($conexion->ejecutarConsulta2($instruccion))
			{
				$msj['mensaje'] = "Se ha agregado el usuario con exito!!!";
				return json_encode($msj);
			}
			else
			{
				$msj['mensaje'] = "No se agrego el usuario!!!";
				return json_encode($msj);
			}

		}

		public function verificarUsuario($conexion){

			$consulta = "SELECT CORREO,CONTRASENIA FROM TBL_USUARIOS WHERE CORREO = '$this->correo' AND CONTRASENIA = '$this->contrasenia'";
			
			$numcolumnas = $conexion->numColumnas($consulta);

			if($numcolumnas)
				return 1;
			else
				return 0;
		}

		public function obtenerPantallas($conexion){

			$instruccion = "SELECT  A.CODIGO_USUARIO, A.CORREO, COUNT(B.CODIGO_PANTALLA) AS NUMERO_DE_PANTALLAS, C.NUMERO_DE_PANTALLAS AS NUMERO_PANTALLAS_POSIBLES FROM TBL_USUARIOS A LEFT JOIN TBL_PANTALLAS B ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO) LEFT JOIN TBL_TIPO_PLAN C ON (A.CODIGO_TIPO_PLAN = C.CODIGO_TIPO_PLAN) WHERE A.CORREO = '$this->correo' GROUP BY A.CODIGO_USUARIO, A.CORREO, C.NUMERO_DE_PANTALLAS";

			$resultado = array();

			$resultado = $conexion->obtenerFila($instruccion);

			return json_encode($resultado);

		}

		public function obtenerNombrePantallas($conexion){

			$instruccion = "SELECT CODIGO_PANTALLA, NOMBRE_PANTALLA FROM TBL_PANTALLAS WHERE CODIGO_USUARIO = $this->codigo_usuario";

			$resultado = array();

			while($fila = $conexion->obtenerFila($instruccion)){
				$resultado[] = $fila;
			}

			return json_encode($resultado);

		}

		public function verificarCorreo($conexion){

			$sql = "SELECT CORREO FROM TBL_USUARIOS WHERE CORREO = '$this->correo'";

			$numcolumnas = $conexion->numColumnas($sql);

			if($numcolumnas)
				return 1; //si existe
			else 
				return 0; //no existe

		}

		public function actualizarCorreo($conexion){

			$sql = "CALL P_ACTUALIZAR_CORREO('$this->contrasenia', '$this->correo')";

			$result = $conexion->ejecutarConsulta($sql);

			if($result)
				return 1;
			else
				return 0;

		}

		public function actualizarContrasenia($conexion){

			$sql = "CALL P_ACTUALIZAR_CONTRA('$this->correo', '$this->contrasenia')";

			$result = $conexion->ejecutarConsulta($sql);

			if($result)
				return 1;
			else
				return 0;

		}

		public function actualizarTelefono($conexion){

			$sql = "CALL P_ACTUALIZAR_TELEFONO('$this->correo', '$this->contrasenia')";

			$result = $conexion->ejecutarConsulta($sql);

			if($result)
				return 1;
			else
				return 0;

		}

	}
?>