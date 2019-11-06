<?php
/*
Plugin Name: Parent Pages Empty
Description: To display Child Pages
*/
function parent_child_pages($content) 
{
	if ((is_page()) && (empty($content))) 
	{
		global $post;
$children = '<ul>'.wp_list_pages('title_li=&child_of'.$post->ID).'</ul>';
	}
return $content.$children;
}
add_filter('the_content','parent_child_pages');
?>