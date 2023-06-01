<?php

include 'DB_config.php';
mysqli_select_db($con, $_SESSION['DBName']);
if ($_SESSION['username'] == "") {
	header("location:../logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
	</script>

	<title>Document</title>
</head>

<body>
	<div class="container-fluid mt-3">

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h4 class="m-0 font-weight-bold text-primary">Purchase Form</h4>
			</div>
			<div class="card-body">
				<div class="row d-flex justify-content-between">

					<div class="col">
						<h3 class="text-danger text-bold mx-2">Purchase(Inward)</h3>
					</div>
					<div class="d-flex col-lg-3">
						<label for="date"><small class="text mx-2" style="display:inline-block; white-space:nowrap;">Inward
								date:</small></label>
						<input type="date" class="form-control form-control-sm">
					</div>


					<div class="d-flex col-lg-3">
						<label for="date "><small class="text mx-2" style="display:inline-block; white-space:nowrap;">Purchase
								date:</small></label>
						<input type="date" class="form-control form-control-sm">
					</div>
				</div>
				<div class="row mt-2 d-flex justify-content-between">
					<div class="d-flex col-lg-7">
						<label><small class="text mx-2" style="display:inline-block; white-space:nowrap;">Supplier</small></label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="d-flex col-lg-3">
						<label for="date"><small class="text" style="display:inline-block; white-space:nowrap;">Supplier Bill No</small></label>
						<input type="text" class="form-control form-control-sm" style="margin-left:12px;">
					</div>


				</div>
				<div class="row mt-3 d-flex justify-content-between">
					<div class="d-flex col-lg-4">
						<label><small class="text mx-2" style="display:inline-block; white-space:nowrap;">By
								Hand</small></label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="d-flex col">
						<label><small class="text mx-2" style="display:inline-block; white-space:nowrap;">Vehicle</small></label>
						<input type="text" class="form-   form-control-sm">
					</div>
					<div class="d-flex col-lg-3">
						<label><small class="text mx-2" style="display:inline-block; white-space:nowrap;">Payment
								Type</small></label>
						<input type="text" class="form-control form-control-sm">
					</div>

				</div>
				<hr>

				<div class="row">
					<div class="col-lg-2">
						<label class="font-weight-bold">Item name</label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="col">
						<label class="mx-2 text-success font-weight-bold">HSN</label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="col">
						<label class="mx-2 text-success font-weight-bold">GST</label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="col-lg-2">
						<label><small class="font-weight-bold text-primary" style="display:inline-block; white-space:nowrap;">Batch No</small> </label>
						<input type="text" class="form-control form-control-sm text-primary">

					</div>
					<div class="col">
						<label class="font-weight-bold text-primary">Expiry</label>
						<input type="date" class="form-control form-control-sm">
					</div>
					<div class="col">
						<label class="font-weight-bold text-primary">Quantity</label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="col">
						<label class="font-weight-bold"><small style="display:inline-block; white-space:nowrap;">Non GST</small></label>
						<input type="text" class="form-control form-control-sm">
					</div>
					<div class="col">
						<label class="font-weight-bold"><small style="display:inline-block; white-space:nowrap;">With GST</small></label>
						<input type="text" class="form-control form-control-sm">
					</div>

					<div class="col">
						<label class="text-danger">(%)</label>
						<input type="text" class="form-control form-control-sm">

					</div>
					<div class="col">
						<label class="text-danger">Amt</label>
						<input type="text" class="form-control form-control-sm">

					</div>


				</div>
				<hr>

				<div class="row justify-content-between" style="margin-inline: 210px; margin-top: 14px;">


					<h6 class="font-weight-bold text-danger">Discount</h6>
					<h6 class="font-weight-bold text-danger ">Sales rate</h6>



				</div>

				<div class="row">
					<div class="col-lg-6 bg-red d-flex">

						<div class="col">
							<label class="text-danger">(%)</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-danger">Amt</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">Discount</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">Taxable</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">Tax Amt</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">Tot Amt</label>
							<input type="text" class="form-control form-control-sm">

						</div>

					</div>
					<div class="col-lg-6 bg-red d-flex">
						<div class="col">
							<label class="text-info">MRP</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">CASH</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">CREDIT</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label class="text-info">OUTLET</label>
							<input type="text" class="form-control form-control-sm">

						</div>
						<div class="col">
							<label for=""></label>
							<button class="btn btn-outline-secondary form-control">ADD ITEM</button>

						</div>

					</div>
				</div>

				<hr>

				<div class="d-flex justify-content-between">F
					<div style="width: 65%; margin-top:30px;">
						<table class="table table-bordered table-sm">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">First</th>
									<th scope="col">Last</th>
									<th scope="col">Handle</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td colspan="2">Larry the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div style="margin-top: 30px;" class="mx-4">
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>
						<div>

							<label for="">Sub Total</label>
							<input type="text">
						</div>

						<div class="mt-3">
							<button class="btn btn-primary">Save</button>
							<button class="btn btn-primary">Exit</button>
						</div>
					</div>

					<div>

					</div>


				</div>
			</div>

		</div>
	</div>

</body>

</html>