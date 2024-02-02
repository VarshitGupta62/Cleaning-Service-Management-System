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
 							<li class="breadcrumb-item active" aria-current="page">Home</li>
 						</ol>
 					</nav>
 				</div>
 				<h4 class="page-title">Home</h4>
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
 	<!-- End Bread crumb and right sidebar toggle -->
 	<!-- ============================================================== -->

 	<!-- ============================================================== -->
 	<!-- Container fluid  -->
 	<!-- ============================================================== -->
 	<div class="container-fluid">

 		<!-- File export -->
 		<div class="row">
 			<div class="col-12">
 				<div class="card">
 					<div class="card-body">
					 <h4 class="card-title">File export</h4>
 						 

 						<div class="table-responsive mt-3">
 							<table class="table table-striped table-bordered display">
 								<thead>
 									<tr>
 										<th>No.</th>
 										<th>Time</th>
 										<th>Name</th>
 										 
 										<th>City</th>
 										<th>State</th>
 										<th>Zipcode</th>
 										<th>Phone Number</th>
 										<th>Email</th>
 										 
										<th>View More</th>

 									</tr>
 								</thead>
 								<tbody>
 									<?php $i = 1; ?>
 									<?php foreach ($user_data as $value) : ?>
 										<tr>
 											<td><?php echo $i++; ?></td>
 											<td><?= $value->time ?></td>
 											<td><?= $value->f_name ?></td>
 											<td><?= $value->f_city ?></td>
 											<td><?= $value->f_state ?></td>
 											<td><?= $value->f_zipcode ?></td>
 											<td><?= $value->f_phone_number ?></td>
 											<td><?= $value->f_email ?></td>
											 <td>
 												<form method="POST" action="<?= base_url(''); ?>admin_panel/View/main/<?php echo $value->s_no; ?>">
 													<!-- <button type="submit" class="btn waves-effect waves-light btn-danger">Delete</button> -->
 													<div class="col-lg-12 col-md-4">
 														<button type="submit" class="btn waves-effect waves-light btn-info">View </button>
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
 		<!-- Row grouping -->

		

		


 	</div>
 	<!-- ============================================================== -->
 	<!-- End Container fluid  -->
 	<!-- ============================================================== -->



 	<!-- ------------------------------------------------------------------------------------------------------------------ -->
