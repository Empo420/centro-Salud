<?php 

    require "../modelo/usuario.php";
    require "../modelo/conexion.php";


    class usuario_sentencias{

        private $conexion;

        public function __construct(){
            $this->conexion = new conexion();
            $this->conexion = $this->conexion->conectar();
        }

        public function verUsuarios(){
            $mostrarUsuarios = "SELECT * FROM usuario";
            $usuarios = array();
            try{
                $query = $this->conexion->prepare($mostrarUsuarios);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $usuarios[] = $registro; 
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $usuarios;
        }

        public function verUsuarios1(){
            $mostrarUsuarios = "SELECT * FROM usuario";
            $usuarios = array();
            try{
                $query = $this->conexion->prepare($mostrarUsuarios);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $usuarios[] = $registro; 
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $usuarios;
        }

        public function insertarUsuario(usuario $usuario){
            $insertarUsuario = "INSERT INTO usuario (N_documento,Tipo_documento,cargo,Primer_nombre,Primer_apellido,contrasena,correo_electronico) VALUES (?,?,?,?,?,?,?)";
            try{
                $query = $this->conexion->prepare($insertarUsuario);
                $datos = array($usuario->getN_documento(),$usuario->getTipo_documento(),$usuario->getCargo(),$usuario->getPrimer_nombre(),$usuario->getPrimer_apellido(),$usuario->getContrasena(),$usuario->getCorreo_electronico());
                $query->execute($datos);
            } catch (Exception $e){
                echo "EL error es: ".$e->getMessage();
            }
        }

        public function eliminarUsuario($usuario){
            $eliminarUsuario = "DELETE FROM usuario WHERE N_documento = '".$usuario->getN_documento()."'";
            try{
                $query = $this->conexion->prepare($eliminarUsuario);
                $query->execute();
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
        }

        public function modificarUsuario($usuario){
            $modificarUsuario = "UPDATE usuario SET Tipo_documento = ?, cargo = ?,Primer_nombre = ?, Primer_apellido = ?, contraseña = ?, correo_electronico = ? WHERE N_documento = '".$usuario->getN_documento()."'";
            try{
                $query = $this->conexion->prepare($modificarUsuario);
                $datos = array($usuario->getTipo_documento(),$usuario->getCargo(),$usuario->getPrimer_nombre(),$usuario->getPrimer_apellido(),$usuario->getContrasena(),$usuario->getCorreo_electronico());
                $query->execute($datos);
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
        }

        public function consultarUsuario($usuario){
            $consultarUsuario = "SELECT * FROM usuario WHERE N_documento = '".$usuario->getN_documento()."' and contrasena = '".$usuario->getContrasena()."'";
            try {
                $query = $this->conexion->prepare($consultarUsuario);
                $query->execute();
                while ($registro = $query->fetch(PDO::FETCH_ASSOC)){
                    return 1;
                }
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return 0;
        }

        public function verCargoUsuario($usuario){
            $consultarcargo = "SELECT usuario.cargo from usuario where N_documento = '".$usuario->getN_documento()."'";
            $resultado = array();
            try {
                $query = $this->conexion->prepare($consultarcargo);
                $query->execute();
                while ($registro = $query->fetch(PDO::FETCH_ASSOC)){
                    $resultado[]=$registro;
                    return $resultado;
                }
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return $resultado;
        }

        public function verDocumentos(){
            $mostrarDocumentos = "SELECT * FROM tipo_documento";
            $documentos = array();
            try{
                $query = $this->conexion->prepare($mostrarDocumentos);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $documentos[] = $registro; 
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $documentos;
        }

        public function verCargos(){
            $mostrarCargos = "SELECT * FROM cargo";
            $cargos = array();
            try{
                $query = $this->conexion->prepare($mostrarCargos);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $cargos[] = $registro; 
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $cargos;
        }

        public function buscarUsuarioApellidoNumero($Numero){
            $mostrarUsuario = "SELECT usuario.Primer_apellido FROM usuario WHERE N_documento = '".$Numero."'";
            $resultado = array();
            try{
                $query = $this->conexion->prepare($mostrarUsuario);
                $resultado[] = $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $resultado[] = $registro;
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }

        public function buscarUsuarioNombreNumero($Numero){
            $mostrarUsuario = "SELECT usuario.Primer_nombre, usuario.Primer_apellido FROM usuario WHERE N_documento = '".$Numero."'";
            $resultado = array();
            try{
                $query = $this->conexion->prepare($mostrarUsuario);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $resultado[] = $registro;
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }

        public function verCronograma(){
            $mostrar = "SELECT * FROM cronos";
            $resultado = array();
            try{
                $query = $this->conexion->prepare($mostrar);
                $query->execute();
                while ($registro = $query->fetch(PDO::FETCH_ASSOC)){
                    $resultado[] = $registro;
                }
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return $resultado;
        }

    }


?>