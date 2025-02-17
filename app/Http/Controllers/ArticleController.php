<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Article::query();
        $query->where('user_id', DB::raw("'" . Auth::user()->id . "'")); // show article by authenticated user

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

        $articles = $query->paginate(3);
        $categories = Category::all();

        return view('articles.list_article', compact('articles', 'categories', 'filter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'         => 'required|max:100',
            'content_value' => 'required',
            'category_id'   => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {
            $post = new Article($validatedData);

            if($request->hasfile('thumbnail'))
            {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::slug($request->title, '-').'_' . time() . '.'.$extension;
                $file->move('upload/', $filename);
                $post->thumbnail = 'upload/'.$filename;
            }

            $post->title = $request->title;
            $post->slug = Str::slug($request->title, '-'); 
            $post->content = $request->content_value;
            $post->user_id = Auth::user()->id;
            $post->category_id = $request->category_id;
            $post->save();
            
            return redirect('/articles')->with('success', 'Success Create New Post!');
            
        } catch (\Throwable $e) {            
            return redirect('/articles')->withErrors('Failed! '.$e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->withCount('comment')->firstOrFail();     
        $comments = Comment::where('article_id', $article->id)->get();

        return view('articles.show', compact('article', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title'         => 'required|max:100',
            'content_value' => 'required',
            'category_id'   => 'required',
        ]);
        
        try {
            $post = Article::where('slug', $slug)->firstOrFail();

            if ($request->hasFile('thumbnail')) 
            {                
                // delete existing image
                if ($post->thumbnail) {
                    $existing = public_path($post->thumbnail);
                    if (file_exists($existing)) {
                        unlink($existing);
                    }
                }

                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::slug($request->title, '-').'_' . time() . '.'.$extension;
                $file->move('upload/', $filename);
                $imageName = 'upload/'.$filename;
                
            } else {
                $imageName = $post->thumbnail;
            }
            
            $post->title = $request->title;
            $post->content = $request->content_value;
            $post->category_id = $request->category_id;
            $post->thumbnail = $imageName;
            $post->update();
            
            return redirect('/articles')->with('success', 'Success Update Post!');
            
        } catch (\Throwable $e) {            
            return redirect('/articles')->withErrors('Failed! '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        try {
            $post = Article::where('slug', $slug)->first();

            if ($post->count() > 0) {
                $post->delete(); // Soft delete the post
                return redirect('/articles')->with('success', 'Post successfully deleted!');
            } else {
                return redirect('/articles')->withErros('Failed! Post not found.');
            }
        } catch (\Throwable $e) {            
            return redirect('/articles')->withErrors('Failed! '.$e->getMessage());
        }
    }
}
