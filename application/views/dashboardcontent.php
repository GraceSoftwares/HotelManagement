<html lang= "en">
<head>
	<script src="<?php echo base_url(); ?>js/plugin/chart.js/chart.min.js"></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>js/circles.js'></script>
</head>
<body>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
				<h5 class="text-white op-7 mb-2">Property Name</h5>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<!--a href="#" class="btn btn-white btn-border btn-round mr-2">Reports</a-->
				<a href="#" id="add" class="btn btn-primary btn-round"><span class="btn-label"><i class="fa fa-bar-chart"></i></span>Reports</a>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row-card-no-pd">
		<div class="col-md-12">
			<div class="card text-center">
				<div class="card-header">
					<ul class="nav nav-pills nav-primary card-header-pills">
						<li class="nav-item">
							<a class="nav-link active" href="#" id="tbo">Today's Bookings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" id="tci">Today's Checkin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#" id="tco">Today's Checkout</a>
						</li>
					</ul>
				</div>
				<div class="card-body" id="b">
					<!--h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p-->
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
		$('#b').load('<?php echo site_url('Controller/bookingtable') ?>');

	$("#tbo").click(function(){
		$("#tbo").addClass("active");
		$("#tci").removeClass("active");
		$("#tco").removeClass("active");
		$('#b').load('<?php echo site_url('Controller/bookingtable') ?>');
  	});
  	$("#tci").click(function(){
		$("#tci").addClass("active");
		$("#tbo").removeClass("active");
		$("#tco").removeClass("active");
    	$('#b').load('<?php echo site_url('Controller/checkintable') ?>');
  	});
  	$("#tco").click(function(){
		$("#tco").addClass("active");
		$("#tci").removeClass("active");
		$("#tbo").removeClass("active");
    	$('#b').load('<?php echo site_url('Controller/checkouttable') ?>');;
  	});

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
