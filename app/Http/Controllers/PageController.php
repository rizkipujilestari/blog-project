<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }
    
    public function about()
    {
        return view('about');
    }

    public function show($slug)
    {
        $article = $slug;
        return view('post_detail', compact('article'));
    }
    
}
