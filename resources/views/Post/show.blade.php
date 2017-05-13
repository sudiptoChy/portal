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

          <div class="blockright card-block">
              @if($post->image)
                <img src="{{ asset('images/'. $post->image) }}"/>
              @endif
              <hr>
              <p>{!! $post->body !!}</p>
          </div>

          <div class="cardfooter">
            <!-- <div class="group">
                  <input id="user" type="text" class="input" placeholder="comment here....">
            </div>
            
            <div class="buttonright">
              <button class="btn btn-success">comment</button>
            </div> -->
          </div>
          
          <!-- <div class="rating">
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <a href=""><span class="fa fa-star-o" aria-hidden="true"></span></a>
            <p>46 response</p>
            <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
          </div>  -->

          <hr>
          <div style="margin-left: 18px; margin-bottom: 10px;" class="tags">
          @foreach($post->tags as $tag)
          <a href="{{ route('tag.show', $tag->id) }}"><span class="label label-sm label-default">{{$tag->name}}</span></a>
          @endforeach
          </div>

         <!--  <div class="likebutton">
              <p>46 response</p>
              <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
          </div> -->        
      </div>
    </div>
  </div>

@endsection