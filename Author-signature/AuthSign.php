<?php
/* Plugin Name:Author Signature
Description: To Display Author Signature. */
function post_signature($content) 
{
$content = get_the_content();
$v_AuthorID=get_the_author_meta('ID');
$v_Authorsignemail=get_the_author_meta('user_email');
$v_Authorsign=get_the_author_meta('user_nicename');
//$content=$content."<p>". $v_AuthorID. $v_AuthorSign.$v_Authorsignemail."</p>";
//return $content;
 // Or
echo $content;
echo "<p>";
echo $v_AuthorID.$v_AuthorSign.$v_Authorsignemail."</p>";
}
add_filter('the_content','post_signature');

?>