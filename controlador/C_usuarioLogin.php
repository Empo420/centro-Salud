<?php 
    session_start();
    require ("../modelo/usuario_sentencias.php");
    
    $objeto = new usuario_sentencias();

    if(isset($_REQUEST['Iniciar_sesion'])){
        $usuario = new usuario($_REQUEST['N_documento'],"","","","",$_REQUEST['contrasena'],"");
        $resultado = $objeto->consultarUsuario($usuario);
        if ($resultado==1){
            $cargo = $objeto->verCargoUsuario($usuario);
            $cargoFinal;
            foreach ($cargo as $valor){
                $cargoFinal = $valor['cargo'];
            }
            if ($cargoFinal=="Administrador"){
                session_start();
                $nombre = $objeto->buscarUsuarioNombreNumero($_REQUEST['N_documento']);
                $nombreCompleto;
                foreach ($nombre as $valor) {
                 echo $valor['Primer_nombre']." ".$valor['Primer_apellido'];
                    $nombreCompleto = $valor['Primer_nombre']." ".$valor['Primer_apellido'];
                }
                $_SESSION['sesion'] = $nombreCompleto;
                header("location:../controlador/C_usuario.php");
            } else {
                session_start();
                $nombre = $objeto->buscarUsuarioNombreNumero($_REQUEST['N_documento']);
                $nombreCompleto;
                foreach ($nombre as $valor) {
                 echo $valor['Primer_nombre']." ".$valor['Primer_apellido'];
                    $nombreCompleto = $valor['Primer_nombre']." ".$valor['Primer_apellido'];
                }
                $_SESSION['sesion'] = $nombreCompleto;
                header("location:../controlador/C_usuarioEnc.php"); 
            }
        } else {
            echo "<script>alert('Numero de documento o contraseña incorrecto');</script>";
        }
    }

    require ("../vista/V_usuarioLogin.php");

?>