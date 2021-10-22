<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>

    </header>
    <main>
        <h1 class="titulo">Inicio de sesion</h1>
        <div class="container">
            <form>
               <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="N_documento">Numero de documento</label>
                        <input type="number" class="form-control" id="N_documento" name="N_documento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="contrasena">Password</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena">
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ver_contrasena" name="ver_contrasena">
                        <label class="form-check-label" for="gridCheck">
                        Ver contraseña
                        </label>
                    </div>
                </div>
                </div>
                
<div class="container padre-botones">
<div class="form-row">
    <div class="form-group col-md-12">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">
  Terminos y condiciones
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terminos y condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Acepta usted los terminos del centro de salud senasoft
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
    </div>
</div>
       
</div>

    <div class="container padre-botones">
        <input class="btn btn-outline-primary boton" type="submit" value="Iniciar_sesion" name="Iniciar_sesion">
        <a class="btn btn-outline-warning" href="../controlador/C_registrarse.php" role="button">Registrarte aqui</a>
    </div>
            </form>
        </div>
        
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