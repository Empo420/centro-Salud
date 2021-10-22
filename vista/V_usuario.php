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
            include "../includes/includeH.php"; 
        ?>
    </header>
    <main>
    <br>
    <div class="container">
        <form action="" method="post">
            <div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="N_documento">Numero de identificacion</label>
                        <input type="number" class="form-control" id="N_documento" name="N_documento" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Tipo_documento">Seleccione el tipo de documento</label>
                        <select name="Tipo_documento" id="Tipo_documento" class="form-control">
                            <?php foreach ($documentos as $valor):?>
                                <option value="<?php echo $valor['nombre_documento']?>"> <?php echo $valor['nombre_documento'] ?> </option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Tipo_documento">Seleccione el cargo</label>
                        <select name="Tipo_documento" id="Tipo_documento" class="form-control">
                            <?php foreach ($cargos as $valor):?>
                                <option value="<?php echo $valor['nombre_cargo']?>"> <?php echo $valor['nombre_cargo'] ?> </option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Primer_nombre">Primer nombre</label>
                        <input type="text" class="form-control" id="Primer_nombre" name="Primer_nombre" required>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="primer_apellido">Digite el primer apellido</label>
                        <input type="text" class="form-control" id="Primer_apellido" name="Primer_apellido" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contrasena">Digite una contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="Contrasena" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ver_contrasena" name="ver_contrasena">
                        <label class="form-check-label" for="gridCheck">
                            Ver contraseña
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="correo_electronico">Digite su correo electronico</label>
                        <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" required>
                    </div>
                </div>
            </div>
            
        
        <input type="submit" value="Registrar" name="Registrar" class="btn btn-outline-success">
        <input type="submit" value="Eliminar" name="Eliminar" class="btn btn-outline-danger">
        <input type="submit" value="Modificar" name="Modificar" class="btn btn-outline-primary">
    </form>
    </div>
    

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Numero de identificacion</th>
      <th scope="col">Tipo de documento</th>
      <th scope="col">Nombre del cargo</th>
      <th scope="col">Primer nombre</th>
      <th scope="col">Primer apellido</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Correo electronico</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                foreach ($usuarios as $value) {
                    $N_documento = $value['N_documento'];
                    $Nombre_documento = str_replace(" ","&nbsp;",$value['Tipo_documento']);
                    $cargo = str_replace(" ","&nbsp;",$value['cargo']);
                    $Primer_nombre = $value['Primer_nombre'];
                    $Primer_apellido = $value['Primer_apellido'];
                    $contrasena = $value['contrasena'];
                    $correo = $value['correo_electronico'];
                    echo "<tr>";
                    echo "<td>".$value['N_documento']."</td>";
                    echo "<td>".$value['Tipo_documento']."</td>";
                    echo "<td>".$value['cargo']."</td>";
                    echo "<td>".$value['Primer_nombre']."</td>";
                    echo "<td>".$value['Primer_apellido']."</td>";
                    echo "<td>".$value['contrasena']."</td>";
                    echo "<td>".$value['correo_electronico']."</td>";
                    echo "<td><button type='button' class='btn btn-outline-warning' id='boton_seleccionar' onclick=$('#N_documento').val('".$N_documento."');$('#Primer_nombre').val('".$Primer_nombre."');$('#Primer_apellido').val('".$Primer_apellido."');$('#contrasena').val('".$contrasena."');$('#cargo').val('".$cargo."');$('#Nombre_documento').val('".$Nombre_documento."');$('#correo_electronico').val('".$correo."')>Seleccionar</button></td>";
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