@extends('layouts.main')

@section('title', 'Profile')

@section('content')
  <div class="container">
    <div class="row">

      <div class="span4">
        @include('layouts.user_sidebar')
      </div>

      @if (auth()->check())
        <div class="span8">
          <legend >Profile</legend>
          <ul>
            <li style="padding: 5px 20px;"><label>Name :</label> {{ Auth::user()->name }} </li>
            <li style="padding: 5px 20px;"><label>Email :</label> {{ Auth::user()->email }} </li>
            <li style="padding: 5px 20px;"><label>Bio : </label> {{ Auth::user()->bio }} </li>
            <li style="padding: 5px 20px;"><label>Member Since : </label> {{ Auth::user()->created_at->format('d F, Y H:i:s') }} </li>
          </ul>
        </div>
      @endif

    </div>
  </div>
@endsection
