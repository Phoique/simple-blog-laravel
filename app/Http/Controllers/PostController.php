<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postDetail($postSlug = null) {
        return view('postDetail');
    }
}
