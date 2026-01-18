<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1>Protecting Democracy in the Digital Age</h1>
        <p>Strengthening democratic resilience and countering disinformation across Kosovo and the Western Balkans.</p>
        <a href="#work" class="btn">Our Work</a>
    </div>
</section>

<section id="work" class="container">
    <h2 style="text-align:center; margin-top:50px;">Key Focus Areas</h2>
    <div class="grid">
        <div class="card">
            <h3>Research & Monitoring</h3>
            <p>Real-time analysis of online environments to identify disinformation and AI-generated manipulation.</p>
        </div>
        <div class="card">
            <h3>Capacity Building</h3>
            <p>Training for civil society, media, and institutions to detect and respond to digital threats.</p>
        </div>
        <div class="card">
            <h3>Policy & Advocacy</h3>
            <p>Evidence-based recommendations for democratic governance and responsible tech policy.</p>
        </div>
    </div>
</section>

<section class="container">
    <h2>Latest Reports</h2>
    <div class="grid">
        <?php 
        $reports = new WP_Query(['post_type' => 'reports', 'posts_per_page' => 3]);
        while($reports->have_posts()) : $reports->the_post(); ?>
            <div class="card">
                <?php the_post_thumbnail('medium'); ?>
                <h4><?php the_title(); ?></h4>
                <a href="<?php the_permalink(); ?>">Read Report</a>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>