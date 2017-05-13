@extends('Partials.main')

@section('title' , "| $category->name ")

@section('content')
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@foreach($category->posts as $post)
              <div class="card testimonial-card">
                  <div class="card-up default-color-default">
                      <div class="right">
                         <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
                            <h5 class="author">Author: Jaber Ahmed</h5>
                            <p style="font-weight: normal; font-style: italic; font-size: 13px; line-height: 6px;"> Category: <a href="{{ route('category.show', $post->category->id) }}"> {{$post->category->name}} </a> </p>
                            @if ($post->created_at->diffInMonths(Carbon\Carbon::now()) >= 1)
                                <p style="font-size: 13px; line-height: 15px;" class="time"> {{ $post->created_at->format('j M Y , g:ia') }} </p>
                            @else
                                <p style="font-size: 13px; line-height: 15px;" class="time"> {{ $post->created_at->diffForHumans() }} </p>
                            @endif
                        </div>
                  </div>

                  <!--User image-->
                  <div class="avatar">
                      <img src="{{asset('images/jaber1.JPG')}}" class="img-circle img-responsive">
                  </div>

                  <!--Post Body-->
                  <div class="blockright card-block">
                      <hr>
                      
                      <p>{{ substr(strip_tags($post->body), 0, 250) }} {{ strlen(strip_tags($post->body)) > 250 ? "..." : ""}}</p>
                  </div>

                  <div class="cardfooter">
                      <p><a href="{{ route('post.show', $post->slug )}}" class="btn btn-default" role = "button">See more</a></p>
                  </div>
              </div>
              @endforeach
		</div>
	</div>

@endsection