<? get_header(); ?>

<? 
    while( have_posts()) :  the_post(); ?>

        <section class="hero-wrap hero-wrap-2" style="background-image: url(<?
            if ( has_post_thumbnail() ) {
                echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            }
        ?>);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread"><?php the_title(); ?></h1>
                </div>
                </div>
            </div>
        </section>
        <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-lg-9 col-sm-12">
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-lg-3 col-sm-12">
                <?php get_sidebar('rdfreitas-sidebar'); ?>
                </div>
            </div>
            <p>Postado por <?php the_author(); ?></p>
        </div>
        </section>
        <? endwhile; ?>

<? get_footer(); ?>