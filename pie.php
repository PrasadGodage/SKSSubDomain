<?php
include 'DB_config.php';
?>

<?php

$query = " SELECT `TnDate`, `totSales`, `cashSales`, `bankSales`, `creditSales` FROM `daily_transaction` ";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Charts</title>
<h1>CHART PRESENTATION</h1>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Date','Total Sales', 'Cash Sales', 'Bank Sales', 'Credit Sales'],
         
        <?php
          
            While($chart = mysqli_fetch_assoc($result))
            {               
                echo "['".$chart['TnDate']."',".$chart['totSales'].",".$chart['cashSales'].",".$chart['bankSales'].",".$chart['creditSales']."],";
            }
        ?>


        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
