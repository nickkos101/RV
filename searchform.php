<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <button class="btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" ><i class="fa fa-search" aria-hidden="true"></i> Search</button>
    </div>
</form>
