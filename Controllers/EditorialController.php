<?php
require_once(dirname(__DIR__)."./Models/EditorialModels.php");
require_once(dirname(__DIR__)."./Config/database.php");

    class EditorialController{

        private $codigo;
        private $nombre;

        public function __construct($codigo, $nombre, $opc){
            $this->codigo = $codigo;
            $this->nombre = $nombre;
            if($opc=="Actualizar"){
                $this->actualizar();
            }else if($codigo!=""){
                $this->guardar();
            }
            
        }

        public function index(){
            $editorial = new EditorialModels();
            $data["editoriales"] = $editorial->get_editoriales();
            
            return $data;
            //require_once "../Views/pages/IndexEditorial.php";
        }

        public function guardar(){

            $autor = new EditorialModels();
            $autor->insertar($this->codigo, $this->nombre);

            require_once "../Views/pages/IndexEditorial.php";
            //$this->index();
        }

        public function eliminar($id){
            $editorial = new EditorialModels();
            $r = $editorial->delete_editorial($id);

            require_once dirname(__DIR__)."./Views/pages/IndexEditorial.php";
        }

        public function editar($codigo){
            $editorial = new EditorialModels();

            $data["editorial"] = $editorial->get_id($codigo);
            
            return $data;
        }

        public function actualizar(){
            $autor = new EditorialModels();
            $autor->actualizar($this->codigo, $this->nombre);

            require_once "../Views/pages/IndexEditorial.php";
        }
    }
?>