<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> logos">
  <div class="container">
    <?php
      while (have_rows( 'logos' ) ) : the_row();
        $row_index = get_row_index();
          ?>
          <div class="logos__logo" data-aos="fade-up" data-aos-duration="1000">
            <?php
              theme_get_attachment( get_sub_field( 'logo' ) , 'full', '', true );
            ?>
          </div>
    <?php
      endwhile;
    ?>
  </div>
</section>