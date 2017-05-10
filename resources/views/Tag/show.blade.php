@extends('Partials.main')

@section('title' , "| $tag->name ")

@section('content')
  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @foreach($tag->posts as $post)
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

                  <!--User image-->
                  <div class="avatar">
                      <img src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
                  </div>

                  <!--Post Body-->
                  <div class="blockright card-block">
                      <hr>
                      
                      <p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250 ? "..." : ""}}</p>
                  </div>

                  <div class="cardfooter">
                      <p><a href="{{ route('post.show', $post->id )}}" class="btn btn-default" role = "button">see more...</a></p>
                  </div>

                   <div class="likebutton">
                      <a href=""><span class="fa fa-heart-o" aria-hidden="true"></span></a>
                      <p>46 response</p>
                      <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
                   </div>
              </div>
              @endforeach
    </div>
  </div>

@endsection