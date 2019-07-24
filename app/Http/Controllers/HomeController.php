<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Tüm postlar
    public function index() {
        return view('home');
    }

    // ve tıklanan postun detayı.
    public function show($postSlug = null) {
        return view('postDetail');
    }
}
