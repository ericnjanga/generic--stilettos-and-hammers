<?php
    /**
     * Artile page
     * --------
     */
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header class="hero">
        <div class="text-wrapper">
            <span class="fs-7">Article page</span>
            <h1 class="hero-title"><?php the_title(); ?></h1>
            <div class="hero-intro">
                <?php get_template_part( 'entry', 'meta' ); ?>
            </div>
            <?php edit_post_link(); ?>
        </div>
    </header>

    <main class="main-content-wrapper section-spacer" role="main">
        <?php get_template_part( 'entry' ); ?>
        <footer class="blog-footer">
            <?php get_template_part( 'nav', 'below-single' ); ?>
        </footer>
    </main>
<?php endwhile; endif; ?>

<?php get_footer(); ?>



