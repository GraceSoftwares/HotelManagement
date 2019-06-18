
				<div class="content">
					<div class="panel-header bg-primary-gradient">
						<div class="page-inner py-5">
							<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
								<div>
									<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
									<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
								</div>
								<div class="ml-md-auto py-2 py-md-0">
										<a href="#" class="btn btn-white btn-border btn-round mr-2">Reports</a>
										<a href="<?php echo site_url('Controller/formPage') ?>" class="btn btn-secondary btn-round">Add Customer</a>
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
		        									<a class="nav-link active" href="#">Today's Bookings</a>
		    									</li>
		    									<li class="nav-item">
			        								<a class="nav-link" href="#">Today's Checkin</a>
			    								</li>
			    								<li class="nav-item">
		    	    								<a class="nav-link disabled" href="#">Today's Checkout</a>
		    									</li>
	    									</ul>
	    								</div>
	    								<div class="card-body">
		    								<h5 class="card-title">Special title treatment</h5>
		    								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
				</div>
				<footer class="footer">
						<div class="container-fluid">
							<nav class="pull-left">
								<ul class="nav">
									<li class="nav-item">
										<a class="nav-link" href="https://www.themekita.com">
											ThemeKita
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Help
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">
											Licenses
										</a>
									</li>
								</ul>
							</nav>
							<div class="copyright ml-auto">
								2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
							</div>				
						</div>
	    </footer>