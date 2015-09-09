<?php 
/**
 * Template Name: Page with Featured Image
 */
get_header();
global $post;
the_post();
?>
	<div class="row page <?=$post->post_name?>">
		<div class="col-md-12">
			<div class="row">
				<?php if( has_post_thumbnail() ) { ?>
					<div class="col-md-4">
						<?php
							$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
							echo '<img src="'.$image[0].'" alt="'.get_the_title().'" title="'.get_the_title().'" class="img-responsive" />';
						?>
					</div>
				<?php } ?>
				<div class="col-md-8">
					<h2 class="trex-title"><?=get_the_title();?></h2>
					<?php the_content(); ?>
				</div>

				<div class="clearfix"></div>
			</div>

			<hr />

			<?= do_shortcode('[show-partners id='.get_field('category_id').']'); ?>
		</div>
	</div>	

<?php get_footer(); ?>