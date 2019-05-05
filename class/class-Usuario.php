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

			$instruccion = "CALL P_INSERTAR_USUARIO($this->codigo_tipo_plan, $this->codigo_genero, '$this->correo', '$this->contrasenia', '$this->telefono')";

			$result = $conexion->ejecutarConsulta($instruccion);

			if($result)
				return 1;
			else
				return 0;

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

			$instruccion = "WITH NOMBRE_PANTALLAS AS(
				SELECT A.CODIGO_PANTALLA,
				   A.NOMBRE_PANTALLA,
				   A.CODIGO_USUARIO 
				 FROM TBL_PANTALLAS A 
			)
			SELECT  A.CODIGO_USUARIO,
						A.CORREO,COUNT(B.CODIGO_PANTALLA) AS PANTALLAS_CREADAS,
						C.NUMERO_DE_PANTALLAS AS PANTALLAS_POSIBLES,
						D.NOMBRE_PANTALLA
				FROM TBL_USUARIOS A
				LEFT JOIN TBL_PANTALLAS B 
				ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO) 
				LEFT JOIN TBL_TIPO_PLAN C 
				ON (A.CODIGO_TIPO_PLAN = C.CODIGO_TIPO_PLAN)
				LEFT JOIN NOMBRE_PANTALLAS D
				ON (A.CODIGO_USUARIO = D.CODIGO_USUARIO)
				WHERE A.CODIGO_USUARIO = $this->codigo_usuario
				GROUP BY A.CODIGO_USUARIO, A.CORREO, C.NUMERO_DE_PANTALLAS, D.NOMBRE_PANTALLA";
			
			//$instruccion = "WITH NUM_PANTALLAS AS(SELECT  A.CODIGO_USUARIO,A.CORREO,COUNT(B.CODIGO_PANTALLA) AS PANTALLAS_CREADAS,C.NUMERO_DE_PANTALLAS AS PANTALLAS_POSIBLES FROM TBL_USUARIOS A LEFT JOIN TBL_PANTALLAS B ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO) LEFT JOIN TBL_TIPO_PLAN C ON (A.CODIGO_TIPO_PLAN = C.CODIGO_TIPO_PLAN)  GROUP BY A.CODIGO_USUARIO, A.CORREO, C.NUMERO_DE_PANTALLAS) SELECT A.CODIGO_PANTALLA,A.NOMBRE_PANTALLA,B.PANTALLAS_CREADAS,B.PANTALLAS_POSIBLES,A.CODIGO_USUARIO FROM TBL_PANTALLAS A LEFT JOIN NUM_PANTALLAS B ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO) WHERE A.CODIGO_USUARIO =  $this->codigo_usuario";

			$resultado = array();

			$resultado = $conexion->obtenerFila2($instruccion);

			return json_encode($resultado);

			//return $instruccion;

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

		public function datosCuenta($conexion){

			$instruccion = "SELECT A.CORREO, A.CONTRASENIA, A.TELEFONO, C.NUMERO_DE_TARJETA, B.NOMBRE_TIPO_PLAN FROM TBL_USUARIOS A LEFT JOIN TBL_TIPO_PLAN B ON (A.CODIGO_TIPO_PLAN = B.CODIGO_TIPO_PLAN) LEFT JOIN TBL_REGISTRO_TARJETA C ON (A.CODIGO_USUARIO = C.CODIGO_USUARIO) WHERE A.CORREO = '$this->correo'";

			$resultado = array();

			$resultado = $conexion->obtenerFila($instruccion);

			return json_encode($resultado);

		} //Tengo que eliminarlo

		public function eliminarTelefono($conexion){

			$sql = "CALL P_ELIMINAR_TELEFONO('$this->correo', '$this->contrasenia')";

			$result = $conexion->ejecutarConsulta($sql);

			if($result)
				return 1;
			else
				return 0;

		}

		public function datosHistPago($conexion){

			$instruccion = "SELECT B.NOMBRE_TIPO_PLAN, B.NUMERO_DE_PANTALLAS, B.PRECIO_MENSUAL, A.CODIGO_USUARIO FROM TBL_USUARIOS A LEFT JOIN TBL_TIPO_PLAN B ON (A.CODIGO_TIPO_PLAN = B.CODIGO_TIPO_PLAN) WHERE A.CODIGO_USUARIO = $this->codigo_usuario";

			$resultado = array();

			$resultado = $conexion->obtenerFila($instruccion);

			return json_encode($resultado);

		}

		public function datosHistPago2($conexion){

			$instruccion = "SELECT B.CODIGO_REGISTRO_HISTORIAL,A.CODIGO_USUARIO,B.FECHA_INICIO,B.FECHA_FIN,C.NUMERO_DE_PANTALLAS,C.NOMBRE_TIPO_PLAN,C.PRECIO_MENSUAL,D.NUMERO_DE_TARJETA FROM TBL_USUARIOS A LEFT JOIN TBL_HISTORIAL_PAGO B ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO) LEFT JOIN TBL_TIPO_PLAN C ON (A.CODIGO_TIPO_PLAN = C.CODIGO_TIPO_PLAN) LEFT JOIN TBL_REGISTRO_TARJETA D ON (A.CODIGO_USUARIO = D.CODIGO_USUARIO) WHERE A.CODIGO_USUARIO = $this->codigo_usuario ORDER BY B.CODIGO_REGISTRO_HISTORIAL";

			$resultado = array();

			$resultado = $conexion->obtenerFila2($instruccion);

			return json_encode($resultado);

		}

		public function obtenerIdUsuario($conexion){

			$instruccion = "SELECT CODIGO_USUARIO AS CODIGO FROM TBL_USUARIOS WHERE CORREO = '$this->correo'";

			$result = array();

			$result = $conexion->obtenerFila($instruccion);

			return json_encode($result);

		}

	}
?>