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
      
        // $orgDate = date('Y-m-d');
        // $newDate = date("d-m-Y", strtotime($orgDate));  
        // echo "New date format is: ".$newDate. " (MM-DD-YYYY)";
            // $sqlC= "SELECT sum(`StkQty`)As TotQty,sum(`PurchaseValue`)As TotPur,sum(`MRPValue`)As TotMRP,sum(`CashValue`)As TotCash,sum(`CreditValue`)As TotCredit,sum(`OutletValue`)As TotOut FROM Stock ";

            $sqlC= "SELECT sum(`totSales`)As TotSales,sum(`cashSales`)As CashSales,sum(`bankSales`)As BankSales,sum(`creditSales`)As CreditSales,sum(`totPurchase`)As TotPurchase,sum(`cashPurchase`)As CushPurchase,sum(`bankPurchase`)As BankPurchase,sum(`creditPurchase`)As CreditPurchase,
            sum(`totReceipt`)As TotReceipt,sum(`cashReceipt`)As CashReceipt,sum(`bankReceipt`)AS BankReceipt,sum(`totPayment`)As TotPayment,sum(`cashPayment`)As CashPayment,sum(`bankPayment`)As BankPayment
            FROM `daily_transaction` WHERE DATE(TnDate) = Date(Now())" ;

        $result = mysqli_query($con,$sqlC);
        $rows = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 1)
        {


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

       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>   



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
  
<?php

 $new_date = date('d-m-Y');
 $query = "SELECT `TnDate`,`totSales`,`cashSales`,`bankSales`,`creditSales`,`totPurchase`,`cashPurchase`,`bankPurchase`,`creditPurchase`,`totReceipt`,`cashReceipt`,`bankReceipt`,`totPayment`,`cashPayment`,`bankPayment` FROM `daily_transaction` WHERE `TnDate`>='$new_date'";
//   echo $new_date ;
  $result = mysqli_query($con, $query);
?>

<section class="why-chooseus">

    <div class="container">

        <div class="row">

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
            <div class="col-md-12 col-sm-12 col-xs-12">

                <form class="form-horizontal" method="post" style="padding-left:30px; padding-right:30px;">

                    <CENTER><h2><B>DAILY TRANSACTIONS DETAILS</B></h2></CENTER><BR>

            
                        <!-- <div class="row">   
                            <div class="form-horizontal"> -->

                            <div class="form-group" style="margin-left:70px;">

                                <!-- <div class="col-sm-1 col-xs-1">
                                    </div> -->

                                <div class="col-sm-1 col-xs-2" style="padding:7px;">
                                <label class="control-label" for="date"><strong style="font-size: 17px;"> Date:</strong></label>
                                </div>
                                <div class="col-sm-2 col-xs-8" style="padding:7px;">
                                
                                <!-- <input type="date" id="date" name="date" class="form-gruop float-right" data-date-format="DD MMMM YYYY" value="<?php echo $newDate;?>"> -->
                                
                                <input class="date form-control" style="width: 150px;font-size: 17px;" type="text" name="date" id="date" class="form-gruop float-right" value=<?php echo date("d-m-Y");?>> 
                            
                            </div>

                            <!-- <div class="col-xs-3"></div> -->

                            <div class="col-sm-3 col-xs-4" style="margin-top:7px;">
                                <input type="submit" class="btn btn-info mt-5" name="ok" value="SHOW TRANSACTION DATA"> 
                                
                                <!-- <Button class="btn btn-primary mt-4" id="AddItem" onclick="getitemdata('3-15-2023')">SHOW TRANSACTION DATA</Button> -->

                                </div>
                                <!-- <div class="col-sm-4 col-xs-3">
                                </div> -->
                            </div>
                            <!-- </div>
                        </div>     -->

                        <!-- <div class="form-gruop float-right" style="margin-left:800px;">

                        <label for="date"><h4><strong>Date:</strong></h4></label>
                        <input type="date" id="date" name="date" class="form-gruop float-right"><Br>
                            <input type="submit" class="btn btn-info mt-5" name="ok" value="SHOW TRANSACTION Data">      
                        </div>   -->
                
                        <!-- <CENTER><h2><B>DAILY TRANSACTIONS</B></h2></CENTER><BR><br> -->

                        <!-- <h3 class="text-center">Daily TRANSACTION FROM </h3><br> -->
                      

                        <?php 
                        if(isset($_POST['ok']))

                            {
                                $new_date = date('d-m-Y', strtotime($_POST['date']));
                            }
                
                        ?>
                    <hr>
                    <h3 class="text-center">DAILY TRANSACTION DETAILS OF DATE  <?php echo $new_date;?></h3>
                        <hr>

                    <div class="btn-toolbar text-center" role="toolbar" aria-label="Toolbar with button groups" style="padding:10px;">

                        <!-- <div class="col-sm-1 col-xs-4">
                            </div> -->
                        
                        <div class="col-sm-2 col-xs-3 text-center">
                        <!-- <div class="btn-group" role="group" aria-label="First group">
                            <label class="control-label"><B><h4><strong>TOTAL</strong></h4></B></a></label> 
                            </div> -->
                        </div>
                        <div class="col-sm-2 col-xs-3 text-center">
                            <div class="btn-group" role="group" aria-label="Second group">
                            <label class="control-label"><B><h4><strong>CASH</strong></h4></B></a></label>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-3 text-center">
                            <div class="btn-group" role="group" aria-label="Third group">
                            <label class="control-label"><B><h4><strong>BANK</strong></h4></B></a></label>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-3 text-center">
                            <div class="btn-group" role="group" aria-label="Third group">
                            <label class="control-label"><B><h4><strong>CREDIT</strong></h4></B></a></label>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-3">
                                        
                        </div>
                        </div>
                
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>SALES</strong></h4></label>
                                    </div>
                                            <!-- <div class="col-sm-2 col-xs-3">
                                            <input id="TotSales" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotSales;?>">
                                            </div> -->
                                            <div class="col-sm-2 col-xs-3">
                                                <input id="CashSales" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CashSales;?>">
                                            </div>
                                            <div class="col-sm-2 col-xs-3">
                                                <input id="BankSales" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $BankSales;?>">
                                            </div>
                                            <div class="col-sm-2 col-xs-3">
                                                <input id="CreditSales" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CreditSales;?>">  
                                            </div> 
                                            <div class="col-sm-2">
                                        
                                        </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>PURCHASE</strong></h4></label>
                                    </div>
                                    <!-- <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotPurchase;?>">
                                    </div> -->
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="flat" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CushPurchase;?>">
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $BankPurchase;?>">
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="flat" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CreditPurchase;?>">
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>RECEIPT</strong></h4></label>
                                    </div>
                                    <!-- <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotReceipt;?>">
                                    </div> -->
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="flat" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CashReceipt;?>">
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $BankReceipt;?>">
                                    </div>
                                    <div class="col-sm-4 col-xs-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>PAYMENT</strong></h4></label>
                                    </div>
                                    <!-- <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotPayment;?>">
                                    </div> -->
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="flat" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $CashPayment;?>">
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $BankPayment;?>">
                                    </div>
                                    <div class="col-sm-4 col-xs-3">
                
                                    </div>
                                </div>
                            </div>
                        </div>
                            <br>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">

                                    <div class="col-sm-4 col-xs-4 text-center">
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <label class="control-label" style="margin-left:60px;"><B><h3><strong>TOTAL</strong></h3></B></a></label> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">

                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>SALES</strong></h4></label>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                            <input id="TotSales" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotSales;?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">

                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>PURCHASE</strong></h4></label>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotPurchase;?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">

                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>RECEIPT</strong></h4></label>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotReceipt;?>">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">

                                    <div class="col-sm-2 col-xs-3">
                                        <label class="control-label"><h4><strong>PAYMENT</strong></h4></label>
                                    </div>
                                    <div class="col-sm-2 col-xs-4">
                                        <input id="percentage" class="form-control" style="font-size: 15px;" type="text" placeholder="" value="<?php echo $TotPayment;?>">
                                    </div>

                                </div>
                            </div>
                    </div>

                </form>

            </div> 

        </div>
    </div> 
        <!-- --------- Transaction Table end ------------------- -->
</section>

                <script type="text/javascript">  
                    $('.date').datepicker({  
                    format: 'dd-mm-yyyy'  
                    });  
                </script>  

                    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                        <script>



                    function getitemdata(TnDate)
                    {

                    alert(TnDate);
                    $.ajax({
                        
                            url: "ItemBackend.php",
                            type: "POST",
                            data: {
                                
                            // data from file : data to file 
                            TnDate:TnDate,
                            },
                            success: function(data) {
                            console.log(data);
                            // $('#dataholder').html(data);
                            var Date = JSON.parse(data);


                            //$('#TnDate').val(TnDate);
                            $('#TotSales').val(Date.TotSales);
                                $('#BankSales').val(Date.BankSales);
                                $('#CreditSales').val(Date.CreditSales);
                                $('#TotPurchase').val(Date.TotPurchase);
                                $('#CushPurchase').val(Date.CushPurchase);
                                $('#BankPurchase').val(Date.BankPurchase);
                                $('#SalesRate').val(Date.CreditPurchase); 
                                $('#TotReceipt').val(Date.TotReceipt);
                                $('#CashReceipt').val(Date.CashReceipt);  
                                $('#BankReceipt').val(Date.BankReceipt);
                                $('#TotPayment').val(Date.TotPayment); 
                                $('#CashPayment').val(Date.CashPayment);
                                $('#BankPayment').val(Date.BankPayment); 
                                // $('#updateItem').show();
                                $('#AddItem').hide();
                            },
                        });

                    } -->

                        <!-- </script> -->

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
    
