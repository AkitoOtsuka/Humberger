<form action="<?php echo esc_url( home_url('/') ); ?>" method="get" autocomplete="off" class="p-header-inner__search-container">
    <div class="p-header-inner__search-field">
        <i class="fas fa-search p-header-inner__search-icon"></i>
        <input type="text" name="s" id="s" value="<?php the_search_query(); ?>">
     </div>
    <p class="c-search-btn p-header-inner__search-btn"><input type="submit" name="search-btn" value="検索" id="search-btn"></p>
</form>