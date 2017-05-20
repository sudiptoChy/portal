@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
		  	
        <div class="card" style="height: 580px;">
    		<div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3 style="color: black; padding-top: 10px; padding-top: 170px;">Login</h3>
            <hr>
        </div>

        <!--Body-->

        <form method="POST" action="">
            <div class="form-group">
              <label name="title">Your Id:</label>
              <input style="border: 1px solid #66afe9; width: 97%;" name="id" class="form-control" placeholder="Enter Your Id">
            </div>

            <div class="form-group">
              <label name="title">Password:</label>
              <input style="border: 1px solid #66afe9; width: 97%;" name="password" class="form-control" placeholder="Enter Your password">
            </div>

        </form>

        <div class="text-center">
            <a href=""><button class="btn btn-primary" style="width: 99%; height: 40px; margin-left: -3px;">Login</button></a>
        </div>

    </div>
</div>
<!--/Form without header-->


        </div>
    </div>

@endsection