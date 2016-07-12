<?php
$Email = new Email();
$Email->checkEmail();
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xlg-12 remove-pad-marg">
	<footer class="footer-container" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png)">
		<div class="footer-bg-overlay scrollTime" data-animation="lowerOpacitySlow" data-timeout="1000">
		</div>
		<div class="centered-container">
			<div class="centered footer-content-container">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/svg-full-logo-transparent.svg" type="image/svg+xml">
        			<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-svg-transparent-final.png" />
        		</object>
        		<div class="address-container">
        			<ul>
        				<li><?php echo get_option('address'); ?></li>
        				<li><?php echo get_option('city'); ?></li>
        				<li><?php echo get_option('postalcode'); ?></li>
        			</ul>
        		</div>
        		<div class="contact-container">
        			<ul>
        				<li><?php echo get_option('phonenumber'); ?></li>
        				<li><?php echo get_option('email'); ?></li>
        			</ul>
        		</div>
        		<div class="social-container">
        			<ul>
        				<li>
        					<a href="<?php echo get_option('facebook');?>" class="svg">
	        					<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/facebook_icon.svg" type="image/svg+xml">
	        						<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/facebook_icon.png" />
	        					</object>
        					</a>
        				</li>
        				<li>
        					<a href="<?php echo get_option('twitter');?>" class="svg">
	        					<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/twitter_icon.svg" type="image/svg+xml">
	        						<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/twitter_icon.png" />
	        					</object>
        					</a>
        				</li>
        				<li>
        					<a href="<?php echo get_option('instagram');?>" class="svg">
	        					<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/instagram_logo.svg" type="image/svg+xml">
	        						<img src="<?php echo home_url(); ?>/wp-content/uploads/2016/07/instagram_logo.png" />
	        					</object>
        					</a>
        				</li>
        			</ul>
        		</div>
				<div class="form-container">

					<div class="form-title">
						Talk To Us
					</div>

					<form method="post">
						<p>
							<input type="text" name="name" id="Name" placeholder="Name" value="<?php echo $Email->name; ?>" class="text-input" />
						</p>
						<p>
							<input type="text" name="phonenumber" id="Phone" placeholder="Phone" value="<?php echo $Email->phonenumber; ?>" class="text-input"/>
						</p>
						<p>
							<input type="text" name="email" id="Email" placeholder="Email" value="<?php echo $Email->email; ?>" class="text-input"/>
						</p>
						<p>
							<input type="submit" name="submit" id="button" value="Submit" class="submit-btn"/>
						</p>
					</form>

					<span><p><?php echo $Email->err . '<br />'; ?></p></span>
					<span><p><?php foreach($Email->validateArray as $key => $value){ echo $value . '<br />' ; } ?></p></span>
					<span id="formoutput"><p><?php echo $Email->formOutput; ?></p></span>
					
				</div>
			</div>
		</div>	
	</footer>

</div>
<script src="<?php echo home_url(); ?>/wp-content/themes/cidea/js/main.js"></script>
</body>
</html>