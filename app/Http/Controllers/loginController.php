<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class loginController extends Controller
{
    public function index () {
        $blogs = Blog::all();
        return view('login',['blogs' => $blogs]);
    }
}
