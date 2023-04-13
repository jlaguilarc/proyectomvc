<?php
    class EditorialModels{

        private $db;
        private $editorial;

        public function __construct(){
            $this->db = Conect::Conectar();
            $this->editorial = array();
        }

        public function insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO editorial values('$codigo', '$nombre')");
            $this->db->close();
        }

        public function get_editoriales(){
            $sql = "SELECT * FROM editorial";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }

        public function delete_editorial($cod){
            $sql = "DELETE FROM editorial WHERE codigoEditorial=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $sql = "SELECT * FROM editorial WHERE codigoEditorial=".$codigo;
            $res = $this->db->query($sql);
            if($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }

        public function actualizar($codigo, $nombre){
            $resultado = $this->db->query("UPDATE editorial SET nombreEditorial='$nombre' where codigoEditorial='$codigo'");
        }
    }

?>