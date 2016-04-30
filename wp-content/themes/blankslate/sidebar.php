<div id="sidebar">
<div class="sidebar-content">
<aside id="sidebar" role="complementary">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="rec-cat">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
<h3 class="widget-title tags">Tag Cloud</h3>
<div class="clearfix"></div>
<?php echo do_shortcode('[wpbtags]');?>
</ul>
</div>



<?php endif; ?>
</aside>
</div>
</div>
