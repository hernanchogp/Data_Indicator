<?php
  require_once("php/conexion.php");
  require_once("php/consulta.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard Informes</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/fun.js"></script>
</head>
<body>
    <header>
        <h4>Indicadores de ANS</h4>
    </header>
    <br>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <table class="table table-striped table-bordered table-sm">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th class="col-5">Indicador</th>
                  <th>Meta</th>
                  <th class="col-1">Cumplen</th>
                  <th class="col-1">Total</th>
                  <!--<th>Guardar</th>-->
                </tr>
              </thead>
              <tbody>
                <form action="php/actualizar.php" method="post">
                <?php      
                    $ind = 1;
                     while ($row = mysqli_fetch_array($result)){
                      echo '<tr>';
                      echo '<td><span>'.$row["id"].'</span></td>';
                      echo '<td><span>'.$row["indicador"].'</span></td>';
                      echo '<td><span>'.$row["meta"].'</span></td>';
                      //echo '<td><input type="number" class="form-control" id="dato" name="dato" placeholder='.$row[3].'></td>';
                      //echo '<td><input type="number" class="form-control tableroControl" id="calculo" name="calculo"  placeholder='.$row[4].'></td>';
                      echo '<input type="hidden" value="'.$row['id'].'" id="idForm_'.$ind .'" name="idForm_'.$ind .'">';
                      echo '<td><input type="number" class="form-control" name="cumplenForm_'.$ind .'" id="cumplenForm_'.$ind .'" value="'.$row['cumplen'].'"></td>';
                      echo '<td><input type="number" class="form-control" name="totalForm_'.$ind .'" id="totalForm_'.$ind .'" value="'.$row['total'].'"></td>';
                      echo "<td><a href=\"?id=".$row["id"]."\">Actualizar</a></td>";
                      echo '<td><input type="button" onclick="actualizaValor('.$ind.')" value="Guardar"></td>';
                      $ind++;
                      }      
                ?>
                <!--<input type="submit" value="Guardar">-->
                </form>
              </tbody>
            </table>  
          </div>
        </div>
    </div>
    <br>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
