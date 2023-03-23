<?php
include 'DB_config.php';
mysqli_select_db($con, $_SESSION['DBName']);
if($_SESSION['username']=="")
{
  header("location:../logout.php"); 
}
?>
<!doctype html>

<html lang="en">

     <head>

     <meta charset="UTF-8">

<title>Soulsoft || SKS</title> 
     <?php include './header1.php';?>

<link href="cust_css/ourclient-style.css" rel="stylesheet"/>

<body>
   <section class="service sec-padd2" style="background-color: #203364;padding: 20px 0 0px;margin-bottom: 10px;">
        <div class="container">
            <div class="section-title center" style="margin-bottom: 20px;">
            <h3 style="color: white;"><span style="text-transform:uppercase;">  <?php echo  $_SESSION['ShopName'] ; ?></span></h3> 
                <h5 style="font-weight:bolder;color: #d0d8f1;">SHETKARI KRUSHI SOFTWARE </h5>
                
            </div>              
        </div>
    </section> 


          <?php

               // $connect = mysqli_connect("localhost", "soulsoftin_root", "Prasad@321", "soulsoftin_SKS");
               $fromTimestamp =  date('d-m-Y');
               $toTimestamp = date('d-m-Y');
                $query = "SELECT `TnDate`,`totSales`,`cashSales`,`bankSales`,`creditSales`,`totPurchase`,`cashPurchase`,`bankPurchase`,`creditPurchase`,`totReceipt`,`cashReceipt`,`bankReceipt`,`totPayment`,`cashPayment`,`bankPayment` FROM `daily_transaction` WHERE `TnDate`>='$fromTimestamp' AND `TnDate`<='$toTimestamp'";
               //  echo  $fromTimestamp ;
               $result = mysqli_query($con, $query);

          ?>

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
                <div class="table-responsive">

                     <table id="customer_data" class="table table-striped table-bordered">

                          <thead>

                                <tr>

                                <th  style="padding-right:32px; padding-left:32px;">TnDate</th>

                                    <th>TotalSales</th>

                                    <th>CashSales</th>

                                    <th>BankSales</th>

                                    <th>CreditSales</th>

                                    <th>TotalPurchase</th>

                                    <th>CashPurchase</th>

                                    <th>BankPurchase</th>

                                    <th>CreditPurchase</th>

                                    <th>TotalReceipt</th>

                                    <th>CashReceipt</th>

                                    <th>BankReceipt</th>
                                    
                                    <th>TotalPayment</th>

                                    <th>CashPayment</th>

                                    <th>BankPayment</th>                        

                                </tr>

                            </thead>


          <?php

                           $i=0;

               while ($row = mysqli_fetch_array($result)) 
               {
            //         $msg="Dear ".$row["Name"]." Your current outstanding balance is ".$row["Balance"];          
            //    $new = str_replace(' ', '%20', $msg);
            
               $orgDate = $row["TnDate"];
               $newDate = date("d-m-Y", strtotime($orgDate));

               echo '

               <tr id="Table_Row">

               <td>' . $newDate . '</td>
 
               <td>' . $row["totSales"] . '</td>
 
               <td>' . $row["cashSales"] . '</td>
 
               <td>' . $row["bankSales"] . '</td>
 
               <td>' . $row["creditSales"] . '</td>
 
               <td>' . $row["totPurchase"] . '</td>
 
               <td>' . $row["cashPurchase"] . '</td>
 
               <td>' . $row["bankPurchase"] . '</td>
 
               <td>' . $row["creditPurchase"] . '</td>
  
               <td>' . $row["totReceipt"] . '</td>
 
               <td>' . $row["cashReceipt"] . '</td>
 
               <td>' . $row["bankReceipt"] . '</td>
 
               <td>' . $row["totPayment"] . '</td>
               
               <td>' . $row["cashPayment"] . '</td>
 
               <td>' . $row["bankPayment"] . '</td>
 
          </tr>
 

                    ';
            
            
                   
               }                   
          ?>

                     </table>

                </div>
                <a class="thm-btn" href="Dashboard_SKS.php" style="transition: none 0s ease 0s; line-height: 20px; border-width: 0px; margin: 0px; padding: 20px 38px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">GOTO DASHBOARD</a>
           </div>
               
           

     </body>


     <script>      
          //--------------------Script Used To Search Box-----------------------------
        //   function myFunction() 
        //   {
        //        var input, filter, table, tr, td, i, txtValue;

        //        input = document.getElementById("myInput");

        //        filter = input.value.toUpperCase();

        //        table = document.getElementById("customer_data");

        //        tr = table.getElementsByTagName("tr");

        //        for (i = 1; i < tr.length; i++) 
        //        {

        //             td = tr[i].getElementsByTagName("td")[1];
        //             if (td) 
        //             {
        //                  txtValue = td.textContent || td.innerText;

        //                  if (txtValue.toUpperCase().indexOf(filter) > -1) {

        //                  tr[i].style.display = "";

        //                  } else { tr[i].style.display = "none";}

        //             } 
        //        } 
        //   }


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



          /* #myInput {

          background-image: url('/css/searchicon.png');

          background-position: 10px 10px;

          background-repeat: no-repeat;

          width: 100%;

          font-size: 12px;

          padding: 12px 20px 12px 40px;

          border: 1px solid #ddd;

          margin-bottom: 12px;

          } */

     </style>


</html>
<div class="border"></div>

            


<?php include './footer1.php'; ?>
<script>        
        document.getElementById('fromdate').valueAsDate = new Date();
        document.getElementById('todate').valueAsDate = new Date();
</script>