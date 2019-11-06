<?php
		/* 
		Plugin Name: Excerpt Length
		Description: Length of  Post Excerpt with read more link
		Version: 1.1-alpha
		Author: xyz
		Author uri: www.google.com
		Plugin uri: www.google.com
		*/
	   		
		function custom_excerpt_length($length)
		{
			$length = 5;
			return $length;
		}
		
		function AddMore($Content)
		{
			return '<a href='. get_the_permalink().'> [.....]' . '</a>';
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length' );
		add_filter('excerpt_more','AddMore');
	   
?>