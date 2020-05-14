<?
/*
    Template name: Homepage
*/
?>
<? get_header() ?>

    <div class="hero-wrap js-fullheight" style="background-image: url(<?
		$query = new WP_Query([
			'post_type' => 'page',
			'pagename' => 'home'
		]);
		while($query -> have_posts()) : $query -> the_post();
			if ( has_post_thumbnail() ) {
				echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
			}
		endwhile;
	?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Estamos aqui para ajudar!</h2>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            	<span>Experiência</span> . <span>Inovação</span> . <span>Excelência</span>
            </h1>
            <?php dynamic_sidebar('contact-button'); ?>
          </div>
        </div>
      </div>
    </div>

    
   	
    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<img src="<? bloginfo('template_url') ?>/images/crs1.jpg" alt="Dra. Célia Regina Dantas" class="d-block w-100 h-200">
						  </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="sr-only">Anterior</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="sr-only">Próximo</span>
						</a>
					  </div>
    			</div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                  <?
                    $query = new WP_Query([
                        'post_type' => 'presentation'
                    ]);
                    while($query -> have_posts()) : $query -> the_post();
                  ?>

                        <h2 class="mb-4"><? the_title(); ?></h2>
                        <blockquote class="blockquote">
                        <p class="mb-0 text-dark"><? the_content(); ?></p>
                        </blockquote>
                    <? endwhile ?>
              </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

<? get_footer(); ?>    

