<?php
include('./header.php');

?>

<div class="card">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">
			<form class="form-horizontal" style="margin-left:20px;" method="post">
				<CENTER>
					<h2><B>AMC COLLECTION REPORT (PAID ONLY)</B></h2>
				</CENTER><BR>

				<div class="d-flex align-items-center justify-content-center">
					<input class="date form-control" style="width: 170px;font-size: 17px;" type="date" id="fromdate" name="fromdate" class="form-gruop" value=<?php echo date("d-m-Y"); ?>>
					<strong class="mx-3">to</strong>
					<input class="date form-control" style="width: 170px;font-size: 17px;" type="date" id="todate" name="todate" class="form-gruop" value=<?php echo date("d-m-Y"); ?>>
					<input style="font-size: 17px;" type="submit" name="data" class="btn btn-primary btn-sm mx-3" value="Search">
				</div>



			</form>
		</div>
	</div>



	<?php
	if (isset($_POST['data'])) {

		$fromTimestamp = date('Y-m-d', strtotime($_POST['fromdate']));
		$toTimestamp = date('Y-m-d', strtotime($_POST['todate']));

		$query = "SELECT *
		FROM onlyamccustomer
		WHERE Amc_date >='$fromTimestamp' AND Amc_date <= '$toTimestamp' AND status = 0";


		$result = mysqli_query($con, $query);
	}



	?>

	<div class="table-responsive text-nowrap">
		<table class="table table-bordered mx-4" id="customer_data">
			<thead>
				<tr>
					<th>Customer ID</th>

					<th>Shop name</th>
					<th>Customer name</th>
					<th>AMC Date</th>
					<th>AMC Amount</th>

					<th>Installation Date</th>

				</tr>
			</thead>
			<!-- <tbody class="table-border-bottom-0">

				</tbody> -->

			<?php

			$i = 0;

			while ($row = mysqli_fetch_array($result)) {

				echo '

<tr id="Table_Row">

<td>' . $row["id"] . '</td>

<td>' . $row["ShopName"] . '</td>

<td>' . $row["CustomerName"] . '</td>

<td>' . $row["Amc_date"] . '</td>

<td>' . $row["Amc_amt"] . '</td>

<td>' . $row["Install_date"] . '</td>

</tr>


';
			}
			?>







		</table>
	</div>
</div>