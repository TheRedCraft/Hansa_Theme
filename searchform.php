<form class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input class="text-input" placeholder="" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input class="submit-button" value="Suchen" type="submit" alt="Search"/>
</form>
