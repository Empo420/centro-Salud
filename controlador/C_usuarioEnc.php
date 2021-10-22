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

    $usuarios = $objeto->verUsuarios1();

    require ("../vista/V_usuarioEnc.php");
?>