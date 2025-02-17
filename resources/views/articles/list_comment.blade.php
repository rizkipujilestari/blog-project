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

          @if ($comments->count() > 0)
            @foreach ($comments as $comment)
              <article>
                <div class="post-image">
                  <div class="post-heading">
                    <h3>
                      On Post : <a href="{{ url('articles/'.$comment->article->slug) }}">{{ $comment->article->title }}</a>
                    </h3>
                    <small>Commented On {{ $comment->created_at->format('d F, Y H:i:s') }}</small>
                  </div>
                </div>
                <div class="post-entry">
                    <b>Your Comment :</b>
                    <p>
                        {{ $comment->comment }}
                    </p>
                </div>
              </article>
            @endforeach
          
            {{ $comments->links('layouts.pagination') }}

          @else
            <b>No comment.</b>
          @endif
        </div>
      </div>
    </div>
@endsection
