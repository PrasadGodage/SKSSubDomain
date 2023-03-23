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
     <link href="css/ourclient-style.css" rel="stylesheet"/>

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

                $query = "SELECT * FROM customer ORDER BY Balance DESC";

               $result = mysqli_query($con, $query);

          ?>



               <title>Outstanding</title>

               <meta charset="utf-8">
               <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


              <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

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
                <h1 align="center">CUSTOMER OUT-STANDINGS</h3>
                <br />
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">              
               <!-- <input type="checkbox" Id="SelectAll"><label style=" font-size: 12px;margin-right: 10px;margin-left: 10px;margin-top: 10px;margin-bottom: 10px;">SELECT ALL</label>-->

                <div class="table-responsive">

                     <table id="customer_data" class="table table-striped table-bordered">

                          <thead style="font-weight: bolder;">

                               <tr>

                               <td>ID</td>

                                    <td>Name</td>

                                    <td>Contact</td>

                                    <td>Balance</td>

                                    <td>CrDr</td>

                          

                               </tr>

                          </thead>

          <?php

                           $i=0;

               while ($row = mysqli_fetch_array($result)) 
               {
                    $msg="Dear ".$row["Name"]." Your current outstanding balance is ".$row["Balance"];          
               $new = str_replace(' ', '%20', $msg);

               echo '

                    <tr id="Table_Row">

                         <td>' . $row["Id"] . '</a></td>

                         <td>' . $row["Name"] . '</td>

                         <td>' . $row["Contact"] . '</td>

                         <td>' . $row["Balance"] . '</td>

                         <td>' . $row["CrDrType"] . '</td>



                    </tr>

                    ';
               }                   
          ?>

                     </table>

                </div>
                <a class="thm-btn" href="Dashboard_SKS.php" style="transition: none 0s ease 0s; line-height: 20px; border-width: 0px; margin: 0px; padding: 20px 38px; letter-spacing: 0px; font-weight: 400; font-size: 14px;">GOTO DASHBOARD</a>
               
           </div>
               
           

     </body>
<!--
                              <td style="text-align: center;"><input type="checkbox" class="Chkbox" Id="Chk_'.$i.'" /></td>

                         <td><a href="https://api.whatsapp.com/send?phone=91'.$row["Contact"].'&text='.$new.'" class="fa fa-whatsapp" style="font-size:18px;color:green"></a></td>

                         <td><a href="#" class="fas fa-sms" style="font-size:18px;color:Blue"></a></td>
          -->

     <script>      
          //--------------------Script Used To Search Box-----------------------------
          function myFunction() 
          {
               var input, filter, table, tr, td, i, txtValue;

               input = document.getElementById("myInput");

               filter = input.value.toUpperCase();

               table = document.getElementById("customer_data");

               tr = table.getElementsByTagName("tr");

               for (i = 1; i < tr.length; i++) 
               {

                    td = tr[i].getElementsByTagName("td")[1];
                    if (td) 
                    {
                         txtValue = td.textContent || td.innerText;

                         if (txtValue.toUpperCase().indexOf(filter) > -1) {

                         tr[i].style.display = "";

                         } else { tr[i].style.display = "none";}

                    } 
               } 
          }



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



          #myInput {

          background-image: url('/css/searchicon.png');

          background-position: 10px 10px;

          background-repeat: no-repeat;

          width: 100%;

          font-size: 12px;

          padding: 12px 20px 12px 40px;

          border: 1px solid #ddd;

          margin-bottom: 12px;

          }

     </style>


</html>


<div class="border"></div>

            


<?php include './footer1.php'; ?>







