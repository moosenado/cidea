<?php
$Email = new Email();
$Email->checkEmail();
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xlg-12 remove-pad-marg">
	<footer class="footer-container" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-swirl-svg.png)">
		<div class="footer-bg-overlay">
		</div>
		<div class="centered-container">
			<div class="centered">
				<object data="<?php echo home_url(); ?>/wp-content/uploads/2016/07/cidea-logo-svg-transparent-final.svg" type="image/svg+xml">
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
					<main role="main">

						<div class="innerTitle">
							<h1 class="center titlePadding">Contact Me</h1>
						</div>

						<div id="formStyle">

							<span><p><?php echo $err . '<br />'; ?></p></span>
							<span><p><?php foreach($validateArray as $key => $value){ echo $value . '<br />' ; } ?></p></span>
							<span id="formoutput"><p><?php echo $formOutput; ?></p></span>

							<form method="post" action="">

								<p>
									<label class="lbl">Name</label>
									<br />
									<input type="text" name="name" id="Name" value="<?php echo $name; ?>" class="textinput" />
								</p>
								<p>
									<label class="lbl">Email</label>
									<br />
									<input type="text" name="email" id="Email" value="<?php echo $email; ?>" class="textinput"/>
								</p>
								<p>
									<label class="lbl">Message</label>
									<br />
									<textarea name="message" id="message" rows="8" class="textinput"><?php echo $message; ?></textarea>
								</p>

								<p>
									<input type="submit" name="submit" id="button" value="Submit" class="btn"/>
									<input type="reset" name="reset" id="button" value="Reset" class="btn"/>
								</p>
							</form>

						</div>
						
					</main>
			</div>
		</div>	
	</footer>

</div>

</body>
</html>