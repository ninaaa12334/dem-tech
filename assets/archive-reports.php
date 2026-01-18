<?php get_header(); ?>

<div class="container" style="padding:60px 0;">
  <h1>Reports</h1>

  <div class="grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="card">
        <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
        <h3><?php the_title(); ?></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
        <a class="btn" href="<?php the_permalink(); ?>">Read Report</a>
      </div>
    <?php endwhile; else: ?>
      <p>No reports found.</p>
    <?php endif; ?>
  </div>

  <div style="margin-top:30px;">
    <?php the_posts_pagination(); ?>
  </div>
</div>

<?php get_footer(); ?>
