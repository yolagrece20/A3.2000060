<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    Public function index()
    {
    $blogs = Blog::latest()->paginate(10);
    return view('blog.index', compact('blogs'));
    }
}
