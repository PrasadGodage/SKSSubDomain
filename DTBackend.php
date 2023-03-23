
// $servername = "localhost";

// $username = "soulsoftin_root";

// $password = "soulshiv@1987#Soul";
// $dbName = "soulsoftin_SKS_Prasad";
// $con = mysqli_connect($servername, $username, $password, $dbName);


// date_default_timezone_set('Asia/Kolkata');

// if($con) 
// {
//     echo "Success"
// }


// include 'DB_config.php';

// ?>

<?php
include 'DB_config.php';
echo "test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include './header1.php';?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-12 col-sm-12 col-xs-12 shadow p-3">
        <form class="form-horizontal" style="margin-left:20px;">        
            <CENTER><h3><B>DAILY TRANSACTIONS</B></h3></CENTER><BR>

              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="margin-bottom:10px;">

              <div class="col-md-2 col-xs-12">
                </div>
              
              <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="First group">
                 <button type="button" class="btn btn-secondary p-3"><a href="Stock.php"><B><h5><strong>TOTAL</strong></h5></B></a></button> 
                </div>
              </div>
               <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Second group">
                 <button type="button" class="btn btn-secondary p-3"><a href="Stock.php"><B><h5><strong>CASH</strong></h5></B></a></button>
                </div>
               </div>
               <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Third group">
                 <button type="button" class="btn btn-secondary p-3"><a href="Stock.php"><B><h5><strong>BANK</strong></h5></B></a></button>
                </div>
               </div>
              <div class="col-md-2 col-xs-12 text-center">
                <div class="btn-group" role="group" aria-label="Third group">
                 <button type="button" class="btn btn-secondary p-3"><a href="Stock.php"><B><h5><strong>CREDIT</strong></h5></B></a></button>
                </div>
              </div>
              </div>
      
              <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h5><strong>SALES</strong></h5></label>
                          </div>
                          <?php

                        
                        
                          $date = $_POST['date']
                          echo $date;
                          
                          $query = "SELECT * FROM `daily_transaction` WHERE `TnDate` = $date";
                          $ok = mysqli_query($con,$query);
                          if(mysqli_num_rows($ok) > 0)
                          {
                              while($row_fetch_assoc($ok))
                              { ?>
                                <div class="col-md-2 col-xs-12">
                                <input id="percentage" class="form-control" type="text" placeholder="" Value="<?php echo $row['totSales']?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="flat" class="form-control" type="text" placeholder="" Value="<?php echo $row['cashSales']?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="percentage" class="form-control" type="text" placeholder="" Value="<?php echo $row['bankSales']?>">
                                </div>
                                <div class="col-md-2 col-xs-12">
                                    <input id="flat" class="form-control" type="text" placeholder=""
                                    Value="<?php echo $row['creditSales']?>">
                                </div>

                                <?php
                                
                              }
                          }
                          ?>
                          
                         

                          
                      </div>
                  </div>
              </div>
            

              <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h5><strong>PURCHASE</strong></h5></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h5><strong>RECEIPT</strong></h5></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="form-horizontal">
                      <div class="form-group col-md-12 col-xs-12">
                          <div class="col-md-2 col-xs-12">
                              <label class="control-label"><h5><strong>PAYMENT</strong></h5></label>
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="percentage" class="form-control" type="text" placeholder="">
                          </div>
                          <div class="col-md-2 col-xs-12">
                              <input id="flat" class="form-control" type="text" placeholder="">
                          </div>
                      </div>
                  </div>
              </div>


          </form>

     </div> 
</body>
</html>