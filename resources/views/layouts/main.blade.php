<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CineReview Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{asset('eterna/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/prettyPhoto.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/camera.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/jquery.bxslider.css')}}" rel="stylesheet" />
  <link href="{{asset('eterna/css/style.css')}}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{ asset('eterna/color/default.css') }}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('eterna/ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('eterna/ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('eterna/ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('eterna/ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('eterna/ico/favicon.png')}}" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

    <body>

    <div id="wrapper">

        <!-- start header -->
        <header>
        <div class="top"></div>
        <div class="container">


            <div class="row nomargin">
              <div class="span4">
                <div class="logo">
                  <a href="{{ url('/') }}"><i class="icon-film icon-2x"></i> <b style="padding-left: 10px;">C I N E R E V I E W</b> </a>
                </div>
              </div>
              <div class="span8">
                <div class="navbar navbar-static-top">
                  <div class="navigation">
                    <nav>
                      <ul class="nav topnav">
                        <li>
                            <a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}">About</a>
                        </li>
                        
                        @if(!auth()->check())
                            <li class="active">
                                <a href="{{ url('/login') }}"> Login</a>
                            </li>
                        @else 
                            @if(in_array(auth()->user()->role, ['admin', 'member']))
                                <li>
                                    <a href="{{ url('/articles') }}">My Blog</a>
                                </li>
                                <li class="dropdown active">
                                    <a href="#"><i class="icon-user"></i> {{ $auth_user->name }} </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/logout') }}">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        @endif
                      </ul>
                    </nav>
                  </div>
                  <!-- end navigation -->
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- end header -->

        @if (!request()->is('/'))
            @if (!request()->routeIs('blog.show'))
            <section id="inner-headline">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="inner-heading">
                                <ul class="breadcrumb">
                                    <li><a href="{{ url('/') }}">Home</a> <i class="icon-angle-right"></i> </li>
                                    @if (request()->routeIs('blog.show'))
                                    <li>Blog <i class="icon-angle-right"></i> </li>
                                    @endif
                                    <li class="active">@yield('title', '')</li>
                                </ul>
                                <h2>@yield('title', '')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
        @endif
        

        <section id="content">
            @yield('content')
        </section>

        <footer>
        <div class="container">
            <div class="row">
                <div class="span6">&nbsp;</div>
                <div class="span6">&nbsp;</div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
            <div class="row">
                <div class="span6">
                <div class="copyright">
                    <p><span>CineReview &copy; 2025. All right reserved</span></p>
                </div>

                </div>

                <div class="span6">
                <div class="credits">
                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                    -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

    <!-- javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('eterna/js/jquery.js') }}"></script>
    <script src="{{ asset('eterna/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('eterna/js/bootstrap.js') }}"></script>

    <script src="{{ asset('eterna/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('eterna/js/toucheffects.js') }}"></script>
    <script src="{{ asset('eterna/js/google-code-prettify/prettify.js') }}"></script>
    <script src="{{ asset('eterna/js/jquery.bxslider.min.js') }}"></script>

    <script src="{{ asset('eterna/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eterna/js/portfolio/jquery.quicksand.js') }}"></script>
    <script src="{{ asset('eterna/js/portfolio/setting.js') }}"></script>

    <script src="{{ asset('eterna/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('eterna/js/animate.js') }}"></script>
    <script src="{{ asset('eterna/js/inview.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('eterna/contactform/contactform.js') }}"></script>

    <!-- Template Custom JavaScript File -->
    <script src="{{ asset('eterna/js/custom.js') }}"></script>


    </body>

</html>
