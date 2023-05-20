<?php
include('./header.php');

?>


<div class="card">
	<div class="d-flex justify-content-between align-items-center mr-3 mb-3">

		<h5 class="card-header">Only AMC Customers</h5>
		<button class="btn btn-primary" style="height: 40px;" data-toggle="modal" data-target="#myModal">Add AMC Customer</button>
	</div>
	<div class="table-responsive text-nowrap">
		<table class="table table-bordered mx-4">
			<thead>
				<tr>

					<th class="text-primary"> <strong>Customer ID</strong> </th>
					<th class="text-primary col-2"> <strong>AMC Date</strong> </th>
					<th class="text-primary"> <strong>AMC Amount</strong> </th>
					<th class="text-primary"> <strong>Customer Name</strong> </th>
					<th class="text-primary"> <strong>Shop Name</strong> </th>
					<th class="text-primary"> <strong>Contact No</strong> </th>
					<th class="text-primary"> <strong>Address</strong> </th>
					<th class="text-primary"> <strong>Installation Date</strong></th>


				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				$selectnewusers = "SELECT * FROM `onlyamccustomer`";



				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['Amc_date']; ?></td>
							<td><?php echo $row['Amc_amt']; ?></td>
							<td><?php echo $row['CustomerName']; ?></td>
							<td><?php echo $row['ShopName']; ?></td>
							<td><?php echo $row['Mobile']; ?></td>
							<td><?php echo $row['Address']; ?></td>
							<td><?php echo $row['Install_date']; ?></td>
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



<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <form action="backend_AddAmcCustomer.php" method="POST">
          <div class="form-group">
            <label for="name">Customer Name:</label>
            <input type="text" class="form-control" id="name" name="cus_name" required>
          </div>
          <div class="form-group">
            <label for="email">Shop Name:</label>
            <input type="text" class="form-control" id="email" name="shop_name" required>
          </div>
          <div class="form-group">
            <label for="email">Address:</label>
            <input type="text" class="form-control" name="address" required>
          </div>
          <div class="form-group">
            <label for="email">Mobile:</label>
            <input type="number" class="form-control" name="mobile" required>
          </div>
          <div class="form-group">
            <label for="email">Installation Date:</label>
            <input type="date" class="form-control" id="email" name="in_date" required>
          </div>
          <div class="form-group">
            <label for="email">Installation Amount:</label>
            <input type="number" class="form-control" id="email" name="in_amount" required>
          </div>
          <div class="form-group">
            <label for="email">AMC Date:</label>
            <input type="date" class="form-control" id="email" name="amc_date" required>
          </div>
          <div class="form-group">
            <label for="email">AMC Amount:</label>
            <input type="number" class="form-control" id="email" name="amc_amount" required>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
