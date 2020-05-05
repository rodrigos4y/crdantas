<?
/*
    Template name: Contatos
*/
?>
<? get_header(); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Contate-nos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contato <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

   	
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3" id="contact-form">Entre em contato</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-lg-6">
            <?
                $query = new WP_Query([
                    'post_type' => 'contatos'
                ]);
                while($query -> have_posts()) : $query -> the_post();
            ?>
            <div class="col-md-12">
              <!-- put your phone number here -->
              <p><span>Tel.:</span> <?php echo rwmb_meta('crdantas-contact_phone') ?></p>
            </div>
            <div class="col-md-12">
              <p><span>Email:</span> <a href="<?php echo rwmb_meta('crdantas-contact_email') ?>"><?php echo rwmb_meta('crdantas-contact_email') ?></a></p>
            </div>
          </div>
                <? endwhile; ?>
          
          <div class="col-lg-6 order-md-last d-flex align-center">
            <!-- please complete mail.php script some places-->
            <form name="contactform" action="mail.php" method="POST" class="bg-light p-5 contact-form">
              <div class="form-heading pb-2">
                <h3 class="text-center">Consulta</h3>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Entrar em contato" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>


<? get_footer(); ?>