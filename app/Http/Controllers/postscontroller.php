<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postscontroller extends Controller
{
    public function index()
    {
        $posts = post::all();

        // dd($posts);
        return view('posts.index', compact('posts'),[
            'posts' => DB::table('posts')->paginate(15)
        ]);

        // $users = DB::table('posts')->paginate(15);

        // return view('posts.index', ['posts' => $posts]);
    }
}
