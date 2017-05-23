<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel Login System</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background: #fafafa;">


    <div class="container">
      <div class="row">
        <div class="col-xs-3">
            <i style="margin-left: 530px; margin-top: 40px; color: #333;" class="fa fa-user fa-5x"></i>
            <h3 style="color: #333; margin-left: 460px; font-size: 20px; width: 300px;">Sign in to Admin Panel</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
        
        <div style="border-radius: 5px; height: 330px; background:white; margin-bottom: 70px; padding-top: 65px; margin-top: 10px; margin-left: -10px; border: 1px solid #c6c6c6;" class="card">
        <div class="card-block">

        <!--Body-->
            <div class="form-group">
              <label style="margin-left: 70px; font-size: 15px; color: #24292e; font-weight: bold;" name="title">UserName</label>
              <input style="border: 1px solid #66afe9; width: 64%; margin-left: 70px; border-radius: 5px;" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label style="margin-left: 70px; font-size: 15px; color: #24292e; font-weight: bold;" name="title">Password</label>
              <input type="password" style="border: 1px solid #66afe9; width: 64%; margin-left: 70px; border-radius: 5px;" name="password" class="form-control">
            </div>

            <div class="text-center">
            <a href="{{route('admin.index')}}"><button class="btn btn-success" style="width: 64%; height: 40px; margin-left: 7px; border-radius: 5px;">Login</button></a>
            </div>
    </div>
</div>
<!--/Form without header-->


        </div>
    </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
