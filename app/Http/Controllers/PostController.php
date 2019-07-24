<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($postSlug = null) {
        return view('add');
    }

    public function create(Request $request) {
        return $request -> post();
    }
}
