<html lang="en">
<head>
	<script src='<?php echo base_url(); ?>assets/js/core/angular.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/dropdown.js'></script>
	<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/angularservice.js"></script>
</head>
<body>
<div ng-app="myForm">
<div ng-controller="formValidation as ctrl">
<form ng-submit="ctrl.submit()" method="POST" name='frmCustomer' style="width: 100%;">
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Registration Form</h2>
					<h5 class="text-white op-7 mb-2">Property Name</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--5">
		<div class="card full-height" >
			<div class="row mt--2">
							<div class="col-md-6">
								<div class="justify-content-around pb-2 pt-4">
									<div class="form-group" >
										<input type="text"  
										class="form-control"
										ng-model="ctrl.customer.name"
										name="txtName"
										pattern="[A-Za-z ]{3,20}"
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
									<div class="form-group">
										<input type="email"  
										class="form-control"
										ng-model="ctrl.customer.email"
										name="email" 
										placeholder="Email"/>
									</div>
									<div class="form-group">
										<label for="property" >Property</label>
										<select  id="property"
										ng-model="ctrl.customer.selectedp" 
										ng-init="ctrl.customer.selectedp = names[0]" 
										ng-options="item for item in names"></select>
									</div>
									<div class="form-group">
										<input type="text"  
										class="form-control"
										ng-model="ctrl.customer.roomtype"
										name="txtName"
										pattern="[A-Za-z]{3,30}"
										title="Only Alphabets with maximum of 30 character"
										placeholder="Room Type"
										ng-required='true'/>
									</div>
								</div>	
							</div>		
							<div class="col-md-6">
								<div class="justify-content-around pb-2 pt-4">
									<div class="form-group">
										<input type="number"
										class="form-control"
										ng-model="ctrl.customer.roomno"
										placeholder="Room No" 
										pattern="[0-9]{1,5}" 
										ng-required="true" />
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-2 align-self-center">
												<label class="text-section" for="in">Check in</label>
											</div>
											<div class="col-sm-10">
												<input id="in"
												class="form-control"
												type="date" 
												ng-model="ctrl.customer.checkIn"
												name="datein" 
												ng-required="true"/>
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
												ng-model="ctrl.customer.checkOut"
												name="dateout" 
												ng-required="true"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="number"
										class="form-control"
										ng-model="ctrl.customer.guest_count"
										placeholder="Guest" 
										pattern="[0-9]{1,12}" 
										ng-required="true" />
									</div>
									<div class="form-group">
										<label for="gateway" >Gateway</label>
										<select id ="gateway"
										ng-init="ctrl.customer.selectedName = gateway[0]" 
										ng-model="ctrl.customer.selectedName" 
										ng-change="change()"
										ng-options="x for x in gateway"></select>
									</div> 
								</div>
							</div>
							<div class="col-md-6">
								<div class="justify-content-around pb-2 pt-4">
									<div ng-show="needId"
									class="form-group">
										<input type="text"
										class="form-control"
										ng-model="ctrl.customer.booking_id" 
										placeholder="Booking Id"
										pattern="[A-za-z0-9]{1,15}"/>
									</div>
									<div class="form-group">
										<input type="number"
										class="form-control"
										placeholder="Price" 
										name = "price"
										ng-model="ctrl.customer.price" 
										ng-blur="blurfn()" 
										ng-required="true"/>
									</div>
									<div class="form-group">
										<label for="nationality" >Nationality</label>
										<select id ="nationality"
										ng-init="ctrl.customer.selectedN = nationality[0]"
										ng-model="ctrl.customer.selectedN" 
										ng-options="x for x in nationality"></select>
									</div>
									<div class="form-group">
										<input type="text"
										class="form-control"
										ng-model="ctrl.customer.id_num"
										placeholder="ID Num"
										ng-required="true"/>
									</div>
									<div class="form-group">
										<input type="text"
										class="form-control"
										ng-model="ctrl.customer.id_type"
										placeholder="ID type"
										ng-required="true"/>
									</div>
								</div>	   
							</div>
							<div class="col-md-6">
								<div class="justify-content-around pb-2 pt-4">
									<div class="form-group">
										<input type="number"
										class="form-control"
										ng-model="ctrl.customer.days"
										placeholder="Days" 
										pattern="[0-9]{1,3}" 
										ng-required="true" />
									</div>
									<div class="form-group">
										<input type="number"
										class="form-control"
										ng-model="ctrl.customer.extra"
										placeholder="Additional Cost" 
										pattern="[0-9]{1,5}" />
									</div>
									<div class="form-group">
										<textarea type="text" 
										class="form-control"
										ng-model="ctrl.customer.id_address"
										placeholder="Address" 
										ng-required="true"></textarea>
									</div>
									<div class="form-group">
										<input type="tel" 
										class="form-control"
										ng-model="ctrl.customer.id_contact"
										placeholder="Contact" 
										ng-required="true"/>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-2 align-self-center">
												<button type="submit"  class="btn btn-primary" >Save</button>
											</div>
										</div>
									</div>
								</div>		
							</div>
			</div>
		</div>	
	</div>	
</form>
</div>
</div>
</body>
</html>