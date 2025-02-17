@extends('layouts.main')

@section('title', 'My Blog')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.user_sidebar')
        </div>

        <div class="span8">
          <article class="single">
              <div class="row">

              <div class="span8">
                <span class="align-right"><a class="btn btn-theme" href="{{ url('/articles') }}">Back to Post List</a></span>

                <div class="post-image">
                  <div class="post-heading">
                    <h3> <b>{{ $article->title }}</b> </h3>
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
                <p>
                  {{ $article->content }}
                </p>
              </div>
            </div>
          </article>

          <!-- author info -->
          <div class="about-author" style="width: 100%; max-width:100%;">
            <a href="#" class="thumbnail align-left"> <img src="{{ asset('user-author-icon.png') }}" width="50px"> </a>
            <h5><strong><a href="#">{{ $article->user->name }}</a></strong></h5>
            <p>
              {{ $article->user->bio }}
            </p>
          </div>

          <div class="comment-area">

            <legend>{{ $article->comment_count }} Comment(s)</legend>

            @foreach ($comments as $comment)
              @if ($comment->is_reply == '0')
                <div class="media">
                  <a href="#" class="pull-left">
                    @if ($comment->user_id == $article->user_id)
                      <img src="{{ asset('user-author-icon.png') }}" width="45px" class="img-circle" />
                    @else
                      <img src="{{ asset('user-comment-icon.png') }}" width="50px" class="img-circle" />
                    @endif  
                  </a>

                  <div class="media-body">
                    <div class="media-content">
                      <h6><span>{{ $comment->created_at->format('d F, Y H:i:s') }}</span> {{ $comment->user->name }}</h6>
                      <p>
                        {{ $comment->comment }}
                      </p>
                      <p>
                        <b>{{ $comment->children->count() }} replies</b>
                      </p>
                    </div>
                    
                    @if ($comment->children->isNotEmpty())
                      @foreach ($comment->children as $com)
                        <div class="media">
                          <a href="#" class="pull-left">
                            @if ($com->user_id == $article->user_id)
                              <img src="{{ asset('user-author-icon.png') }}" width="45px" class="img-circle" />
                            @else
                              <img src="{{ asset('user-comment-icon.png') }}" width="50px" class="img-circle" />
                            @endif
                          </a>

                          <div class="media-body">
                            <div class="media-content">
                              <h6>{{ $com->user->name }} <span>replied at {{ $com->created_at->format('d F, Y H:i:s') }}</span></h6>
                              <p>
                                {{ $com->comment }}
                              </p>
                              {{-- <a href="#" class="align-right">Reply</a> --}}
                            </div>
                          </div>
                        </div>
                      @endforeach
                    @endif

                  </div>
                </div>
              @endif
            @endforeach


          </div>
          
        </div>

      </div>
    </div>
@endsection
