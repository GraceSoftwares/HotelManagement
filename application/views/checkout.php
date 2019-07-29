<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
						<div>
							<h2 class="text-white pb-2 fw-bold">Check Out</h2>
							<h5 class="text-white op-7 mb-2">Property Name</h5>
						</div>
						<div class="ml-md-auto py-2 py-md-0">
							<form ng-submit="ctrl.roomsearch()" method="GET" >
								<div class="input-group">
									<div class="input-group-prepend">
										<button type="submit" class="btn btn-search">
											<i class="fa fa-search search-icon"></i>
										</button>
									</div>
									<input type="text" ng-model="ctrl.getroom.id" placeholder="Room No" class="form-control";>
								</div>
							</form>
						</div>
						</div>
					</div>
				</div>
	            <div class="page-inner mt--5">
					<!-- Customized Card -->
					<div class="row" ng-model="ctrl.info">
						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-header" style="background-image: url('../assets/img/roomtypeexm.png')">
								</div>
								<div class="card-body">
									<div class="user-profile text-center">
										<div class="name" ><span ng-bind="ctrl.info.name"></span></div>
										<div class="job"><span ng-bind="ctrl.info.gateway"></span></div>
										<div class="job">
										<i class="fa fa-users"></i>
										<span ng-bind="ctrl.info.noofguest"></span>
										</div>
										<div class="desc">Check-in/out - 23 Jun/30 Jun </div>
									</div>
								</div>
								<div class="card-footer">
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<div class="d-flex justify-content-between mt-2">
										<p class="text-muted mb-0">Vaccating In</p>
										<p class="text-muted mb-0"><span ng-bind="ctrl.info.daysleft"></span></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-post card-round">
								<img class="card-img-top" src="../assets/img/roomtypeexm.png" alt="Card image cap">
								<div class="card-body">
									<div class="d-flex">
										<div class="info-post ml-2">
											<p class="username"><span ng-bind="ctrl.info.roomtype"></span></p>
											<p class="text-muted">Roomtype</p>
										</div>
									</div>
									<div class="separator-solid"></div>
									<p class="card-category text-info mb-1"><a href="#">Comment</a></p>
									<div class="form-group">
										<textarea type="text" 
										class="form-control"
										placeholder="Text" 
										required="true"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-info card-annoucement card-round">
								<div class="card-body text-center">
									<div class="card-opening">&#x20b9;<span ng-bind="ctrl.info.totalprice"></span></div>
									<div class="card-desc">
									<div class="row user-stats text-center">
										<div class="col">
											<div class="number">&#x20b9;0</div>
											<div class="title">Amount Paid</div>
										</div>
										<div class="col">
											<div class="number">&#x20b9;<span ng-bind="ctrl.info.totalprice"></span></div>
											<div class="title">Amount Due</div>
										</div>
									</div>
									</div>
									<div class="card-detail">
										<div class="btn btn-light btn-rounded">Submit</div>
									</div>
								</div>
							</div>
							<div class="card card-round">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Offered Facilities</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<span class="stamp stamp-md bg-warning mr-3">
													<i class="fas fa-bed"></i>
												</span>										
											</div>
											<div class="info-user ml-3">
												<div class="username">Item</div>
												<div class="status">Quantity</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i>&#x20b9;</i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<span class="stamp stamp-md bg-danger mr-3">
													<i class="fas fa-utensils"></i>
												</span>
											</div>
											<div class="info-user ml-3">
												<div class="username">Item</div>
												<div class="status">quantity</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i>&#x20b9;</i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
											<span class="stamp stamp-md bg-success mr-3">
												<i class="fas fa-coffee"></i>
											</span>	
											</div>
											<div class="info-user ml-3">
												<div class="username">Item</div>
												<div class="status">quantity</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i>&#x20b9;</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

</body>
</html>