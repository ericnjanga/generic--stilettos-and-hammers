<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
    <meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
    <meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
    <meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
    <meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
    <meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
    <meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta name="twitter:widgets:link-color" content="#007acc" />
    <meta name="twitter:widgets:border-color" content="#fff" />
    <link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
    <script type="application/ld+json">
    {
    "@context": "https://www.schema.org/",
    "@type": "WebSite",
    "name": "<?php bloginfo( 'name' ); ?>",
    "url": "<?php echo esc_url( home_url() ); ?>/"
    }
    </script>
    <script type="application/ld+json">
    {
    "@context": "https://www.schema.org/",
    "@type": "Organization",
    "name": "<?php bloginfo( 'name' ); ?>",
    "url": "<?php echo esc_url( home_url() ); ?>/",
    "logo": "<?php if ( has_custom_logo() ) { $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo esc_url( $logo[0] ); } ?>",
    "image": "<?php if ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>",
    "description": "<?php bloginfo( 'description' ); ?>"
    }
    </script>
    <?php wp_head(); ?>



    <!-- 
        (MailChimp Subscribe popup)
        --------- (Hidden) ---------
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/282e2fbe92a5c972b0b2e48de/92eb890e30c0757a83c8b2606.js");</script>
    -->
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="site-global-wrapper" class="site-global-wrapper hfeed">
        <div class="container-fluid fixed-top p-0">
            <div class="main-header-wrapper bg-white">
                <header class="main-header" id="header" role="banner">
                    <nav class="navbar navbar-expand-lg container">

                        <div class="navbar-brand" id="branding">
                            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                <?php
                                    include '_header-logo.php';
                                ?>
                            </div>
                            <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>>
                                <?php bloginfo( 'description' ); ?>
                            </div>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'bootstrap-menu',
                                    'menu_class' => 'navbar-nav',
                                    'container' => false,
                                    'depth' => 2,
                                    'walker' => new Bootstrap_Walker_Nav_Menu(),
                                ));
                            ?>
                        </div>
                            
                    </nav>
                </header>
            </div>

        </div>
            
        <div id="site-global-container" class="site-global-container container bx-container">
            <?php
                // Inject helpers (needed all over the application)
                include '_fct-helpers.php';
            ?>