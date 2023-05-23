<?php
include('./header.php');
?>

<div class="card">
	<h5 class="card-header">AMC Collection Report Only (Paid Customers)</h5>

	<div class="table-responsive text-nowrap">
		<table class="table table-bordered mx-4">
			<thead>
				<tr>
					<th>Customer ID</th>

					<th>Shopname</th>
					<th>AMC Date</th>
					<th>AMC Amount</th>

					<th>Installation Date</th>
					<th>Status</th>
					<th>WhatsApp Message</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				<?php

				// 		$selectnewusers = "SELECT *
				// FROM webcustomer
				// WHERE `AMC_Date` >= CURDATE() AND `AMC_Date` <= DATE_ADD(CURDATE(), INTERVAL 7 DAY);";

				$selectnewusers = "SELECT * FROM onlyamccustomer
					WHERE Amc_date <= CURDATE() AND status = 1";

				// perform query against database in php
				$result = mysqli_query($con, $selectnewusers);



				// mysqli count rows in data base
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) { ?>
						<tr>
							<th><?php echo $row['id']; ?></th>
							<td><?php echo $row['ShopName']; ?></td>

							<td><?php echo $row['Amc_date']; ?></td>
							<td><?php echo $row['Amc_amt']; ?></td>
							<td><?php echo $row['Install_date']; ?></td>
							<td>
								<a class="btn btn-primary" href="sms:<?php echo $row['Mobile']; ?>">SMS</a>
							</td>

							<td><a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=<?php echo $row['Mobile']; ?>  &text=प्रिय ग्राहक, आपली  Renewal Date<?php echo $row["AMC_Date"]; ?> हि आहे. कृपया आपली रु. <?php echo $row["AMC_Amt"]; ?> दि. <?php echo $row["AMC_Date"]; ?> च्या अगोदर जमा करावी. हि विनंती - SOULSOFT INFOTECH PVT LTD. 8055798679">WhatsApp</a>
							</td>

							<!-- <td><a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=<?php echo $row["Mobile"]; ?> &text=प्रिय ग्राहक, आपली  Renewal Date<?php echo $row["AMC_Date"]; ?> हि आहे. कृपया आपली रु. <?php echo $row["AMC_Amt"]; ?> दि. <?php echo $row["AMC_Date"]; ?> च्या अगोदर जमा करावी. हि विनंती - SOULSOFT INFOTECH PVT LTD. 8055798679">WhatsApp</a></td> -->
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