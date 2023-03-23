<?php
    class AutorModels{

        private $db;
        private $autor;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->autor = array();
        }

        public function insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO autor values('$codigo', '$nombre', '112')");
        }

    }

?>