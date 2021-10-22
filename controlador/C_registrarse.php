<?php 

    require ("../modelo/usuario_sentencias.php");

    $sentencias = new usuario_sentencias();

    if (isset($_REQUEST['Registrar'])){
        if ($_REQUEST['Tipo_documento']=="Predeterminado" || $_REQUEST['Cargo']=="Predeterminado"){
            echo "<script>alert('Se selecciono el tipo de documento o cargo predeterminado');</script>";
        } else {
            $usuario = new usuario($_REQUEST['N_documento'],$_REQUEST['Tipo_documento'],$_REQUEST['Cargo'],$_REQUEST['Primer_nombre'],$_REQUEST['Primer_apellido'],$_REQUEST['Contrasena'],$_REQUEST['correo_electronico']);
            $sentencias->insertarUsuario($usuario);
            echo "<script>alert('Se guardo correctamente');</script>";
        }
    }

    $documentos = $sentencias->verDocumentos();
    $cargos = $sentencias->verCargos();

    require ("../vista/V_registrarse.php");


?>