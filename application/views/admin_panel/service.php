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
 							<li class="breadcrumb-item active" aria-current="page">Service Master</li>
 						</ol>
 					</nav>
 				</div>
 				<h4 class="page-title">Service Master</h4>
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
 							<form method="post" action="<?= base_url(''); ?>admin_panel/Service1/datain" enctype="multipart/form-data">
 								<div class="form-group">
 									<label for="exampleInputEmail111">Service Name</label>
 									<input type="text" name="service_name" class="form-control" id="exampleInputEmail111" placeholder="Enter your service name">
 								</div>

 								<div class="form-group">
 									<label for="exampleInputEmail111">Service Banifit</label>
 									<input type="text" name="service_banifit" class="form-control" id="exampleInputEmail111" placeholder="Enter service banifit">
 								</div>

								 <div class="form-group">
 									<label for="exampleInputEmail111">Short Discripction</label>
 									<textarea name="short_description" class="form-control" id="exampleInputEmail111" placeholder="Enter Description"></textarea>
 								</div>

 								<div class="form-group">
 									<label for="exampleInputEmail111">Discripction</label>
 									<textarea rows="15" cols="40" name="description" class="form-control" id="exampleInputEmail111" placeholder="Enter Description"></textarea>
 								</div>

 								<!-- image start -->
 								<div class="form-group">
 									<label>Custom Image upload</label>
 									<div class="input-group">
 										<div class="input-group-prepend">
 											<span class="input-group-text">Upload</span>
 										</div>
 										<div class="custom-file">
 											<input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
 											<label class="custom-file-label" for="inputGroupFile01">Choose Photo</label>
 										</div>
 									</div>
 								</div>
 								<!-- image end -->

 								<!-- file part start-->
 								<div class="form-group">
 									<label>Custom File upload</label>
 									<div class="input-group">
 										<div class="input-group-prepend">
 											<span class="input-group-text">Upload</span>
 										</div>
 										<div class="custom-file">
 											<input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
 											<label class="custom-file-label" for="inputGroupFile01">Choose File</label>
 										</div>
 									</div>
 								</div>
 								<!-- file part end -->
 								<!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="checkbox1"
                                                    value="check">
                                                <label class="custom-control-label" for="checkbox1">Remember Me</label>
                                            </div>
                                        </div> -->
 								<button type="submit" class="btn btn-success mr-2">Submit</button>
 							</form>



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
 									<th scope="col">Service Name</th>
 									<th scope="col">Service Banifit</th>
 									<th>Short Discipction</th>
 									<th>Discipction</th>
 									<th scope="col">Image</th>
 									<th>pdf</th>
 									<th scope="col">Actions</th>
 								</tr>
 							</thead>
 							<?php $i = 1; ?>
 							<?php foreach ($user_data as $value) : ?>
 								<tr>
 									<td scope="row"><?php echo $i++; ?></td>
 									<td><?= $value->service_name ?></td>
 									<td><?= $value->service_banifit ?></td>
 									<td><?= $value->short_description ?></td>
 									<td><?= $value->description ?></td>
 									<td><img src="<?php echo base_url($value->image); ?>" style="width:90px; height:90px;" alt="Uploaded Image"></td>
 									<td> <embed src="<?= base_url($value->file); ?>" type="application/pdf" width="200px" height="200px" /></td>


 									<td>
 										<div class="row button-group">
 											<form method="POST" action="<?= base_url(''); ?>admin_panel/Service1/delete_data/<?php echo $value->id; ?>">
 												<!-- <button type="submit" class="btn waves-effect waves-light btn-danger">Delete</button> -->
 												<div class="col-lg-12 col-md-4">
 													<button type="submit" class="btn waves-effect waves-light btn-warning">Delete</button>
 												</div>
 											</form>
 											<!-- <br> -->
 											<form method="POST" action="<?= base_url(''); ?>admin_panel/Service1/data_edit/<?php echo $value->id; ?>">
 												<!-- <button type="submit" class="btn waves-effect waves-light btn-success">Edit</button> -->
 												<div class="col-lg-12 col-md-4">
 													<button type="submit" class="btn waves-effect waves-light btn-dark">Edit</button>
 												</div>
 											</form>
 										</div>
 									</td>

 								</tr>
 							<?php endforeach; ?>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>

 	</div>
 	<!-- ============================================================== -->
 	<!-- End Container fluid  -->
 	<!-- ============================================================== -->



 	<!-- ------------------------------------------------------------------------------------------------------------------ -->
