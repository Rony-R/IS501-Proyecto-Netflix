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
				" Fecha_subida: " . $this->fecha_subida .
				" Codigo_categoria: " . $this->codigo_categoria;
        }
        
				//Otros metodos
				
				public function insertarContenido($conexion){

					$instruccion = "CALL P_INSERTAR_CONTENIDO($this->codigo_tipo_contenido, $this->codigo_estudio, $this->codigo_idioma, $this->codigo_calif_edad, '$this->nombre_contenido', '$this->urlVideo', '$this->urlMiniatura', '$this->descripcion', $this->fecha_subida)";
		
					$result = $conexion->ejecutarConsulta($instruccion);
		
					if($result)
						return 1;
					else
						return 0;
					//	return $instruccion;
				}

				public function obtenerContenido($conexion){

			//	$instruccion = "WITH NUM_CONTENIDO AS (SELECT CODIGO_CATEGORIA, COUNT(*) CANTIDAD_CONTENIDO FROM TBL_CATEGOIAS_X_CONTENIDO GROUP BY CODIGO_CATEGORIA) SELECT A.CODIGO_CATEGORIA, A.CODIGO_CONTENIDO, B.URL_MINIATURA, C.CANTIDAD_CONTENIDO FROM TBL_CATEGOIAS_X_CONTENIDO A LEFT JOIN TBL_CONTENIDO B ON (A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO) LEFT JOIN NUM_CONTENIDO C ON (A.CODIGO_CATEGORIA = C.CODIGO_CATEGORIA) WHERE A.CODIGO_CATEGORIA = $this->codigo_categoria";

		$instruccion = "WITH NUM_CONTENIDO AS (
								SELECT CODIGO_CATEGORIA, COUNT(*) CANTIDAD_CONTENIDO
								FROM TBL_CATEGOIAS_X_CONTENIDO
								GROUP BY CODIGO_CATEGORIA
								)
								SELECT A.CODIGO_CATEGORIA, A.CODIGO_CONTENIDO, C.CANTIDAD_CONTENIDO,B.CODIGO_TIPO_CONTENIDO, D.TIPO_CONTENIDO, E.NOMBRE_ESTUDIO, F.IDIOMA, G.NOMBRE_CALIF, G.DESCRIPCION AS DESC_EDAD, B.NOMBRE_CONTENIDO,B.URL_VIDEO, B.URL_MINIATURA, B.DESCRIPCION, H.DURACION_PELI, I.UNIDAD
								FROM TBL_CATEGOIAS_X_CONTENIDO A
								LEFT JOIN TBL_CONTENIDO B
								ON (A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO)
								LEFT JOIN NUM_CONTENIDO C
								ON (A.CODIGO_CATEGORIA = C.CODIGO_CATEGORIA)
								LEFT JOIN TBL_TIPO_CONTENIDO D
								ON (B.CODIGO_TIPO_CONTENIDO = D.CODIGO_TIPO_CONTENIDO)
								LEFT JOIN TBL_ESTUDIOS E
								ON (B.CODIGO_ESTUDIO = E.CODIGO_ESTUDIO)
								LEFT JOIN TBL_IDIOMAS F
								ON (B.CODIGO_IDIOMA = F.CODIGO_IDIOMA)
								LEFT JOIN TBL_CALIFICACION_EDAD G
								ON (B.CODIGO_CALIF_EDAD = G.CODIGO_CALIF_EDAD)
								LEFT JOIN TBL_PELICULAS H
								ON(B.CODIGO_CONTENIDO = H.CODIGO_PELICULA)
								LEFT JOIN TBL_UNIDADES I
								ON (H.CODIGO_UNIDAD = I.CODIGO_UNIDAD)
								WHERE A.CODIGO_CATEGORIA = $this->codigo_categoria";

					$resultado = array();
		
					$resultado = $conexion->obtenerFila2($instruccion);
		
					return json_encode($resultado);
		
		
				}

				public function obtenerContenido2($conexion){
					$instruccion = "WITH NUM_CONTENIDO AS (SELECT CODIGO_CATEGORIA, COUNT(*) CANTIDAD_CONTENIDO FROM TBL_CATEGOIAS_X_CONTENIDO GROUP BY CODIGO_CATEGORIA) SELECT A.CODIGO_CATEGORIA, A.CODIGO_CONTENIDO, B.URL_MINIATURA, C.CANTIDAD_CONTENIDO FROM TBL_CATEGOIAS_X_CONTENIDO A LEFT JOIN TBL_CONTENIDO B ON (A.CODIGO_CONTENIDO = B.CODIGO_CONTENIDO) LEFT JOIN NUM_CONTENIDO C ON (A.CODIGO_CATEGORIA = C.CODIGO_CATEGORIA) WHERE A.CODIGO_CATEGORIA = $this->codigo_categoria";
		
					$resultado = array();
		
					$resultado = $conexion->obtenerFila2($instruccion);
		
					return json_encode($resultado);
		
					//return $instruccion;
		
				}

	}
?>