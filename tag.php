<?php get_header();

$tag_obj = get_query_var('tag_id');
$tag_array = get_tag($tag_obj);
$tag_slug = $tag_array->slug;
$grid = 1;
$offset = 4;
$option = get_option("magazin_theme_options");
$default_posts_per_page = get_option( 'posts_per_page' );
if(!empty($option['tag_style'])) {
	if($option['tag_style']=="1"){
		$grid = 0;
		$offset = 0;
	} else if($option['tag_style']=="2"){
		$grid = 2;
		$offset = 3;
	} else if($option['tag_style']=="3"){
		$grid = 3;
		$offset = 2;
	}
}
?>
<div class="mt-container-wrap">
<div class="container mt-content-container">
	<div class="row">

		<div class="col-md-8 ">

				<?php if ( have_posts() ) : ?>

					<?php echo do_shortcode('[posts pagination=on title="'. esc_html__( 'Tag','magazineplus' ) .': '.esc_attr($tag_slug).'" title_type="left" tag="'.esc_attr($tag_slug).'" type=normal-right]');?>

				<?php else : ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'magazineplus' ); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php esc_html_e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'magazineplus' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>


		</div>


			<div class="col-md-4 sidebar"><?php get_sidebar(); ?></div>


	</div>
</div>
</div>
<?php get_footer(); ?>
