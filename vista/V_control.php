<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>

    </header>
    <main>
        <h1 class="titulo">Control de entrada y salidas de turnos</h1>
        <div class="container">
          <table class="table text-center">
            <thead>
                <tr>
                  <th scope="col">Turno</th>
                  <th scope="col">Letra identificadora</th>
                  <th scope="col">Horas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="col">Mañana</th>
                  <th scope="col">m</th>
                  <th scope="col">7 A.M - 1 P.M</th>
                </tr>
                <tr>
                  <th scope="col">Tarde</th>
                  <th scope="col">t</th>
                  <th scope="col">1 P.M - 7 P.M</th>
                </tr>
                <tr>
                  <th scope="col">Noche</th>
                  <th scope="col">n</th>
                  <th scope="col">7 P.M - 1 A.M</th>
                </tr>
                <tr>
                  <th scope="col">Libre</th>
                  <th scope="col">l</th>
                  <th scope="col">Sin turno</th>
                </tr>
            </tbody>
          </table>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Numero identificacion</th>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">8</th>
      <th scope="col">9</th>
      <th scope="col">10</th>
      <th scope="col">11</th>
      <th scope="col">12</th>
      <th scope="col">13</th>
      <th scope="col">14</th>
      <th scope="col">15</th>
      <th scope="col">15</th>
      <th scope="col">16</th>
      <th scope="col">17</th>
      <th scope="col">18</th>
      <th scope="col">19</th>
      <th scope="col">20</th>
      <th scope="col">21</th>
      <th scope="col">22</th>
      <th scope="col">23</th>
      <th scope="col">24</th>
      <th scope="col">25</th>
      <th scope="col">26</th>
      <th scope="col">27</th>
      <th scope="col">28</th>
      <th scope="col">29</th>
      <th scope="col">30</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach ($datos as $valor){
        echo "<tr>";
        echo "<th scope='row'>".$valor['id_personal']."</th>";
        echo "<th scope='row'>".$valor['1']."</th>";
        echo "<th scope='row'>".$valor['2']."</th>";
        echo "<th scope='row'>".$valor['3']."</th>";
        echo "<th scope='row'>".$valor['4']."</th>";
        echo "<th scope='row'>".$valor['5']."</th>";
        echo "<th scope='row'>".$valor['6']."</th>";
        echo "<th scope='row'>".$valor['7']."</th>";
        echo "<th scope='row'>".$valor['8']."</th>";
        echo "<th scope='row'>".$valor['9']."</th>";
        echo "<th scope='row'>".$valor['10']."</th>";
        echo "<th scope='row'>".$valor['11']."</th>";
        echo "<th scope='row'>".$valor['12']."</th>";
        echo "<th scope='row'>".$valor['13']."</th>";
        echo "<th scope='row'>".$valor['14']."</th>";
        echo "<th scope='row'>".$valor['15']."</th>";
        echo "<th scope='row'>".$valor['16']."</th>";
        echo "<th scope='row'>".$valor['17']."</th>";
        echo "<th scope='row'>".$valor['18']."</th>";
        echo "<th scope='row'>".$valor['19']."</th>";
        echo "<th scope='row'>".$valor['20']."</th>";
        echo "<th scope='row'>".$valor['21']."</th>";
        echo "<th scope='row'>".$valor['22']."</th>";
        echo "<th scope='row'>".$valor['23']."</th>";
        echo "<th scope='row'>".$valor['24']."</th>";
        echo "<th scope='row'>".$valor['25']."</th>";
        echo "<th scope='row'>".$valor['26']."</th>";
        echo "<th scope='row'>".$valor['27']."</th>";
        echo "<th scope='row'>".$valor['28']."</th>";
        echo "<th scope='row'>".$valor['29']."</th>";
        echo "<th scope='row'>".$valor['30']."</th>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>

<a href="../reportes/reporteCrono.php">Generar reporte</a>
    </main>
    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>