<?php get_header(); ?>
<?php get_sidebar();?>
<!-- welcome -->
                <div class="welcome">
                    <div class="welcome-bottom">
                     <?php if ( have_posts() ) : while ( have_posts() ) :
            the_post(); get_template_part( 'content', get_post_format() );


        endwhile;
    ?>
<?php   endif; ?>

            <div class="clearfix"> </div>
        </div>
    </div>
<?php get_footer(); ?>