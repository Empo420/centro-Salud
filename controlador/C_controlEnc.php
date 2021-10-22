<?php 

    session_start();

    if ($_SESSION['sesion']){
        echo "Sesion iniciada: ".$_SESSION['sesion']."</br>";
        echo "<a href='../controlador/C_usuarioEnc.php'>Regresar</a>";
        echo "<a href='../controlador/cerrar.php'>cerrar sesion</a>";
    } else {
        header("location:../controlador/C_usuarioLogin.php");
    }

    require ("../modelo/usuario_sentencias.php");

    $sentencias = new usuario_sentencias();

    $datos = $sentencias->verCronograma();

    require ("../vista/V_controlEnc.php");

?>