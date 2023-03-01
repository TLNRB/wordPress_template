<?php
/**
 * Template name: Archive
 */

 get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php
      if( have_posts(  ) ):
    ?>
    <header class="archive-page-header">
      <?php
        the_archive_title( '<h1 class="archive-title">', '</h1>' );
        the_archive_description(  );
      ?>
    </header>
    <?php
      while( have_posts(  ) ) :
        the_post();
        get_template_part( 'template-parts/post/content' );
      endwhile;
    ?>
  </main>
</div>