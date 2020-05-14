<?
/*
    Template name: Serviços
*/
?>
<? get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?
        $query = new WP_Query([
          'post_type' => 'page',
          'pagename' => 'servicos'
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
            <h1 class="mb-3 bread">Serviços</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Serviços <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <?
        $query = new WP_Query([
            'post_type' => 'services',
            'orderby' => 'title',
            'order' => 'ASC'
        ]);

        while($query -> have_posts()) : $query -> the_post();
    ?>

        <section class="ftco-section services-section mb-4 bg-light">
        <div class="container mt-0">
            <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3 text-info"><? the_title(); ?></h2>
            </div>
            </div>
            <div class="row justify-content-center text-dark">
                <? the_content(); ?>
            </div>
        </div>
        </section>
    <? endwhile; ?>
    

    
    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid">
    		<div class="row d-flex">
        </div>
    	</div>
    </section>

<? get_footer(); ?>