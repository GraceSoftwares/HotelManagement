<!DOCTYPE html>
<html lang= "en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Registration Form</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
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
	<link rel="stylesheet" href="<?php echo base_url();?>css/sheet.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/atlantis.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
						
    <script src="<?php echo base_url(); ?>js/plugin/webfont/webfont.min.js"></script>
    <script src="<?php echo base_url(); ?>js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/core/bootstrap.min.js"></script>

	<script src='<?php echo base_url(); ?>js/angular.js'></script>	
	<script src="<?php echo base_url(); ?>js/plugin/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url(); ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<script type='text/javascript' src='<?php echo base_url(); ?>js/circles.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>js/dropdown.js'></script>
	<script type='text/javascript' src="<?php echo base_url();?>js/angularservice.js"></script>
    <!--script type='text/javascript' src="<?php echo base_url();?>js/angularcontroller.js"></script-->

</head>

<body>

    <!--Registration form-->

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
		
			<div class="main-panel" ng-app="myForm">
					<div class="content" ng-controller="FormValidation as ctrl">
					<form ng-submit="ctrl.submit()" method="POST" name='frmCustomer' style="width: 100%;">
						<div class="panel-header bg-primary-gradient">
							<div class="page-inner py-5">
								<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
									<div>
										<h2 class="text-white pb-2 fw-bold">Registration Form</h2>
										<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="page-inner mt--5">
							<div class="card full-height">
							<div class="row mt--2">
								<div class="col-md-6">
										<div class="card-body">
											<div class="card-title"></div>
											<div class="justify-content-around pb-2 pt-4">
												    <div class="form-group" >
														<input type="text"  
														class="form-control"
														ng-model="ctrl.customer.name"
														name="txtName"
														pattern="[A-Za-z]{3,20}"
														title="Only Alphabets with maximum of 20 character"
														placeholder="Customer Name"
														ng-required='true'/>
													</div>
													<div class="form-group">
														<input type="tel" 
														class="form-control"
														ng-model="ctrl.customer.contact"
														name ="contact_num"
														pattern="[0-9+-]{1,12}"
														placeholder="Contact Number" 
														ng-required="true"/>
													</div>
													<div class="form-group">															<input type="email"  
														class="form-control"
														ng-model="ctrl.customer.email"
														name="email" 
														placeholder="Email"/>
													</div>
													<div class="form-group">
														<label for="property" >Property</label>
														<select  id="property"
														ng-model="selectedp" 
														ng-init="selectedp = names[0]" 
														ng-options="item for item in names"></select>
													</div>
											</div>
										</div>
								</div>
								<div class="col-md-6">
										<div class="card-body">
												<div class="card-title"> </div>
												<div class="justify-content-around pb-2 pt-4">
												<div class="form-group">
												    <div class="row">
													<div class="col-sm-2 align-self-center">
													<label class="text-section" for="in">Check in</label>
													</div>
													<div class="col-sm-10">
													<input id="in"
													class="form-control"
													type="date" 
													ng-model="customer.checkIn"
													name="datein" 
													ng-required="true"/><br>
													</div>
													</div>
												</div>
												<div class="form-group">
												    <div class="row">
													<div class="col-sm-2 align-self-center">
													<label for="out">Check out</label>
													</div>
													<div class="col-sm-10">
													<input id="out" 
													class="form-control"
													type="date" 
													ng-model="customer.checkOut"
													name="dateout" 
													ng-required="true"/><br>
													</div>
													</div>
												</div>
												<div class="form-group">
													<input type="number"
													class="form-control"
													ng-model="ctrl.customer.guestcount"
													placeholder="Guest" 
													pattern="[0-9]{1,12}" 
													ng-required="true" /><br>
												</div>
												<div class="form-group">
													<label for="gateway" >Gateway</label>
													<select id ="gateway"
													ng-init="selectedName = gateway[0]" 
													ng-model="selectedName" 
													ng-change="change()"
													ng-options="x for x in gateway"></select>
												</div> 
											</div>
										</div>
								</div>
								<div class="col-md-6">
									<div class="card-body">
										<div class="justify-content-around pb-2 pt-4">
												<div ng-show="needId"
												class="form-group">
													<input type="text"
													class="form-control"
													placeholder="Booking Id"
													pattern="[A-za-z0-9]{1,15}"
													ng-required="true"/>
												</div>
												<div class="form-group">
													<input type="number"
													class="form-control"
													placeholder="Price" 
													pattern="[0-9]" 
													ng-required="true"/>
												</div>
												<div class="form-group">
													<label for="nationality" >Nationality</label>
													<select id ="nationality"
													ng-init="selectedN = nationality[0]"
													ng-model="selectedN" 
													ng-options="x for x in nationality"></select>
												</div>
												<div class="form-group">
													<input type="text"
													class="form-control"
													ng-model="id.code"
													placeholder="ID Num"
													ng-required="true"/>
												</div>
													<div class="form-group">
													<input type="text"
													class="form-control"
													ng-model="id.type"
													placeholder="ID type"
													ng-required="true"/>
												</div>
										</div>	   
									</div>	
								</div>
								<div class="col-md-6">
									<div class="card-body">
										<div class="justify-content-around pb-2 pt-4">
										    <div class="form-group">
												<textarea type="text" 
												class="form-control"
												ng-model="id.address"
												placeholder="Address" 
												ng-required="true"></textarea>
											</div>
											<div class="form-group">
												<input type="tel" 
												class="form-control"
												ng-model="id.contact"
												placeholder="Contact" 
												ng-required="true"/>
											</div>
											<div class="form-group">
												<button type="submit"  class="btn btn-primary" >Save</button>
											</div>
										</div>	
									</div>	
								</div>
							</div>
							</div>
						</div>
					</form>	
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

			<!--div class="main-panel" >
					<div class="content">
							<div class="panel-header bg-primary-gradient">
								<div class="page-inner py-5">
									<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
										<div>
											<h2 class="text-white pb-2 fw-bold">Registration Form</h2>
											<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
										</div>
									</div>
								</div>
							</div>
							<div class="page-inner mt--5">
									<div ng-app="form" class="m-5 center-items" style="background-color: transparent;">
										<div class="card m-1" style="width: 100%">
											<div class="card-header">
												<h2 class="card-title text-center">Customer Details</h2>
											</div>
											<div class="center-items" style="background-color: transparent;">
												<form name='frmCustomer' ng-controller="validator" style="width: 100%; padding: 10px;">
													<div class="form-group" >
														<input type="text"  
														class="form-control"
														ng-model="customer.name"
														name="txtName"
														pattern="[A-Za-z]{3,20}"
														title="Only Alphabets with maximum of 20 character"
														placeholder="Customer Name"
														ng-required='true'/>
													</div>
													<div class="form-group">
														<input type="tel" 
														class="form-control"
														ng-model="customer.contact"
														name ="contact_num"
														pattern="[0-9+-]{1,12}"
														placeholder="Contact Number" 
														ng-required="true"/>
													</div>
													<div class="form-group">
														<input type="email"  
														class="form-control"
														ng-model="customer.email"
														name="email" 
														placeholder="Email"/>
													</div>
													<div class="form-group">
														<label class="text-section" for="in">Check in</label>
														<input id="in"
														class="form-control"
														type="date" 
														ng-model="customer.checkIn"
														name="datein" 
														ng-required="true"/><br>
													</div>
													<div class="form-group">
														<label for="out">Check out</label>
														<input id="out" 
														class="form-control"
														type="date" 
														ng-model="customer.checkOut"
														name="dateout" 
														ng-required="true"/><br>
													</div>
													<div class="form-group">
														<input type="number"
														class="form-control"
														ng-model="customer.guestCount"
														placeholder="Guest" 
														pattern="[0-9]{1,12}" 
														ng-required="true" /><br>
													</div>
													<div class="form-group">
														<label for="gateway" >Gateway</label>
														<select id ="gateway"
														ng-init="selectedName = gateway[0]" 
														ng-model="selectedName" 
														ng-change="change()"
														ng-options="x for x in gateway"></select>
													</div>
													<div ng-show="needId"
													class="form-group">
														<input type="text"
														class="form-control"
														placeholder="Booking Id"
														pattern="[A-za-z0-9]{1,15}"
														ng-required="true"/>
													</div>
													<div class="form-group">
														<input type="number"
														class="form-control"
														placeholder="Price" 
														pattern="[0-9]" 
														ng-required="true"/>
													</div>
													<div class="form-group">
														<label for="nationality" >Nationality</label>
														<select id ="nationality"
														ng-init="selectedN = nationality[0]"
														ng-model="selectedN" 
														ng-options="x for x in nationality"></select>
													</div>
													<div class="form-group">
														<input type="text"
														class="form-control"
														ng-model="id.code"
														placeholder="ID Num"
														ng-required="true"/>
													</div>
														<div class="form-group">
														<input type="text"
														class="form-control"
														ng-model="id.type"
														placeholder="ID type"
														ng-required="true"/>
													</div>
													<div class="form-group">
														<textarea type="text" 
														class="form-control"
														ng-model="id.address"
														placeholder="Address" 
														ng-required="true"></textarea>
													</div>
													<div class="form-group">
														<input type="tel" 
														class="form-control"
														ng-model="id.contact"
														placeholder="Contact" 
														ng-required="true"/>
													</div>
													<div class="form-group">
														<button class="btn btn-dark" type="submit">Save</button>
													</div>
												</form>
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
		    </div-->

	</div>	
</body>
</html>