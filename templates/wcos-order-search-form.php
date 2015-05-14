<form role="search" method="get" id="order_search_form" action="<?php // echo home_url( '/' ) ?>" >
    <input type="hidden" name="post_type" value="shop_order" />
    <div>
        <label class="screen-reader-text" for="search_value"><?php echo __('Search for:') ?></label>
        <input type="text"  size="50"value="<?php echo $_REQUEST['search_value'] ?>" name="search_value" id="search_value" />
        <select name="search_key" >
            <?php if(is_array($order_search_keys)){
            foreach($order_search_keys as $key=>$value){ 
                $selected = selected($key,$_REQUEST['search_key'],false);
                printf('<option %3$s value="%1$s">%2$s</option>',$key,$value,$selected);
            }
            }?>
        </select>
        <input type="submit" id="order_search_submit" value="<?php echo esc_attr__('Search') ?>" />
    </div>
</form>