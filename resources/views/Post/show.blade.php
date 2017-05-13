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
          <hr>

          <div class="rate">

            <div class="pull-right">
             <button style="margin-top: -5.2px;" class="btn btn-sm btn-primary">Rate</button>
            </div>

            <div style="width: 110px; margin-top: -10px; " class="pull-right input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number btn-sm" disabled="disabled" data-type="minus" data-field="quant[1]">
                    <span class="fa fa-minus"></span>
                </button>
            </span>
            <input style=" margin-top: 3px; border-bottom: 0px;" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number btn-sm" data-type="plus" data-field="quant[1]">
                    <span class="fa fa-plus"></span>
                </button>
            </span>
          </div>

          <div class="pull-right">
               <h4 style="margin-top: 1px; margin-right: 4px;"><strong>Rating: 4.5</strong></h4>
            </div>
          </div>

          <div style="margin-left: 18px; margin-bottom: 10px;" class="tags">
            @foreach($post->tags as $tag)
              <a href="{{ route('tag.show', $tag->id) }}"><span class="label label-sm label-default">{{$tag->name}}</span></a>
            @endforeach
          </div>
      </div>
    </div>
  </div>

@endsection