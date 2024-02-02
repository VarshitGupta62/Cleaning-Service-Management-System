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
 				<h4 class="page-title">Edit</h4>
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
 					<h4 class="card-title">Edit Forms</h4>
 					<!-- <h5 class="card-subtitle"> Bootstrap Elements </h5> -->
 					<div class="row">
 						<div class="col-sm-12 col-xs-12">
 							<form method="post" action="<?= base_url(''); ?>admin_panel/Service1/edit/<?php echo $all->id; ?>" enctype="multipart/form-data">
 								<div class="form-group">
 									<label for="exampleInputEmail111">Service Name</label>
 									<input type="text" name="service_name" class="form-control" id="exampleInputEmail111" value="<?= $all->service_name ?>">
 								</div>

 								<div class="form-group">
 									<label for="exampleInputEmail111">Service Banifit</label>
 									<input type="text" name="service_banifit" class="form-control" id="exampleInputEmail111" value="<?= $all->service_banifit ?>">
 								</div>

 								<div class="form-group">
 									<label for="exampleInputEmail111">Discripction</label>
 									<textarea rows="15" cols="40" name="description" class="form-control" id="exampleInputEmail111"><?= htmlspecialchars($all->description) ?></textarea>
 								</div>

 								<!-- image start -->
 								<div class="form-group">
 									<label>New Image upload</label>
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
 									<label>New File upload</label>
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
 								<button type="submit" class="btn btn-success mr-2">Change</button>
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


 </div>
 <!-- ============================================================== -->
 <!-- End Container fluid  -->
 <!-- ============================================================== -->
