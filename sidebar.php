<? 
  if(! is_active_sidebar('rdfreitas-sidebar')) {
    return;
  }
?>

<!-- sidebar -->
<aside class="blog-sidebar well">
  <ul class="list-unstyled">
    <? dynamic_sidebar('rdfreitas-sidebar') ?>
  </ul>
</aside>
<!--/sidebar -->