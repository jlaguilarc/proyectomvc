<?php
    class AutorModels{

        private $db;

        public function __construct(){
            $this->db = Conexion::Conexion();
        }

        public function insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO autor values('$codigo', '$nombre', '112')");
        }

    }

?>