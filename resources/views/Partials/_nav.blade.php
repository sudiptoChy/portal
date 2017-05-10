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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        
          <li class="nav-item">
            <a id="show_login" class="nav-link waves-effect waves-light" href="login.html">
              <i class="fa fa-sign-in"></i>
              <span class="hidden-sm-down">Log In</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="show_signup" class="nav-link waves-effect waves-light" href="login.html">
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
                <a class="nav-link" href="#"><p>Bookmarks</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><p>Popular Posts</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><p>Catagories</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><p>About</p></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('post.create') }}"><p>Create Post</p></a>
            </li>
        </ul>
         <!--Search form-->
        <!-- <form class="form-inline float-xs-left">
            <input id="rightshift1" class="form-control" type="text" placeholder="Search">
        </form> -->
        </div>
        </div>
    </div>
</nav>
<!--/.Navbar-->