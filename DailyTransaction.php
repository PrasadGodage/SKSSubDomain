<?php

include 'DB_config.php';
mysqli_select_db($con,  $_SESSION['DBName']);

$TotSales=0;
$CashSales=0;
$BankSales=0;
$CreditSales=0;
$TotPurchase=0;
$CushPurchase=0;
$BankPurchase=0;
$CreditPurchase=0;
$TotReceipt=0;
$CashReceipt=0;
$BankReceipt=0;
$TotPayment=0;
$CashPayment=0;
$BankPayment=0;

if($_SESSION['username']=="")
{
  header("location:../logout.php"); 
}




    if(isset($_SESSION['username']))
    {
            // $sqlC= "SELECT sum(`StkQty`)As TotQty,sum(`PurchaseValue`)As TotPur,sum(`MRPValue`)As TotMRP,sum(`CashValue`)As TotCash,sum(`CreditValue`)As TotCredit,sum(`OutletValue`)As TotOut FROM Stock ";

            $sqlC= "SELECT sum(`totSales`)As TotSales,sum(`cashSales`)As CashSales,sum(`bankSales`)As BankSales,sum(`creditSales`)As CreditSales,sum(`totPurchase`)As TotPurchase,sum(`cashPurchase`)As CushPurchase,sum(`bankPurchase`)As BankPurchase,sum(`creditPurchase`)As CreditPurchase,
            sum(`totReceipt`)As TotReceipt,sum(`cashReceipt`)As CashReceipt,sum(`bankReceipt`)AS BankReceipt,sum(`totPayment`)As TotPayment,sum(`cashPayment`)As CashPayment,sum(`bankPayment`)As BankPayment
            FROM `daily_transaction` WHERE DATE(TnDate) = Date(Now())" ;

        $result = mysqli_query($con,$sqlC);
        $rows = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 1)
        {
            // $TotQty=$rows['TotQty'];
            // $TotPur=$rows['TotPur'];
            // $TotMRP=$rows['TotMRP'];
            // $TotCash=$rows['TotCash'];
            // $TotCredit=$rows['TotCredit'];
            // $TotOut=$rows['TotOut'];

            $TotSales=$rows['TotSales'];
            $CashSales=$rows['CashSales'];
            $BankSales=$rows['BankSales'];
            $CreditSales=$rows['CreditSales'];
            $TotPurchase=$rows['TotPurchase'];
            $CushPurchase=$rows['CushPurchase'];
            $BankPurchase=$rows['BankPurchase'];
            $CreditPurchase=$rows['CreditPurchase'];
            $TotReceipt=$rows['TotReceipt'];
            $CashReceipt=$rows['CashReceipt'];
            $BankReceipt=$rows['BankReceipt'];
            $TotPayment=$rows['TotPayment'];
            $CashPayment=$rows['CashPayment'];
            $BankPayment=$rows['BankPayment'];

        }
        else
        {
            $TotSales=0;
            $CashSales=0;
            $BankSales=0;
            $CreditSales=0;
            $TotPurchase=0;
            $CushPurchase=0;
            $BankPurchase=0;
            $CreditPurchase=0;
            $TotReceipt=0;
            $CashReceipt=0;
            $BankReceipt=0;
            $TotPayment=0;
            $CashPayment=0;
            $BankPayment=0;
            
        }
    }


?>

<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <title>Soulsoft || SKS</title> 
       <?php include './header1.php';?>

       <link href="cust_css/ourclient-style.css" rel="stylesheet"/>
       <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    </head>
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

 <!-- Set The Date  -->
       <!-- <div class="col-md-12 col-sm-12 col-xs-12">
       
    </div>-->
    <br>
    <br>  
<!---------- end ----------->
<?php
 
    if(isset($_POST['ok']))
    {
        $new_date = date('Y-m-d', strtotime($_POST['date']));

            // $sqlC= "SELECT sum(`StkQty`)As TotQty,sum(`PurchaseValue`)As TotPur,sum(`MRPValue`)As TotMRP,sum(`CashValue`)As TotCash,sum(`CreditValue`)As TotCredit,sum(`OutletValue`)As TotOut FROM Stock ";

            $sqlC= "SELECT sum(`totSales`)As TotSales,sum(`cashSales`)As CashSales,sum(`bankSales`)As BankSales,sum(`creditSales`)As CreditSales,sum(`totPurchase`)As TotPurchase,sum(`cashPurchase`)As CushPurchase,sum(`bankPurchase`)As BankPurchase,sum(`creditPurchase`)As CreditPurchase,
            sum(`totReceipt`)As TotReceipt,sum(`cashReceipt`)As CashReceipt,sum(`bankReceipt`)AS BankReceipt,sum(`totPayment`)As TotPayment,sum(`cashPayment`)As CashPayment,sum(`bankPayment`)As BankPayment
            FROM `daily_transaction` WHERE TnDate='$new_date'" ;

        $result = mysqli_query($con,$sqlC);
        $rows = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 1)
        {
            // $TotQty=$rows['TotQty'];
            // $TotPur=$rows['TotPur'];
            // $TotMRP=$rows['TotMRP'];
            // $TotCash=$rows['TotCash'];
            // $TotCredit=$rows['TotCredit'];
            // $TotOut=$rows['TotOut'];

            $TotSales=$rows['TotSales'];
            $CashSales=$rows['CashSales'];
            $BankSales=$rows['BankSales'];
            $CreditSales=$rows['CreditSales'];
            $TotPurchase=$rows['TotPurchase'];
            $CushPurchase=$rows['CushPurchase'];
            $BankPurchase=$rows['BankPurchase'];
            $CreditPurchase=$rows['CreditPurchase'];
            $TotReceipt=$rows['TotReceipt'];
            $CashReceipt=$rows['CashReceipt'];
            $BankReceipt=$rows['BankReceipt'];
            $TotPayment=$rows['TotPayment'];
            $CashPayment=$rows['CashPayment'];
            $BankPayment=$rows['BankPayment'];

        }
        else
        {
            $TotSales=0;
            $CashSales=0;
            $BankSales=0;
            $CreditSales=0;
            $TotPurchase=0;
            $CushPurchase=0;
            $BankPurchase=0;
            $CreditPurchase=0;
            $TotReceipt=0;
            $CashReceipt=0;
            $BankReceipt=0;
            $TotPayment=0;
            $CashPayment=0;
            $BankPayment=0;
            
        }
    }

