<?php get_header(); ?>

<main>

  <article>

    <div id="home_gallery">

    <?php
    if (have_posts()) : // WordPress Loop
      while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
          <?php else : ?>
            <img src="<?php bloginfo('template_url'); ?>/img/noimage.png" alt="デフォルト画像" />
          <?php endif ; ?>

          <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
          <p class="post-meta">
            <span class="post-date"><?php the_time('Y-n-j');?></span>
          </p>

        </div>
      <?php
      endwhile;
    else : ?>
        <div class="article_not_found">
          <h2>Article Not Found!</h2>
          <p>このサイトには、まだ投稿がありません。</p>
        </div>
    <?php
    endif;
    ?>
    </div>

  <?php
  if ( $wp_query->max_num_pages > 1 ) : ?>
    <div id="home_gallery_navigation">
      <?php the_posts_navigation(); ?>
    </div>
  <?php
  endif;
  ?>

  </article>

</main>

<?php get_footer(); ?>
