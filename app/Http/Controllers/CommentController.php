<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('user_id', Auth::user()->id)->get();
        return view('articles.list_comment', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'post_id'      => 'required',
            'slug'         => 'required',
            'comment_body' => 'required',
            'reply'        => 'nullable',
        ]);

        if (is_null($request->reply)) {
            $is_reply = '0';
            $main_comment_id = null;
        } else {
            $is_reply = '1';
            $main_comment_id = $request->reply;
        }

        try {
            $comment = new Comment($validatedData);
            $comment->user_id         = Auth::user()->id;
            $comment->article_id      = $request->post_id;
            $comment->comment         = $request->comment_body;
            $comment->is_reply        = $is_reply;
            $comment->main_comment_id = $main_comment_id;
            $comment->save();
            
            return redirect('blog/'.$request->slug);
            
        } catch (\Throwable $e) {            
            return redirect('blog/'.$request->slug)->withErrors('Failed Comment! '.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
