@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
    <div class="col-xs-3">
        <i style="margin-left: 570px; margin-top: 40px; color: #333;" class="fa fa-user fa-5x"></i>
        <h3 style="color: #333; margin-left: 500px; font-size: 20px; width: 300px;">Sign in to ResearchPortal</h3>
    </div>
    </div>

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
		  	
        <div style="border-radius: 5px; height: 330px; margin-bottom: 70px; padding-top: 65px; margin-top: 10px; margin-left: -10px;" class="card">
    		<div class="card-block">

        <!--Body-->

        <form method="POST" action="{{ route('login') }}">
            <div class="form-group">
              <label style="margin-left: 80px; font-size: 15px; color: #24292e; font-weight: bold;" name="title">Your Id/ Email(Teacher)</label>
              <input style="border: 1px solid #66afe9; width: 64%; margin-left: 80px; border-radius: 5px;" name="id" class="form-control">
            </div>

            <div class="form-group">
              <label style="margin-left: 80px; font-size: 15px; color: #24292e; font-weight: bold;" name="title">Password</label>
              <input type="password" style="border: 1px solid #66afe9; width: 59%; margin-left: 80px; border-radius: 5px;" name="password" class="form-control">
            </div>

            <div class="text-center">
            <a href=""><button class="btn btn-success" style="width: 65%; height: 40px; margin-left: 6px; border-radius: 5px;">Login</button></a>
            </div>

            {{ csrf_field() }}

        </form>
    </div>
</div>
<!--/Form without header-->


        </div>

    <div class="col-md-5 col-md-offset-4">

        <div style="border-radius: 5px; background: #f9f9f9; margin-top: -50px; height: 60px; margin-left: -10px;" class="card">
        <div class="card-block">
         <h5 style="padding-top: 22px; padding-left: 74px; color: #24292e;">New to ResearchPortal?</h5>
         <a style="float:right; margin-top: -34px; padding-right: 70px; color: #0366d6; font-weight: normal;" href="{{ route('user.register') }}">Create an account</a>
       </div>

    </div>

@endsection
