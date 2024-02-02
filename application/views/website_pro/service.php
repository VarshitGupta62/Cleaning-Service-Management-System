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
			<h1>Services</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>Services</li>
			</ul>
		</div>
	</div>
</section>
<!-- page-title end -->


<!-- feature-section -->
<section class="feature-section service-page-1">
	<div class="auto-container">
		<div class="sec-title centred">
			<h6>our services</h6>
			<h2>What We Do For Our Customers</h2>
			<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will <br />uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
		</div>
		<div class="inner-container">
			<div class="row clearfix">
				<!-- main box  -->
				<?php foreach ($user_data as $value) : ?>
					<div class="col-lg-3 col-md-6 col-sm-12 feature-block">
						<div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<!-- <div class="icon-box"><i class="flaticon-home"></i></div> -->
								<h3><a href="service-details.html"><?= $value->service_name ?></a></h3>
								<p><?= $value->short_description ?></p>
								<div class="link">
									<form action="<?= base_url(); ?>website_pro/Website1/readmore/<?= $value->id ?>" enctype="multipart/form-data" method="post">
										<button type="submit">Read more</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- main box end -->

			</div>
		</div>
		<div class="lower-box">
			<h2>Customer Service is Our First Preority.</h2>
			<p><a href="service.html">Cleanex Cleaning Company</a> <a href="service.html">All aspects of Home Cleaning</a> <a href="service.html">Commecial Cleaning</a> <a href="service.html">Office Cleaning</a> <a href="service.html">Move In/Out Cleaning</a> <a href="service.html">All aspects of Cleaning etc</a>.</p>
			<h3>Whatever your needs, Cleanex Cleaning contractors can offer you a courteous, reliable and professional service, please use our contact page for advice or to arrange a site visit and free quotation.</h3>
		</div>
	</div>
</section>
<!-- feature-section end -->
