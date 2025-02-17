<aside class="left-sidebar">

  @if (!request()->routeIs('comments'))
    <div class="widget">
      <legend class="widgetheading">Filter</legend>
      <!-- Terdapat fitur filter posting dan sorting. Filter posting terdapat juga dalam fitur search atau pencarian. -->
      <form action="{{ url('articles') }}" method="GET" class="controls">
        <div class="control-group">
          <label>Search by Title:</label>
          <input id="appendedInputButton" name="search" type="text" placeholder="Keywords" 
            @if(request('search')) value="{{ request('search') }}" @endif />
        </div>

        <div class="control-group">
          <label>Category:</label>
          <select name="category" id="category" style="background:#fff; box-shadow:none; border-color: #bbb; border-radius: 5px;">
            <option value="">-- Category --</option>
            @foreach ($categories as $row)
              <option value="{{ $row->name }}" @if(request('category') == $row->name) selected @endif>{{ $row->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="control-group">
          <label>Sort By:</label>
          <select name="sort_by" id="sort_by" style="background:#fff; box-shadow:none; border-color: #bbb; border-radius: 5px;">
            <option value="">-- Select Sort By --</option>
            <option value="title" @if(request('sort_by') == 'title') selected @endif>Title</option>
            <option value="date" @if(request('sort_by') == 'date') selected @endif>Date</option>
          </select>
    
          <select name="sort_direction" style="background:#fff; box-shadow:none; border-color: #bbb; border-radius: 5px;">
            <option value="">-- Default Order --</option>  
            <option value="asc" @if(request('sort_direction') == 'asc') selected @endif>Ascending</option>
            <option value="desc" @if(request('sort_direction') == 'desc') selected @endif>Descending</option>
          </select>  
        </div>
        
        <div class="control-group">
          <button class="btn btn-theme" type="submit">Search</button>
          <a href="{{ url('/articles') }}" class="btn btn-default">Reset</a>
        </div>
      </form>
    </div>
  @endif

  <div class="widget">
    <legend class="widgetheading">Menu</legend>
    <ul class="cat">
      <li><i class="icon-angle-right"></i> <a href="{{ url('/articles/new') }}"> <b>Write New Post</b> </a> </li>
      <li><i class="icon-angle-right"></i> <a href="{{ url('/articles') }}"> My Posts </a> </li>
      <li><i class="icon-angle-right"></i> <a href="{{ url('/comments') }}"> My Comments </a> </li>
    </ul>
  </div>
  
  <div class="widget">
    <legend class="widgetheading">Categories</legend>
    <ul class="cat">
      @foreach ($categories as $cat)
        <li><i class="icon-angle-right"></i> <a href="{{ url('articles?category='.$cat->name) }}">{{ $cat->name }}</a><span> ({{ $cat->article_count }})</span></li>
      @endforeach
    </ul>
  </div>

</aside>