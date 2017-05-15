<!--Navbar-->

    <nav class=" nav navbar navbar-fixed-top navbar-default scrolling-navbar" id="header">
    <div class="container">
        <!--Navbar Brand--> 
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}"> <p id="icon" style="font-size: 35px; color: white; height: 42px; width: 42px; line-height: 42px; border-radius: 13%; text-align: center; background-color: rgb#455A64;"> RP </p>  </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{ route('message') }}" class=""><i style="color: white;" class="fa fa-envelope-o"></i></a>
        </li>
          <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a class="fa fa-bell" style="padding: 10px;" href="#">Mohsin Ahmed commented in your post</a>
                        </li>
                    </ul>
                </li>
        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/dummy.jpg')}}" class="img-circle" alt="images"></a>
                  <ul class="dropdown-menu">
                         <li>
                            <a href="{{route('user.profile')}}"><i class="fa fa-fw fa-user"></i>Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Logout</a>
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
       <!--  <form class="form float-xs-right">
            <input id="rightshift" class="form-control" type="text" placeholder="Search">
        </form> -->
        </div>
        </div>
    </div>
      </nav>
<!--/.Navbar-->