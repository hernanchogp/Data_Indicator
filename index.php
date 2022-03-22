<?php
  include("php/consulta.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/donut.css" rel="stylesheet">
    <title>Dashboard Informes</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    var donutChart = $('.donut-chart-js');

    if(donutChart.length > 0) {
      
      $.each(donutChart, function(index, item) {
        var donutChartPercentage = $(item).attr('data-percentage');
        var donutChartRadio = $(item).find('.donut-chart').attr("r");
        var donutChartValue = ( (100 - Number(donutChartPercentage)) * (6.28 * Number(donutChartRadio)) )/100;

        $(item).find('.donut-chart-value').html(donutChartPercentage + "%");
        $(item).find('circle.donut-chart').css('stroke-dashoffset', donutChartValue);
      });
    }

});
    </script>
</head>
<body>
    <header>
        <h4>Indicadores de ANS</h4>
        <p class="editar"><a href="editar.php">EDITAR VALORES</a></p>
    </header>
    <br>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md">
            <table class="table table-striped table-bordered table-sm">
              <thead class="thead-light">
                <tr>
                  <th>#</th>
                  <th class="col-3">Indicador</th>
                  <th>Meta</th>
                  <th class="col-1">Cumplen</th>
                  <th class="col-1">Total</th>
                  <th class="col-1">Ans</th>
                  <th></th>
                  <th class="col-3"> Gráficas</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                     while ($row = mysqli_fetch_array($result)){
                      echo '<tr>';
                      echo '<td><span>'.$row["id"].'</span></td>';
                      echo '<td><span>'.$row["indicador"].'</span></td>';
                      echo '<td><span>'.$row["meta"].'</span></td>';
                      echo '<td><p id="dato">'.$row["cumplen"].'</p></td>';
                      echo '<td><p id="calculo">'.$row["total"].'</p></td>';
                      echo '<td><p id="demo">'.$row["ans"].' %</p></td>';
                      echo '<td></td>';
                      echo '<td>';
                      //echo '<div id="chart_div" style="margin-left: 25%"><script> funcion(drawchart()) </script></div>';
                      if($row["ans"] < 95) {
                        echo '<div class="donut-chart-container donut-chart-js" data-percentage="'.$row["ans"].'">
                        <p class="donut-chart-value"></p>
                        <svg class="donut-chart-wrapper">
                          <circle class="donut-chart-bg" cx="140" cy="100" r="65"></circle>
                          <circle class="donut-chartR" cx="140" cy="100" r="65"></circle>
                        </svg>
                      </div>';
                      } else {
                      echo '<div class="donut-chart-container donut-chart-js" data-percentage="'.$row["ans"].'">
                      <p class="donut-chart-value"></p>
                        <svg class="donut-chart-wrapper">
                          <circle class="donut-chart-bg" cx="140" cy="100" r="65"></circle>
                          <circle class="donut-chart" cx="140" cy="100" r="65"></circle>
                        </svg>
                      </div>';
                      }
                      echo '</td>';
                      echo '</tr>';
                  }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <br>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
