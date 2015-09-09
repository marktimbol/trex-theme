<?php 
get_header();
global $post;
the_post();
?>
	<div class="row page <?=$post->post_name?>">
		<div class="col-md-12">
			<h2 class="trex-title"><?=get_the_title();?></h2>
			<div class="row">
				<div class="col-md-12">
					<?php the_content() ;?>		
				</div>
			</div>
		</div>
	</div>	

<?php get_footer(); ?>