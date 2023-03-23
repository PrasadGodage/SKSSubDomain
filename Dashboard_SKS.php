<?php
include 'DB_config.php';
mysqli_select_db($con,  $_SESSION['DBName']);
if($_SESSION['username']=="")
{
  header("location:../logout.php"); 
}

if(isset($_SESSION['username']))
{
  //echo $_SESSION['DBName'];
  $sqlC= "SELECT sum(Balance) AS CustOutStanding FROM `customer`";
  $result = mysqli_query($con,$sqlC);
  $rows = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result)>0) {
    $CustOutstanding=$rows['CustOutStanding'];
  }else{$CustOutstanding=0;}
//----------------------------------------------------------------------------
  $sqlC= "SELECT sum(`Balance`) AS SuppOutStanding FROM Supplier ";

  $result = mysqli_query($con,$sqlC);
  $rows = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) == 1) {$SuppOutstanding=$rows['SuppOutStanding'];}else{$SuppOutstanding=0;}


//----------------------------------------------------------------------------
  $sqlC= "SELECT sum(`StkQty`)As TotQty,sum(`PurchaseValue`)As TotPur,sum(`MRPValue`)As TotMRP,sum(`CashValue`)As TotCash,sum(`CreditValue`)As TotCredit,sum(`OutletValue`)As TotOut FROM Stock ";

  $result = mysqli_query($con,$sqlC);
  $rows = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) == 1) {
    $TotQty=$rows['TotQty'];
    $TotPur=$rows['TotPur'];
    $TotMRP=$rows['TotMRP'];
    $TotCash=$rows['TotCash'];
    $TotCredit=$rows['TotCredit'];
    $TotOut=$rows['TotOut'];

  }else{
    $TotQty=0;
    $TotPur=0;
    $TotMRP=0;
    $TotCash=0;
    $TotCredit=0;
    $TotOut=0;
  }
}
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Soulsoft || SKS</title> 
<?php include './header1.php';?>

<link href="cust_css/ourclient-style.css" rel="stylesheet"/></head>
<body>
   <section class="service sec-padd2" style="background-color: #203364;padding: 20px 0 0px;margin-bottom: 10px;">
        <div class="container">
            <div class="section-title center" style="margin-bottom: 20px;">
            <h3 style="color: white;"><span style="text-transform:uppercase;">  <?php echo  $_SESSION['ShopName'] ; ?></span></h3> 
                <h5 style="font-weight:bolder;color: #d0d8f1;">SHETKARI KRUSHI SOFTWARE </h5>
                
            </div>              
        </div>
    </section> 
  

<section class="why-chooseus">

<div class="container">

 <div class="row" style="margin-left:70px;">

        <div class="col-md-6 col-sm-12 col-xs-12">
          
        <form class="form-horizontal"  style="margin-top:100px;">        
            <CENTER><h3><B>OUTSTANDING</B></h3></CENTER><BR><BR><br>
            <div class="form-group">
            <label class="col-xs-4"><a href="SupplierOutstanding.php">Supplier Outstanding</a></label> 

              <div class="col-xs-4">
                <input type="text" class="form-control" id="SuppOutstanding" value="<?php echo $SuppOutstanding;?>" style="font-weight: bolder; "/>
              </div>
            </div>     

            <div class="form-group">
            <label class="col-xs-4"><a href="Outstanding.php">Customer Outstanding</a></label>   
              <div class="col-xs-4">
                <input type="text" class="form-control" id="CustOutstanding" value="<?php echo $CustOutstanding;?>" style="font-weight: bolder; "/>
              </div>
            </div>      
          </form>
        </div>


      <div class="col-md-6 col-sm-12 col-xs-12">
        <form class="form-horizontal" style="margin-top:80px;">
            <CENTER><h3><B>STOCK</B></h3><BR>
            <button type="button" ><a href="Stock.php">STOCK STATMENT</a></button> <br> 
            </CENTER>      
            <div class="form-group">
              <label class="col-xs-4">Quantity Stk</label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_Qty" value="<?php echo $TotQty;?>" style="font-weight: bolder; "/>
              </div>
            </div>       
            <div class="form-group">
              <label class="col-xs-4" style="color: #d33232;">Purchase Value</label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_Pur" value="<?php echo $TotPur;?>" style="color: #d33232; font-weight: bolder;"/>
              </div>
            </div>      
            <div class="form-group">
            <CENTER style="margin-bottom: 10px;">
            <label>Sales Valuation</label> <br> 
            </CENTER>  
              <label class="col-xs-4">MRP Rate </label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_MRP" value="<?php echo $TotMRP;?>" style="font-weight: bolder; "/>
              </div>
            </div>       
            <div class="form-group">
              <label class="col-xs-4"style="color: green;">Cash Rate</label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_Cash" value="<?php echo $TotCash;?>" style="color: green; font-weight: bolder; "/>
              </div>

            </div>  
            <div class="form-group">
              <label for="Outstanding" class="col-xs-4">Credit Rate</label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_Credit" value="<?php echo $TotCredit;?>" style="font-weight: bolder; "/>
              </div>
            </div>       
            <div class="form-group">
              <label for="Outstanding" class="col-xs-4">Outlet Rate</label>
              <div class="col-xs-4">
                <input type="text" class="form-control" id="txt_Outlet" value="<?php echo $TotOut;?>" style="font-weight: bolder; "/>
              </div>
            </div>          
         </form>
     </div>

</div>

</section>

</body>
</html>
            <div class="border"></div>

            


<?php include './footer1.php'; ?>



<script>

       

        $('#contact-form').on('submit', function (e) {



       e.preventDefault();

       var formdata = new FormData(this);

       $.ajax({



               url: 'contactus.php',



               type: 'POST',



               data: formdata,



               cache: false,



               contentType: false,



               processData: false,



               dataType: 'json',



               success: function (response) {

                   $('#form-messages').html('<p style="color:#17a05d">'+response.Message+'</p>');

              // console.log(response);

              //alert(response.Message);

               }



           });

   });

       

       

       

       </script>






