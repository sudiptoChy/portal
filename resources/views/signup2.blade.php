@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
		  	
        <div class="card">
    		<div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3 style="color: black; padding-top: 10px;">Sign Up</h3>
            <hr>
        </div>

        <!--Body-->

        <form method="POST" action="">

            <div class="form-group">
              <label name="title">Name:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label name="title">Id:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="id" class="form-control">
            </div>

            <div class="form-group">
              <label>Birthdate:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="date" class="form-control">
            </div>

             <div class="form-group">
              <label name="title">Your Email:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="email" class="form-control" placeholder="Enter your email">
            </div>

             <div class="form-group">
              <label name="title">Password:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="password" class="form-control" placeholder="Enter your password">
            </div>

             <div class="form-group">
              <label name="title">Confirm Password:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="password" class="form-control" placeholder="Confirm your password">
            </div>

        </form>

        <div class="text-center">
            <a href="{{ route('login') }}"><button class="btn btn-primary" style="width: 99%; height: 40px; margin-left: -3px;">SignUp</button></a>
        </div>

    </div>
</div>
<!--/Form without header-->


        </div>
    </div>

@endsection