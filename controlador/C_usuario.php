<?php 
    session_start();

    if ($_SESSION['sesion']){
        echo "Bienvenido@ ".$_SESSION['sesion']."</br>";
        echo "<a href='../controlador/cerrar.php'>Cerrar sesion</a>";
    } else{
        header("location:../controlador/C_usuarioLogin.php");
    }

    require ("../modelo/usuario_sentencias.php");
    
    $objeto = new usuario_sentencias();

    if(isset($_REQUEST['Registrar'])){
        $usuario = new usuario($_REQUEST['N_documento'],$_REQUEST['Nombre_documento'],$_REQUEST['cargo'],$_REQUEST['Primer_nombre'],$_REQUEST['Primer_apellido'],$_REQUEST['contrasena'],$_REQUEST['correo_electronico']);
        $objeto->insertarUsuario($usuario);
    }

    if (isset($_REQUEST['Eliminar'])){
        if($_REQUEST['Nombre_documento']==null && $_REQUEST['cargo']==null && $_REQUEST['Primer_nombre']==null && $_REQUEST['Primer_apellido']==null && $_REQUEST['contrasena']==null && $_REQUEST['correo_electronico']){
            $usuario = new usuario($_REQUEST['N_documento'],"","","","","","");
            $objeto->eliminarUsuario($usuario);
        }
    }

    if (isset($_REQUEST['Modificar'])){
        $usuario = new usuario($_REQUEST['N_documento'],$_REQUEST['Nombre_documento'],$_REQUEST['cargo'],$_REQUEST['Primer_nombre'],$_REQUEST['Primer_apellido'],$_REQUEST['contrasena'],$_REQUEST['correo_electronico']);
        $objeto->modificarUsuario($usuario);
    }
    $documentos = $objeto->verDocumentos();
    $cargos = $objeto->verCargos();
    $usuarios = $objeto->verUsuarios();

    require ("../vista/V_usuario.php");
?>