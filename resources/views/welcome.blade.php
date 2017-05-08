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
        @if ($post->created_at->diffInMonths(Carbon\Carbon::now()) >= 1)
            <p class="time"> {{ $post->created_at->format('j M Y , g:ia') }} </p>
        @else
            <p class="time"> {{ $post->created_at->diffForHumans() }} </p>
        @endif
  
    </div>
    </div>

    <!--image-->
    <div class="avatar">
    <img src="{{asset('images/jaber1.JPG')}}" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
       
        <hr>
        <!--Quotation-->
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

<div class="text-center">
        {{ $posts->links() }}
 </div>




<!--/.Card-->
    </div>

    <!-- Post Content End Here -->

    <!-- Sidebar goes here -->

    <div class="col-md-3">
    <div class="topposts">
      <h3>Top Posts</h3>
      <ul>
      @foreach($PostByRating as $post)

      <div class="total">
      <div class="leftimage">
        <a href="#"><img src="{{asset('images/jaber1.JPG')}}" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></li>
      </div>
      <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
      @endforeach

      </ul>
      </div>
      <div class="catagories">
        <h3>Catagories</h3>
        <ul>
          @foreach($categories as $category)
            <a href="{{ route('category.show', $category->id )}}"><li>{{ $category->name }}</li></a>
          @endforeach
        </ul>
        
      </div>
      <div class="contributor">
        <h3>Top Contributor</h3>
        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="{{asset('images/jaber1.JPG')}}" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href="#"><h4>Jaber Ahmed</a></h4>
        </div>
        </div>
        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="{{asset('images/jony.JPG')}}" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href="#"><h4>Tajul Islam Jony</a></h4>
        </div>
        </div>

        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="{{asset('images/dip.JPG')}}" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href=""><h4>Sudipto Chowdhury</a></h4>
        </div>
        </div>
      </div>
    </div>

    <!-- Sidebar Ends Here -->

  </div>
  </div>
  </div>

@include('Partials._footer')

@include('Partials._javascripts')