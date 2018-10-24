<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Nav</h4>
						</div>
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="addsalery.php">
					
								<div class="row"> 
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Upload Logo</label>
											<input type="file" class="form-control">
										</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Select Header Color</label>
											<select class="select"> 
												<option><span style=""></span>Blue</option>
												<option>Red</option>
												<option>Green</option>
												<option>Ornage</option>
												<option>Pink</option>
												<option>Pink</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-6"> 
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text" name="firstName">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text" name="firstName">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>  
									</div>
									<div class="col-md-6">  
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text">
										</div> 
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Create Salary</button>
																	</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
			
<?php include("footer.php"); ?>



