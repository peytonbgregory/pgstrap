<?php
/**
 * The template for displaying search forms.
 *
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
	
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit search-icon" value="Search" />
</form>
