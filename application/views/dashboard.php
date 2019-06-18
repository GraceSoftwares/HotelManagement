<!DOCTYPE html>
<html lang= "en" >
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="../assets/css/fonts.min.css" media="all">
    <!-- Fonts and icons -->

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
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/atlantis.css">   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js"></script>
	<script src="<?php echo base_url(); ?>js/plugin/webfont/webfont.min.js"></script>
	<script src="<?php echo base_url(); ?>js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/core/bootstrap.min.js"></script>

	<script src="<?php echo base_url(); ?>js/plugin/chart.js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<script type='text/javascript' src='<?php echo base_url(); ?>js/circles.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>js/abstract.js'></script>
</head>
<body>
	<div class="wrapper">
			<div class="main-header">
					<!-- Logo Header -->
					<div class="logo-header" data-background-color="blue">
						<a href="index.html" class="logo">
							<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
						</a>
						<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<i class="icon-menu"></i>
							</span>
						</button>
						<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
						<div class="nav-toggle">
							<button class="btn btn-toggle toggle-sidebar">
								<i class="icon-menu"></i>
							</button>
						</div>
					</div>
					<!-- End Logo Header -->
		
					<!-- Navbar Header -->
					<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
						
						<div class="container-fluid">
							<div class="collapse" id="search-nav">
								<form class="navbar-left navbar-form nav-search mr-md-3">
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="submit" class="btn btn-search pr-1">
												<i class="fa fa-search search-icon"></i>
											</button>
										</div>
										<input type="text" placeholder="Search ..." class="form-control">
									</div>
								</form>
							</div>
							<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
								<li class="nav-item toggle-nav-search hidden-caret">
									<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
										<i class="fa fa-search"></i>
									</a>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-envelope"></i>
									</a>
									<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
										<li>
											<div class="dropdown-title d-flex justify-content-between align-items-center">
												Messages 									
												<a href="#" class="small">Mark all as read</a>
											</div>
										</li>
										<li>
											<div class="message-notif-scroll scrollbar-outer">
												<div class="notif-center">
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Jimmy Denis</span>
															<span class="block">
																How are you ?
															</span>
															<span class="time">5 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/chadengle.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Chad</span>
															<span class="block">
																Ok, Thanks !
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/mlane.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Jhon Doe</span>
															<span class="block">
																Ready for the meeting today...
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/talha.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="subject">Talha</span>
															<span class="block">
																Hi, Apa Kabar ?
															</span>
															<span class="time">17 minutes ago</span> 
														</div>
													</a>
												</div>
											</div>
										</li>
										<li>
											<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-bell"></i>
										<span class="notification">4</span>
									</a>
									<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
										<li>
											<div class="dropdown-title">You have 4 new notification</div>
										</li>
										<li>
											<div class="notif-scroll scrollbar-outer">
												<div class="notif-center">
													<a href="#">
														<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
														<div class="notif-content">
															<span class="block">
																New user registered
															</span>
															<span class="time">5 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
														<div class="notif-content">
															<span class="block">
																Rahmad commented on Admin
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-img"> 
															<img src="../assets/img/profile2.jpg" alt="Img Profile">
														</div>
														<div class="notif-content">
															<span class="block">
																Reza send messages to you
															</span>
															<span class="time">12 minutes ago</span> 
														</div>
													</a>
													<a href="#">
														<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
														<div class="notif-content">
															<span class="block">
																Farrah liked Admin
															</span>
															<span class="time">17 minutes ago</span> 
														</div>
													</a>
												</div>
											</div>
										</li>
										<li>
											<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
										</li>
									</ul>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
										<i class="fas fa-layer-group"></i>
									</a>
									<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
										<div class="quick-actions-header">
											<span class="title mb-1">Quick Actions</span>
											<span class="subtitle op-8">Shortcuts</span>
										</div>
										<div class="quick-actions-scroll scrollbar-outer">
											<div class="quick-actions-items">
												<div class="row m-0">
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-file-1"></i>
															<span class="text">Generated Report</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-database"></i>
															<span class="text">Create New Database</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-pen"></i>
															<span class="text">Create New Post</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-interface-1"></i>
															<span class="text">Create New Task</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-list"></i>
															<span class="text">Completed Tasks</span>
														</div>
													</a>
													<a class="col-6 col-md-4 p-0" href="#">
														<div class="quick-actions-item">
															<i class="flaticon-file"></i>
															<span class="text">Create New Invoice</span>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item dropdown hidden-caret">
									<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
										<div class="avatar-sm">
											<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
									</a>
									<ul class="dropdown-menu dropdown-user animated fadeIn">
										<div class="dropdown-user-scroll scrollbar-outer">
											<li>
												<div class="user-box">
													<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
													<div class="u-text">
														<h4>Hizrian</h4>
														<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
													</div>
												</div>
											</li>
											<li>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">My Profile</a>
												<a class="dropdown-item" href="#">My Balance</a>
												<a class="dropdown-item" href="#">Inbox</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Account Setting</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Logout</a>
											</li>
										</div>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
					<!-- End Navbar -->
			</div>
		
			<!-- Sidebar -->
			<div class="sidebar sidebar-style-2">			
					<div class="sidebar-wrapper scrollbar scrollbar-inner">
						<div class="sidebar-content">
							<div class="user">
								<div class="avatar-sm float-left mr-2">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
								<div class="info">
									<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
										<span>
											Hizrian
											<span class="user-level">Administrator</span>
											<span class="caret"></span>
										</span>
									</a>
									<div class="clearfix"></div>
		
									<div class="collapse in" id="collapseExample">
										<ul class="nav">
											<li>
												<a href="#profile">
													<span class="link-collapse">My Profile</span>
												</a>
											</li>
											<li>
												<a href="#edit">
													<span class="link-collapse">Edit Profile</span>
												</a>
											</li>
											<li>
												<a href="#settings">
													<span class="link-collapse">Settings</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<ul class="nav nav-primary">
								<li class="nav-section">
									<span class="sidebar-mini-icon">
										<i class="fa fa-ellipsis"></i>
									</span>
									<h4 class="text-section">Components</h4>
								</li>
								<li class="mx-4 mt-2">
									<a href="http://themekita.com/atlantis-bootstrap-dashboard.html" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="fa fa-sign-out"></i> </span>Sign Out</a> 
								</li>
							</ul>
						</div>
					</div>
			</div>
			<!-- End Sidebar -->

			<div class="main-panel" >
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
		    </div>
	</div>		
</body>
<script>
	

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