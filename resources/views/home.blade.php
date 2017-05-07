@include('Partials._head')
@include('Partials._nav')

<div class="maincontent padding-top-130">
    <div class="container">
    <div class="row">

    <!-- Post Content -->

    <div class="col-md-8">

   
      <!--Card-->

     @foreach($posts as $post)
<div class="card testimonial-card">

    <!--Bacground color-->
    

    <div class="card-up default-color-default">
    <div class="right">
     <a href=""><h4 class="card-title">{{ $post->title }}</h4></a>
        <h5 class="author">Author: Jaber Ahmed</h5>
        <p class="time">{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</p>
    </div>
    </div>

    <!--image-->
    <div class="avatar">
    <img src="{{asset('images/jaber1.JPG')}}" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
       
        <hr>
        <!--Quotation-->
        <p>{{ $post->body }}</p>
    </div>
    <div class="cardfooter">
      <p><a href="post.html" class="btn btn-default" role = "button">see more...</a></p>
    </div>
   <div class="likebutton">
  <a href=""><span class="fa fa-heart-o" aria-hidden="true"></span></a>
  <p>46 response</p>
  <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
   </div>

   
</div>
@endforeach




<!--/.Card-->
    </div>

    <!-- Post Content End Here -->

    @include('Partials._sidebar')

  </div>
  </div>
  </div>

@include('Partials._footer')

@include('Partials._javascripts')