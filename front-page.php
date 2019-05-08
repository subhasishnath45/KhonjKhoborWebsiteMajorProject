<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
      <div class="clearfix">
        <div class="scrolling-text-widget-wrapper widget-block flasher-sec float-left w-100">
          <div class="container-fluid">
            <div class="row no-padding-left-right">
              <div class="scrolling-text-widget">
                <div class="col-md-2 no-padding-left-right">
                  <div class="heading-box">
সদ্যপ্রাপ্ত সংবাদ</div>
                </div>
                <div class="col-md-10 no-padding-left-right">
                    <div class="content-box">
                      <div id="carouselExampleControls" class="carousel slide">
                        <div class="carousel-inner">

                          <?php 

                            $breakinghome_args = array(
                                'post_type' => 'AllBreakingNews',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby'=>'ID',
                                'showposts' => 4
                             );
                             $wp_querybreakinghome = new WP_Query( $breakinghome_args );
                             if($wp_querybreakinghome->have_posts()) {

                             while($wp_querybreakinghome->have_posts()) {

                              $wp_querybreakinghome->the_post(); 
                          ?>

                          <div class="item <?php echo $wp_querybreakinghome->current_post >= 1 ? '' : 'active'; ?>">
                            <span class="time-box"><?php echo meks_time_ago(); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </div>

                          <?php 
                            }
                          }
                          wp_reset_postdata();
                          ?>
                        </div>
                        <div class="control-box">
                          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
		<?php get_template_part('content','carousel'); ?>
      <div class="clearfix">
        <div class="home-content margin-top-20">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="top-slider">

                      <h2 class="newsheader">
                        <span>কলকাতা</span>
                      </h2>

<div id="kolkata-home-posts" class="kolkata-home-posts">
        		<?php 
              $kolkatahome_args = array(
                'post_type' => 'AllKolkataPosts',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby'=>'ID',
                'showposts' => 1
             );
             $wp_querykolkatahome = new WP_Query( $kolkatahome_args );
             if($wp_querykolkatahome->have_posts()) {
         		$not_in_next_four = array(); 
             while($wp_querykolkatahome->have_posts()) {

              $wp_querykolkatahome->the_post(); 

              ?>

            <div class="col-sm-6 kolkata-home-posts-left no-padding-left-right">
                <?php 
                if (has_post_thumbnail( get_the_ID() ) ){
                    $image_thumb_latest_kolkata = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    ?>
                    <img src="<?php echo $image_thumb_latest_kolkata[0]; ?>" class="img-responsive" />
                <?php
                }else{
            	?>

            	<img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

            	<?php
                }
                ?> 
              
              <div class="kolkata-home-posts-left-text">
              <a href="<?php the_permalink(); ?>">
              	<h2 class=" title-large">
              	<?php 
              	$homekbigtitle = get_the_title(); 
              	$homekbigtitle_trimmed = mb_substr($homekbigtitle, 0,100);
              	echo $homekbigtitle_trimmed;
              	?>
              	</h2></a>
              <ul class="list-li-mr-20 pt-10 pb-20">
                <li class="color-lite-black">
                <?php echo meks_time_ago(); ?></li>
              </ul>
              <div class="kolkata-latest-post-content">
              	
              <?php 
              $home_kolkata_content = apply_filters( 'the_content', get_the_content() );
              $home_kolkata_content_brief = mb_substr($home_kolkata_content, 0, 300);
              echo $home_kolkata_content_brief . "...";
              ?>

              </div>
            </div>

            </div><!-- col-sm-6 -->
	        <?php 
	        	$not_in_next_four[] = get_the_ID();
	        	// echo $not_in_next_four[0];
	    			}
            wp_reset_postdata();
	    		}else{

	    			echo "no kolkata posts found";
	    		}
	    	?>
            <div class="col-sm-6 kolkata-home-posts-right no-padding-right">
            <?php 
              $kolkatahome_nextlatestfour_args = array(
                'post_type' => 'AllKolkataPosts',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby'=>'ID',
                'post__not_in'=>$not_in_next_four,
                'showposts' => 4
             );
             $wp_querykolkatahome_nextlatestfour = new WP_Query( $kolkatahome_nextlatestfour_args );
             if($wp_querykolkatahome_nextlatestfour->have_posts()) {

             while($wp_querykolkatahome_nextlatestfour->have_posts()) {

              $wp_querykolkatahome_nextlatestfour->the_post(); 
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
		          }
		      }
		      wp_reset_postdata();
              ?>
            </div><!-- col-sm-6 -->

                      </div>
                    </div>
                    <div class="ads01 margin-top-10">
	                    <?php if (function_exists('quads_ad'))
	                        echo quads_ad( array('location' => 'homead01') );
	                    ?> 
                    </div>
                  </div>
                  <div class="col-md-5">
                      <aside class="side-bar">
                          <ul class="nav nav-tabs" role="tablist" id="myTab">
                                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab">
