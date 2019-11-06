<?php
/*
Plugin Name: Append Child Pages
Description: To display Child Pages
*/
function append_child_pages($content) 
{
	if (is_page()) 
	{
		global $post;
		//print_r($post);
		$children = '<ul>'.wp_list_pages('title_li=&child_of='.$post->ID).'</ul>';
	}
	return $content.$children;
}
add_filter('the_content','append_child_pages');
?>