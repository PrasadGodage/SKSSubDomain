
<?php
include 'DB_config.php';
mysqli_select_db($con, $_SESSION['DBName']);
if($_SESSION['username']=="")
{
  header("location:../logout.php"); 
}
?>
<?php

  $query = "SELECT * FROM daily_transaction";
  $result = mysqli_query($con,$query);

    while($value = mysqli_fetch_assoc($result))
      {
          echo $value['totSales'].$value['cashSales'].$values['bankSales'].$values['creditSales'];
      }

?>

<!doctype html>

<html lang="en">

     <head>

     <meta charset="UTF-8">

<title>Soulsoft || SKS</title> 
     <?php include './header1.php';?>

<link href="cust_css/ourclient-style.css" rel="stylesheet"/>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        
       var data = google.visualization.arrayToDataTable([
          ['Sales', 'Daily Transaction'],
          <?php
           $query = "SELECT `TnDate`,`totSales`,`cashSales`,`bankSales`,`creditSales` FROM `daily_transaction` WHERE `TnDate`>='$fromTimestamp' AND `TnDate`<='$toTimestamp'";
          $fire = mysqli_query($con,$sql);
           while ( $result = mysqli_fetch_assoc($fire)) {
              echo"['".$result['totSales']."',".$result['cashSales'].",".$result['backSales'].",".$result['creditSales']."],";
           
           }

          ?>
        
        ]);

        var options = {
          title: 'Daily Transaction Sales',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

   <section class="service sec-padd2" style="background-color: #203364;padding: 20px 0 0px;margin-bottom: 10px;">
        <div class="container">
            <div class="section-title center" style="margin-bottom: 20px;">
            <h3 style="color: white;"><span style="text-transform:uppercase;">  <?php echo  $_SESSION['ShopName'] ; ?></span></h3> 
                <h5 style="font-weight:bolder;color: #d0d8f1;">SHETKARI KRUSHI SOFTWARE </h5>
                
            </div>              
        </div>
    </section> 

  </head>
  <body>
  <div class="container">
                <!-- <h1 align="center">TRANSACTION HISTORY DETAILS</h3> -->

                <CENTER><h2><B>TRANSACTION HISTORY DETAILS</B></h2></CENTER><BR><br>

                <br />
                <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">               -->
              <!--  <input type="checkbox" Id="SelectAll"><label style=" font-size: 12px;margin-right: 10px;margin-left: 10px;margin-top: 10px;margin-bottom: 10px;">SELECT ALL</label>-->
              <form class="form-horizontal" style="margin-left:20px;" method="post">
        <div class="row">   
            <div class="form-horizontal">

                <div class="form-group col-md-12 col-xs-12">

                    <div class="col-md-1 col-xs-12">
                    </div>

                    <div class="col-md-2 col-xs-12">
                    <label class="control-label" for="fromdate" style="Float:right;"><h4><strong>From Date:</strong></h4></label>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <input type="date" id="fromdate" name="fromdate" class="form-gruop"/>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <label class="control-label float-right" for="todate" style="Float:right;"><h4><strong>To Date:</strong></h4></label>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <input type="date" id="todate" name="todate" class="form-gruop"/>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <input type="submit" class="btn btn-info mt-5" name="ok" value="SHOW TRANSACTION Data" style="Float:left;">      
                    </div>

                    <div class="col-md-1 col-xs-12">
                    </div>

                </div>
            </div>
        </div>    
        <br> 
        <br>   
        </form> 
        <?php
            if(isset($_POST['ok']))
            {

                $fromTimestamp = date('Y-m-d', strtotime($_POST['fromdate']));
                $toTimestamp = date('Y-m-d', strtotime($_POST['todate']));

                $query = "SELECT * FROM `daily_transaction` WHERE date(`TnDate`) BETWEEN  Date'$fromTimestamp' AND Date' $toTimestamp'";

                $result = mysqli_query($con, $query);
            }
       ?>

          <div id="piechart" style="width: 900px; height: 500px;"></div>

                <a class="thm-btn" href="Dashboard_SKS.php" style="transition: none 0s ease 0s; line-height: 20px; border-width: 0px; margin: 0px; padding: 20px 38px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">GOTO DASHBOARD</a>
           </div>
               
           

  </body>
</html>