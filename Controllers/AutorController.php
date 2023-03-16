<?php
    class AutorController{

        private $opcion;

        public function __construct(){
            if(isset($_POST['guardar'])){
                $this->guardar();
            }
        }

        public function index(){
            require_once "Views/pages/AgregarAutor.php";
        }

        public function guardar(){
            $codautor = $_POST['codigo'];
            $nomautor = $_POST['nombre'];

            $autor = new AutorModels();
            $autor->insertar($codautor, $nomautor);
            $this->index();
        }
    }
?>