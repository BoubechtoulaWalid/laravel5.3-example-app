<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * List all posts
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $posts = Post::paginate(5);

        return view('frontend.posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::findOrFail($id);

        return view('frontend.posts.show', compact('post'));
    }
}
