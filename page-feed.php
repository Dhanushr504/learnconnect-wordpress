<?php get_header(); ?>

<div class="feed-wrapper">

<?php if ( ! is_user_logged_in() ) : ?>

    <!-- GUEST VIEW (ONLY FOR FEED) -->
    <div class="feed-auth-message">
        <h2>Please login to view Feed</h2>
        <p>Create an account or login to access posts and updates.</p>

        <div class="feed-auth-buttons">
            <a href="<?php echo wp_login_url( get_permalink() ); ?>" class="btn-login">
                Login
            </a>
            <a href="<?php echo wp_registration_url(); ?>" class="btn-signup">
                Sign Up
            </a>
        </div>
    </div>

<?php else : ?>

    <!-- LOGGED-IN VIEW -->
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>
