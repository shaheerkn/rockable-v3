<?php
  $classes = 'layout-' . get_query_var('layout_index');
  if( get_sub_field( 'section_classes' ) ){
    $classes .= ' ' . get_sub_field( 'section_classes' );
  }
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> process relative">
  <div class="container tcenter">
    <?php
      theme_the_field( 'process_title', '<div class="process__title outline-btn">', '</div>', true );
      theme_the_field( 'process_description', '<p class="process__p">', '</p>', true );
    ?>
  </div>
</section>