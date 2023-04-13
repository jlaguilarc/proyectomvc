<?php
    class Conexion
    {
        public static function Conectar(){
            $conexion = new mysqli("containers-us-west-135.railway.app","root","11wcoKBNF1bqWrTYR5pd","railway","7813");
            return $conexion;
        }

    }

?>
