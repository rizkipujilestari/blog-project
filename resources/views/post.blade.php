@extends('layouts.main') 

@section('title', '')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span8">
          <article>
            <div class="row">

              <div class="span8">
                <div class="post-image">
                  <div class="post-heading">
                    <h3><a href="{{ url('/blog/article-satu') }}">This is an example of standard post format</a></h3>
                  </div>

                  <img src="{{asset('eterna/img/dummies/blog/img1.jpg')}}" alt="" />
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
                  <a href="#" class="readmore">Read more <i class="icon-angle-right"></i></a>
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