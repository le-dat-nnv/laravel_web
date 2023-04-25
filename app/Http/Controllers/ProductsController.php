<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
class ProductsController extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content')
        ]);

        $post->save();

        return redirect('/posts')->with('success', 'Post saved!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->get('title');
        $post->content = $request->get('content');

        $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted!');
    }
}

    //
}
