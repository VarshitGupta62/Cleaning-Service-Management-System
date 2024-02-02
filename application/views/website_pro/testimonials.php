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
 			<h1>Testimonials</h1>
 			<ul class="bread-crumb clearfix">
 				<li><a href="index-2.html">Home</a></li>
 				<li>Testimonials</li>
 			</ul>
 		</div>
 	</div>
 </section>
 <!-- page-title end -->


 <!-- testimonial-page-section -->
 <section class="testimonial-page-section">
 	<div class="auto-container">
 		<div class="sec-title">
 			<h6>testimonials</h6>
 			<h2>What They Say About Our Service</h2>
 		</div>
 		<div class="row clearfix">
 			<?php foreach ($user_data as $value) : ?>
 				<div class="col-lg-4 col-md-6 col-sm-12 testimonial-block">
 					<div class="testimonial-block-one">
 						<div class="inner-box">
 							<div class="text-inner">
 								<div class="quote"><i class="flaticon-quotation"></i></div>
 								<ul class="rating clearfix">
 									<li><i class="fas fa-star"></i></li>
 									<li><i class="fas fa-star"></i></li>
 									<li><i class="fas fa-star"></i></li>
 									<li><i class="fas fa-star"></i></li>
 									<li><i class="fas fa-star"></i></li>
 								</ul>
 								<p><?= $value->title ?></p>
 							</div>
 							<div class="author-box">
 								<figure class="author-thumb"> <img src="<?php echo base_url('uploads/' . $value->image); ?>" alt=""></figure>
 								<h5><?= $value->username ?></h5>
 								<span class="designation">Customer</span>
 							</div>
 						</div>
 					</div>
 				</div>
 			<?php endforeach; ?>
 			<!--  -->

 		</div>
 	</div>
 </section>
 <!-- testimonial-page-section end -->


 <!-- company-section -->
 <section class="company-section">
 	<div class="auto-container">
 		<div class="row align-items-center">
 			<div class="col-lg-7 col-md-12 col-sm-12 content-column">
 				<div class="content-box">
 					<div class="sec-title">
 						<h6>about our service</h6>
 						<h2>Cleanex Cleaning Company</h2>
 					</div>
 					<div class="text">
 						<p>At Airtronix, we provide a comprehensive range of air conditioner services including Air conditioner repair, AC installation/removal, AC servicing, aircon servicing, AC gas filling charges, leakage repair, advanced piping, and more- all available at affordable and transparent prices.</p>
 						<p>Besides, you can book our AC services from the comfort of your home.You just need to give us a call or send us your query to book our professional AC repair services within minutes whether the issue is big or small, our professionals will come to provide doorstep repair solutions at the promised time. Our 30 days service warranty further assures you that you’ll get the best value for your money.</p>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-5 col-md-12 col-sm-12 inner-column">
 				<div class="list-inner">
 					<ul class="list clearfix">
 						<li>High-Quality AC Repairs</li>
 						<li>Experienced AC Service Engineers</li>
 						<li>90-day warranty on spare parts</li>
 						<li>AC AMC (Annual Maintenance) Available</li>
 						<li>30-day warranty on service</li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <!-- company-section end -->
