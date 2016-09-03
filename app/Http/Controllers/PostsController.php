<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::paginate(5);

        return view('frontend.posts.index', compact('posts'));
    }
}
