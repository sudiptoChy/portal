<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/project.css')}}">
    <link rel="stylesheet" type="text/css" href="login.css">

  </head>
  <body>
    
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
      <a class="navbar-brand" href="#"> <p id="icon" style="font-size: 35px; color: white; height: 42px; width: 42px; line-height: 42px; border-radius: 13%; text-align: center; background-color: rgb#455A64;"> RP </p>  </a>
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
              <i class="glyphicon glyphicon-user"></i>
              <span class="hidden-sm-down">Sign Up</span>
            </a>
          </li>
      </ul>
      <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
      </form>
      <!--  <hr class="upper">  -->
       <h3>ResearchPortal</h3>
      <!--  <hr class="upper"> -->
       <div class="border">
    <ul class="nav navbar-nav">
             <li class="nav-item">
                <a class="nav-link" href="#"><p>Home</p></a>
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

  
  <div class="maincontent padding-top-130">
    <div class="container">
    <div class="row">
    <div class="col-md-8">

   
      <!--Card-->
<div class="card testimonial-card">

    <!--Bacground color-->
    <div class="card-up default-color-default">
    <div class="right">
     <a href=""><h4 class="card-title">C++ is more efficient for ACM programming</h4></a>
        <h5 class="author">Author: Jaber Ahmed</h5>
        <p class="time">Today: 3.30pm</p>
    </div>
    </div>

    <!--image-->
    <div class="avatar">
    <img src="images/jaber1.JPG" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
       
        <hr>
        <!--Quotation-->
        <p>In computer science descrete mathematics is the most important subject.As a computer science student eveyone must have a knowledge about descrete mathematics.</p>
    </div>
    <div class="cardfooter">
      <p><a href="post.html" class="btn btn-default" role = "button">see more...</a></p>
    </div>
   <div class="likebutton">
  <a href=""><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
  <p>46 response</p>
  <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
   </div>
</div>




<div class="card testimonial-card">

    <!--Bacground color-->
    <div class="card-up default-color-default">
    <div class="right">
      <a href=""><h4 class="card-title">Java programmers are the most creative programmer</h4></a>
        <h5 class="author">Author: Sudipto Chowdhury</h5>
        <p class="time">Today: 4.30pm</p>
    </div>
    </div>

    <!--image-->
    <div class="avatar"><img src="images/dip.jpg" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
        
        <hr>
        <!--Quotation-->
        <div class="description">
        <p>In computer science descrete mathematics is the most important subject.As a computer science student eveyone must have a knowledge about descrete mathematics.</p>
        </div>
    </div>
    <div class="cardfooter">
      <p><a href="" class="btn btn-default" role = "button">see more...</a></p>
    </div>
   <div class="likebutton">
  <a href=""><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
  <p>46 response</p>
  <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
   </div>
</div>



<div class="card testimonial-card">

    <!--Bacground color-->
    <div class="card-up default-color-default">
    <div class="right">
      <a href=""><h4 class="card-title">Descrete Mathematics is called the father of programming</h4></a>
        <h5 class="author">Author: Tajul Islam Jony</h5>
        <p class="time">Yeasterday: 8.30pm</p>
    </div>
    </div>

    <!--image-->
    <div class="avatar"><img src="images/jony.JPG" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
        
        <hr>
        <!--Quotation-->
        <p>In computer science descrete mathematics is the most important subject.As a computer science student eveyone must have a knowledge about descrete mathematics.</p>
    </div>
    <div class="cardfooter">
      <p><a href="" class="btn btn-default" role = "button">see more...</a></p>
    </div>
   <div class="likebutton">
  <a href=""><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
  <p>46 response</p>
  <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
   </div>
</div>

<div class="card testimonial-card">

    <!--Bacground color-->
    <div class="card-up default-color-default">
    <div class="right">
      <a href=""><h4 class="card-title">Data-Structure is more important for programmers or developers</h4></a>
        <h5 class="author">Author: Mohsin Ahmed</h5>
        <p class="time">Sunday: 3.30pm</p>
    </div>
    </div>

    <!--image-->
    <div class="avatar">
    <img src="images/mohsin.jpg" class="img-circle img-responsive">
    </div>

    <div class="blockright card-block">
        
        <hr>
        <!--Quotation-->
        <p>In computer science descrete mathematics is the most important subject.As a computer science student eveyone must have a knowledge about descrete mathematics.</p>
    </div>
    <div class="cardfooter">
      <p><a href="" class="btn btn-default" role = "button">see more...</a></p>
    </div>
   <div class="likebutton">
  <a href=""><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a>
  <p>46 response</p>
  <a href=""><span class="fa fa-bookmark" aria-hidden="true"></span></a>
   </div>
</div>

<!--/.Card-->
    </div>

    <div class="col-md-3">
    <div class="topposts">
      <h3>Top Posts</h3>
      <ul>
      <div class="total">
      <div class="leftimage">
        <a href="#"><img src="images/jaber1.JPG" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="#">C ++ is more efficient for ACM programming.</a></li>
      </div>
      <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
       <div class="total">
      <div class="leftimage">
        <a href="#"><img src="images/dip.JPG" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="#">Java programmers are the most creative programmer.</a></li>
      </div>
       <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
       <div class="total">
      <div class="leftimage">
        <a href="#"><img src="images/jony.JPG" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="#">Descrete Mathematics is the father of programming.</a></li>
      </div>
       <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
       <div class="total">
      <div class="leftimage">
        <a href="#"><img src="images/mohsin.jpg" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="#">Data-Structure is more important for programmers or developers.</a></li>
      </div>
       <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
        <div class="total">
      <div class="leftimage">
        <a href="#"><img src="images/jaber.jpg" class="img-circle" alt="images"></a>
      </div>
      <div class="rightname">
      <li><a href="#">Data-Structure is more important for programmers or developers.</a></li>
      </div>
       <div class="name">
        <p>Jaber Ahmed</p>
      </div>
      </div>
      </ul>
      </div>
      <div class="catagories">
        <h3>Catagories</h3>
        <ul>
          <a href="#"><li>C++ programming</li></a>
          <a href=""><li>Java programming</li></a>
          <a href=""><li>C programming</li></a>
          <a href=""><li>Data-Structure</li></a>
          <a href=""><li>Algorithms</li></a>
        </ul>
        <div class="button">
        <p><a href="#" class="btn btn-default" role="button">See More</a></p>
        </div>
      </div>
      <div class="contributor">
        <h3>Top Contributor</h3>
        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="images/jaber1.JPG" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href="#"><h4>Jaber Ahmed</a></h4>
        </div>
        </div>
        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="images/jony.JPG" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href="#"><h4>Tajul Islam Jony</a></h4>
        </div>
        </div>

        <div class="totalcontsection">
        <div class="leftimage">
          <a href=""><img src="images/dip.JPG" class="img-circle" alt="images"/></a>
        </div>
        <div class="rightname">
          <a href=""><h4>Sudipto Chowdhury</a></h4>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="footer">
    <p>&copy; copyright prohibited</p>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="js/sticky.js"></script>

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <script>
      
      $(window).scroll(function(){

        if($(this).scrollTop() >= 100){

          $("body").addClass("sleek");
        }
        else{

          $("body").removeClass("sleek");
        }

      });
    </script>

  </body>
</html>
