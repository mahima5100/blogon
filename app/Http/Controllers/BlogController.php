<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function header()
    {
        return view('blogs.header');
    }

    public function allblogs()
    {
        return view('blogs.allblogs');
    }
    public function login()
    {
        return view('blogs.login');
    }
}
