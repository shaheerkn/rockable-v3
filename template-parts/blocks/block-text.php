<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}

?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> text terms">
  <div class="container">
    <?php
      theme_the_field( 'title', '<h2 class="terms__title" data-aos="fade-up" data-aos-duration="1000">', '</h2>', true );
      theme_the_field( 'description', '<div class="terms__description">', '</div>', true );
    ?>
  </div>
</section>