<aside class="left-sidebar">
  <div class="widget">
    <form>
      <div class="input-append">
        <input class="span2" id="appendedInputButton" type="text" placeholder="Type here">
        <button class="btn btn-theme" type="submit">Search</button>
      </div>
    </form>
  </div>

  <div class="widget">
    <legend class="widgetheading">Menu</legend>
    <ul class="cat">
      <li><i class="icon-angle-right"></i> <a href="{{ url('/articles/new') }}"> Write New Post </a> </li>
      <li><i class="icon-angle-right"></i> <a href="{{ url('/articles') }}"> My Posts </a> </li>
      <li><i class="icon-angle-right"></i> <a href="{{ url('/comments') }}"> My Comments </a> </li>
    </ul>
  </div>
  
  <div class="widget">
    <legend class="widgetheading">Categories</legend>
    <ul class="cat">
      <li><i class="icon-angle-right"></i> <a href="#"> Movie </a> </li>
      <li><i class="icon-angle-right"></i> <a href="#"> Series </a> </li>
    </ul>
  </div>

</aside>