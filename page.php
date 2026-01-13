<?php get_header(); ?>

<div class="site-content">
<main class="container">
<?php while ( have_posts() ) : the_post(); ?>

    <article class="single-post">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>

<?php endwhile; ?>
</main>
</div>
<?php get_footer(); ?>
