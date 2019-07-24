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
    public function show($slug = null) {

        // Url kısmı /post/ şeklinde boş değilse.
        if(!empty($slug)) {

            $post = Post::where('slug', $slug)->get();

            // böyle bir post bulamazsa.
            if(count($post) === 0) {
                return redirect()->route('home');
            }

            // Bulduğunda.
            else {
                return view('postDetail', [
                    'post' => $post 
                ]);
            }
        }

        // parametre gelmezse.
        else {
            return redirect()->route('home');
        }
    }
}
