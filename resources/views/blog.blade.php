@extends('layouts.main') 

@section('title', '')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span8">

          @foreach ($articles as $article)
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="{{ url('blog/'.$article->slug ) }}"> {{ $article->title }} </a></h3>
                    </div>

                    @if (!is_null($article->thumbnail))
                      <img src="{{ asset('images/'.$article->thumbnail) }}" alt="" />
                    @endif
                    
                  </div>
                  <div class="meta-post">
                    <ul>
                      <li><i class="icon-user"></i></li>
                      <li>By <a href="#" class="author">{{ $article->user->name }}</a></li>
                      <li>On <a href="#" class="date"> {{ $article->created_at->format('d F, Y H:i:s') }} </a> </li>
                      <li>Category: <a href="#">{{ $article->category->name }}</a> </li>
                    </ul>
                  </div>
                  <div class="post-entry">
                    <p>
                      {{ substr($article->content, 0, 500) }}...
                    </p>
                    <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </article>
          @endforeach

          <div id="pagination">
            <span class="all">Page 1 of 3</span>
            <span class="current">1</span>
            <a href="#" class="inactive">2</a>
            <a href="#" class="inactive">3</a>
          </div>
        </div>

        <div class="span4">

          <aside class="right-sidebar">
            <div class="widget">
              <form>
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
                  <button class="btn btn-theme" type="submit">Search</button>
                </div>
              </form>
            </div>

            <div class="widget">
              <legend class="widgetheading">Categories</legend>
              <ul class="cat">
                <li><i class="icon-angle-right"></i> <a href="#">Film</a><span> (20)</span></li>
                <li><i class="icon-angle-right"></i> <a href="#">Series</a><span> (11)</span></li>
              </ul>
            </div>

          </aside>
        </div>

      </div>
    </div>
@endsection