<?php
/*
 * Template Name: Live stream
WpTutsPlus tutorial for creating archive to display posts by taxonomy term
Archive template for animal custom post type
*/
?>
<?php 
get_header();
?>


	<div id="primary" class="container-fluid content-area content-single-live">
				<div class="row">
					<div class="col-md-12">
						<div class="single-left">
							<?php 
								while ( have_posts() ) :
								the_post();
							?>

			                <div class="single-content-wrapper">
			                	<div class="single-text">
			                		<div class="single-title"><?php //the_title(); ?></div>
			                		<div class="single-content">
			                			<?php the_content(); ?>
			                		</div>
			                	</div>
			                </div>
							


							<?php
								endwhile;
							?>
						</div>
					</div>
				</div>
	</div>


<?php 
get_footer();
?>