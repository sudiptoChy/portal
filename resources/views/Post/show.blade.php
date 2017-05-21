@extends('Partials.main')

@section('title' , "| $post->title")

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="card testimonial-card">
          <div class="card-up default-color-default">
            <div class="right">
             <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
                <h5 class="author">{{ $post->user->name }}</h5>
                <p style="font-weight: normal; font-style: italic; font-size: 13px; line-height: 6px;"> Category: <a href="{{ route('category.show', $post->category->id) }}"> {{$post->category->name}} </a> </p>
                @if ($post->created_at->diffInMonths(Carbon\Carbon::now()) >= 1)
                    <p style="font-size: 13px; line-height: 15px;" class="time"> {{ $post->created_at->format('j M Y , g:ia') }} </p>
                @else
                    <p style="font-size: 13px; line-height: 15px;" class="time"> {{ $post->created_at->diffForHumans() }} </p>
                @endif
            </div>
          </div> 

          <div class="avatar">
            <img src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
          </div>

          <div class="card-block">
              @if($post->image)
                <img src="{{ asset('images/'. $post->image) }}"/>
              @endif
              <hr>
              <p>{!! $post->body !!}</p>
          </div>

          @if($post->file)
            <div class="card-block">
              <div class="thumbnil">
               <a href={{$post->title}} download="{{$post->file}}" class="btn btn-primary">Download Attached File</a>
               </div>
            </div>
          @endif

          <div class="cardfooter">

          </div>
          <hr>
            
          <div class="rate">
          <form method="post" action="{{ route('post.rating',['post_id' => $post->id, 'user_id'=> $userID ]) }}">
            <div class="pull-right">
            @if($canRate)
              <button style="margin-top: -1.5px;" class="btn btn-sm btn-primary">Rate</button>
            @else
              <button style="margin-top: -1.5px;" disabled="disabled" class="btn btn-sm">Rate</button>
            @endif
             <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>

            <div style="width: 110px; margin-top: -7px; " class="pull-right input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number btn-sm" disabled="disabled" data-type="minus" data-field="rate">
                    <span class="fa fa-minus"></span>
                </button>
            </span>
            <input style=" margin-top: 3px; border-bottom: 0px;" type="text" name="rate" class="form-control input-number" value="1" min="1" max="10">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number btn-sm" data-type="plus" data-field="rate">
                    <span class="fa fa-plus"></span>
                </button>
            </span>
          </div>
        </form>
          <div class="pull-right">
               <h4 style="margin-top: 1px; margin-right: 7px; margin-bottom: 2px;"><span class="label label-md label-primary"><i class="fa fa-star" aria-hidden="true"> {{ number_format($postRating, 1, '.', ',') }} </i></span></h4>
            </div>
          </div>

          </form>

          <div style="margin-left: 18px; margin-bottom: 10px;" class="tags">
            @foreach($post->tags as $tag)
              <a href="{{ route('tag.show', $tag->id) }}"><span class="label label-sm label-primary"><i class="fa fa-tags" aria-hidden="true"> {{$tag->name}} </i></span></a>
            @endforeach
          </div>
      </div>
    </div>
  </div>

  <div style="margin-top: 20px;" class="row">
  <div class="col-md-10 col-md-offset-1">
    <form action="{{route('comments.store', $post->id)}}" method="post" role="form" class="facebook-share-box">
        <div class="panel panel-default">
                      
                      <div class="panel-heading"><i class="fa fa-comments" aria-hidden="true"> {{ $totalComments }}</i></div>
                      <div class="panel-body">
                        <div class="">
                            <textarea name="comment" cols="10" rows="5" id="status_message" class="form-control message" style="height: 100px; overflow: hidden;" placeholder="Write your comment here.." required="true"></textarea>
                            <button style="margin-top: -8px;" class="pull-right btn btn-default btn-md"><i class="fa fa-comment" aria-hidden="true"> Comment </i></button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">

                        </div>
                      </div>
              <!-- <div style="height: 40px;" class="panel-footer">
                <div class="pull-right form-group">                                               
                </div>
            </div> -->
        </div>
       </form>
      </div>
      </div>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    @foreach($post->comments as $comment)
      <div class="card testimonial-card">
          <div class="card-up default-color-default">
            <p style="margin-top: 30px; font-style: italic; font-weight: normal;">{{ $comment->comment }}</p>
          </div> 

          <div style="margin-left: 15px; width: 70px;" class="avatar">
            <img style="margin-top: 10px;" src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
          </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection

@section('scripts')
  <script>
    document.getElementById("btnPlaceOrder").disabled = true;
    $(document).ready(function() {
 $(".word").fancybox({
  'width': 600, // or whatever
  'height': 320,
  'type': 'iframe'
 });
}); //  ready 
  </script>
@endsection