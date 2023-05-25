<?php
include('./header.php');

?>

<div class="card">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">
			<form class="form-horizontal" style="margin-left:20px;" method="post">
				<CENTER>
					<h2><B>AMC COLLECTION REPORT (OVERALL)</B></h2>
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

		$query = "SELECT * ,DATE_FORMAT(Amc_date, '%d-%m-%Y') AS amcDate,DATE_FORMAT(Install_date, '%d-%m-%Y') AS insDate
		FROM onlyamccustomer
		WHERE Amc_date >='$fromTimestamp' AND Amc_date <= '$toTimestamp'";


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
					<th>Status</th>
					<th>AMC Amount</th>

					<th>Installation Date</th>

				</tr>
			</thead>


			<?php



			$i = 0;
			function getStatusColor($status)
			{
				switch ($status) {
					case 0:
						return 'btn-danger';
					case 1:
						return 'btn-success';
				}
			}

			function getStatusValue($status)
			{
				switch ($status) {
					case 0:
						return 'Unpaid';
					case 1:
						return 'Paid';
				}
			}


			while ($row = mysqli_fetch_array($result)) { ?>

				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['ShopName']; ?></td>
					<td><?php echo $row['CustomerName']; ?></td>
					<td><?php echo $row['amcDate']; ?></td>
					<td><button class="btn <?php echo getStatusColor($row['status']); ?>"><?php echo getStatusValue($row['status']); ?></button>
					</td>
					<td><?php echo $row['Amc_amt']; ?></td>
					<td><?php echo $row['insDate']; ?></td>
				</tr>

			<?php
			}

			// while($){}



			?>












		</table>
	</div>
</div>