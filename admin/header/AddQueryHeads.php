<?php
include('./header.php');

?>

<div class="row">
	<div class="col-xl">
		<div class="card mb-4">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Add Query Heads</h5>
			</div>
			<div class="card-body">
				<form action="backend_AddQueryHeads.php" method="POST">
					<div class="mb-3">
						<label class="form-label" for="basic-default-fullname">Query Head</label>
						<input type="text" class="form-control" name="head" placeholder="Username" />
					</div>
					
					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<h5 class="card-header">Query Heads</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>

					<th class="text-primary"> <strong>ID</strong> </th>
					<th class="text-primary col-2"> <strong>Query Heads</strong> </th>
					


				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				$selectnewusers = "SELECT * FROM `queryheads`";



				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['heads']; ?></td>
							
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