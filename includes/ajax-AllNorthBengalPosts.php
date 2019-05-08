<?php
/*
	
@package subhasishlive theme
	
	========================
		AJAX FUNCTIONS
	========================
*/
add_action( 'wp_ajax_nopriv_sunset_load_more_northbengal', 'sunset_load_more_northbengal' );
add_action( 'wp_ajax_sunset_load_more_northbengal', 'sunset_load_more_northbengal' );
function sunset_load_more_northbengal() {
	

	$paged = $_POST["page"]+2;

		$query = new WP_Query( array(
		'post_type' => 'AllNorthBengalPosts',
        'order' => 'DESC',
        'post_status'    => 'publish',
		'paged' => $paged,
		'posts_per_page' => '10'
	) );
	
	if( $query->have_posts() ):
						
		while( $query->have_posts() ): $query->the_post();
		
			// get_template_part( 'template-parts/content', get_post_format() );
		?>

              <div id="fh5co-board" class="single-post-news">
                <div class="single-post-content">
                  <div class="post-box reveal-block text-left">
                    <div class="post-box-img-wrap">
                    	<a href="<?php the_permalink(); ?>">
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
                    		
	                    </a>
	                </div>
                    <div class="post-box-caption">
                      <div class="post-box-title text-ubold"><a href="<?php the_permalink(); ?>" class="text-gray-base"><?php the_title(); ?></a></div>
                      <ul class="list-inline post-box-meta list-inline-dashed list-inline-dashed-xs text-extra-small-10 offset-top-12 text-silver-chalice">
                        <li class="text-uppercase"><?php echo meks_time_ago(); ?></li>
                        <li class="p text-uppercase"><span>by <a href="#"><?php the_author(); ?></a></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

		
		<?php
		endwhile;
			wp_reset_postdata();
	endif;
	
	
	wp_die();
	
}

?>