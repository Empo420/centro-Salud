<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>
        <!-- <h1 class="titulo">Usuarios</h1> -->
        <?php 
            include "../includes/includeH1.php";
        ?>        
    </header>
    <main>


        <table class="table">
  <thead>
    <tr>
      <th scope="col">Numero de identificacion</th>
      <th scope="col">Tipo de documento</th>
      <th scope="col">Nombre del cargo</th>
      <th scope="col">Primer nombre</th>
      <th scope="col">Primer apellido</th>
      <th scope="col">Correo electronico</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                foreach ($usuarios as $value) {
                    echo "<tr>";
                    echo "<td>".$value['N_documento']."</td>";
                    echo "<td>".$value['Tipo_documento']."</td>";
                    echo "<td>".$value['cargo']."</td>";
                    echo "<td>".$value['Primer_nombre']."</td>";
                    echo "<td>".$value['Primer_apellido']."</td>";
                    echo "<td>".$value['correo_electronico']."</td>";
                    echo "</tr>";
                }
                ?>
  </tbody>
</table>
    </main>
    <footer>
                <?php 
                
                include "../includes/includeFooter.php";
                
                ?>
    </footer>
    
    <script src="../js/validacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>