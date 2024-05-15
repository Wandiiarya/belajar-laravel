<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function menampilkan(){
        $post = post::all();

return view('posts\index', compact('post'));

    }
    public function show($id){
        $post = post::FindOrFail($id);

return view('posts\show', compact('post'));

    }
}
