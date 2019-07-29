<html lang= "en">
<head>
</head>
<body>
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Reports</h2>
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
					<ul class="nav nav-pills nav-secondary" id="pills-tab-reports" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-upcoming-tab" data-toggle="pill" href="#pills-upcoming" role="tab" aria-controls="pills-upcoming" aria-selected="true">Upcoming</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-ongoing-tab" data-toggle="pill" href="#pills-ongoing" role="tab" aria-controls="pills-ongoing" aria-selected="false">Ongoing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-completed-tab" data-toggle="pill" href="#pills-completed" role="tab" aria-controls="pills-completed" aria-selected="false">Completed</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-tax-tab" data-toggle="pill" href="#pills-tax" role="tab" aria-controls="pills-tax" aria-selected="false">Tax</a>
						</li>
					</ul>
					<div class="tab-content text-center mt-2 mb-3" id="pills-tabContent-reports">
						<div class="tab-pane fade show active" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
						</div>
						<div class="tab-pane fade " id="pills-ongoing" role="tabpanel" aria-labelledby="pills-ongoing-tab">
						</div>
						<div class="tab-pane fade " id="pills-completed" role="tabpanel" aria-labelledby="pills-completed-tab">
						</div>
						<div class="tab-pane fade " id="pills-tax" role="tabpanel" aria-labelledby="pills-tax-tab">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script>
    $(document).ready(function(){
		$('#pills-upcoming').load('<?php echo site_url('Controller/upcoming') ?>');
		$('#pills-ongoing').load('<?php echo site_url('Controller/ongoing') ?>');
		$('#pills-completed').load('<?php echo site_url('Controller/completed') ?>');
		$('#pills-tax').load('<?php echo site_url('Controller/tax') ?>');
	});
    //$('#booking-datatables').DataTable();
</script>
</html>