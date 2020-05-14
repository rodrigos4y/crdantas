<?
/*
    Template name: Blog
*/
?>
<? get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?
        $query = new WP_Query([
            'post_type' => 'page',
            'pagename' => 'blog'
        ]);
        while($query -> have_posts()) : $query -> the_post();
            if ( has_post_thumbnail() ) {
                echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
            }
        endwhile;
    ?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section contact-section">
      <div class="container">
        <?
            $query = new WP_Query([
                'post_type' => 'page',
                'pagename' => 'blog'
            ]);
            while($query -> have_posts()) : $query -> the_post();
                the_content();
            endwhile;
        ?>
        <div class="row d-flex mb-5 contact-info">
            <div class="col-lg-9 col-sm-12">
                <? 
                    $query = new WP_Query([
                        'post_type' => 'post',
                        'category_name' => 'blog'
                    ]);
                    while($query -> have_posts()) : $query -> the_post(); ?>
                        <div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                <?php endwhile; ?>
            </div>
            <div class="col-lg-3 col-sm-12">
                <?php get_sidebar('rdfreitas-sidebar'); ?>
            </div>
        </div>
      </div>
    </section>


<? get_footer(); ?>