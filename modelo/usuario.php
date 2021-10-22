<?php 

    class usuario{

        private $N_documento;
        private $Tipo_documento;
        private $cargo;
        private $Primer_nombre;
        private $Primer_apellido;
        private $contrasena;
        private $correo_electronico;

        public function __construct($N_documento,$Tipo_documento,$cargo,$Primer_nombre,$Primer_apellido,$contrasena,$correo_electronico){
            $this->N_documento = $N_documento;
            $this->Tipo_documento = $Tipo_documento;
            $this->cargo=$cargo;
            $this->Primer_nombre = $Primer_nombre;
            $this->Primer_apellido=$Primer_apellido;
            $this->contrasena=$contrasena;
            $this->correo_electronico=$correo_electronico;
        }

        public function getN_documento(){
            return $this->N_documento;
        }

        public function getTipo_documento(){
            return $this->Tipo_documento;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function getPrimer_nombre(){
            return $this->Primer_nombre;
        }

        public function getPrimer_apellido(){
            return $this->Primer_apellido;
        }
        
        public function getContrasena(){
            return $this->contrasena;
        }

        public function getCorreo_electronico(){
            return $this->correo_electronico;
        }

        
    }


?>