@extends('Partials.main')

@section('title' , "| $post->title")

@section('content')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="card testimonial-card">
          <div class="card-up default-color-default">
            <div class="right">
             <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
                <h5 class="author">Author: Jaber Ahmed</h5>
                @if ($post->created_at->diffInMonths(Carbon\Carbon::now()) >= 1)
                    <p class="time"> {{ $post->created_at->format('j M Y , g:ia') }} </p>
                @else
                    <p class="time"> {{ $post->created_at->diffForHumans() }} </p>
                @endif
            </div>
          </div> 

          <div class="avatar">
            <img src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
          </div>

          <div class="blockright card-block">
              @if($post->image)
                <img src="{{ asset('images/'. $post->image) }}"/>
              @endif
              <hr>
              <p>{!! $post->body !!}</p>
          </div>

          <div class="cardfooter">
            <div class="group">
                  <input id="user" type="text" class="input" placeholder="comment here....">
            </div>
            
            <div class="buttonright">
              <button class="btn btn-success">comment</button>
            </div>
          </div>
          
          <div class="rating">
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <!-- <p>46 response</p>
            <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a> -->
          </div>  
          <div class="likebutton">
              <p>46 response</p>
              <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
          </div>        
      </div>

      <div class="card1 card testimonial-card">

    <div class="blockright card-block">
    <div class="comment">
      <p>Hello everyone.Hw r you all?</p>
      <p>Hello everyone.Hw r you all?</p>
      <p>Hello everyone.Hw r you all?</p>
    </div>
    </div>
    <div class="cardfooter">
    <div class="group">
          <input id="user" type="text" class="input" placeholder="comment here....">
    </div>
    <div class="buttonright">
      <button class="btn btn-success">comment</button>
    </div>
    </div>
</div>
    </div>
  </div>

@endsection