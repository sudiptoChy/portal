@extends('Partials.main')

@section('title' , '| User Profile')

@section('content')

 <div style="margin-top: 5px;" class="row">
    <div class="col-md-10 col-md-offset-1">
 
<!--Card-->
        <div class="card testimonial-card-1">

            <div class="card-up-down default-color-dark">
            </div>

            <!--Avatar-->
            <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="img img-circle img-responsive">
            </div>

            <div class="card-block-1">
                <!--Name-->
                <h4 class="card-title">{{ $author->name }}</h4>
                <h4>{{ $author->student_id }}</h4>
                <h4>{{ $author->email }}</h4>
                <!--Quotation-->
            </div>
            <hr>
            <div style="text-align: center;" class="rate">
              <h2><span class="label label-md label-primary"><i class="fa fa-star" aria-hidden="true"> {{ $author->rating }} </i></span></h2>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
              <h2 ><span class="label label-md label-primary"> Total Post(s): {{$totalPost}} </span></h2>
            </div>
              
              <hr>

            <div class="card-footer">
               <a href="{{ route('message', $author->id) }}"><button style="margin-left: 400px;" type="button" class="btn btn-primary" d><i class="fa fa-send" aria-hidden="true"> Send Message </i></button></a>
            </div>
        </div>
        <!--/.Card-->
    </div>
  </div>

@endsection