 <!-- page-title -->
 <section class="page-title">
 	<div class="pattern-layer" style="background-image: url(<?= base_url('webpage/web_2/assets/images/shape/shape-45.png'); ?>);"></div>
 	<figure class="image-layer"><img src="<?= base_url('webpage/web_2/assets/images/resource/page-title-1.png'); ?>" alt=""></figure>
 	<div class="shape">
 		<div class="shape-1" style="background-image: url(<?= base_url('webpage/web_2/assets/images/shape/shape-46.png'); ?>);"></div>
 		<div class="shape-2" style="background-image: url(<?= base_url('webpage/web_2/assets/images/shape/shape-47.png'); ?>);"></div>
 	</div>
 	<div class="auto-container">
 		<div class="content-box">
 			<h1>Gallery</h1>
 			<ul class="bread-crumb clearfix">
 				<li><a href="index-2.html">Home</a></li>
 				<li>Gallery</li>
 			</ul>
 		</div>
 	</div>
 </section>
 <!-- page-title end -->


 <!-- project-page-section -->
 <section class="project-page-section project-page-three">
 	<div class="outer-container">
 		<div class="sec-title centred">
 			<h6>our portfolio</h6>
 			<h2>Our Recent Work</h2>
 		</div>
 		<div class="sortable-masonry">

 			<div class="items-container row clearfix">
 				<!-- 1  -->
 				<?php foreach ($user_data as $value) : ?>
 					<div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column all window_cleaning office_cleaning home_cleaning commercial_cleaning">
 						<div class="project-block-two">
 							<div class="inner-box">

 								<figure class="image-box"><img src="<?php echo base_url('uploads/' . $value->image); ?>" style="height: 330px; width: 330px;" alt="Uploaded Image"></figure>
 								<div class="content-box">
 									<ul class="option-list clearfix">
 										<li><a href="<?php echo base_url('uploads/' . $value->image); ?>" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a></li>
 										<!-- <li><a href="project-details.html"><i class="flaticon-link"></i></a></li> -->
 									</ul>
 									<div class="text">
 										<h6>Alfa Project</h6>
 										<h4><a href="project-details.html"><?= $value->title ?></a></h4>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				<?php endforeach; ?>
 				<!-- end 1 -->

 			</div>
 		</div>
 	</div>
 </section>
 <!-- project-page-section end -->
