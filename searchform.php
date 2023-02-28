<form id="search" title="search" class="form__search" aria-label="search bar"
        id="searchbar" method="get" action="<?php echo home_url() ?>"
        >
        <input class="search-input" type="text" title="search bar" name="s" id="search" placeholder="Pretražujte..." value="<?php echo get_search_query(); ?>">
        <button class="search-submit" type="submit"><img aria-hidden="true" src="<?php echo get_theme_file_uri('assets/icons/search.svg') ?>"></button>
</form>