?>

<CENTER><h2><B>DAILY TRANSACTIONS DETAILS</B></h2></CENTER><BR><br>

<div class="col-md-12 col-sm-12 col-xs-12 p-3">
    <form class="form-horizontal" method="post">
        <div class="row">   
            <div class="form-horizontal">

                <div class="form-group col-md-12 col-xs-12">

                    <div class="col-md-4 col-xs-12">
                    </div>

                    <div class="col-md-1 col-xs-12">
                    <label class="control-label" for="date"><h4><strong>Date:</strong></h4></label>
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <input type="date" id="date" name="date" class="form-gruop float-right">
                    </div>
                    <div class="col-md-2 col-xs-12">
                    <input type="submit" class="btn btn-info mt-5" name="ok" value="SHOW TRANSACTION Data">      
                    </div>

                    <div class="col-md-3 col-xs-12">
                    </div>
                </div>
            </div>
        </div>    

        <!-- <div class="form-gruop float-right" style="margin-left:800px;">

          <label for="date"><h4><strong>Date:</strong></h4></label>
           <input type="date" id="date" name="date" class="form-gruop float-right"><Br>
            <input type="submit" class="btn btn-info mt-5" name="ok" value="SHOW TRANSACTION Data">      
        </div>   -->
        <br>
        <br> 
        <br>   
            <!-- <CENTER><h2><B>DAILY TRANSACTIONS</B></h2></CENTER><BR><br> -->

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="margin-bottom:20px; margin-left:30px;">

              <div class="col-md-2 col-xs-12">
                </div>
              
              <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="First group">
                <label class="control-label"><B><h4><strong>TOTAL</strong></h4></B></a></label> 
                </div>
              </div>
               <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Second group">
                <label class="control-label"><B><h4><strong>CASH</strong></h4></B></a></label>
                </div>
               </div>
               <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Third group">
                <label class="control-label"><B><h4><strong>BANK</strong></h4></B></a></label>
                </div>
               </div>
              <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Third group">
                 <label class="control-label"><B><h4><strong>CREDIT</strong></h4></B></a></label>
                </div>
              </div>
            </div>
      
            <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h4><strong>SALES</strong></h4></label>
                          </div>
                                <div class="col-md-2 col-xs-12">
                                <input id="TotSales" class="form-control" type="text" placeholder="" value="<?php echo $TotSales;?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="CashSales" class="form-control" type="text" placeholder="" value="<?php echo $CashSales;?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="BankSales" class="form-control" type="text" placeholder="" value="<?php echo $BankSales;?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="CreditSales" class="form-control" type="text" placeholder="" value="<?php echo $CreditSales;?>">  
                                </div> 
                      </div>
                  </div>
            </div>
            

            <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h4><strong>PURCHASE</strong></h4></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $TotPurchase;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="<?php echo $CushPurchase;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $BankPurchase;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="<?php echo $CreditPurchase;?>">
                          </div>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h4><strong>RECEIPT</strong></h4></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $TotReceipt;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="<?php echo $CashReceipt;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $BankReceipt;?>">
                          </div>
                          <!-- <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="">
                          </div> -->
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h4><strong>PAYMENT</strong></h4></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $TotPayment;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="<?php echo $CashPayment;?>">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="" value="<?php echo $BankPayment;?>">
                          </div>
                          <!-- <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="" value="">
                          </div> -->
                      </div>
                  </div>
            </div>


    </form>

</div> 
<!-- --------- Transaction Table end ------------------- -->
</section>

</body>
</html>

            <div class="border"></div>

            <?php include './footer1.php'; ?>

            <script>        
                 document.getElementById('date').valueAsDate = new Date();

                //         function myFunction() {
                //   alert("Hii");
                // }
            </script>
    
