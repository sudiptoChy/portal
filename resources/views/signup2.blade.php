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

        <form method="POST" action="{{route('student.register')}}">
            
            <div class="form-group">
              <label name="title">Id:</label>
              <input placeholder="{{ $id }}" value="{{ $id }}" readonly style="border: 1px solid #66afe9; width: 99%;" name="id" class="form-control">
            </div>

            <div class="form-group">
              <label name="title">Name:</label>
              <input placeholder="{{ $name }}" value="{{ $name }}" style="border: 1px solid #66afe9; width: 99%;" name="name" readonly class="form-control">
            </div>

            <div class="form-group">
              <label>Birthdate:</label>
              <input placeholder="{{ $birthday }}" value="{{ $birthday }}" readonly style="border: 1px solid #66afe9; width: 99%;" name="birthday" class="form-control" required="true">
            </div>

             <div class="form-group">
              <label name="title">Your Email:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="email" class="form-control" placeholder="Enter your email" required="true">
            </div>

             <div class="form-group">
              <label name="title">Password:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="password" class="form-control" placeholder="Enter your password" type="password" required="true">
            </div>

             <div class="form-group">
              <label name="title">Confirm Password:</label>
              <input style="border: 1px solid #66afe9; width: 99%;" name="password_confirmation" class="form-control" placeholder="Confirm your password" type="password" required="true">
            </div>

            <div class="text-center">
            <button class="btn btn-primary" style="width: 99%; height: 40px; margin-left: -3px;">SignUp</button>

            {{ csrf_field() }}
            </div>
        </form>
    </div>
</div>
<!--/Form without header-->


        </div>
    </div>

@endsection