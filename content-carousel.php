<div class="home-carousel-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="home-carousel">
                <div id="owl-demo-01" class="owl-carousel owl-theme">
                <?php
                // The Loop...
                $query_homeCarousel = array(
                    'post_type' => 'homecarousels',
                    'cat' => 16 ,
                    'order' => 'ASC',
                    'showposts' => -1
                 );
                $wp_home_Carousel = new WP_Query($query_homeCarousel);
             
                if($wp_home_Carousel->have_posts()) : while($wp_home_Carousel->have_posts()) : $wp_home_Carousel->the_post();
                ?>
                    <div class="item">
                        <?php 
                            if(has_post_thumbnail( get_the_ID() )):
                                $carousel_img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                            endif;
                        ?>
                        <img src="<?php echo $carousel_img[0]; ?>" alt="The Last of us" class="img-responsive" />
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>