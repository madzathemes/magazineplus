<?php function magazineplus_footer_logo() { ?>

  <?php
  $option = get_option("tophot_theme_options");
    // Fix for SSL
    if(!empty($option['footer_logo'])) {
      $footer_logo = esc_url($option['footer_logo']);
      if(is_ssl() and 'http' == parse_url($footer_logo, PHP_URL_SCHEME) ){
          $footer_logo = str_replace('http://', 'https://', $footer_logo);
      }
    }

    $footer_logo2 = "";
    if(!empty($option['footer_logox2'])) {
      $footer_logo2 = esc_url($option['footer_logox2']);
      if(is_ssl() and 'http' == parse_url($footer_logo2, PHP_URL_SCHEME) ){
          $footer_logo2 = str_replace('http://', 'https://', $footer_logo2);
      }
    }

    ?>
    <?php if(!empty($option['footer_logo'])) { ?>
      <img src="<?php echo esc_url($footer_logo); ?>" srcset="<?php echo esc_url($footer_logo); ?> 1x, <?php echo esc_url($footer_logo2); ?> 2x"  alt="<?php echo the_title(); ?>"  />
    <?php } else { ?>
      <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo-footer.png" width="300" height="90" alt="<?php echo the_title(); ?>" />
    <?php } ?>

<?php } add_filter('magazineplus_footer_logo','magazineplus_footer_logo');

function magazineplus_footer_style_1() { ?>

  <div class="row">
    <div class="col-md-3 footer-logo">
      <?php magazineplus_footer_logo(); ?>
    </div>
    <div class="col-md-4 footer-about">
      <h2><?php echo esc_html__('About Us', 'magazineplus'); ?></h2>
      <p><?php echo esc_attr(get_theme_mod('magazineplus_footer_about_us', 'Donec eu tellus convallis, vehicula neque sed, mattis elit. Praesent ornare, ligula in efficitur egestas, massa lacus vulputate enim')); ?> </p>
      <p><?php echo esc_html__('Contact us:', 'magazineplus'); ?> <a class="mail" href="mailto:<?php echo esc_attr(get_theme_mod('magazineplus_footer_about_us_mail', 'info@magazineplus.com')); ?>" target="_top"><?php echo esc_attr(get_theme_mod('magazineplus_footer_about_us_mail', 'info@magazineplus.com')); ?></a></p>
    </div>
    <div class="col-md-5 footer-social">
      <h2><?php echo esc_html__('Follow Us', 'magazineplus'); ?></h2>
      <?php magazineplus_socials(); ?>
      <p><?php echo esc_attr(get_theme_mod('magazineplus_footer_follow_us', 'Donec eu tellus convallis, vehicula neque sed')); ?></p>
    </div>
  </div>

<?php } add_filter('magazineplus_footer_style_1','magazineplus_footer_style_1');

function magazineplus_footer_style_2() { ?>

  <div class="row mt-fs2">
    <div class="col-md-6">
      <?php magazineplus_footer_logo(); ?>
    </div>
    <div class="col-md-6">
      <?php magazineplus_socials(); ?>
    </div>
  </div>
  <?php wp_nav_menu( array('theme_location'  => "footer_menu_big", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'row mt-fnb', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 2));  ?>

<?php } add_filter('magazineplus_footer_style_2','magazineplus_footer_style_2'); ?>
