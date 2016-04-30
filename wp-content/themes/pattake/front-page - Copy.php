<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Pattake's Recipes</title>
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

</head>
<body>
<!--Carousel for large screen-->
<div class="visible-lg">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <div class="carousel-inner" role="listbox">
      <div class="item head-banner active"> <img src="<?php bloginfo('template_url'); ?>/img/spices.jpg"> </div>
      <div class="item head-banner"> <img src="<?php bloginfo('template_url'); ?>/img/page-title-main.jpg"> </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</div>
<!--Carousel for small screen & mobile device-->
<div class="visible-xs visible-sm visible-md">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="img/spices.jpg"> </div>
      <div class="item"> <img src="img/page-title-main.jpg"> </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</div>
<nav id="header1">
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
            <li><a href="#header">Home</a></li>
            <li><a href="#about-me">About</a></li>
            <li><a href="#recipe">Recipies</a></li>
            <li><a href="#contact">Contact</a></li>
            <li> </li>
          </ul>
          </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </nav>
  </div>
</nav>


<header id="header">
<div id="menu">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#"><h1>Shruti<span>Achal</span></h1></a>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#myviews">My Views</a></li>
				<li><a href="#contact">Contact</a></li>
				<li>
		</li>
				<li><div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="SEARCH" />
				<i class="glyphicon glyphicon-search form-control-feedback"></i>
				</div>
				</li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>

</header>




<div id="header">
  <div id="menu">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand visible-xs" href="#">
          <h3>Pattake<span>Oe</span></h3>
          </a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="#about-me">About</a></li>
            <li><a href="#recipe">Recipies</a></li>
            <li><a href="#contact">Contact</a></li>
            <li> </li>
          </ul>
          </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </nav>
  </div>
</div>








<section id="about-me">
    <div class="container">
          <div class="build title-page">
            <h2 class="text-center">About Us</h2>
            <div class="line-title bg-primary"></div>
          </div>
        <div class="col-md-6">
          <div class="build main-about">
            <div class="row">
              <div class="col-md-3">
              <?php
$args = array( 
    'page_id' => 56,                         //(int) - use page id.
  
);

$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();
  // Do Stuff
echo  the_title();
  
endwhile;
endif;
// Reset Post Data
wp_reset_postdata();
?>






                <div class="main-avatar text-center">
                  <div class="avatar img-thumbnail img-circle"> <img src="<?php bloginfo('template_url'); ?>/img/jk.png" alt="avatar" /> </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="about-content">
                  <p>Hi I am Amita. My friends call me “Pattake”. This is my yummy and healthy food recipe blog . I am a breakfast person. I like heavy breakfast so that I don’t need to worry about my diet while I am at work or gym or any other fun place. I also like spicy Nepal cuisine (similar with Indian cuisine). Yummy.. I will update my blog if I make any new and food and of course if I do not feel lazy to write . I will also post some healthy but creative entries , desserts and fun food.. Enjoy Stay healthy .. keep smiling</p>
                  <a href="#contact" class="btn btn-clear btn-lg border-color linear hire">AVAILABLE TO HIRE</a> </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<section id="recipe">
  <div id="homepage-content">
    <div class="width-container"> 
      <div class="build title-page">
            <h2 class="text-center">Recipies</h2>
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
        <li id="" class="">
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
                  <span><a href="http://talisa.progressionstudios.com/recipes/recipe-with-gallery/#comments">(2 Reviews)</a></span></div>
              </div>
              <div class="clearfix"></div>
              <div class="menu-excerpt-home">
                <p><?php echo get_the_twitter_excerpt();?></p>
              </div>
              <!-- close .blog-container-text -->
              <div class="author-meta-pro"><img alt="Cook" src="<?php bloginfo('template_url'); ?>/img/John-Doe_avatar_1410825111-40x40.jpg" class="avatar avatar-40 photo" height="40" width="40"></a> Recipe by <a href="<?php get_the_permalink();?>#aboutMore">
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
      <ul class="page-numbers">
        <li><span class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/2/">2</a></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/3/">3</a></li>
        <li><a class="page-numbers" href="http://talisa.progressionstudios.com/page/4/">4</a></li>
        <li><a class="next page-numbers" href="http://talisa.progressionstudios.com/page/2/">Next ›</a></li>
      </ul>
    </div>
    <!-- close .width-container --> 
  </div>
  </section>
<section id="category">
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
      <div class="circle">
        <?php the_post_thumbnail();?>
      </div>
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
</section>
<footer>
  <div id="copyright">
    <div class="width-container">
      <div class="grid2column-progression">
        <div id="copyrigh-text">© 2015 All Rights Reserved. Developed by ProgressionStudios</div>
      </div>
      <div class="grid2column-progression lastcolumn-progression">
        <div class="social-ico"> <a href="http://talisa.progressionstudios.com/no-reply@e-mail.com" target="_blank"><i class="fa fa-envelope"></i></a> <a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a> <a href="http://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a> <a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a> </div>
      </div>
    </div>
    <!-- close .width-container -->
    <div class="clearfix"></div>
  </div>
  <!-- close #copyright --> 
  <!-- Latest compiled and minified JavaScript --> 
  
  <!-- JavaScript --> 
  <script src="<?php bloginfo('template_url'); ?>/js/smooth-scroll.js"></script> 
  <script src="<?php bloginfo('template_url'); ?>/js/menu-on-bottom.js"></script> 
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.js"></script> 
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script> 
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

  <!-- Custom JavaScript for the Side Menu and Smooth Scrolling --> 
  
</footer>


</body>
</html>
