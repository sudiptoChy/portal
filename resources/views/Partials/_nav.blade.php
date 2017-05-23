<!--Navbar-->

<nav class="navbar navbar-default navbar-fixed-top scrolling-navbar" id="header">
    <div class="container">
        <!--Navbar Brand--> 
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}"> <p id="icon" style="font-size: 35px; color: white; height: 42px; width: 42px; line-height: 42px; border-radius: 13%; text-align: center; background-color: rgb#455A64;"> RP </p>  </a>
    </div>

    @if(Auth::check())

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="{{route('user.message')}}" class=""> 
        <i style="color: white;" class="fa fa-envelope-o"> (@yield('totalMessage'))</i></a>
        </li>
        <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/uploads/avatars/{{Auth::user()->avatar}}" class="img-circle" alt="images"></a>
                  <ul class="dropdown-menu">
                        <li>
                          <h5 style="text-align: center;">{{ Auth::user()->name }}</h5>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{route('user.profile')}}"><i class="fa fa-fw fa-user"></i> Profile </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" id="logout"><i class="fa fa-fw fa-logout-off"></i> Logout </a>
                        </li>
                 </ul>
          </li>
      </ul>
      <form action="" class="search-form">
          <div class="form-group has-feedback">
              <label for="search" class="sr-only">Search</label>
              <input type="text" class="form-control" name="search" id="search">
                <span class="fa fa-search form-control-feedback"></span>
          </div>
      </form>
      <!--  <hr class="upper">  -->
       <h3>Research Portal</h3>
       <!-- <hr class="upper"> -->
       <div class="border">
    <ul class="nav navbar-nav">
             <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}"><p>Home</p></a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.popular')}}"><p>Popular Posts</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"><p>About Us</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('showPostsByUser', Auth::user()->id) }}"><p>My Posts</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.create') }}"><p>Create Post</p></a>
            </li>
        </ul>
         <!--Search form-->
       <!--  <form class="form float-xs-right">
            <input id="rightshift" class="form-control" type="text" placeholder="Search">
        </form> -->
        </div>
      </div>
    @else
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        
          <li class="nav-item">
            <a id="show_login" class="nav-link waves-effect waves-light" href="{{route('user.login')}}">
              <i class="fa fa-sign-in"></i>
              <span class="hidden-sm-down">Log In</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="show_signup" class="nav-link waves-effect waves-light" href="{{ route('user.register') }}">
              <i class="fa fa-user"></i>
              <span class="hidden-sm-down">Sign Up</span>
            </a>
          </li>
      </ul>
      <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search">
                  <span class="fa fa-search form-control-feedback"></span>
              </div>
      </form>
      <!--  <hr class="upper">  -->
       <h3>ResearchPortal</h3>
      <!--  <hr class="upper"> -->
       <div class="border">
    <ul class="nav navbar-nav">
             <li class="nav-item">
                <a class="nav-link" href="{{route('home') }}"><p>Home</p></a>
             </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('post.popular')}}"><p>Popular Posts</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}"><p>About Us</p></a>
            </li>
        </ul>
         <!--Search form-->
        <!-- <form class="form-inline float-xs-left">
            <input id="rightshift1" class="form-control" type="text" placeholder="Search">
        </form> -->
        </div>
        </div>
        @endif
    </div>
</nav>
<!--/.Navbar-->

<form id="frmlogout" method="POST" action="{{ route('logout') }}">
    {!! csrf_field() !!}
</form>


<script>
  document
  .getElementById('logout')
  .addEventListener('click', function(e){
    e.preventDefault();
    document.getElementById('frmlogout').submit();
  });
</script>