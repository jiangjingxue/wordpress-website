<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php else: ?>
    <p>No posts found. :(</p>
<?php endif; ?>