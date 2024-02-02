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
  			<h1>Contact Us</h1>
  			<ul class="bread-crumb clearfix">
  				<li><a href="index-2.html">Home</a></li>
  				<li>Contact Us</li>
  			</ul>
  		</div>
  	</div>
  </section>
  <!-- page-title end -->


  <!-- contact-page-section -->
  <section class="contact-page-section">
  	<div class="auto-container">
  		<div class="sec-title">
  			<h6>get in touch</h6>
  			<h2>We Love to Hear From You</h2>
  		</div>
  		<div class="row clearfix">
  			<div class="col-lg-7 col-md-12 col-sm-12 form-column">
  				<div class="form-inner">
				  <form method="post" action="<?= base_url(); ?>website_pro/Website1/contactus_datain" id="contact-form">
        <div class="form-group">
            <input type="text" name="username" placeholder="Your Name" required="">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Your email" required="">
        </div>
        <div class="form-group">
            <input type="text" name="phone" required="" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="Message"></textarea>
        </div>
        <div class="form-group message-btn"  id="thankYouMessage" >
            <button class="theme-btn btn-two" type="submit">submit now</button>
        </div>
    </form>

	<script>
        // Add a listener to show an alert when the user clicks the "Thank You" message
        var thankYouDiv = document.getElementById("thankYouMessage");
        thankYouDiv.addEventListener("click", function() {
            alert("Thank you!");
        });
    </script>

  					
  				</div>
  			</div>
  			<div class="col-lg-5 col-md-12 col-sm-12 content-column">
  				<div class="content-box">
  					<div class="text">
  						<h2>Our Address</h2>
  						<p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service.</p>
  					</div>
  					<ul class="info-list clearfix">
  						<li>
  							<div class="icon-box"><img src="<?= base_url('webpage/web_2/assets/images/icons/icon-60.png'); ?>" alt=""></div>
  							<h4>Address :</h4>
  							<p>41 , Ishwar Nagar , Iltifatganj , Tanda , Ambedkar Nagar , Uttar Pradesh-224145</p>
  						</li>
  						<li>
  							<div class="icon-box"><img src="<?= base_url('webpage/web_2/assets/images/icons/icon-61.png'); ?>" alt=""></div>
  							<h4>Phone :</h4>
  							<p><a href="tel:+91 8736078462">+91 8736078462</a> / <a href="tel:+91 9918068753">+91 9918068753</a></p>
  						</li>
  						<li>
  							<div class="icon-box"><img src="<?= base_url('webpage/web_2/assets/images/icons/icon-62.png'); ?>" alt=""></div>
  							<h4>Address :</h4>
  							<p><a href="mailto:Varshitgupta45@gmail.com">Varshitgupta45@gmail.com</a></p>
  						</li>
  					</ul>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- contact-page-section end -->


  <!-- google-map-two -->

  <!-- google-map-two end -->
