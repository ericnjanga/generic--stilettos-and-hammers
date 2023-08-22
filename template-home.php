<?php
    /*
    Template Name: Home Template
    */ 
    get_header();
?>


    <header class="hero large" role="region">
        <div class="container">
            <div class="text-wrapper">
                <h1 class="hero-title"><?php echo getField('optional_title'); ?></h1>
                <?php edit_post_link(); ?>
                <p class="hero-intro"><?php echo getField('optional_description'); ?></p>
                <footer class="hero-footer">
                    <!-- <a href="#section-services" class="btn btn-secondary btn-icon btn-arrow-down">About us</a> -->
                    <a href="#section-services" class="btn btn-primary btn-icon btn-arrow-down">CTA Discover</a>
                </footer>
            </div>
        </div>

        <div>
            <!-- <img id="test-css" class="img-fluid" src="http://stilettosandhammers.local/wp-content/uploads/2023/08/hero-img.png" alt=""> -->
            <?php
                displayHeroImages('wadedfef');
            ?>
        </div>
    </header>




<main class="main-content-wrapper" role="main">
    <?php
        displayUpcomingEventSection();
    ?>


    <section class="section-highlight">
        <div class="container">
            <h2 class="section-title">We strategize, invest and win together!</h2>
            
            <div>
                <div>
                    <?php echo getFieldImage('value_1_icon'); ?>
                    <h3 class="section-subtitle"><?php echo getField('value_1_title'); ?></h3>
                    <p class="section-content"><?php echo getField('value_1_paragraph'); ?></p>
                    <?php
                        echo getFieldImage('value_1_image', '', 'medium');
                    ?>
                </div>
                <div>
                    <?php echo getFieldImage('value_2_icon'); ?>
                    <h3 class="section-subtitle"><?php echo getField('value_2_title'); ?></h3>
                    <p class="section-content"><?php echo getField('value_2_paragraph'); ?></p>
                    <?php
                        echo getFieldImage('value_2_image', '', 'medium');
                    ?>
                </div>
                <div>
                    <?php echo getFieldImage('value_3_icon'); ?>
                    <h3 class="section-subtitle"><?php echo getField('value_3_title'); ?></h3>
                    <p class="section-content"><?php echo getField('value_3_paragraph'); ?></p>
                    <?php
                        echo getFieldImage('value_3_image', '', 'medium');
                    ?>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="section-spacer container">
        <h2 class="h-underlined">latest posts</h2>
        <div>
            <?php latestPosts('grid grid-11233 posts-list', '', 3, true, 12); ?>
        </div>
    </section>


    <section class="section-spacer container">
        <h2 class="h-underlined">Don’t take our word for it...</h2>
        <div>
            <?php displayTestimonial('grid grid-11233 testimonial-list', 3, true); ?>
        </div>
    </section>


    <section id="section-partners" class="section-spacer container">
            <h2 class="section-title">Partners</h2>
            <?php
                displayClientLogos();
            ?>
        </section>

</main>


<?php get_footer(); ?>