বিনোদন</a> </li>
                                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">খেলা</a> </li>
                                  <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab">রাজ্য</a> </li>
                                </ul>
                          
                          <!-- Tab panes -->
                          <div class="tab-content sidebar-tabing" id="nav-tabContent">
                                  <div class="tab-pane active" id="home" role="tabpanel">
                                      <?php 
                                        $binodonhome_args = array(
                                            'post_type' => 'AllBinodonPosts',
                                            'post_status' => 'publish',
                                            'order' => 'DESC',
                                            'orderby'=>'ID',
                                            'showposts' => 4
                                         );
                                         $wp_querybinodonhome = new WP_Query( $binodonhome_args );
                                         if($wp_querybinodonhome->have_posts()) {

                                         while($wp_querybinodonhome->have_posts()) {

                                          $wp_querybinodonhome->the_post(); 
                                      ?>
                                      <div class="media"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                        <?php 
                                        if (has_post_thumbnail( get_the_ID() ) ){
                                            $image_thumb_binodon = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                                            ?>
                                            <img src="<?php echo $image_thumb_binodon[0]; ?>" class="img-responsive" />
                                        <?php
                                        }else{
                                      ?>

                                      <img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

                                      <?php
                                        }
                                        ?> 
                                      <div class="media-body">
                                          <div class="news-title">
                                              <h2 class="title-small">
                                                <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                                </a>
                                              </h2>
                                          </div>
                                          <div class="news-auther">
                                            <span class="time">
                                            <?php echo meks_time_ago(); ?>
                                            </span>
                                          </div>
                                      </div>
                                      </div>
                                    <?php 
                                      }
                                    }
                                    wp_reset_postdata();
                                    ?>
                                  </div>
                                  <div class="tab-pane" id="profile" role="tabpanel">
                                    <?php 

                                        $khalahome_args = array(
                                            'post_type' => 'AllKhalaPosts',
                                            'post_status' => 'publish',
                                            'order' => 'DESC',
                                            'orderby'=>'ID',
                                            'showposts' => 4
                                         );
                                         $wp_querykhalahome = new WP_Query( $khalahome_args );
                                         if($wp_querykhalahome->have_posts()) {

                                         while($wp_querykhalahome->have_posts()) {

                                          $wp_querykhalahome->the_post(); 

                                    ?>
                                      <div class="media"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                        <?php 
                                        if (has_post_thumbnail( get_the_ID() ) ){
                                            $image_thumb_khala = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                                            ?>
                                            <img src="<?php echo $image_thumb_khala[0]; ?>" class="img-responsive" />
                                        <?php
                                        }else{
                                      ?>

                                      <img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

                                      <?php
                                        }
                                        ?> 
                                      <div class="media-body">
                                          <div class="news-title">
                                              <h2 class="title-small">
                                                <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                                </a>
                                              </h2>
                                          </div>
                                          <div class="news-auther">
                                            <span class="time">
                                            <?php echo meks_time_ago(); ?>
                                            </span>
                                          </div>
                                      </div>
                                      </div>
                                    <?php 
                                      }
                                    }
                                    wp_reset_postdata();
                                    ?>
                                  </div>
                                  <div class="tab-pane" id="messages" role="tabpanel">
                                    <?php 

                                        $rajyahome_args = array(
                                            'post_type' => 'AllRajyaPosts',
                                            'post_status' => 'publish',
                                            'order' => 'DESC',
                                            'orderby'=>'ID',
                                            'showposts' => 4
                                         );
                                         $wp_queryrajyahome = new WP_Query( $rajyahome_args );
                                         if($wp_queryrajyahome->have_posts()) {

                                         while($wp_queryrajyahome->have_posts()) {

                                          $wp_queryrajyahome->the_post(); 

                                    ?>
                                      <div class="media"> 
                                        <a href="<?php the_permalink(); ?>"> 
                                        <?php 
                                        if (has_post_thumbnail( get_the_ID() ) ){
                                            $image_thumb_rajya = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                                            ?>
                                            <img src="<?php echo $image_thumb_rajya[0]; ?>" class="img-responsive" />
                                        <?php
                                        }else{
                                      ?>

                                      <img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

                                      <?php
                                        }
                                        ?> 
                                      </a>
                                      <div class="media-body">
                                          <div class="news-title">
                                              <h2 class="title-small">
                                                <a href="<?php the_permalink(); ?>">
                                                  <?php the_title(); ?>
                                                </a>
                                              </h2>
                                          </div>
                                          <div class="news-auther">
                                            <span class="time">
                                            <?php echo meks_time_ago(); ?>
                                            </span>
                                          </div>
                                      </div>
                                      </div>
                                    <?php 
                                      }
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                                </div>
                          <!-- <div class="video-sec">
                                  <h4 class="heading-small">Featured Video</h4>
                                  <div class="video-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                    </div>
                            </div>
                                </div> -->
                        </aside>
                        <div class="ads02 margin-top-10">
                        <?php if (function_exists('quads_ad'))
                            echo quads_ad( array('location' => 'homead02') );
                        ?> 
                        </div>
                  </div>
            </div>
          </div>
        </div>
      </div>


      <div class="clearfix">
        <div class="politics-row-wrapper section-01 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="politics-row">
                <div class="col-md-7">
                    <h2 class="newsheader">
                        <span>
বর্ধমান</span>
                      </h2>
                  <ul class="politics-content">
                    <?php 
                      $breakinghome_args = array(
                          'post_type' => 'AllBardhamanPosts',
                          'post_status' => 'publish',
                          'order' => 'DESC',
                          'orderby'=>'ID',
                          'showposts' => 4
                       );
                      $wp_querybreakinghome = new WP_Query( $breakinghome_args );
                       if($wp_querybreakinghome->have_posts()) {

                       while($wp_querybreakinghome->have_posts()) {

                      $wp_querybreakinghome->the_post(); 
                    ?>
                    <li>
                      <div class="card mb-4">
                        <?php 
                        if (has_post_thumbnail( get_the_ID() ) ){
                            $image_thumb_burdwan = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                            ?>
                            <img src="<?php echo $image_thumb_burdwan[0]; ?>" class="img-responsive" />
                        <?php
                        }else{
                      ?>

                      <img src="<?php echo get_template_directory_uri(); ?>/img/news-thumb-01.jpg" class="img-responsive" />

                      <?php
                        }
                        ?> 
                        <div class="card-body">
                          <div class="news-title">
                            <h2 class=" title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          </div>
                        <div class="card-text">
                          <?php 
                          $home_burdwan_content = apply_filters( 'the_content', get_the_content() );
                          $home_burdwan_content_brief = mb_substr($home_burdwan_content, 0, 300);
                          echo $home_burdwan_content_brief . "...";
                          ?>
                        </div>
                        <div class="card-text"><small class="text-time"><em><?php echo meks_time_ago(); ?></em></small></div>
                      </div>
                      </div>
                    </li>
                    <?php 
                      }
                    }
                    wp_reset_postdata();
                    ?>
                  </ul>
                </div>
                <div class="col-md-5">
                    <h2 class="newsheader">
                        <span>
বৈশিষ্ট্যযুক্ত ভিডিও</span>
                    </h2>
                    <div class="homevideoWrapper">
                    	<iframe width="100%" height="315" src="https://www.youtube.com/embed/dr7qvcytDAw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                	</div>
                    <div class="ads03 margin-top-10">
                        <?php if (function_exists('quads_ad'))
                            echo quads_ad( array('location' => 'homead03') );
                        ?> 
                    </div>
                </div>
              </div>
              <div class="weather-row">
                <div class="col-md-12">
                  <a class="weatherwidget-io" href="https://forecast7.com/en/22d5788d36/kolkata/" data-label_1="KOLKATA" data-label_2="WEATHER" data-theme="pure" >KOLKATA WEATHER</a>
                  <script>
                  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                  </script>  
                </div>
              </div>
              <div class="thumbnail-carousel-row w-100 margin-top-20">
                <div class="col-md-12">
                  <div id="owl-demo-02" class="widget-slider">
          
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/art.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Art</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/lifestyle.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">LifeStyle</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/food1.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Food</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/auto.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Auto</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/tech.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Tech</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                    <div class="item">
                        <div class="card text-white">
                            <a href="#">
                              <img class="card-img img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/sport2.jpg" alt="Card image">
                              <div class="card-img-overlay">
                                <h4 class="card-title">Sport</h4>
                              </div>
                            </a>
                          </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>