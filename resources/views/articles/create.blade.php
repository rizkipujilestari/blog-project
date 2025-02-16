@extends('layouts.main')

@section('title', 'My Articles')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.left_sidebar')
        </div>

        <div class="span8">
            <h4>Create New Article</h4>
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

            <form method="POST" action="" role="form" >
                @csrf
                <div class="row contactForm">
                    <div class="span8 form-group field">
                        <label>Title</label>
                    </div>
                    <div class="span8 form-group field">
                        <input type="text" name="title" id="title" placeholder="Title" />
                    </div>

                    <div class="span8 form-group field">
                        <label>Slug</label>
                    </div>
                    <div class="span8 form-group field">
                        <input type="text" name="slug" id="slug" placeholder="URL" readonly />
                    </div>

                    <div class="span8 form-group field">
                        <label>Title</label>
                    </div>
                    <div class="span8 form-group field">
                        <input type="text" name="title" id="title" placeholder="Title" />
                    </div>
                    
                    <div class="span8 form-group">
                        <div class="text-right">
                        <button class="btn btn-theme btn-medium margintop10" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


      </div>
    </div>
@endsection
