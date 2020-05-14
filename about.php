<?
/*
    Template name: Sobre nós
*/
?>
<? get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?
								$query = new WP_Query([
									'post_type' => 'page',
									'pagename' => 'sobre-nos'
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
            <h1 class="mb-3 bread">Quem somos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Quem somos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section bg-light mb-3 py-4">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">Sócio fundador</h2>
				</div>
        	</div>
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-lg-3 col-sm-6">
					<div class="block-2 ftco-animate">
						<div class="flipper">
							<div class="front" style="background-image: url(<?
								$query = new WP_Query([
									'category_name' => 'about'
								]);
								while($query -> have_posts()) : $query -> the_post();
									if ( has_post_thumbnail() ) {
										echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
									}
								endwhile;
							?>)">
								<div class="box">
								<h2>Dra. Célia Regina 
									Pereira Dantas
								</h2>
								<p>Civil Lawyer</p>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<blockquote>
								<p>&ldquo;Advogada com mais de 20 (vinte) anos de exercício profissional. Atuante em Direito Contratual, 
									Direito Parental e Gestão Positiva de Conflitos. Presidente da Comissão de Gestão Positiva de Conflitos
									da Associação Brasileira de Advogados no Rio de Janeiro – ABA RJ.&rdquo;</p>
								</blockquote>
								<div class="author d-flex">
									<div class="image mr-3 align-self-center">
										<img src="images/crs1.jpg" alt="">
									</div>
									<div class="name align-self-center">Dra. Célia Regina Pereira Dantas <span class="position">Civil Lawyer</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-lg-10 col-md-10 col-sm-6">
				<?
                    $query = new WP_Query([
                        'category_name' => 'about'
                    ]);
                    while($query -> have_posts()) : $query -> the_post();
                ?>

					<h2 class="text-info text-center"><? the_title(); ?></h2>
					<p class="text-secondary"><? the_content(); ?></p>
					<? endwhile; ?>
				</div>
			</div>
        </div>
	</section>
	
	<section class="ftco-section 1 bg-light mt-3 py-4">
    	<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<h2 class="mb-4">Áreas de experiência</h2>
				</div>
        	</div>
			<div class="row d-flex justify-content-center">
                <?
                    $query = new WP_Query([
                        'post_type' => 'expertises'
                    ]);
                    while($query -> have_posts()) : $query -> the_post();
                ?>
                    <div class="col-md-4 col-lg-3 text-center">
                        <div class="practice-area bg-white ftco-animate p-4">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="<?php echo rwmb_meta('crdantas-expertise_icon') ?>"></span>
                            </div>
                            <h3 class="mb-3"><a href="practice-single.html"><? the_title(); ?></a></h3>
                        </div>
                    </div>
                    <? endwhile; ?>
			</div>
    	</div>
    </section>


<? get_footer(); ?>