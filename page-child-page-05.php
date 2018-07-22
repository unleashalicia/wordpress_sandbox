<?php get_header(); ?>

    <div id="primary" class="content-area extended">
        <main id="main" class="site-main" role="main">
        
        <h1>Page Five Only!</h2>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
            
                <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

            <?php endwhile; else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </main>
    </div>

<?php get_footer(); ?>