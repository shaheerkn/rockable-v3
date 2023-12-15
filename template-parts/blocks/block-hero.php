<?php
  $classes = 'layout-' . get_query_var('layout_index');
  if( get_sub_field( 'section_classes' ) ){
    $classes .= ' ' . get_sub_field( 'section_classes' );
  }
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> hero relative">
  <div class="container tcenter">
    <div class="site-brand">
      <?php
        theme_the_field( 'pre_title', '<p class="p tagline">', '</p>', true );
        theme_the_field( 'title', '<a href="/" class="h2 brand">', '</a>', true );
      ?>
    </div>
    <div class="hero__content" data-aos="zoom-out" data-aos-duration="1000">
      <?php
        theme_the_field( 'title_two', '<h1 class="h1">', '</h1>', true );
        theme_the_field( 'content', '<p class="p">', '</p>', true );
      ?>
    </div>
  </div>
</section>

<!-- data-aos="fade-down" data-aos-duration="1000" -->
<!-- data-aos="zoom-out" data-aos-duration="1000" -->