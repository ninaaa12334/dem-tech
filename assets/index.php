<?php get_header(); ?>

<div class="container" style="padding:60px 0;">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article style="margin-bottom:30px;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>

    <div style="margin-top:30px;">
      <?php the_posts_pagination(); ?>
    </div>

  <?php else : ?>
    <p>No content found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
