<?php
include('./header.php');

?>


<div class="card">
	<h5 class="card-header">Web Customers</h5>
	<div class="table-responsive text-nowrap">
		<table class="table table-bordered m-4">
			<thead>
				<tr>

					<th class="text-primary"> <strong>Customer ID</strong> </th>
					<th class="text-primary col-2"> <strong>AMC Date</strong> </th>
					<th class="text-primary"> <strong>AMC Amount</strong> </th>
					<th class="text-primary"> <strong>Customer Name</strong> </th>
					<th class="text-primary"> <strong>Contact No</strong> </th>
					<th class="text-primary"> <strong>Address</strong> </th>
					<th class="text-primary"> <strong>Installation Date</strong></th>


				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				$selectnewusers = "SELECT * ,DATE_FORMAT(AMC_Date, '%d-%m-%Y') AS amcDate,DATE_FORMAT(Install_Date, '%d-%m-%Y') AS insDate FROM `webcustomer` WHERE 1";



				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {

					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['ID']; ?></td>
							<td><?php echo $row['amcDate']; ?></td>
							<td><?php echo $row['AMC_Amt']; ?></td>
							<td><?php echo $row['Contact_PersonName']; ?></td>
							<td><?php echo $row['Contact_PersonMobile']; ?></td>
							<td><?php echo $row['Address']; ?></td>
							<td><?php echo $row['insDate']; ?></td>
						</tr>





				<?php
					}
				} else {
				}
				// while($){}



				?>


			</tbody>
		</table>
	</div>
</div>