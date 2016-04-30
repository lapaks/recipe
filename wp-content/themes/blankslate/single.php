<?php get_header();?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 main">
    <!-- Breadcrumb NavXT 5.3.0 -->
      <section id="bread-crumb">
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
      </section>
      
       <!--START COL-SM-12-->
    <div class="rec-sum-content-padding no-padding">
      <div class="rec-title-single">
        <h1><a href="<?php echo get_permalink(); ?>">
          <?php the_title();?>
          </a></h1>
      </div>
      <div class="clearfix"></div>
     
      <div class="rec-by-photo"><img src="<?php bloginfo('template_url'); ?>/img/amee_med_avatar.jpg"> </div>
      <div id="recipe-meta-info">
        <div class="rec-by">Recipe By: <a href="<?php echo get_option('home'); ?>#about-me">
          <?php the_field('recipe_by');?>
          </a></div>
        <div class="cook-time"><i class="fa fa-clock-o"></i>&nbsp;
          <?php the_field('cook_time'); ?>
          &nbsp;mins. <span class="light-text">|</span> <span class="light-text">Servings: </span>
          <?php the_field('servings'); ?>
        </div>
      </div>
      <div class="clearfix"></div>
      <section class="rec-summary">
        
          <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
       
      </section>
    </div>
    <!--END COL-SM-12-->
           <!--START REC IMAGE-->

    <div class="rec-content">
      <figure>
        <?php the_post_thumbnail();?>
      </figure>
      <figcaption>
        <?php the_tags(); ?>
      </figcaption>
      <section class="recipe-ingredients">
        <h3>Ingredients</h3>
        <?php the_field('ingredients');?>
      </section>
      <section class="recipe-ingredients">
        <h3>Directions</h3>
        <?php the_field('directions');?>
      </section>
    </div>
           <!--END REC IMAGE-->
    

<div id="rec-cat">
      <div id="rec-cat-btn"><span>Category: </span>
        <?php the_category(); ?>
      </div>
    </div>


 <?php
		while ( have_posts() ) : the_post();
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

<div class="post-nav">
      <?php 
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Recipe:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Recipe:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		endwhile;
		?>
    </div>
<div class="url">
  <?php
$Get_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $Get_url;
?>
</div>
    </div>
    <div class="col-sm-3 side">
      <?php get_sidebar();?>
    </div>
    
  </div>
</div>


<?php get_footer(); ?>
