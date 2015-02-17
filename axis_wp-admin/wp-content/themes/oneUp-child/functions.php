<?php

function new_nav_menu_items($items,$args) {
	if ($args->theme_location == 'primary') {
		if (function_exists('icl_get_languages')) {
		$languages = icl_get_languages('skip_missing=0');
			if(1 < count($languages)){
				foreach($languages as $l){
					if(!$l['active']){
						$items = $items.'<li class="menu-item"><a href="'.$l['url'].'">|'.$l['native_name']."-".$l['active'].'|</a></li>';
					}
				}
			}
		}
	}

	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items',10,2 );
?>