@extends('layouts.main')

@section('title', 'My Blog')

@section('content')
    <div class="container">
      <div class="row">

        <div class="span4">
          @include('layouts.user_sidebar')
        </div>

        <div class="span8">
            <h4>Edit Article</h4>
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

            <form method="POST" action="{{ url('articles/'.$article->slug) }}" role="form" enctype="multipart/form-data">
                @csrf
                <div class="row contactForm">
                    <div class="span8 form-group field">
                        <label>Title</label>
                    </div>
                    <div class="span8 form-group field">
                        <input type="text" name="title" id="title" placeholder="Title" value="{{ $article->title }}" />
                    </div>

                    <div class="span8 form-group field">
                        <label>Change Thumbnail</label>
                    </div>
                    <div class="span8 form-group field" style="margin-bottom:10px;">
                        <input type="file" name="thumbnail" id="thumbnail" placeholder="Choose File" />
                        <p>
                            <img src="{{ asset($article->thumbnail) }}" width="100px">
                        </p>
                    </div>

                    <div class="span8 form-group field">
                        <label>Content</label>
                    </div>
                    <div class="span8 form-group">
                        <p>
                            <textarea rows="12" class="input-block-level" placeholder="*Your content here" 
                                name="content_value" id="content_value" style="max-height: 200px; max-width:100%; overflow-y:auto;"
                            >{{ $article->content }}</textarea>
                        </p>
                    </div>

                    <div class="span8 form-group field">
                        <label>Category</label>
                    </div>
                    <div class="span8 form-group">
                        <select name="category_id" id="category_id" class="input-block-level" style="background:#fff; box-shadow:none; border-color: #bbb; border-radius: 5px;">
                            <option value="">-- Content Category --</option>
                            @foreach ($categories as $row)
                                <option value="{{ $row->id }}" @if($article->category_id == $row->id) selected @endif>
                                    {{ $row->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="span8 form-group">
                        <div class="text-right">
                            <button class="btn btn-theme btn-medium margintop10" type="submit">Save</button>
                            <a href="{{ url('/articles') }}" class="btn btn-default btn-medium margintop10" type="submit">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>


      </div>
    </div>
@endsection
