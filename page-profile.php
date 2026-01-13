<?php get_header();

if ( ! is_user_logged_in() ) {
    echo '<p>Please login to view your profile.</p>';
    get_footer();
    exit;
}

$user = wp_get_current_user();
?>
<div class="site-content">
<div class="profile-wrapper">

    <?php echo get_avatar( $user->ID, 120 ); ?>


    <h2><?php echo esc_html( $user->display_name ); ?></h2>
    <a class="profile-edit-btn" href="<?php echo esc_url( admin_url( 'profile.php' ) ); ?>">
    Edit Profile
</a>
<a class="profile-logout-btn" href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>">
    Logout
</a>


    <p>
        Articles Posted:
        <strong><?php echo count_user_posts( $user->ID, 'post' ); ?></strong>
    </p>

</div>
<hr>

<h3 class="profile-section-title">My Articles</h3>

<?php
$args = array(
    'post_type'      => 'post',      // change to your CPT if needed
    'author'         => $user->ID,
    'posts_per_page' => 5
);

$user_posts = new WP_Query( $args );

if ( $user_posts->have_posts() ) :
    echo '<ul class="profile-post-list">';

    while ( $user_posts->have_posts() ) :
        $user_posts->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </li>
        <?php
    endwhile;

    echo '</ul>';
else :
    echo '<p>No articles posted yet.</p>';
endif;

wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>
