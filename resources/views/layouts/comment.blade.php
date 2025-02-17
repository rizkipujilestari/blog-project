<!-- Comment Section -->
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
            
<form id="commentform" action="{{ url('/comment') }}" method="post" name="comment-form">
@csrf
    <div class="row">
      <div class="span4">
        <b>Name :</b> {{ Auth::user()->name; }}
      </div>
      <div class="span4">
        <b>Email :</b> {{ Auth::user()->email; }}
      </div>
      
      <div class="span8 margintop10">
        <input type="hidden" name="post_id" id="post_id" value="{{ $article->id }}" />
        <input type="hidden" name="slug" id="slug" value="{{ $article->slug }}" />
        <input type="hidden" name="reply" id="reply" value="{{ ($is_reply == false) ? null : $is_reply;  }}" />
        
        <p>
            @if ($is_reply == false)
                <textarea name="comment_body" id="comment_body" rows="12" 
                class="input-block-level" placeholder="*Your comment here" 
                style="max-height: 200px; max-width: 620px; overflow-y:auto;"></textarea>
            @else
                <textarea name="comment_body" id="comment_body" rows="12" 
                class="input-block-level" placeholder="Your reply here" 
                style="max-height: 200px; max-width: 500px; overflow-y:auto;"></textarea>
            @endif
        </p>
        <p>
            @if ($is_reply == false)
                <button class="btn btn-theme btn-medium margintop10" type="submit">Comment</button>
            @else
                <button class="btn btn-theme margintop10" type="submit">Reply</button>
            @endif
        </p>
      </div>
    </div>
</form>