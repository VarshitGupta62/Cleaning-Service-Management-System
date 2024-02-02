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
  			<h1>Book Appointment</h1>
  			<ul class="bread-crumb clearfix">
  				<li><a href="index-2.html">Home</a></li>
  				<li>Book Appointment</li>
  			</ul>
  		</div>
  	</div>
  </section>
  <!-- page-title end -->


  <!--Start Appointment Area-->
  <section class="appointment-area">
  	<div class="container">
  		<div class="appointment-title">
  			<h2>Fill Out the Appointment Request Form Online and<br> We’ll Contact You!</h2>
  			<p>In the event that you'd like one of our client administration agents to call you to plan your appointment, simply round out the structure beneath. Somebody will get in touch with you to affirm a date and time for your arrangement at the earliest opportunity.</p>
  		</div>
  		<div class="row">
  			<div class="col-xl-9">
  				<div class="appointment-form-box">
  					<form class="appointment-form" action="<?= base_url(); ?>website_pro/Website1/appointment_data_in" method="post">
  						<!-- 1 -->
  						<!-- <div class="single-box">
  							<div class="inner-title">
  								<h3>Is this service for</h3>
  							</div>
  							<div class="appointment-checkbox">
  								<div class="single-checkbox">
  									<input type="checkbox" name="your_home" id="home-1">
  									<label for="home-1"><span></span>Your Home</label>
  								</div>
  								<div class="single-checkbox">
  									<input type="checkbox" name="your_business" id="your-business" checked>
  									<label for="your-business"><span></span>Your Business</label>
  								</div>
  							</div>
  						</div> -->

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Select a convenient day for your service:*</h3>
  							</div>
  							<div class="date-box clearfix">
  								<label for="dateInput">Select a date:</label>
  								<input type="date" id="dateInput" name="date">
  							</div>
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Select a convenient time*</h3>
  							</div>
  							<div class="time-box">
  								<label for="timeInput">Enter a time:</label>
  								<input type="time" id="timeInput" name="time">
  								<!-- <div class="icon">
            <span class="fa fa-angle-down"></span>
        </div> -->
  							</div>
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Your first name and last name*</h3>
  							</div>
  							<input type="text" name="f_name" value="" placeholder="" required="">
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Your company</h3>
  							</div>
  							<input type="text" name="f_company" value="" placeholder="">
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Jobsite address</h3>
  							</div>
  							<div class="jobsite-address">
  								<input type="text" name="f_jobsite_address" value="" placeholder="">
  								<!-- <input type="text" name="f_jobsite_address" value="" placeholder=""> -->
  							</div>
  						</div>

  						<div class="row">
  							<div class="col-xl-4">
  								<div class="single-box">
  									<div class="inner-title">
  										<h3>City</h3>
  									</div>
  									<input type="text" name="f_city" value="" placeholder="">
  								</div>
  							</div>
  							<div class="col-xl-4">
  								<div class="single-box selectbox">
  									<div class="inner-title">
  										<h3>State</h3>
  									</div>
  									<select name="f_state" class="selectpicker" data-width="100%">
  										<option selected="selected">State</option>
  										<option>Andhra Pradesh</option>
  										<option>Arunachal Pradesh</option>
  										<option>Assam</option>
  										<option>Bihar</option>
  										<option>Chhattisgarh</option>
  										<option>Goa</option>
  										<option>Gujarat</option>
  										<option>Haryana</option>
  										<option>Himachal Pradesh</option>
  										<option>Jharkhand</option>
  										<option>Karnataka</option>
  										<option>Kerala</option>
  										<option>Madhya Pradesh</option>
  										<option>Maharashtra</option>
  										<option>Manipur</option>
  										<option>Meghalaya</option>
  										<option>Mizoram</option>
  										<option>Nagaland</option>
  										<option>Odisha</option>
  										<option>Punjab</option>
  										<option>Rajasthan</option>
  										<option>Sikkim</option>
  										<option>Tamil Nadu</option>
  										<option>Telangana</option>
  										<option>Tripura</option>
  										<option>Uttar Pradesh</option>
  										<option>Uttarakhand</option>
  										<option>West Bengal</option>
  										<!-- Add more Indian states here -->
  									</select>
  								</div>
  							</div>
  							<div class="col-xl-4">
  								<div class="single-box">
  									<div class="inner-title">
  										<h3>Zip Code</h3>
  									</div>
  									<input type="text" name="f_zipcode" value="" placeholder="">
  								</div>
  							</div>
  						</div>

  						<div class="row">
  							<!-- <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="inner-title">
                                                <h3>Jobsite phone number</h3>
                                            </div>
                                            <input type="text" name="f_jobsite_phn_number" value="" placeholder="">
                                        </div>    
                                    </div>  -->
  							<div class="col-xl-6">
  								<div class="single-box">
  									<div class="inner-title">
  										<h3>Phone number</h3>
  									</div>
  									<input type="text" name="f_phone_number" value="" placeholder="">
  								</div>
  							</div>
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Email address</h3>
  							</div>
  							<input type="email" name="f_email" value="" placeholder="" required="">
  						</div>
  						<!-- 2 -->
  						<!-- <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Service type</h3>
                                    </div>
                                    <div class="service-type-box">
                                        <div class="appointment-checkbox">
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="plumbing" id="sel-ser1">
                                                <label for="sel-ser1"><span></span>Plumbing</label>
                                            </div>
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="drain-cleaning" id="sel-ser2" checked>
                                                <label for="sel-ser2"><span></span>Drain Cleaning</label>    
                                            </div>
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="heating-cooling" id="sel-ser3">
                                                <label for="sel-ser3"><span></span>Heating & Cooling</label>
                                            </div>
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="water-gas" id="sel-ser4">
                                                <label for="sel-ser4"><span></span>Water & Gas Repairs</label>
                                            </div>
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="sewer-cleaning" id="sel-ser5">
                                                <label for="sel-ser5"><span></span>Sewer line Cleaning and Reapirs</label>
                                            </div>
                                            <div class="single-checkbox">
                                                <input type="checkbox" name="other" id="sel-ser6">
                                                <label for="sel-ser6"><span></span>Other (Specify below)</label>
                                            </div>
                                        </div>    
                                    </div>
                                </div> -->

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Others</h3>
  							</div>
  							<textarea name="f_other_message" placeholder=""></textarea>
  						</div>

  						<div class="single-box">
  							<div class="inner-title">
  								<h3>Brief Description of Problem:*</h3>
  							</div>
  							<textarea name="f_brief_description" placeholder="" required></textarea>
  						</div>

  						<!-- <div class="single-box">
                                    <div class="inner-title">
                                        <h3>Subscribe to our newsletter</h3>
                                    </div>
                                    <div class="newsletter-checkbox">
                                        <input type="checkbox" name="subscribe-newsletter" id="newsletter" checked="">
                                        <label for="newsletter"><span></span>Yes, I would like to receive occasional hints and tips via email. (Email addresses <br />will not be shared with any other company.)</label>
                                    </div>
                                </div> -->

  						<div class="appointment-form-button" id="thankYouMessage">
  							<button type="submit" class="theme-btn btn-two">make an appointment</button>
  						</div>

  					</form>
  					<script>
  						// Add a listener to show an alert when the user clicks the "Thank You" message
  						var thankYouDiv = document.getElementById("thankYouMessage");
  						thankYouDiv.addEventListener("click", function() {
  							alert("Thank you for making an appointment!");
  						});
  					</script>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!--End Appointment Area-->
