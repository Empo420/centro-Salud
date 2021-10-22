<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>

    </header>    
    <main>
        <div class="container">
            <form action="" method="post">
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
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Cargo">Seleccione el cargo</label>
                        <select name="Cargo" id="Cargo" class="form-control">
                            <?php foreach ($cargos as $cargo):?>
                            <option value="<?php echo $cargo['nombre_cargo']?>"><?php echo $cargo['nombre_cargo']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="primer_nombre">Digite el primer nombre</label>
                        <input type="text" class="form-control" id="primer_nombre" name="Primer_nombre" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="primer_apellido">Digite el primer apellido</label>
                        <input type="text" class="form-control" id="primer_apellido" name="Primer_apellido" required>
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
                <div class="container padre-botones">
                    <input type="submit" class="btn btn-outline-primary mr-4" value="Registrar" name="Registrar"> 
                    <a class="btn btn-outline-warning" href="../controlador/C_usuarioLogin.php" role="button">Log in</a>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
    
    <script src="../js/validacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>