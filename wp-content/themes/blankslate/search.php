<div class="wrapper">
  <?php get_header();?>
  <div class="container">
    <div class="row main"> 
      <!--START COL-SM-9-->
      <div class="col-sm-9 main">
      <section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>

     <div class="cat-item-display">
            <div class="cat-item-img"> <a href="<?php the_permalink();?>">
              <?php the_post_thumbnail();?>
              </a> </div>
            <div class="cat-item-sum">
              <div class="cat-item-title">
                <h4 class="rec-title-cat"><a href="<?php the_permalink();?>">
                  <?php the_title();?>
                  </a></h4>
              </div>
              <div class="cat-item-prep-time"><i class="fa fa-clock-o"></i>
                <?php the_field('cook_time');?>
                &nbsp;mins.</div>
              <div class="rec-by rec-arc"> Recipe by <a href="<?php echo get_option('home'); ?>#about-me">
                <?php the_field('recipe_by');?>
                </a> </div>
            </div>
          </div><?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</section>
      </div>
      <div class="col-sm-3 side">
		<?php get_sidebar(); ?>
      </div>
     </div>
    </div>
      <div class="push"></div>

   </div>
<?php get_footer(); ?>