<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="submit" alt="Search"/>
</form>
