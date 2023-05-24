<div class="card">
	<div class="d-flex align-items-center">



		<div class="d-flex align-items-center">
			<form method="post">

				<div>

					<h5 class="card-header text-center">AMC Collection Report (Only Paid Customers)</h5>
				</div>

				<div class="mx-auto">
					<input class="date form-control" style="width: 170px;font-size: 17px;" type="date" id="fromdate" name="fromdate" class="form-gruop" value=<?php echo date("d-m-Y"); ?>>
					<strong class="mx-3">to</strong>
					<input class="date form-control" style="width: 170px;font-size: 17px;" type="date" id="todate" name="todate" class="form-gruop" value=<?php echo date("d-m-Y"); ?>>
					<input style="font-size: 17px;" type="submit" name="data" class="btn btn-primary btn-sm mx-3" value="Search">

				</div>

			</form>



			<!-- <div class="input-group">
			<div class="form-outline">
				<input type="search" id="form1" class="form-control" />
				<label class="form-label" for="form1">Search</label>
				<i class='bx bx-search-alt-2'></i>
				<button type="button" class="btn btn-primary">
					<i class='bx bx-search-alt-2'></i>
				</button>
			</div>
		</div> -->
		</div>
		<div>


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
					//         $msg="Dear ".$row["Name"]." Your current outstanding balance is ".$row["Balance"];          
					//    $new = str_replace(' ', '%20', $msg);

					$orgDate = $row["TnDate"];
					$newDate = date("d-m-Y", strtotime($orgDate));

					echo '

<tr id="Table_Row">

<td>' . $row["id"] . '</td>

<td>' . $row["ShopName"] . '</td>

<td>' . $row["CustomerName"] . '</td>

<td>' . $row["Amc_date"] . '</td>

<td>' . $row["Amc_amount"] . '</td>

<td>' . $row["Install_date"] . '</td>

</tr>


';
				}
				?>

				?>





			</table>
		</div>
	</div>
</div>