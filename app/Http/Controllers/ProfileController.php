<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $posts = Post::all();
       return view('user.profile',["posts"=>$posts]);
    }
    function edit()
    {
        $users = Auth::guard('web')->user();
        return view("user.edit",["users"=>$users]);
    }
    function update(Request $request)
    {
        $user = Auth::guard('web')->user();
        $user->name= $request['name'];
        $user->email= $request['email'];
        $user->password= $request['password'];
        $user->save();
        return redirect('/user/profile');
    }
}
