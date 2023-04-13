<?php
require_once($_SERVER['DOCUMENT_ROOT']."/Models/AutorModels.php");
require_once($_SERVER['DOCUMENT_ROOT']."/Config/database.php");


    class AutorController{

        private $codigo;
        private $nombre;

        public function __construct($codigo, $nombre, $opc){
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->guardar();
        }

        public function index(){
            $autor = new AutorModels();
            $data["autor"] = $autor->get_autores();
            require_once $_SERVER['DOCUMENT_ROOT']."/Views/pages/indexAutor.php";
        }

        public function guardar(){
            //$codautor = $_POST['codigo'];
            //$nomautor = $_POST['nombre'];

            $autor = new AutorModels();
            $autor->insertar($this->codigo, $this->nombre);
            $this->index();
        }
    }
?>