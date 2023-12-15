<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="contact-form-section <?php echo $classes; ?>">
<div class="container">
    <!-- <h1 class="h1">We’d love to hear from you!</h1> -->
    <div class="contact-form">
      <?php
        echo do_shortcode( get_sub_field( 'shortcode' ) );
      ?>
  </div>
</section>