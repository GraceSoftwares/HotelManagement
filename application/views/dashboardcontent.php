<html lang= "en">
<head>
</head>
<body>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
				<h5 class="text-white op-7 mb-2">Property Name</h5>
			</div>
			<!--div class="ml-md-auto py-2 py-md-0">
				<a href="#" id="add" class="btn btn-primary btn-round"><span class="btn-label"><i class="fa fa-bar-chart"></i></span>Reports</a>
			</div-->
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row-card-no-pd">
		<div class="col-md-12">
			<div class='card'>
				<div class="card-body">
					<ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-booking-tab" data-toggle="pill" href="#pills-booking" role="tab" aria-controls="pills-booking" aria-selected="true">Today's Booking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-checkin-tab" data-toggle="pill" href="#pills-checkin" role="tab" aria-controls="pills-checkin" aria-selected="false">Today's Checkin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-checkout-tab" data-toggle="pill" href="#pills-checkout" role="tab" aria-controls="pills-checkout" aria-selected="false">Today's Checkout</a>
						</li>
					</ul>
					<div class="tab-content text-center mt-2 mb-3" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-booking" role="tabpanel" aria-labelledby="pills-booking-tab">
						</div>
						<div class="tab-pane fade " id="pills-checkin" role="tabpanel" aria-labelledby="pills-checkin-tab">
						</div>
						<div class="tab-pane fade " id="pills-checkout" role="tabpanel" aria-labelledby="pills-checkout-tab">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
	<div class="row-card-no-pd">
		<div class="col-md-12">
			<div class="card text-center">
				<div class="card-header">
					<h4 class="card-title">Customer Flow</h4>
				</div>
				<div class="card-body">
				<div id="chart-container">
					<canvas id="lineChart" style="display: block; height: 300px" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row row-card-no-pd">
	<div class="col-md-12">
		<div class="card text-center">
			<div class="card-header">
				<h4 class="card-title">Vaccant Rooms</h4>
			</div>
			<div class="card-body">
				<div id="vaccantrooms"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script>
	$(document).ready(function(){
		$('#pills-booking').load('<?php echo site_url('Controller/bookingtable') ?>');
		$('#pills-checkin').load('<?php echo site_url('Controller/checkintable') ?>');
		$('#pills-checkout').load('<?php echo site_url('Controller/checkouttable') ?>');
	});
	var lineChart = document.getElementById('lineChart').getContext('2d');
	var myLineChart = new Chart(lineChart, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: "Active Users",
				borderColor: "#1d7af3",
				pointBorderColor: "#FFF",
				pointBackgroundColor: "#1d7af3",
				pointBorderWidth: 2,
				pointHoverRadius: 4,
				pointHoverBorderWidth: 1,
				pointRadius: 4,
				backgroundColor: 'transparent',
				fill: true,
				borderWidth: 2,
				data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
			}]
		},
		options : {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels : {
					padding: 10,
					fontColor: '#1d7af3',
				}
			},
			tooltips: {
				bodySpacing: 4,
				mode:"nearest",
				intersect: 0,
				position:"nearest",
				xPadding:10,
				yPadding:10,
				caretPadding:10
			},
			layout:{
				padding:{left:15,right:15,top:15,bottom:15}
			}
		}
	});
	var vr = Circles.create({
		id:           'vaccantrooms',
		radius:       75,
		value:        80,
		maxValue:     100,
		width:        7,
		text:         function(value){return value + '%';},
		colors:       ['#eee', '#177dff'],
		duration:     400,
		wrpClass:     'circles-wrp',
		textClass:    'circles-text',
		styleWrapper: true,
		styleText:    true
	});
</script>
</html>