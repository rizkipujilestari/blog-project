@extends('layouts.main')

@section('title', 'My Articles')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.left_sidebar')
        </div>

        <div class="span8">

            <article class="single">
                <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3> <b>Article Detail</b> </h3>
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
              
            </div>
        </div>

      </div>
    </div>
@endsection
