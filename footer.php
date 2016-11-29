<div class="footer-wrap">
	<?php $option = get_option("magazineplus_theme_options"); ?>
	<?php if(!empty($option['footer_page'])){ ?>
		<?php $footer_page = $option['footer_page']; ?>
		<?php $footer = new WP_Query("page_id=$footer_page"); while($footer->have_posts()) : $footer->the_post(); ?>
			<div class="container footer-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php } ?>
	<?php if(!empty($option['footer_top']) or !empty($option['footer_bottom'])){ ?>
		<div class="footer">
			<?php if  (!empty($option['footer_top'])) {  ?>
				<?php if  ($option['footer_top'] == '1') {  ?>
					<div class="footer-top">
						<div class="container">

							<?php
							if (!empty($option['footer_top_style'])) {
								if ($option['footer_top_style'] == '2') {
									magazineplus_footer_style_2();
								} else {
									magazineplus_footer_style_1();
								}
						  } else {
								magazineplus_footer_style_1();
							}
							?>

							<a href="#" class="footer-scroll-to-top-link"></a>

						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if  (!empty($option['footer_bottom'])) { ?>
				<?php if  ($option['footer_bottom'] == '1') { ?>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-6 footer-copyright">
									<p><?php echo esc_attr(get_theme_mod('magazineplus_copyright_text', 'Copyright 2016. Powered by WordPress Theme. By Madars Bitenieks')); ?></p>
								</div>
									<div class="col-md-6">
										<?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'footer-nav', 'menu_id' => '','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?>
									</div>
								</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	<?php } ?>
	</div>
</div>
<a href="#" class="footer-scroll-to-top"></a>

<?php wp_footer(); ?>

</body>
</html>
