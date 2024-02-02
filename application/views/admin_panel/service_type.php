 <!-- ============================================================== -->
 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
 	<!-- ============================================================== -->
 	<!-- Bread crumb and right sidebar toggle -->
 	<!-- ============================================================== -->
 	<div class="page-breadcrumb">
 		<div class="row">
 			<div class="col-7 align-self-center">
 				<div class="d-flex align-items-center">
 					<nav aria-label="breadcrumb">
 						<ol class="breadcrumb">
 							<li class="breadcrumb-item">
 								<a href="#" class="link">Home</a>
 							</li>
 							<li class="breadcrumb-item active" aria-current="page">Service Type </li>
 						</ol>
 					</nav>
 				</div>
 				<h4 class="page-title">Service Type </h4>
 			</div>
 			<div class="col-5 align-self-center text-right">
 				<ul class="list-inline mb-0">
 					<li class="list-inline-item"><i data-feather="refresh-cw"></i></li>
 					<li class="list-inline-item"><i data-feather="settings"></i></li>
 				</ul>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- End Bread crumb and right sidebar toggle -->
 	<!-- ============================================================== -->

 	<!-- ============================================================== -->
 	<!-- Container fluid  -->
 	<!-- ============================================================== -->
 	<div class="container-fluid">

 		<!-- row1 -->
 		<div class="row">
 			<div class="col-12">
 				<div class="card card-body">
 					<h4 class="card-title">Basic Forms</h4>
 					<!-- <h5 class="card-subtitle"> Bootstrap Elements </h5> -->
 					<div class="row">
 						<div class="col-sm-12 col-xs-12">
 							<form method="post" action="<?= base_url(''); ?>admin_panel/Service_type/datain">
 								<div class="form-group">
 									<label for="exampleInputEmail111">Service Type</label>
 									<input type="text" name="service_type" class="form-control" id="exampleInputEmail111">
 								</div>
 								<!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkbox1"
                                                    value="check">
                                                <label class="custom-control-label" for="checkbox1">Remember Me</label>
                                            </div>
                                        </div> -->
 								<div class="row button-group">
 									<div class="col-lg-1 ">
 										<!----------------------- this is not perfect code please recode  -->
 										<button type="submit" class="btn btn-success mr-2">Submit</button>
 									</div>
 							</form>
 							<div class="col-lg-1 ">

 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- end row1 -->



 	<div class="row">
 		<div class="col-12">
 			<div class="card">
 				<div class="card-body">
 					<h4 class="card-title">Your Data</h4>
 					<!-- <h6 class="card-subtitle">Use <code>.table-striped</code> to add zebra-striping to any
                                    table row within the <code>&lt;tbody&gt;</code>.</h6> -->
 				</div>
 				<div class="table-responsive">
 					<table class="table table-striped">
 						<thead>
 							<tr>
 								<th scope="col">No.</th>
 								<th scope="col">Service Type</th>
 								<th scope="col">Actions</th>
 							</tr>
 						</thead>
 						<tbody>


 							<?php $i = 1; ?>
 							<?php foreach ($user_data as $value) : ?>
 								<tr>
 									<td scope="row"><?php echo $i++; ?></td>
 									<td><?= $value->service_type ?></td>



 									<td>
 										<div class="row button-group">

 											<!-- <br> -->
 											<!-- <form method="POST" action="<= base_url(''); ?>admin_panel/Service_type/data_edit/<php echo $value->id; ?>"> -->
 											<!-- <button type="submit" class="btn waves-effect waves-light btn-success">Edit</button> -->
 											<form action="">
 												<div class="col-lg-12 col-md-4">
 													<button type="button" class="btn waves-effect waves-light btn-dark editbtn">Edit</button>
 												</div>
 											</form>
 									</td>

 								</tr>
 							<?php endforeach; ?>


 						</tbody>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>

 </div>
 <!-- ============================================================== -->
 <!-- End Container fluid  -->
 <!-- ============================================================== -->

 </div>

 <!-- Example: -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


 <script>
 	$(document).ready(function() {
 		$('.editbtn').click(function() {
 			$('#myModal').modal('show');

 			// Get the closest row to the clicked button
 			var $tr = $(this).closest('tr');

 			// Find the data in each cell of the row and store it in an array
 			var data = $tr.children('td').map(function() {
 				return $(this).text();
 			}).get();

 			// Now, you can access the data and populate the modal form fields
 			$('#editServiceType').val(data[1]); // Assuming Service Type is in the second column (index 1)

 			// If you need to access other columns' data, use the respective indices from the 'data' array

 			// For example, if you have another column with 'Actions' data and want to access it, use:
 			// var actionsData = data[2]; // Assuming 'Actions' data is in the third column (index 2)
 		});

 		// Handle form submission inside the modal
 		$('#editForm').submit(function(e) {
 			e.preventDefault(); // Prevent the form from submitting normally

 			// Get the new service type value from the input field
 			var newServiceType = $('#editServiceType').val();

 			// Perform any additional validation if required
 			// ...

 			// Submit the form using AJAX or any other method to update the service type in the backend
 			// For example, using AJAX:
 			$.ajax({
 				url: $(this).attr('action'),
 				method: 'POST',
 				data: {
 					service_type: newServiceType
 				},
 				success: function(response) {
 					// Handle the response from the server if needed
 					// For example, you may show a success message or refresh the table
 				},
 				error: function(error) {
 					// Handle the error response if needed
 				}
 			});

 			// Close the modal after form submission
 			$('#myModal').modal('hide');
 		});
 	});
 </script>

 <!-- </form> -->

 <!-- Edit button -->



 <!-- Trigger the modal with a button -->



 <!-- <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

 <!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
 	<div class="modal-dialog">
 		<!-- Modal content-->
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 			</div>
 			<!-- main part -->
 			<div class="container-fluid">
 				<!-- row1 -->
 				<div class="row">
 					<div class="col-12">
 						<div class="card card-body">
 							<h4 class="card-title">Edit Forms</h4>
 							<!-- Form for editing service type -->
 							<div class="row">
 								<div class="col-sm-12 col-xs-12">
 									<form method="post">
 										<div class="form-group">
 											<label for="exampleInputEmail111">Service type</label>
 											<input type="text" name="service_type" class="form-control" id="exampleInputEmail111">
 										</div>
 										<!-- The submit button to change the service type -->
 										<div class="row button-group">
 											<div class="col-lg-1">
 												<button type="submit" class="btn btn-success mr-2">Change</button>
 											</div>
 										</div>
 									</form>
 									<div class="col-lg-1">
 										<!-- An empty div without content -->
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- end row1 -->
 			</div>
 			<!-- end main part -->
 			<div class="modal-footer">
 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 			</div>
 		</div>
 		<!-- end model -->
 	</div>

 </div>


 </div>
