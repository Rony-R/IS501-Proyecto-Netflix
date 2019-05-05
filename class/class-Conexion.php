<?php

	class Conexion{

		private $db = "oci:dbname=XE";
		private $usuario = "NET8";
        private $password = "oracle";
        private $conexion;

		public function __construct(){

            $this->conexion = new PDO($this->db, $this->usuario, $this->password);
            
        }

        public function ejecutarConsulta($sql){
            $stmt = $this->conexion->query($sql);
            return $stmt;
        }

        public function ejecutarConsulta2($sql){
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
        }

        public function obtenerFila($sql){
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            $fila = $stmt->fetch();
            return $fila;
        }

        public function obtenerFila2($sql){
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            $fila = $stmt->fetchAll();
            return $fila;
        }

        public function commit(){
            $this->conexion->commit();
        }

        public function rollback(){
            $this->conexion->rollback();
        }

        public function numColumnas($sql){
        	$stmt = $this->conexion->prepare($sql);
        	$stmt->execute();
        	$numcol = $stmt->fetch();
        	return $numcol;
        }

        public function obtenerIdInsert($sql){
            $stmt = $this->conexion->query($sql);
            $id = $stmt->lastInsertId(); 
            return $id;
        }
	
	}
?>