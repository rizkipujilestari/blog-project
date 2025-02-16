@extends('layouts.main') 

@section('title', 'Register')

@section('content') 
    <div class="container">
        <div class="row">
            <div class="span8">
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

                <form method="POST" action="{{ url('register') }}" role="form" >
                    @csrf
                    <div class="row contactForm">
                        <div class="span8 form-group field">
                            <label>Name</label>
                        </div>
                        <div class="span8 form-group field">
                            <input type="text" name="name" id="name" placeholder="Your Name" />
                        </div>
                        
                        <div class="span8 form-group field">
                            <label>Email</label>
                        </div>
                        <div class="span8 form-group field">
                            <input type="email" name="email" id="email" placeholder="youremail@domain.com" />
                        </div>
                        
                        <div class="span8 form-group field margintop10">
                            <label>Password</label>
                        </div>
                        <div class="span8 form-group field">
                            <input type="password" name="password" id="password" placeholder="******" />
                        </div>

                        <div class="span8 form-group field margintop10">
                            <label>Confirm Password</label>
                        </div>
                        <div class="span8 form-group field">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="******" />
                        </div>
                        
                        <div class="span8 form-group">
                            <div class="text-center">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="span4">
                <div class="clearfix"></div>
                <aside class="right-sidebar">
    
                  <div class="widget">
                    <h5 class="widgetheading">Already have an account?<span></span></h5>
                    <p>
                        Jika sudah punya akun, silakan Login.
                    </p>
                    <a href="{{ url('/login') }}" class="btn btn-theme btn-medium margintop10">Login</a>
                  </div>

                </aside>
            </div>

        </div>
    </div>
@endsection