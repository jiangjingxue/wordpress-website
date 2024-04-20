<?php
/**
 * Template Name: Projects
 * The template for displaying the projects page 
 */
?>
<?php get_header('projects');?>

<article class="content">
    <?php get_template_part('template-parts/content','projectsnew'); ?> 
</article>

<!-- Modals -->
<?php get_template_part('modals/modal','chevy'); ?>
<?php get_template_part('modals/modal','frontier'); ?> 
<?php get_template_part('modals/modal','semantic'); ?> 


<?php get_footer();?>

