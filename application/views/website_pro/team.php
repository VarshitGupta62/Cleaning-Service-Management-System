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
			<h1>Team</h1>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>About Us</li>
				<li>Team</li>
			</ul>
		</div>
	</div>
</section>
<!-- page-title end -->


<!-- team-page-section -->
<section class="team-page-section">
	<div class="auto-container">
		<div class="title-inner">
			<div class="row align-items-center clearfix">
				<div class="col-lg-6 col-md-12 col-sm-12 title-column">
					<div class="sec-title">
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
				<?php foreach ($user_data as $value) : ?>
					<div class="col-lg-4 col-md-6 col-sm-12 team-block">
						<div class="team-block-one" data-wow-delay="00ms" data-wow-duration="1500ms">
							<div class="inner-box">
								<!-- <div class="image-inner"> -->
								<figure class="image-box"> <img src="<?php echo base_url('uploads/' . $value->image); ?>" style="height: 480px;  width: 320px;" alt=""></figure>
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
<!-- team-page-section end -->


<!-- funfact-style-two -->
<section class="funfact-style-two team-page">
	<div class="auto-container">
		<div class="inner-container">
			<div class="funfact-block-one">
				<div class="inner-box">
					<div class="icon-box"><i class="flaticon-house-1"></i></div>
					<div class="count-outer count-box">
						<span class="count-text" data-speed="1500" data-stop="7088">0</span>
					</div>
					<p>Cleans Completed</p>
				</div>
			</div>
			<div class="funfact-block-one">
				<div class="inner-box">
					<div class="icon-box"><i class="flaticon-thumbs-up"></i></div>
					<div class="count-outer count-box">
						<span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
					</div>
					<p>Service Guarantee</p>
				</div>
			</div>
			<div class="funfact-block-one">
				<div class="inner-box">
					<div class="icon-box"><i class="flaticon-leader"></i></div>
					<div class="count-outer count-box">
						<span class="count-text" data-speed="1500" data-stop="1200">0</span> <span>+</span>
					</div>
					<p>Satisfied Clients</p>
				</div>
			</div>
			<div class="funfact-block-one">
				<div class="inner-box">
					<div class="icon-box"><i class="flaticon-broom"></i></div>
					<div class="count-outer count-box">
						<span class="count-text" data-speed="1500" data-stop="17">0</span>
					</div>
					<p>Team Member</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- funfact-style-two end -->
