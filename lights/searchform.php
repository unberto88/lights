<form role="search" method="get" action="<?php echo home_url( '/' ) ?>" >
    <input type="text" value="<?php echo get_search_query() ?>" placeholder="Search here..." name="s" id="searchform-input" />
    <input type="submit" id="search-submit-button" class="icons-search" value="" />
</form>