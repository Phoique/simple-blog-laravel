<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function create(Request $request) {

        // Kullanıcının yollamış olduğu postu kontrol ediyoruz. 
        // Eğer bir sorun var ise otomatik geri döner ve errors adında bir array
        // ile hataları gösterir.
        $request -> validate([
            'username' => 'required|max:15|min:3',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        // Yeni kullanıcı kayıt ediyoruz. 
        $user = new User;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request -> password); // Bcrypt ile hashleme.
        $user -> save();
    }
}
