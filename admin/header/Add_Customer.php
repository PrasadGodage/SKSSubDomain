<?php
include('./header.php');

?>

<div class="row">
	<div class="col-xl">
		<div class="card mb-4">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0">Form for add Customer to Web</h5>
			</div>
			<div class="card-body">
				<form>
					<div class="mb-3">
						<label class="form-label" for="basic-default-fullname">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Username" />
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-company">Password</label>
						<input type="text" class="form-control" name="password" placeholder="password" />
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-email">Shopname</label>
						<input type="text" class="form-control" name="shopname" />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-phone">Mobile No</label>
						<input type="number" class="form-control phone-mask" name= "mobNum" />
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">Contact Person Name</label>
						<input type="text" name="person" class="form-control phone-mask" />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">Web Database Name</label>
						<input type="text" id="basic-default-phone" class="form-control phone-mask" />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">Database Password</label>
						<input type="text" id="basic-default-phone" class="form-control phone-mask"  />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">Install Date</label>
						<input type="date" id="basic-default-phone" class="form-control phone-mask"  />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">Install Amount</label>
						<input type="text" id="basic-default-phone" class="form-control phone-mask"  />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">AMC Date</label>
						<input type="date" id="basic-default-phone" class="form-control phone-mask"  />
						
					</div>
					<div class="mb-3">
						<label class="form-label" for="basic-default-message">AMC Amount</label>
						<input type="text" id="basic-default-phone" class="form-control phone-mask" />
						
					</div>
					<button type="submit" class="btn btn-primary">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>