<?php 
function getCommentsFromPost($id)
{
	$comments = Comment::where('post_id', $id)->get();

	return $comments;
}
