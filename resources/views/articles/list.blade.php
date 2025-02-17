@extends('layouts.main')

@section('title', 'My Blog')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.user_sidebar')
        </div>

        <div class="span8">
          @if(session()->has('success'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  
                  {{ session()->get('success') }}
              </div>
          @endif

          @if ($errors->any())
              <div class="alert alert-danger" style="margin: 5px; color:red;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>

                  <ul>
                      @foreach ($errors->all() as $item)
                          <li>{{ $item }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          @if ($filter)
            <div class="alert alert-info">
              <b>Filter :</b>
              <ul>
                  @foreach ($filter as $row)
                      <li>{{ $row }}</li>
                  @endforeach
              </ul>
            </div>
          @endif

          @if ($articles->count() > 0)
            @foreach ($articles as $article)
              <article>
                <div class="row">
                  <div class="span8">
                    <div class="post-image">
                      <div class="post-heading">
                        <h3>
                          <a href="{{ url('articles/'.$article->slug) }}">{{ $article->title }}</a>
                        </h3>
                      </div>

                      @if (!is_null($article->thumbnail))
                        <img src="{{ asset($article->thumbnail) }}" alt="" />
                      @endif

                    </div>
                    <div class="meta-post">
                      <ul>
                        <li><i class="icon-user"></i>&nbsp; Posted By <a href="#" class="author">{{ ($article->user_id == Auth::user()->id) ? 'Me' : $article->user->name; }}</a></li>
                        <li>On <a href="#" class="date"> {{ $article->created_at->format('d F, Y H:i:s') }} </a> </li>
                        <li>Category: <a href="#">{{ $article->category->name }}</a> </li>
                      </ul>
                    </div>
                    <div class="post-entry">
                      <p>
                        {{ substr($article->content, 0, 500) }}...
                      </p>
                      <a href="" class="btn btn-theme">Edit Article</a>
                    </div>
                  </div>
                </div>
              </article>
            @endforeach

            {{ $articles->links('layouts.pagination') }}

          @else
            <b>No post.</b>
          @endif
        </div>
      </div>
    </div>
@endsection
