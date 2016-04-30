<div id="sidebar1">
<div class="sidebar-content">
  <section class="rec-cat">
    <h3>Recipe Categories</h3>
    <ul>
      <!--get_category_list-->
      <?php $args = array(
	'show_count'         => 1,
	'title_li'           => __( '' ),
    );?>
      <?php wp_list_categories($args); ?>
    </ul>
  </section>
  <section class="rec-ing">
    <h3>Recipe Ingredients</h3>
    <?php the_tags( '<ul><li>', '</li><li>' ); ?>
  </section>
</div>
</div>
