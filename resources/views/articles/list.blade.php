@extends('layouts.main')

@section('title', 'My Articles')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.left_sidebar')
        </div>

        <div class="span8">
          <article>
            <div class="row">

              <div class="span8">
                <div class="post-image">
                  <div class="post-heading">
                    <h3>
                      <a href="{{ url('/articles/test') }}">This is an example of standard post format</a>
                    </h3>
                  </div>
                </div>
                <div class="meta-post">
                  <ul>
                    <li><i class="icon-file"></i></li>
                    <li>By <a href="#" class="author">Admin</a></li>
                    <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                    <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                  </ul>
                </div>
                <div class="post-entry">
                  <p>
                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                    ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus...
                  </p>
                  <a href="" class="btn btn-theme">Edit Article</a>
                </div>
              </div>
            </div>
          </article>

          <div id="pagination">
            <span class="all">Page 1 of 3</span>
            <span class="current">1</span>
            <a href="#" class="inactive">2</a>
            <a href="#" class="inactive">3</a>
          </div>
        </div>
      </div>
    </div>
@endsection
