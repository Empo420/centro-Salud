<?php 

    session_start();
    if ($_SESSION['sesion']){
        echo "sesion iniciada: ".$_SESSION['sesion']."<br>";
        echo "<a href='../controlador/C_usuario.php'>Regresar</a>";
        echo "<a href='../controlador/cerrar.php'>cerrar sesion</a>";
    } else {
        header("location:../controlador/C_usuarioLogin.php");
    }

    require ("../modelo/usuario_sentencias.php");

    $objeto = new usuario_sentencias();

    $datos = $objeto->verCronograma();

    require ("../vista/V_control.php");
?>