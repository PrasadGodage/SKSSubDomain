
<?php
include 'DB_config.php';
mysqli_select_db($con, $_SESSION['DBName']);
if($_SESSION['username']=="")
{
  header("location:../logout.php"); 
}
?>

<?php

$query = " SELECT `TnDate`, `totSales`, `cashSales`, `bankSales`, `creditSales` FROM `daily_transaction` ";
$result = mysqli_query($con,$query);

?>

<!doctype html>

<html lang="en">

     <head>

     <meta charset="UTF-8">

<title>Soulsoft || SKS</title> 
     <?php include './header1.php';?>

     <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Charts</title>
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
          title: 'My Daily Transaction'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


<link href="cust_css/ourclient-style.css" rel="stylesheet"/>

   <section class="service sec-padd2" style="background-color: #203364;padding: 20px 0 0px;margin-bottom: 10px;">
        <div class="container">
            <div class="section-title center" style="margin-bottom: 20px;">
            <h3 style="color: white;"><span style="text-transform:uppercase;">  <?php echo  $_SESSION['ShopName'] ; ?></span></h3> 
                <h5 style="font-weight:bolder;color: #d0d8f1;">SHETKARI KRUSHI SOFTWARE </h5>
                
            </div>              
        </div>
    </section> 
<!--

               <title>Outstanding</title>

               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

               <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

               <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

               <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

               <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

               <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
               <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

-->
     </head>
    

      <body>

           <br /><br />

           <div class="container">
                <!-- <h1 align="center">TRANSACTION HISTORY DETAILS</h3> -->

                <CENTER><h2><B>TRANSACTION CHARTS DETAILS</B></h2></CENTER><BR><br>

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


             <div class="container-fluid">
                <div class="">

                </div> 
             </div>



               <div id="piechart" style="width: 900px; height: 500px;"></div>

                <a class="thm-btn" href="Dashboard_SKS.php" style="transition: none 0s ease 0s; line-height: 20px; border-width: 0px; margin: 0px; padding: 20px 38px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">GOTO DASHBOARD</a>
           </div>
               
           

     </body>


     <script>   


          //------------------------Sript To used Select All----------------------------

          $(document).ready(function () {

               $('#SelectAll').change(function () {

               if (this.checked)

                         {

                              $('.Chkbox').prop('checked', true);

                         }else{

                              $('.Chkbox').prop('checked', false);

                         }

               });

          });

         

     </script>

     <style>

          #SelectAll{

          font-size: 12px;

          margin-right: 10px;

          margin-left: 10px;

          margin-top: 10px;

          margin-bottom: 10px;

          }



          #customer_data {

          border-collapse: collapse;

          width: 100%;

          border: 1px solid #ddd;

          font-size: 14px;

          }



          #customer_data th, #customer_data td {

          text-align: left;

          padding: 12px;

          }

     

          #customer_data tr {

          border-bottom: 1px solid #ddd;

          }



          #customer_data tr.header, #customer_data tr:hover {

          background-color: #f1f1f1;

          }

     </style>


</html>
<div class="border"></div>

            


<?php include './footer1.php'; ?>
<script>        
        document.getElementById('fromdate').valueAsDate = new Date();
        document.getElementById('todate').valueAsDate = new Date();
</script>