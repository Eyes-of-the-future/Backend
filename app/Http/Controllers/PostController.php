<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
       return view('post.posts',["posts"=>$posts]);
    }
    function create()
    {
       echo "create posts here.."; 
    }
    function store(Request $request)
    {
        echo "saved posts here..";
    }
    function like()
    {
       echo "you liked this post.."; 
    }
    function comment()
    {
       echo "comment on posts here.."; 
    }
    function save(Request $request)
    {
        echo "saved comments here..";
    }
    function edit($id)
    {
        echo "edit posts here..";
    }
    function update(Request $request, $id=1)
    {
        echo "edited posts here..";
    }
    function destroy($id)
    {
        echo "delete posts here..";
    }
}
