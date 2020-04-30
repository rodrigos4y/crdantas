<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CR DANTAS - Advogados Associados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <? wp_head(); ?>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img src="<? bloginfo('template_url') ?>/images/logo.png" alt="logo" style="width: 100px; height: 100px; float: left;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
		  	<?
				wp_nav_menu([
					'theme_location' => 'crdantas_principal',
					'container' => 'ul',
					'menu_class' => 'navbar-nav ml-auto'
				])
			?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
