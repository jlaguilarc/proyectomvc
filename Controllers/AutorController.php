<?php
require_once("https://proyectomvc-production-52e8.up.railway.app/Models/AutorModels.php");
require_once("https://proyectomvc-production-52e8.up.railway.app/Config/database.php");


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
            require_once "https://proyectomvc-production-52e8.up.railway.app/Views/pages/indexAutor.php";
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