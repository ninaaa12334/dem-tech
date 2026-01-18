<?php get_header(); ?>

<div class="container" style="padding:60px 0;">
  <?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()) : ?>
      <div style="margin:20px 0;">
        <?php the_post_thumbnail('large'); ?>
      </div>
    <?php endif; ?>

    <div class="content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
