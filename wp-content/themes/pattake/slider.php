<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="slider1">
  <?php 
$args = array('post_type' => 'post');
$loop = new WP_Query( $args );
if ($loop->have_posts()):
while ( $loop->have_posts() ) : $loop->the_post();
?>
  <div class="slides slide-fx-height"> <a href="<?php echo get_permalink(); ?>">
    <?php the_title();?>
    </a><br/>
    <a href="<?php echo get_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    </a> <i class="fa fa-clock-o"></i>&nbsp;
    <?php the_field('cook_time'); ?>
    &nbsp;mins.
    Servings: <strong>
    <?php the_field('servings'); ?>
    </strong> </div>
  <?php endwhile; endif; 
 wp_reset_postdata();
  ?>
</div>
</body>
</html>