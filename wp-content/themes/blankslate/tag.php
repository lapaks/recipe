<div class="wrapper">
  <?php get_header();?>
  <div class="container">
    <div class="row"> 
      <!--START COL-SM-9-->
      <div class="col-sm-9 main">
        <div id="bread-crumb"><!-- Breadcrumb NavXT 5.3.0 -->
          <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
        </div>
        <!--TAGS-->
        <section>
          <?php if ( have_posts() ) : ?>
          <div class="clearfix"></div>
          <ul id="taxonomy_pro_recipe">
            <?php the_tags( '<li>', '</li><li>' ); ?>
          </ul>
        </section>
        <!--END TAGS--> 
        <!--START RECIPE SUMMARY-->
        <section id="content-container">
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
          </div>
          <?php            
            endwhile;
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
        </section>
        <!--END RECIPE SUMMARY--> 
        
      </div>
      <!--END COL-SM-9--> 
      <!--START COL-SM-3-->
      <div class="col-sm-3 side">
        <?php get_sidebar();?>
      </div>
      <!--END COL-SM-3--> 
      
    </div>
  </div>
  <div class="push"></div>
</div>
<?php get_footer();?>
