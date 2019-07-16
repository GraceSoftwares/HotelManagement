<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="<?php echo base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css">
</head>
<body>
	<div class="wrapper" data-background-color="blue">				
		<div class="card text-center m-5">
		<h5 class="card-header"><?php echo $results->name?></h5>
			<div class="card-body">
				<table class="table">
					<tr>
						<tbody>
							<th scope="col">Contact</th>
							<td><?php echo $results->phone?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Address</th>
							<td>address</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Checkin</th>
							<td><?php echo $results->checkindate?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Checkout</th>
							<td><?php echo $results->checkoutdate?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Bookedby</th>
							<td><?php echo $results->bookedby?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Guest</th>
							<td><?php echo $results->noofguest?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Gateway</th>
							<td><?php echo $results->gateway?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Intime</th>
							<td>intime</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Outtime</th>
							<td>outtime</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Roomtype</th>
							<td><?php echo $results->roomtype?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Roomno</th>
							<td><?php echo $results->roomno?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Price</th>
							<td><?php echo $results->price?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Sgst tax</th>
							<td>SGSTPR</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Sgst price</th>
							<td>SGSTamt</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Cgst tax</th>
							<td>CGSTPR</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Cgst price</th>
							<td>CGSTamt</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Nights</th>
							<td><?php echo $results->totalnights?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Remarks</th>
							<td><?php echo $results->remarks?></td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Document Type</th>
							<td>type</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Document No</th>
							<td>no</td>
						</tbody>
					</tr>
					<tr>
						<tbody>
							<th scope="col">Status</th>
							<td><?php echo $results->status?></td>
						</tbody>
					</tr>
				</table>
			</div>
		</div> 
	</div>
</body>
</html>