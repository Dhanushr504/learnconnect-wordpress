<?php get_header(); ?>

<main class="container">
<?php while ( have_posts() ) : the_post(); ?>

    <article class="single-post">
        <h1><?php the_title(); ?></h1>

        <div class="post-meta">
            By <?php the_author(); ?> • <?php echo get_the_date(); ?>
        </div>

        <?php the_content(); ?>

        <?php comments_template(); ?>
    </article>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>
