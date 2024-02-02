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
 							<form method="post" action="<?= base_url(''); ?>admin_panel/Gallery1/edit_data/<?php echo $image->id; ?>" enctype="multipart/form-data">
 								<div class="form-group">
 									<label for="exampleInputEmail111">Tittle</label>
 									<input type="text" name="title" class="form-control" id="exampleInputEmail111" value="<?php echo $image->title; ?>">
 								</div>

 								<div class="form-group">

 									<label for="exampleInputEmail111">your image</label>
 									<br>
 									<img src="<?= base_url('uploads/' . $image->image); ?>" style="width: 200px; height: 200px;" alt="Uploaded Image">
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
 								<div class="row button-group">
 									<div class="col-lg-1 ">
 										<!----------------------- this is not perfect code please recode  -->
 										<button type="submit" class="btn btn-success mr-2">Change</button>
 									</div>
 							</form>
 							<div class="col-lg-1 ">
 								<form action="<?= base_url(''); ?>admin_panel/Gallery1/gallery">
 									<button type="submit" class="btn btn-dark">Cancel</button>
 								</form>
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
