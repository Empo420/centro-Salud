<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>cronograma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo_index.css">
</head>
<body>

    <header>
        <?php 
            include "./includes/includeHeader.php";
        ?>    
    
    </header>
    <main>
    <section class="text-center text-white inicio">
            <div class="jumbotron bg-jumbotron">
                <div class="container">
                    <h1 class="display-4"><strong>Centro medico senasoft</strong></h1>
                    <p class="lead mt-5 texto"><small>atenderemos tus enfermedades fisicas y mentaesles <br> con gusto te ayudaremos</small></p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php 
        
        include "./includes/includeFooter.php";

        ?>
    </footer>

    <!-- <div id="header">
        <img id="logo" src="img/logo.png" alt="logo">
        <header id="menu">
                <a class="boton" id="inicio" href="./index.php">Regresar</a>    
            </ul>
        </header>
    </div>
    <br><br><br><br><br><br>

    <div id="color1">
    </div>
    
    <div id="cronograma">
        <div id="titulo">
            <center><h1>cronograma</h1></center>
        </div>
        <div id="contenedor">
            <div id="consultas">
                <h3>consultar horarios</h3><br>
                ingrese su documento <br><br>
    
                <input type="text" placeholder="documento"><br><br>
    
                <hr><br>
    
                <h3>consultar horarios</h3><br>
                ingrese su documento <br><br>
    
                <input type="text" placeholder="documento">
            </div>
            <div  id="elhr">
                <center><hr></center>
            </div>
            <div id="calendario">
                <img src="img/calendario.jpg" alt="" width="100%">
            </div>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>