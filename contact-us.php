<?php
require_once('header.php')
?>
    <!--BANNER START-->
    <div class="kode-inner-banner">
    	<div class="kode-page-heading">
        	<h2>Contact Us</h2>
            <ol class="breadcrumb">
			  <li><a href="#">Library</a></li>
              <li><a href="index.php">Home</a></li>
              <li class="active">Contact Us</li>
            </ol>
        </div>
    </div>
    <!--BANNER END-->
    



    <!--CONTENT START-->
   <div class="kode-content padding-tb-50">
    	<div class="container">
            <!--LOCATION MAP START-->
            <div class="location-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6985145584754!2d7.597369150053291!3d12.991124817920372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x11b03cb833e4e239%3A0x4ffeea8d4a6c2b8b!2sState%20Library!5e0!3m2!1sen!2sng!4v1640107309409!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!--LOCATION MAP END-->
            <div class="row">
                <div class="col-md-8">
                    <div class="comment-form">
                        <div class="row">
							<form method="post" class="comments-form" id="contactform">
								<div class="col-md-4 col-sm-4">
									<div class="input-container">
										<input type="text" id="name" name="name" class="required" placeholder="Name *" />
										<label for="name">Name</label>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="input-container">
										<input type="text" id="email" name="email" class="required email" placeholder="Email *" >
										<label for="email">Email</label>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="input-container">
										<input type="text" id="phone" name="phone" class="required" placeholder="Phone *" >
										<label for="phone">Phone</label>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="input-container">
										<textarea name="message" id="message" placeholder="add your comment"></textarea>
										<label for="message">Message</label>
									</div>
								</div>
								<div class="col-md-6">
									<p class="input-block kf_capcha">
										
									</p>
								</div>						
								<div class="col-md-6">
									<p class="kd-button kf_submit widget-newslatter pull-right"><input class="thbg-color" type="submit" value="Submit Comments"></p>
								</div>
							</form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="widget widget-text">
                        <h2>get in touch</h2>
                        <p>We look forward to serving you and welcome your comments and suggestions. Best regards.</p>
                    </div>
                    <div class="widget widget-text">
                        <h2>Information</h2>
                        <ul>
                           <li><i class="fa fa-map-marker"></i>ABM Library Katsina - Nigeria</li>
                           <li><i class="fa fa-phone"></i>(212) 555 55 00</li>
						   <!-- <li><i class="fa fa-phone"></i>08155559571</li> -->
						   


                           <li><i class="fa fa-envelope"></i><a href="mailto:info@abmlibrary.org.ng">info@abmlibrary.org.ng</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <?php
require_once('footer.php');
  ?>