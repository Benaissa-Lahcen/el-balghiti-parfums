<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<main class="pt-40 pb-24 max-w-7xl mx-auto px-6 bg-[var(--t-bg)] text-[var(--t-text)] min-h-[60vh] transition-colors duration-500 font-montserrat">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p class="font-mono text-xs uppercase tracking-widest text-[var(--t-text-muted)] text-center py-12">No content found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
