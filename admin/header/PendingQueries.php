<?php
include('./header.php');

?>

<div class="card">
	<h3 class="card-header">Pending Queries</h3>
	<div class="table-responsive text-nowrap">
		<table class="table table-bordered mx-4">
			<thead>
				<tr>

					<th class="text-primary"><strong>Customer ID</strong> </th>
					<th class="text-primary"><strong>AMC Date</strong> </th>

					<th class="text-primary"><strong>Customer Name</strong> </th>
					<th class="text-primary"><strong>Query</strong> </th>
					<th class="text-primary"><strong>Action</strong> </th>
					<th class="text-primary"><strong>Reply</strong> </th>


				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				$selectnewusers = "SELECT * FROM `queryproblem` WHERE 1";



				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['CustId']; ?></td>
							<td><?php echo $row['CustName']; ?></td>
							<td><?php echo $row['QueryDate']; ?></td>
							<td><?php echo $row['QueryHead']; ?></td>
							<td><?php echo $row['Message']; ?></td>
							<td><?php echo $row['']; ?></td>



							<th><button class="btn btn-primary">Button</button></th>



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