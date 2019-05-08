<?php 


get_header();
?>

	<div id="primary" class="container content-area content-single">
		<main id="main" class="site-main">
			<div class="single_text">
				<div class="row">
					<div class="col-md-8">
						<div class="single-left">
							<?php 
								while ( have_posts() ) :
								the_post();
							?>

		                    <div class="single-img-wrap">
		                        <?php 
		                        if (has_post_thumbnail( get_the_ID() ) ){
		                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
		                            ?>
		                            <img src="<?php echo $image[0]; ?>" alt="" class="img-responsive"/>
		                        <?php
		                        }else{
				            	?>

				            	<img src="<?php bloginfo('template_directory'); ?>/img/news-thumb-01.jpg" class="img-responsive" />

				            	<?php
				                }
				                ?>  
			                </div>

			                <div class="single-content-wrapper">
			                	<div class="single-text">
			                		<div class="single-title"><?php the_title(); ?></div>
			                		<div class="single-content">
			                			<?php the_content(); ?>
			                		</div>
			                	</div>
			                	<ul class="author-time">
			                		<li><?php echo meks_time_ago(); ?></li>
			                		<li><?php the_author(); ?></li>
			                	</ul>
			                </div>

			                <div class="prev-next">
				                <div class="post-prev">
				                	<?php previous_post_link( '&laquo; %link', '%title', true ); ?>
				                </div>
				                <div class="post-next">
				                	<?php next_post_link( '%link &raquo;', '%title', true ); ?>
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