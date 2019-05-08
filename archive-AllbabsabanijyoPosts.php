<?php
/*
 * Template Name: BabsaBanijyo all
WpTutsPlus tutorial for creating archive to display posts by taxonomy term
Archive template for animal custom post type
*/
?>

<?php get_header(); ?>

      <div class="shell">
        <div class="container-fluid">



          <div class="col-md-8">

<div id="kolkata-home-posts" class="kolkata-home-posts">
            <div class="col-sm-6">
            <?php 
              $not_in_next_four = array(); 
              $first_five_kichenposts_ids = array();
             //  $kitchen_mostlatest_args = array(
             //    'post_type' => 'AllbabsabanijyoPosts',
             //    'post_status' => 'publish',
             //    'order' => 'DESC',
             //    'showposts' => 1
             // );

            $args_latest_kitchen = array(
              'numberposts' => 1,
              // 'offset' => 0,
              // 'category' => 0,
              // 'orderby' => 'post_date',
              'order' => 'DESC',
              // 'include' => '',
              // 'exclude' => '',
              // 'meta_key' => '',
              // 'meta_value' =>'',
              'post_type' => 'AllbabsabanijyoPosts',
              'post_status' => 'publish',
              'suppress_filters' => true
            );
            $recent_kitchen = wp_get_recent_posts( $args_latest_kitchen );
            foreach( $recent_kitchen as $recent ){

              ?>
            <div class="kolkata-home-posts-left no-padding-left">

              <div class="lg-kitchen-post-img">
                  <?php 
                  if ( has_post_thumbnail( $recent["ID"]) ) {
                      $image_thumb_latest_kolkata = wp_get_attachment_image_src( get_post_thumbnail_id( $recent["ID"] ), 'single-post-thumbnail' );
                      ?>
                      <a href="<?php echo get_permalink($recent["ID"]) ?>">
                        <img src="<?php echo $image_thumb_latest_kolkata[0]; ?>" class="img-responsive" />
                      </a>
                  <?php
                  }else{
                ?>

                <img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

                <?php
                  }
                  ?> 
              </div>
              <div class="lg-kitchen-post-text">
                  <a href="<?php echo get_permalink($recent["ID"]) ?>">
                    <h2 class=" title-large">
                    <?php 
                    $homekbigtitle = $recent["post_title"]; 
                    $homekbigtitle_trimmed = mb_substr($homekbigtitle, 0,100);
                    echo $homekbigtitle_trimmed;
                    ?>
                    </h2>
                  </a>
                  <ul class="list-li-mr-20 pt-10 pb-20">
                    <li class="color-lite-black">
                    <?php echo meks_time_ago(); ?></li>
                  </ul>
                  <div class="kolkata-latest-post-content">
                    
                    <?php 
                    $home_kolkata_content = $recent["post_content"];
                    $home_kolkata_content_brief = mb_substr($home_kolkata_content, 0, 300);
                    echo $home_kolkata_content_brief . "...";
                    ?>

                  </div>
              </div>

            </div><!-- col-sm-6 -->

          <?php 
          }
          wp_reset_query();
            $not_in_next_four[] = $recent["ID"];
            $first_five_kichenposts_ids[] = $recent["ID"];
            // echo $not_in_next_four[0];
          //   }
          //   wp_reset_postdata();
          // }else{

          //   echo "no kolkata posts found";
          // }
        ?>
      </div>

            <div class="col-sm-6 kolkata-home-posts-right no-padding-right">
            <?php 
              $kolkatahome_nextlatestfour_args = array(
                'post_type' => 'AllbabsabanijyoPosts',
                'post_status' => 'publish',
                'order' => 'DESC',
                'post__not_in'=>$not_in_next_four,
                'showposts' => 4
             );
             $wp_queryKitchenMostLatest_nextlatestfour = new WP_Query( $kolkatahome_nextlatestfour_args );
             if($wp_queryKitchenMostLatest_nextlatestfour->have_posts()) {

             while($wp_queryKitchenMostLatest_nextlatestfour->have_posts()) {

              $wp_queryKitchenMostLatest_nextlatestfour->the_post(); 
            ?>
              <a class="kolkata-home-thumbs-hyperlink" href="<?php the_permalink(); ?>">
                <div class="kolkata-home-thumb">
                <?php 
                if (has_post_thumbnail( get_the_ID() ) ){
                    $image_thumb_small_kolkata = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    } else{
                      $image_thumb_small_kolkata[0] ="http://dlive.in/khobor/khonjkhobor/wp-content/uploads/2018/11/news-thumb-01.jpg";
                    }
                    ?>
                    <img src="<?php echo $image_thumb_small_kolkata[0]; ?>" class="img-responsive" />
                <?php

              ?>
                </div>
                <div class="kolkata-home-thumb-writeup">
                  <h5>
                <?php 
                $homeksmalltitle = get_the_title(); 
                $homeksmalltitle_trimmed = mb_substr($homeksmalltitle, 0,100);
                echo $homeksmalltitle_trimmed;
                ?>
                  </h5>
                  <h6 class="color-lite-black pt-10"><?php echo meks_time_ago(); ?></h6>
                </div>
              </a><!-- oflow-hidden -->
              <?php 
              $first_five_kichenposts_ids[] = get_the_ID();
              }
              wp_reset_postdata();
          }
              ?>
            </div><!-- col-sm-6 -->

</div>

            <div id="fh5co-main" class="range range-xs-justify sunset-posts-container" data-columns="2">
          <?php 
            $args = array(
                'post_type' => 'AllbabsabanijyoPosts',
                'order' => 'DESC',
                'post_status'    => 'publish',
                // 'showposts' => 10
                'post__not_in'=>$first_five_kichenposts_ids,
                'posts_per_page' => '15'
                );
            $query = new WP_Query($args);

            if($query->have_posts()) : while($query->have_posts()): $query->the_post();
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
              $t_slug = get_post_type();
              // echo $t_slug;
               ?>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php endif;?>

          </div>

          <div class="col-xs-12 text-center">
            
            <a class="btn btn-lg btn-default sunset-load-more" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>" post_type ="<?php echo $t_slug ;?>">Load More...</a>
          </div>
            </div>

          <div class="col-md-4">
            <?php dynamic_sidebar( 'Sidebar-ad-1' ); ?>
          </div>
            </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready( function($){


          $(document).on('click','.sunset-load-more', function(){

          // this refers to the button itself
          var that = $(this);
          // reference to the data-page attribute value of the button
          var page = $(this).data('page');
          // next page reference
          var newPage = page+1;
          // reference to the data-url attribute value of the button
          var ajaxurl = that.data('url');


          $.ajax({
              
              url : ajaxurl,
              type : 'post', // post method of retriving data
              data : {
                  
                  page : page,
                  action: 'sunset_load_more_babsabanijyo'
                  
              },
              error : function( response ){
                  console.log(response);
              },
              success : function( response ){
                  
                  that.data('page', newPage);
                  $('.sunset-posts-container').append( response );
                  
              }
              
          });


          });



          });
        </script>


<?php   

//get_sidebar();
get_footer();
?>



