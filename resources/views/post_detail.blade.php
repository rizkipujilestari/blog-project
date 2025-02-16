@extends('layouts.main') 

@section('content')
    <div class="container">
      <div class="row">

        <div class="span8">

            <article class="single">
                <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3> <b>{{ $article }}</b> </h3>
                    </div>
                    <img src="{{ asset('eterna/img/dummies/blog/img1.jpg') }}" alt="" />
                  </div>
                  <div class="meta-post">
                    <ul>
                      <li><i class="icon-file"></i></li>
                      <li>By <a href="#" class="author">Admin</a></li>
                      <li>On <a href="#" class="date">10 Jun, 2013</a></li>
                      <li>Tags: <a href="#">Design</a>, <a href="#">Blog</a></li>
                    </ul>
                  </div>
                  <p>
                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                    ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri at eius erat accusamus. Eos id
                    hinc fierent indoctum, ad accusam consetetur voluptatibus sit. His at quod impedit. Eu zril quando perfecto mel, sed eu eros debet.
                  </p>
                  <blockquote>
                    Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                  </blockquote>
                  <p>
                    Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri
                    at eius erat accusamus.
                  </p>



                </div>
              </div>
            </article>

            <!-- author info -->
            <div class="about-author">
              <a href="#" class="thumbnail align-left"><img src="{{ asset('eterna/img/avatar.png') }}" alt="" /></a>
              <h5><strong><a href="#">John doe</a></strong></h5>
              <p>
                Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper ad qui, est rebum nulla argumentum ei.
              </p>
            </div>

            <div class="comment-area">

              <h4>4 Comments</h4>
              <div class="media">
                <a href="#" class="pull-left"><img src="{{ asset('eterna/img/avatar.png') }}" alt="" class="img-circle" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>March 12, 2013</span> Michael Simpson</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>

                    <a href="#" class="align-right">Reply</a>
                  </div>
                </div>
              </div>
              <div class="media">
                <a href="#" class="pull-left"><img src="{{ asset('eterna/img/avatar.png') }}" alt="" class="img-circle" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>March 12, 2013</span> Smith karlsen</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>

                    <a href="#" class="align-right">Reply</a>
                  </div>
                  <div class="media">
                    <a href="#" class="pull-left"><img src="{{ asset('eterna/img/avatar.png') }}" alt="" class="img-circle" /></a>
                    <div class="media-body">
                      <div class="media-content">
                        <h6><span>June 22, 2013</span> Jay Moeller</h6>
                        <p>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>

                        <a href="#" class="align-right">Reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media">
                <a href="#" class="pull-left"><img src="{{ asset('eterna/img/avatar.png') }}" alt="" class="img-circle" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>June 24, 2013</span> Dean Zaloza</h6>
                    <p>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>

                    <a href="#" class="align-right">Reply</a>
                  </div>
                </div>
              </div>

              <div class="marginbot30"></div>
              <h4>Leave your comment</h4>

              <form id="commentform" action="#" method="post" name="comment-form">
                <div class="row">
                  <div class="span4">
                    <input type="text" placeholder="* Enter your full name" />
                  </div>
                  <div class="span4">
                    <input type="text" placeholder="* Enter your email address" />
                  </div>
                  <div class="span8 margintop10">
                    <input type="text" placeholder="Enter your website" />
                  </div>
                  <div class="span8 margintop10">
                    <p>
                      <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
                    </p>
                    <p>
                      <button class="btn btn-theme btn-medium margintop10" type="submit">Submit comment</button>
                    </p>
                  </div>
                </div>
              </form>
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