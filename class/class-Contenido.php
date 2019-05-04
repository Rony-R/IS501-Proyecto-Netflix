<?php

	class Contenido{

		private $codigo_contenido;
		private $codigo_tipo_contenido;
		private $codigo_estudio;
		private $codigo_idioma;
		private $codigo_calif_edad;
		private $nombre_contenido;
		private $urlVideo;
		private $urlMiniatura;
		private $descripcion;
		private $fecha_subida;
		private $codigo_categoria;

		public function __construct($codigo_contenido,
                                    $codigo_tipo_contenido,
                                    $codigo_estudio,
                                    $codigo_idioma,
																		$codigo_calif_edad,
																		$urlVideo,
                                    $urlMiniatura,
                                    $nombre_contenido,
                                    $descripcion,
																		$fecha_subida,
																		$codigo_categoria){
			$this->codigo_contenido = $codigo_contenido;
			$this->codigo_tipo_contenido = $codigo_tipo_contenido;
			$this->codigo_estudio = $codigo_estudio;
			$this->codigo_idioma = $codigo_idioma;
			$this->codigo_calif_edad = $codigo_calif_edad;
			$this->nombre_contenido = $nombre_contenido;
			$this->urlVideo = $urlVideo;
			$this->urlMiniatura = $urlMiniatura;
			$this->descripcion = $descripcion;
			$this->fecha_subida = $fecha_subida;
			$this->codigo_categoria = $codigo_categoria;
        }
        
        //Getters y Setters
		public function getCodigo_contenido(){
			return $this->codigo_contenido;
		}
		public function setCodigo_contenido($codigo_contenido){
			$this->codigo_contenido = $codigo_contenido;
		}
		public function getCodigo_tipo_contenido(){
			return $this->codigo_tipo_contenido;
		}
		public function setCodigo_tipo_contenido($codigo_tipo_contenido){
			$this->codigo_tipo_contenido = $codigo_tipo_contenido;
		}
		public function getCodigo_estudio(){
			return $this->codigo_estudio;
		}
		public function setCodigo_estudio($codigo_estudio){
			$this->codigo_estudio = $codigo_estudio;
		}
		public function getCodigo_idioma(){
			return $this->codigo_idioma;
		}
		public function setCodigo_idioma($codigo_idioma){
			$this->codigo_idioma = $codigo_idioma;
		}
		public function getCodigo_calif_edad(){
			return $this->codigo_calif_edad;
		}
		public function setCodigo_calif_edad($codigo_calif_edad){
			$this->codigo_calif_edad = $codigo_calif_edad;
		}
		public function getNombre_contenido(){
			return $this->nombre_contenido;
		}
		public function setNombre_contenido($nombre_contenido){
			$this->nombre_contenido = $nombre_contenido;
		}

		public function getUrlVideo(){
			return $this->urlVideo;
		}
		public function setUrlVideo($urlVideo){
			$this->urlVideo = $urlVideo;
		}

		public function getUrlMiniatura(){
			return $this->urlMiniatura;
		}
		public function setUrlMiniatura($urlMiniatura){
			$this->urlMiniatura = $urlMiniatura;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFecha_subida(){
			return $this->fecha_subida;
		}
		public function setFecha_subida($fecha_subida){
			$this->fecha_subida = $fecha_subida;
		}

		public function getCodigo_categoria(){
			return $this->codigo_categoria;
		}
		public function setCodigo_categoria($codigo_categoria){
			$this->codigo_categoria = $codigo_categoria;
		}



		public function toString(){
			return "Codigo_contenido: " . $this->codigo_contenido . 
				" Codigo_tipo_contenido: " . $this->codigo_tipo_contenido . 
				" Codigo_estudio: " . $this->codigo_estudio . 
				" Codigo_idioma: " . $this->codigo_idioma . 
				" Codigo_calif_edad: " . $this->codigo_calif_edad . 
				" Nombre_contenido: " . $this->nombre_contenido . 
				" UrlVideo: " . $this->urlVideo . 
				" UrlMiniatura: " . $this->urlMiniatura .
				" Descripcion: " . $this->descripcion . 
				" Fecha_subida: " . $this->fecha_subida;
        }
        
				//Otros metodos

				public function obtenerContenido($conexion){

					$instruccion = "WITH NUM_CONTENIDO AS (
													SELECT CODIGO_CATEGORIA, COUNT(*) CANTIDAD_CONTENIDO
													FROM TBL_CATEGOIAS_X_CONTENIDO
													GROUP BY CODIGO_CATEGORIA
													)
													SELECT A.CODIGO_CATEGORIA, A.CODIGO_CONTENIDO, B.URL_MINIATURA, C.CANTIDAD_CONTENIDO
													FROM TBL_CATEGOIAS_X_CONTENIDO A
													LEFT JOIN TBL_CONTENIDO B
													ON (A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO)
													LEFT JOIN NUM_CONTENIDO C
													ON (A.CODIGO_CATEGORIA = C.CODIGO_CATEGORIA)
													WHERE A.CODIGO_CATEGORIA = $this->codigo_categoria";
		
					$resultado = array();
		
					$resultado = $conexion->obtenerFila2($instruccion);
		
					return json_encode($resultado);
		
					//return $instruccion;
		
				}

				public function insertarContenido($conexion){

					$sql = "CALL P_INSERTAR_CONTENIDO ($this->codigo_tipo_contenido, $this->codigo_estudio, $this->codigo_idioma, $this->codigo_calif_edad, '$this->urlVideo', '$this->nombre_contenido', '$this->urlMiniatura', '$this->descripcion', to_date('$this->fecha_subida', 'DD/MM/YYYY'))";

					$result = $conexion->ejecutarConsulta($sql);

					if($result)
						return 1;
					else
						return 0;

					//return $sql;

				}

				public function obtenerIdCont($conexion){

					$instruccion = "SELECT CODIGO_CONTENIDO FROM TBL_CONTENIDO WHERE NOMBRE_CONTENIDO = '$this->descripcion'";

					$result = array();

					$result = $conexion->obtenerFila($instruccion);

					return json_encode($result);

				}

	}
?>