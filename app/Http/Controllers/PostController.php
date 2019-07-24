<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    public function index($postSlug = null) {
        return view('add');
    }

    public function create(Request $request) {
        // Kullanıcının yollamış olduğu postu kontrol ediyoruz. 
        // Eğer bir sorun var ise otomatik geri döner ve errors adında bir array
        // ile hataları gösterir.
        $request -> validate([
            'title' => 'required|max:30|min:3',
            'sub_title' => 'required|max:50|min:3',
            'content' => 'required'
        ]);

        $post = new Post();
        $post -> user_id = Auth::user('') -> id;
        $post -> title = $request -> post('title');
        $post -> sub_title = $request -> post('sub_title');
        $post -> content = $request -> post('content');
        $post -> save();
        return redirect('/post/'.$post -> slug);
    }
}
