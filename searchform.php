<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
	<input type="text" value="<?php esc_html_e( 'To search type and hit enter', 'magazineplus'  ); ?>" onfocus="if(this.value=='<?php esc_html_e( 'To search type and hit enter', 'magazineplus'  ); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php esc_html_e( 'To search type and hit enter', 'magazineplus'  ); ?>';" name="s" id="s3" class="search-input" />
</form>
