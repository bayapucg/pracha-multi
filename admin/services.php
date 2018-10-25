<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
            <div class="page-wrapper">
                <div class="content container-fluid bg-white">	
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Services</h4>
						</div>
					
					</div>
					<form id="defaultForm" method="post" class="m-b-30" action="services.php">
					
								<div class="row"> 
									<div class="col-md-12"> 
										<div class="form-group">
											<label>Paragraph</label>
											 <textarea class="form-control" rows="5" name="lastName"></textarea>
										</div>
									</div>
									
								</div>
	
								<div class="row"> 
								
								
									<div class="col-md-12">
									<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							Service
						</th>
						<th class="text-center">
							Title
						</th>
						<th class="text-center">
							Discription
						</th>
						
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
						<input type="text" name='name0'  placeholder='Name' class="form-control"/>
						</td>
						<td>
						<textarea class="form-control"  placeholder="Enter title here..."></textarea>
						</td>
						
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>	
									<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
									
									
									
									
									
									</div>
									
									
									
									
									
								</div>
								
								<div class="m-t-20 text-center">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
																	</div>
							</form>
						
						</div>
					</div>
				</div>
			</div>
			<script>
          $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='name"+i+"' type='text' placeholder='Enter Title Here' class='form-control '  /> </td><td><textarea   type='text' placeholder='Enter Discription Here'  class='form-control '></textarea></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
			
<?php include("footer.php"); ?>



