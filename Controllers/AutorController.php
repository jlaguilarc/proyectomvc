<?php
require_once("../Models/AutorModels.php");
require_once("../Config/database.php");

    class AutorController{

        private $codigo;
        private $nombre;

        public function __construct($codigo, $nombre, $opc){
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            $this->guardar();
        }

        public function index(){
            require_once "../Views/pages/AgregarAutor.php";
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