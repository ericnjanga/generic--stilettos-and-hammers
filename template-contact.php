<?php
    /*
    Template Name: Contact Template
    */ 
    get_header();
?>

<header class="hero">
    <div class="container">
        <div class="text-wrapper">
            <h1 class="hero-title"><?php echo getField('optional_title'); ?></h1>
            <section class="breadcrumb">
                <?php displayBreadcrumbs(); ?>
            </section>
            <?php edit_post_link(); ?>
        </div>
    </div>
</header>

<main class="main-content-wrapper section-spacer container" role="main">


    <h3>
        <?php echo getField('optional_subtitle'); ?>
    </h3>


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="entry-content" itemprop="mainContentOfPage">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>