<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    // Tüm postlar
    public function index() {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('home', [
            'posts' => $posts
        ]);
    }

    // ve tıklanan postun detayı.
    public function show($postSlug = null) {
        return view('postDetail');
    }
}
