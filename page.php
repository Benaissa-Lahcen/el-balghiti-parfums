<?php
/**
 * The template for displaying all pages
 *
 * @package El_Balghiti_Parfums
 */

get_header(); ?>

<main class="pt-40 pb-24 max-w-7xl mx-auto px-6 bg-[var(--t-bg)] text-[var(--t-text)] min-h-[60vh] transition-colors duration-500 font-montserrat">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            echo '<h1 class="text-3xl md:text-4xl font-bold uppercase tracking-[0.25em] mb-8 text-center text-[var(--t-text)]">' . get_the_title() . '</h1>';
            echo '<div class="prose dark:prose-invert max-w-none text-[var(--t-text-secondary)] font-cormorant text-lg leading-relaxed">';
            the_content();
            echo '</div>';
        endwhile;
    else :
        echo '<p class="font-mono text-xs uppercase tracking-widest text-[var(--t-text-muted)] text-center py-12">No content found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
