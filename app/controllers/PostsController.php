<?php

class PostsController extends \BaseController {

	function store()
	{
		$post = new Post;
		$post->user_id = Auth::user()->id;
		$post->status = Input::get('post_status');
		$post->save();

		return $post;
	}

}