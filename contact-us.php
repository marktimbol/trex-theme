<?php 
/**
 * Template Name: Contact Us
 */
get_header();
global $post;
?>

	<div class="row page <?=$post->post_name?>">
		<div class="col-md-12">
			<h2 class="trex-title"><?=get_the_title();?></h2>

			<div class="row">
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-6">
							<form method="POST">
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="text" name="name" id="name" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" name="email" id="email" class="form-control" required />
								</div>
								<div class="form-group">
									<label for="phone">Phone Number:</label>
									<input type="text" name="phone" id="phone" class="form-control" required />
								</div>								
								<div class="form-group">
									<label for="message">Message:</label>
									<textarea name="message" id="message" rows="5" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-default"><i class="fa fa-send"></i> Send Inquiry</button>
								</div>	

							</form>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-image">
									<img src="<?=get_bloginfo('stylesheet_directory');?>/public/images/contact-us.jpg" alt="Contact Us" class="img-responsive" />
							
								</div>

								<div class="card-content">
									<address>
										<p class="lead">Office C1201 - Burj Al Salam, Sheikh Zayed Road, Dubai, United Arab Emirates</p>
									</address>
								</div>

								<div class="card-action">
									<p class="lead float-left"><i class="fa fa-phone"></i> +971 4 331 3103</p>
									<p class="lead float-right"><a href="mailto:sales@trex.ae"><i class="fa fa-envelope"></i> sales@trex.ae</a></p>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

<?php get_footer(); ?>