<?php
/**
 * Template Name: Blog
 * The template for displaying the blog page 
 */
?>
<?php get_header('blog');?>

<!-- Modals -->
<?php get_template_part('modals/modal','vacuum0'); ?>
<?php get_template_part('modals/modal','vacuum1'); ?>
<?php get_template_part('modals/modal','chevy'); ?>
<?php get_template_part('modals/modal','frontier'); ?> 
<?php get_template_part('modals/modal','semantic'); ?> 
<?php get_template_part('modals/modal','voronoi'); ?> 
<?php get_template_part('modals/modal','mpc'); ?> 
<?php get_template_part('modals/modal','mpctuner'); ?> 
<?php get_template_part('modals/modal','website'); ?> 

<?php get_footer();?>