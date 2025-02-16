@extends('layouts.main') 

@section('title', 'Login')

@section('content') 
    <div class="container">
        <div class="row">
            <div class="span8">
                <h4>Please input your email and password</h4>                
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

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ url('login') }}" role="form" >
                    @csrf
                    <div class="row contactForm">
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
                        
                        <div class="span8 form-group">
                            <div class="text-center">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="span4">
                <div class="clearfix"></div>
                <aside class="right-sidebar">
    
                  <div class="widget">
                    <h5 class="widgetheading">Don't have any account?<span></span></h5>
                    <p>
                        Mari bergabung dalam komunitas kami. Registrasi gratis selamanya!
                    </p>
                    <a href="{{ url('/register') }}" class="btn btn-theme btn-medium margintop10">Register</a>
                  </div>

                </aside>
            </div>

        </div>
    </div>
@endsection