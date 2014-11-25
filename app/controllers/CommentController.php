<?php

class CommentController extends \BaseController {

	function store()
	{
		$comment = new Comment;
		$comment->user_id = Auth::user()->id;
		$comment->post_id = Input::get('post_id');
		$comment->comment = Input::get('comment');
		$comment->save();

		return $comment;
	}

}