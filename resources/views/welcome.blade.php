@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
              <div class="card testimonial-card">
                  <div class="card-up default-color-default">
                      <div class="right">
                          <h4 class="card-title">{{ $post->title }}</h4>
                          <a href="{{ route('user.show', $post->user_id) }}"><h5 class="author">Author: Jaber Ahmed</h5></a>
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
                      <p>{{ substr(strip_tags($post->body), 0, 250) }} {{ strlen(strip_tags($post->body)) > 250 ? "..." : ""}}</p>
                  </div>

                  <div class="cardfooter">
                      <p><a href="{{ route('post.show', $post->slug )}}" class="btn btn-default" role = "button">see more...</a></p>
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
              @endforeach
              
              <!-- pagination -->
              <div class="text-center">
                  {{ $posts->links() }}
              </div>
        </div>

        <!-- Side bar -->

          <div class="col-md-3">

            <!-- Top Posts by rating -->

              <div class="topposts">
                  <h3>Top Posts</h3>
                  <ul>
                    @foreach($PostByRating as $post)
                      <div class="total">
                        <div class="leftimage">
                          <a href="#"><img src="{{asset('images/dummy.jpg')}}" class="img-circle" alt="images"></a>
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

              <!-- Top Contributor -->

              <div class="contributor">
                <h3>Top Contributor</h3>
                  <ul>
                    @foreach($UserByRating as $user)
                      <div class="totalcontsection">
                        <div class="leftimage">
                          <a href="{{ route('user.show', $user->id) }}"><img src="{{asset('images/dummy.jpg')}}" class="img-circle" alt="images"/></a>
                        </div>
                        <div class="rightname">
                          <h4><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></h4>                
                        </div>
                      </div>
                    @endforeach
                  </ul>
              </div>

              <!-- Categories -->

              <div class="catagories">
                <h3>Catagories</h3>
                <ul>
                  @foreach($categories as $category)
                    <a href="{{ route('category.show', $category->id )}}"><li>{{ $category->name }} ({{ $category->posts()->count()}})</li></a>
                  @endforeach
                </ul>
              </div>

              <!-- Tags -->

              <div class="catagories">
                <h3>Tags</h3>
                <ul>
                  @foreach($tags as $tag)
                    <a href="{{ route('tag.show', $tag->id )}}"><li>{{ $tag->name }} ({{ $tag->posts()->count()}})</li></a>
                  @endforeach
                </ul>
              </div>
          </div>
    </div>
@endsection