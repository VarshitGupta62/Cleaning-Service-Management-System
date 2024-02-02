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
 							<li class="breadcrumb-item active" aria-current="page">Gallery Master</li>
 						</ol>
 					</nav>
 				</div>
 				<h4 class="page-title">Gallery Master</h4>
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
 							<form method="post" action="<?= base_url(''); ?>admin_panel/Gallery1/image_in" enctype="multipart/form-data">
 								<div class="form-group">
 									<label for="exampleInputEmail111">Tittle</label>
 									<input type="text" name="title" class="form-control" id="exampleInputEmail111" placeholder="Enter Tittel">
 								</div>


 								<div class="form-group">
 									<label>Custom Image upload</label>
 									<div class="input-group">
 										<div class="input-group-prepend">
 											<span class="input-group-text">Upload</span>
 										</div>
 										<div class="custom-file">
 											<input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
 											<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
 										</div>
 									</div>
 								</div>
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
 									<th scope="col">Tittle</th>
 									<th scope="col">Image</th>
 									<th scope="col">Actions</th>
 								</tr>
 							</thead>
 							<tbody>
 								<?php $i = 1; ?>
 								<?php foreach ($user_data as $value) : ?>
 									<tr>
 										<td scope="row"><?php echo $i++; ?></td>
 										<td><?= $value->title ?></td>
 										<td><img src="<?php echo base_url('uploads/' . $value->image); ?>" style="width:90px; height:90px;" alt="Uploaded Image"></td>
 										<td>
 											<div class="row button-group">
 												<form method="POST" action="<?= base_url(''); ?>admin_panel/Gallery1/delete_data/<?php echo $value->id; ?>">
 													<!-- <button type="submit" class="btn waves-effect waves-light btn-danger">Delete</button> -->
 													<div class="col-lg-12 col-md-4">
 														<button type="submit" class="btn waves-effect waves-light btn-warning">Delete</button>
 													</div>
 												</form>
 												<!-- <br> -->
 												<form method="POST" action="<?= base_url(''); ?>admin_panel/Gallery1/image_edit/<?php echo $value->id; ?>">
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
