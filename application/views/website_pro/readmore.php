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
			<h1>Single Service</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>Single Service</li>
			</ul>
		</div>
	</div>
</section>
<!-- page-title end -->


<!-- service-details -->
<section class="service-details">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
				<div class="service-sidebar">
					<!-- <div class="category-widget sidebar-widget">
                                <ul class="category-list clearfix">
                                    <li><a href="service-details.html" class="current">Home Cleaning</a></li>
                                    <li><a href="service-details.html">Window Cleaning</a></li>
                                    <li><a href="service-details.html">Carpet Cleaning</a></li>
                                    <li><a href="service-details.html">Office Cleaning</a></li>
                                    <li><a href="service-details.html">Move In/Out Cleaning</a></li>
                                    <li><a href="service-details.html">After Renovation</a></li>
                                    <li><a href="service-details.html">Residentail Cleaning</a></li>
                                    <li><a href="service-details.html">Commercial Cleaning</a></li>
                                </ul>
                            </div> -->
					<div class="contact-widget sidebar-widget">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><img src="<?= base_url('webpage/web_2/assets/images/resource/sidebar-1.jpg'); ?>" alt=""></figure>
							</div>
							<div class="content-box">
								<h3><span>Available</span> for any type of Cleaning Service</h3>
								<h2>We can help</h2>
								<div class="btn-box centred">
									<a href="contact.html" class="theme-btn btn-two">Contact us</a>
								</div>
							</div>
						</div>
					</div>
					<div class="download-widget sidebar-widget">
						<div class="inner-box">
							<!-- <a href="service-details.html"><span>Download Brochure</span></a> -->
							<?php
							// Make sure $user_data is defined and contains the necessary data
							if (isset($user_data) && isset($user_data->file)) {
								$file_path = base_url('') . '/' . $user_data->file;
							?>
								<a href="<?= $file_path ?>" download><span>Download Brochure</span></a>
							<?php } else { ?>
								<p>No brochure available.</p>
							<?php } ?>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-9 col-md-12 col-sm-12 content-side">
				<div class="service-details-content">
					<div class="content-one">
						<h2><?= $user_data->service_name ?></h2>
						<p><?= $user_data->description ?></p>

					</div>
					<div class="content-two">
						<div class="row clearfix">
							<div class="col-lg-7 col-md-6 col-sm-12 content-column">
								<div class="content-box">
									<h3>Service Benefits</h3>
									<p><?= $user_data->service_banifit ?></p>
									<ul class="list-one clearfix">
										<li>To give our best for our customer.</li>
										<li>Professional team do work</li>
										<li>Provide quality Cleaning.</li>
										<li>Flexible and Cost-Effective</li>
									</ul>
									<ul class="list-two clearfix">
										<li>Efficiently unleash cross-media informatio</li>
										<li>Quickly maximize timely deliverables</li>
										<li>Dramatically maintain clicks-and-mortar solutions</li>
										<li>Efficiently unleash cross-media informatio</li>
										<li>Quickly maximize timely deliverables</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-12 image-column">
								<div class="image-box">
									<figure class="image"><img src="<?php echo base_url($user_data->image); ?>" style=" height: 400px; width: 400px;  " alt=""></figure>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- service-details end -->
