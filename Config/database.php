<?php
    class Conexion
    {
        public static function Conexion(){
            $conexion = new mysqli("containers-us-west-189.railway.app","root","TvfFvOp4XwfTnkS6YlwJ","railway");
            return $conexion;
        }

    }

?>
