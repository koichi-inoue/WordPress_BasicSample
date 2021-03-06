<aside>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php else: ?>


  <div class="widget">
      <?php get_search_form(); ?>
  </div>

  <div class="widget">
    <h2>Categories</h2>
    <ul>
      <?php wp_list_categories('title_li='); ?>
    </ul>
  </div>

  <div class="widget">
    <h2>RecentPosts</h2>
    <ul>
      <?php $args = array(
        'type' => 'postbypost',
        'limit' => 5
      );
      wp_get_archives($args); ?>
    </ul>
  </div>

  <div class="widget">
    <h2>Archive</h2>
    <ul>
    <?php wp_get_archives(); ?>
    </ul>
  </div>

  <div class="widget">
    <h2>Meta</h2>
  <ul>
    <?php wp_register(); ?>
    <li><?php wp_loginout(); ?></li>
    <?php wp_meta(); ?>
  </ul>
  </div>

<?php endif; ?>
</aside>
