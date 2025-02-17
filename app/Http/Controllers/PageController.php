<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
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
        $articles = Article::orderBy('created_at', 'DESC')->paginate(5);
        $categories = Category::all();
        $filter = [];

        return view('blog', compact('articles', 'categories', 'filter'));
    }
    
    public function about()
    {
        return view('about');
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->withCount('comment')->firstOrFail();     
        $comments = Comment::where('article_id', $article->id)->get();

        return view('post_detail', compact('article', 'comments'));
    }

    public function blog(Request $request)
    {
        $query = Article::query();

        $filter = [];
        
        // Search by title: 
        if ($request->has('search') && !is_null($request->input('search')) ) {
            $keyword = $request->input('search');
            $query->where('title', 'LIKE', "%$keyword%");

            array_push($filter, 'Title contains : ' . $keyword);
        }
        
        // Filter by category:
        if ($request->has('category') && !is_null($request->input('category'))) {
            $categorySlug = $request->input('category');
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('name', 'LIKE', "%$categorySlug%");
            });

            array_push($filter, 'Category : ' . $categorySlug);
        }

        // Sorting:
        if ($request->has('sort_by') && !is_null($request->input('sort_by')) ) {
            $sortBy = $request->input('sort_by');
            $sortDirection = $request->input('sort_direction', 'asc');

            if ($sortBy === 'title') {
                $query->orderBy('title', $sortDirection);
            } elseif ($sortBy === 'date') {
                $query->orderBy('created_at', $sortDirection);
            }
            
            array_push($filter, 'Sort by : ' . $sortBy);
            array_push($filter, 'Sort direction : ' . $sortDirection);

        } else {
            $query->orderBy('created_at', 'desc');
        }

        $articles = $query->paginate(5);
        $categories = Category::all();

        return view('blog', compact('articles', 'categories', 'filter'));
    }
    
}
