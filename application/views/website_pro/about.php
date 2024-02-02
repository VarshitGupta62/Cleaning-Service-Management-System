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
   			<h1>About Us</h1>
   			<ul class="bread-crumb clearfix">
   				<li><a href="index-2.html">Home</a></li>
   				<li>About Us</li>
   			</ul>
   		</div>
   	</div>
   </section>
   <!-- page-title end -->


   <!-- about-style-nine -->
   <section class="about-style-nine">
   	<div class="auto-container">
   		<div class="row clearfix">
   			<div class="col-lg-6 col-md-12 col-sm-12 image-column">
   				<div class="image_block_seven">
   					<div class="image-box">
   						<figure class="image image-1"><img src="<?= base_url('webpage/web_2/assets/images/resource/about-12.jpg'); ?>" alt=""></figure>
   						<figure class="image image-2"><img src="<?= base_url('webpage/web_2/assets/images/resource/about-13.jpg'); ?>" alt=""></figure>
   						<div class="text-inner">
   							<div class="inner">
   								<div class="icon-box"><i class="flaticon-glass-cleaner"></i></div>
   								<h6>certified service</h6>
   								<h3>Certified Cleaning Service</h3>
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>
   			<div class="col-lg-6 col-md-12 col-sm-12 content-column">
   				<div class="content_block_11">
   					<div class="content-box">
   						<div class="sec-title">
   							<h6>Welcome to Our workshop</h6>
   							<h2>Committed to Give High Quality Cleaning Services</h2>
   						</div>
   						<div class="text">
   							<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
   							<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps.</p>
   						</div>
   						<div class="list-inner">
   							<ul class="list-style-one clearfix">
   								<li>Highly Professional Staff</li>
   								<li>100% Satisfaction Guarantee</li>
   								<li>Quality Control System</li>
   							</ul>
   							<ul class="list-style-one clearfix">
   								<li>Accourate Testing Process</li>
   								<li>Unrivalle Workmanship</li>
   								<li>Timely Delivery</li>
   							</ul>
   						</div>
   						<div class="btn-box">
   							<a href="about.html" class="theme-btn btn-two">view all services</a>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
   <!-- about-style-nine end -->


   <!-- feature-style-two -->
   <section class="feature-style-two">
   	<div class="auto-container">
   		<div class="row clearfix">
   			<div class="col-lg-7 col-md-12 col-sm-12 content-column">
   				<div class="content-box">
   					<div class="sec-title">
   						<h6>Our Clinic Features</h6>
   						<h2>Why choose our cleaning service for home</h2>
   					</div>
   					<div class="text">
   						<p>All of our services are provided by registered psychologists, or by experienced masters and doctoral clinicians under the supervision of a psychologist.</p>
   					</div>
   					<div class="list-inner">
   						<ul class="list-style-one clearfix">
   							<li>Personalized Cleaning</li>
   							<li>Licensed Cleaner</li>
   							<li>Experience Staff</li>
   							<li>Comfortable Timing</li>
   						</ul>
   						<ul class="list-style-one clearfix">
   							<li>Personalized Cleaning</li>
   							<li>Licensed Cleaner</li>
   							<li>Experience Staff</li>
   							<li>Comfortable Timing</li>
   						</ul>
   					</div>
   				</div>
   			</div>
   			<div class="col-lg-5 col-md-12 col-sm-12 video-column">
   				<div class="video-content">
   					<div class="video-inner" style="background-image: url(<?= base_url('webpage/web_2/assets/images/background/video-bg-2.jpg'); ?>);">
   						<div class="btn-box">
   							<a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="fas fa-play"></i></a>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>
   <!-- feature-style-two end -->


   <!-- testimonial-section -->
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
   <!-- testimonial-section end -->


   <!-- team-section -->
   <section class="team-section">
   	<div class="pattern-layer" style="background-image: url(<?= base_url('webpage/web_2/assets/images/shape/shape-1.jpg'); ?>);"></div>
   	<div class="auto-container">
   		<div class="title-inner">
   			<div class="row align-items-center clearfix">
   				<div class="col-lg-6 col-md-12 col-sm-12 title-column">
   					<div class="sec-title light">
   						<h6>meet the team</h6>
   						<h2>Our Dedicated Team</h2>
   					</div>
   				</div>
   				<div class="col-lg-6 col-md-12 col-sm-12 text-column">
   					<div class="text">
   						<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward.</p>
   					</div>
   				</div>
   			</div>
   		</div>
   		<div class="content-inner">
   			<div class="row clearfix">
   				<?php foreach ($user_data2 as $value) : ?>
   					<div class="col-lg-4 col-md-6 col-sm-12 team-block">
   						<div class="team-block-one" data-wow-delay="00ms" data-wow-duration="1500ms">
   							<div class="inner-box">
   								<!-- <div class="image-inner"> -->
   								<figure class="image-box"> <img src="<?php echo base_url('uploads/' . $value->image); ?>" style="height: 480px;  width: 350px;" alt=""></figure>
   								<!-- </div> -->
   								<div class="lower-content">
   									<h3><a href="index-2.html"><?= $value->name ?></a></h3>
   									<span class="designation"><?= $value->designation ?></span>

   								</div>
   							</div>
   						</div>
   					</div>
   				<?php endforeach; ?>
   			</div>
   		</div>
   	</div>
   </section>
   <!-- team-section end -->


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
