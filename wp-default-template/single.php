<?php
/**
 * Single page template
*/
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
      while(have_posts()) :
        the_post();
        /* the_title();
        the_content(); */
        get_template_part( 'template-parts/post/content', get_post_format() );
      endwhile;

      //if comments are open then we show the comments template
      if( comments_open() || get_comments_number());
        comments_template();
      endif;

    ?>

  </main>
</div>