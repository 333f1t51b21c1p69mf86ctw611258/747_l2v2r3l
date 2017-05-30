<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a paginated list of posts.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Favorite a particular post
     *
     * @param  int $post
     * @return Response
     */
    public function favoritePost(int $post)
    {
        Auth::user()->favorites()->attach($post);

        return back();
    }

    /**
     * Unfavorite a particular post
     *
     * @param  int $post
     * @return Response
     */
    public function unFavoritePost(int $post)
    {
        Auth::user()->favorites()->detach($post);

        return back();
    }
}
