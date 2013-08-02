<?php /* Template Name: Homepage */  ?>

<?php get_header(); ?>

<div class="container">
   <div id="content">
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="page">
         <?php the_content(); ?>
      </article>
      <?php endwhile; endif; ?>
   </div>
</div>



<?php get_footer(); ?>