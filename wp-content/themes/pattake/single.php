<?php get_header();?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="bread-crumb"><!-- Breadcrumb NavXT 5.3.0 -->
        <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="rec-sum-content-padding no-padding col-sm-12">
      <div class="rec-title-single">
        <h1><a href="<?php echo get_permalink(); ?>">
          <?php the_title();?>
          </a></h1>
      </div>
      <div class="share-print"> <i class="fa fa-share-alt share" data-toggle="modal" data-target="#myModal" ></i> <i class="fa fa-print print" onclick="printPage()"></i> </div>
      <div class="clearfix"></div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Share on:</h4>
            </div>
            <div class="modal-body">
              <div class="social-platform">
             
              
              
              <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook."> <i class="fa fa-facebook fb-share"></i> </a></div>
              <div class="social-platform"><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"> <i class="fa fa-twitter twt-share"></i></a></div>
              <div class="social-platform"><i class="fa fa-instagram insta-share"></i></div>
              <div class="clearfix"></div>
            </div>
            <div class="modal-footer"> </div>
          </div>
        </div>
      </div>
      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
          <div class="modal-content"> </div>
        </div>
      </div>
      <div class="rec-by-photo"><img src="<?php bloginfo('template_url'); ?>/img/amee_med_avatar.jpg"> </div>
      <div id="recipe-meta-info">
        <div class="rec-by">Recipe By: <a href="<?php echo get_option('home'); ?>#about-me">
          <?php the_field('recipe_by');?>
          </a></div>
        <div class="rec-comment-rating-sum"></div>
        </br>
        <div class="cook-time"><i class="fa fa-clock-o"></i>&nbsp;
          <?php the_field('cook_time'); ?>
          &nbsp;mins. <span class="light-text">|</span> <span class="light-text">Servings: </span>
          <?php the_field('servings'); ?>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="rec-summary">
        <p><?php while ( have_posts() ) : the_post(); the_excerpt(); endwhile; ?></p>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-sm-9 rec-image">
      <?php the_post_thumbnail();?>
    </div>
    <div class="col-sm-3">
      <?php get_sidebar();?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 recipe-ingredients">
      <h3>Ingredients</h3>
      <?php the_field('ingredients');?>
    </div>
    <div class="col-sm-12 recipe-ingredients">
      <h3>Directions</h3>
      <?php the_field('directions');?>
    </div>
    <div class="clearfix"></div>
    <div id="rec-cat">
      <div id="rec-cat-btn"><span>Category: </span>
        <?php the_category(); ?>
      </div>
    </div>
    <div class="clearfix"></div>
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
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="url">
  <?php
$Get_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $Get_url;
?>
</div>
<?php get_footer(); ?>
