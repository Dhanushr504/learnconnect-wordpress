<?php get_header(); ?>

<main class="container">
    <h2>Learning Feed</h2>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <article class="post-card">
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>

                <div class="post-meta">
                    By <?php the_author(); ?> • <?php echo get_the_date(); ?>
                </div>

                <?php the_excerpt(); ?>
            </article>

        <?php endwhile; ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
