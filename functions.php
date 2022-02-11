

add_filter( 'woocommerce_account_menu_items', 'ShaonPro_remove_downloads_tab_my_account', 999 );
 
function ShaonPro_remove_downloads_tab_my_account( $items ) {
// You can add other tab names
unset($items['downloads']);
return $items;
}


