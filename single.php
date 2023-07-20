
<?php get_header(); ?>

<?php
if ( have_posts() ) {

    // Breadcrumb 

    // Load posts loop.
    while ( have_posts() ) {
        
        the_post();

        get_template_part( 'template-parts/content/content' );
        
    }
} else {

}

?>

<?php get_footer(); ?>