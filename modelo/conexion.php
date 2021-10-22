<?php 


    class conexion{

        private $conexion;


        public function __construct(){

        }

        public function conectar(){
            $url ="mysql:host=localhost;dbname=salud_login";
            try{
                $this->conexion = new PDO($url, "root", "");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e){
                echo "El error es: "+$e->getMessage();
            }
            return $this->conexion;
        }

    }

?>