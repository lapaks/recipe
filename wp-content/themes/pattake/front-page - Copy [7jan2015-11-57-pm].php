<?php get_header();?>

<body>
<div id="header"> 
  <!--Carousel for large screen-->
  <div id="home">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item head-banner active"> <img src="<?php bloginfo('template_url'); ?>/img/spices.jpg">
          <div class="carousel-caption">
            <h3>Welcome to my kitchen</h3>
            <p>haha hihi</p>
          </div>
        </div>
        <div class="item head-banner"> <img src="<?php bloginfo('template_url'); ?>/img/page-title-main.jpg">
          <div class="carousel-caption">
            <h3>Enjoy Cooking</h3>
            <p>Browse through my Recipes...</p>
          </div>
        </div>
        <div class="item head-banner"> <img src="<?php bloginfo('template_url'); ?>/img/baby-food-3.jpg">
          <div class="carousel-caption">
            <h3>Find Recipes for babies...</h3>
            <p>for infants and toddlers...</p>
          </div>
        </div>
        <div class="item head-banner"> <img src="<?php bloginfo('template_url'); ?>/img/baby-food-4.jpg"> </div>
        <div class="item head-banner"> <img src="<?php bloginfo('template_url'); ?>/img/baby-food-5.jpg"> </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
  <!--Carousel for small screen & mobile device--> 
  <!--regular menu-->
  <nav id="header1" class="">
    <div id="menu1">
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand visible-xs" href="#">
            <h3>Pattake<span>Oe</span></h3>
            </a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#home">Home</a></li>
              <li><a href="#about-me">About</a></li>
              <li><a href="#recipe">Recipes</a></li>
              <li><a href="#category">Categories</a></li>
            </ul>
            </li>
            </ul>
          </div>
          <!--/.nav-collapse --> 
        </div>
      </nav>
    </div>
  </nav>
</div>
<div id="about-me">
  <?php
$the_query = new WP_Query( array('page_id'=>56) );
if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
  <div class="container">
    <div class="build title-page">
      <h2 class="text-center">
        <?php the_title(); ?>
      </h2>
      <div class="line-title bg-primary"></div>
    </div>
    <div class="col-md-9">
      <div class="build main-about">
        <div class="row">
          <div class="col-md-3">
            <div class="main-avatar text-center">
              <div class="avatar img-thumbnail img-circle">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="about-content">
              <?php the_content(); ?>
              <!--<a href="#contact" class="btn btn-clear btn-lg border-color linear hire">AVAILABLE TO HIRE</a>--> 
            </div>
            <?php   }  
} 
wp_reset_postdata();
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="container">
<div class="row">

<div class="title-container">
<h2>Recipes</h2>
<div class="title-bg"></div>
</div>

<ul class="recipe">
<?php 

$args = array('post_type' => 'post');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?><li>
<div class="col-sm-6 rec-photo"><a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail();?>
            </a></div>
<div class="col-sm-6 rec-sum">
<div class="rec-sum-content-padding">

<div class="rec-title"><h2><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h2></div>
<div class="cook-time"><i class="fa fa-clock-o"></i>&nbsp;
                <?php the_field('cook_time'); ?>
                &nbsp;mins.</div>
<div class="rec-comment-rating"><img src="<?php bloginfo('template_url'); ?>/img/4.5star.png" alt="Star"></div>
<div class="clearfix"></div>
<div class="rec-summary"><p><?php echo get_the_twitter_excerpt();?></p></div>
<div class="rec-by-photo"><img src="<?php bloginfo('template_url'); ?>/img/amee_small_avatar.jpg"> </div>
<div class="rec-by">Recipe By: <a href="#about-me">
                <?php the_field('recipe_by');?>
                </a></div>

</div>
<div class="clearfix"></div>


</div>
      <div class="clearfix"></div>
</li>

 <?php endwhile;?>
</ul>
      <div class="clearfix"></div>

</div><!--container-->
</div><!--row-->

<div id="recipe">
  <div id="homepage-content">
    <div class="width-container">
      <div class="build title-page">
        <h2 class="text-center">Recipes</h2>
        <div class="line-title bg-primary"></div>
      </div>
      <!-- this code pull in the homepage content -->
      <div class="clearfix"></div>
      <ul class="container-menu-pro">
        <?php 

$args = array('post_type' => 'post');
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
?>
        <li>
          <div class="featured-menu-image"><a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail();?>
            </a></div>
          <!-- close .featured-menu-image -->
          
          <div class="container-menu-home-content">
            <div class="container-content-home-padding">
              <h2 class="menu-title-home"><a href="<?php echo get_permalink(); ?>">
                <?php the_title();?>
                </a></h2>
              <div class="time-menu-pro"><i class="fa fa-clock-o"></i>&nbsp;
                <?php the_field('cook_time'); ?>
                &nbsp;mins.</div>
              <div class="author-rating-pro">
                <div class="ratings-pro">
                  <div class="comment-rating-pro"><img src="<?php bloginfo('template_url'); ?>/img/4.5star.png" alt="Star"></div>
                  <span></span></div>
              </div>
              <div class="clearfix"></div>
              <div class="menu-excerpt-home">
                <p><?php echo get_the_twitter_excerpt();?></p>
              </div>
              <!-- close .blog-container-text -->
              <div class="author-meta-pro"><img alt="Cook" src="<?php bloginfo('template_url'); ?>/img/amee_small_avatar.jpg" class="avatar avatar-40 photo" height="40" width="40"></a> Recipe by <a href="#about-me">
                <?php the_field('recipe_by');?>
                </a></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </li>
        <?php endwhile;?>
      </ul>
      <!-- close .container-menu -->
      <div class="clearfix"></div>
      <!--  <ul class="page-numbers">
        <li><span class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/2/">2</a></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/3/">3</a></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/4/">4</a></li>
        <li><a class="next page-numbers" href="http://talisa.progressionstudios.com/page/2/">Next ›</a></li>
      </ul>
      --> 
    </div>
    <!-- close .width-container --> 
  </div>
</div>
<div id="category">
  <div id="widget-area">
    <div class="width-container footer-3-column">
      <div id="pyre_homepage_media-widget-menu-2" class="widget pyre_homepage_media-menu">
        <h3 class="widget-title">Recipe Categories</h3>
        <?php $args = array(
	'show_count'         => 1,
	'title_li'           => __( '' ),
    );?>
        <?php wp_list_categories($args); ?>
      </div>
      <div id="pyre_homepage_media-widget-port-2" class="widget pyre_homepage_media-port">
        <h3 class="widget-title">Recent Snacks</h3>
        <?php
$args = array('cat' => 4,);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();
?>
        <div class="circle"><a href="<?php echo get_permalink(); ?>">
          <?php the_post_thumbnail();?>
          </a> <a href="<?php echo get_permalink(); ?>">
          <?php the_title();?>
          </a> </div>
        <!-- close .featured-menu-image -->
        <?php endwhile;
endif;
?>
        <?php  wp_reset_postdata();
?>
      </div>
      <div class="clearfix"></div>
    </div>
    
    <!-- .site-main --> 
  </div>
  <!-- .content-area --> 
</div>
<?php get_footer(); ?>
</body>
</html>