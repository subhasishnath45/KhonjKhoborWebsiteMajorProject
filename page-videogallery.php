<?php
/*
 * Template Name: video Gallery
WpTutsPlus tutorial for creating archive to display posts by taxonomy term
Archive template for animal custom post type
*/
?>
<?php 
get_header();
?>


	<div id="primary" class="container-fluid content-area content-single-video">
		<main id="main" class="site-main">
			<div class="single_text">
				<div class="row">
					<div class="col-md-8">
						<div class="single-left">
							<?php 
								while ( have_posts() ) :
								the_post();
							?>

			                <div class="single-content-wrapper">
			                	<div class="single-text">
			                		<!-- <div class="single-title"><?php //the_title(); ?></div> -->
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
					<div class="col-md-4">
					<div class="single-right">
						<?php //get_sidebar('Sidebar-ad-1'); ?>
						<?php dynamic_sidebar( 'Sidebar-ad-1' ); ?>
					</div>
					</div>
				</div>
			</div>
		</main>
	</div>


<?php 
get_footer();
?>