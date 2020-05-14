<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('social-footer') ) : 
 
            endif; ?>
          </div>
          <div class="col-md">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('expertise-footer') ) : 
 
          endif; ?>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Quer falar conosco?</h2>
            	<div class="block-23 mb-3">
              <?
                  $query = new WP_Query([
                      'post_type' => 'contatos'
                  ]);
                  while($query -> have_posts()) : $query -> the_post();
              ?>
	              <ul>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo rwmb_meta('crdantas-contact_phone') ?></span></a></li>
	                <li><a href="mailto:<?php echo rwmb_meta('crdantas-contact_email') ?>"><span class="icon icon-envelope"></span><span class="text"><?php echo rwmb_meta('crdantas-contact_email') ?></span></a></li>
                </ul>
                  <? endwhile; ?>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved &reg;  &nbsp;<span style="color: #eac15a;">CR DANTAS</span></p>
            <p>Developed by &nbsp;<a href="https://rodrigos4y.github.io/"><span style="color: #eac15a;">rdfreitas</span></a></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<? wp_footer() ?>
    
  </body>
</html>