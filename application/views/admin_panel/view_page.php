 
 <!-- ============================================================== -->
 <!-- Page wrapper  -->
 <!-- ============================================================== -->
 <div class="page-wrapper">
 	<!-- ============================================================== -->
 	<!-- Bread crumb and right sidebar toggle -->
 	<!-- ============================================================== -->
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
 							<li class="breadcrumb-item active" aria-current="page">Report Master</li>
 						</ol>
 					</nav>
 				</div>
 				<h4 class="page-title">View</h4>
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

 		<!-- File export -->
 		<div class="row">
 			<div class="col-12">
 				<div class="card">
 					<div class="card-body">
 						<h4 class="card-title">File export</h4>
 						<h6 class="card-subtitle"> <a href="https://datatables.net/">Datatables</a></h6>
 						<div class="table-responsive mt-3">
						 <table class="table table-bordered" id="file_export" class="table table-striped table-bordered display">
 								<thead>
 									<tr>
 										<th class="text-dark">Table Heading</th>
 										<th class="text-dark">Table Data</th>
 									</tr>
 								</thead>
 								<tbody>
 									<tr>
 										<td>Time</td>
 										<td><?= $user_data->time ?></td>
 									</tr>
 									<tr>
 										<td>Date</td>
 										<td><?= $user_data->date ?></td>
 									</tr>
 									<tr>
 										<td>Name</td>
 										<td><?= $user_data->f_name ?></td>
 									</tr>
 									<tr>
 										<td>Jobsite Address</td>
 										<td><?= $user_data->f_jobsite_address ?></td>
 									</tr>
 									<tr>
 										<td>City</td>
 										<td><?= $user_data->f_city ?></td>
 									</tr>
 									<tr>
 										<td>State</td>
 										<td><?= $user_data->f_state ?></td>
 									</tr>
 									<tr>
 										<td>Zipcode</td>
 										<td><?= $user_data->f_zipcode ?></td>
 									</tr>
									 <tr>
 										<td>Phone Number</td>
 										<td><?= $user_data->f_phone_number ?></td>
 									</tr>
									 <tr>
 										<td>Email</td>
 										<td><?= $user_data->f_email ?></td>
 									</tr>
									 <tr>
 										<td>Other Message</td>
 										<td><?= $user_data->f_other_message ?></td>
 									</tr>
									 <tr>
 										<td>Brief Description</td>
 										<td><?= $user_data->f_brief_description ?></td>
 									</tr>
									 <tr>
 										<td>Company</td>
 										<td><?= $user_data->f_company ?></td>
 									</tr>
									
									 <!-- <tr>
 										<td>Print page</td>
 										<td><button onclick="window.print()">Print</button></td>
 									</tr> -->
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
