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
        <div class="md-form">
            <i class="fa fa-key prefix"></i>
            <input style="margin-left: 30px;" type="text" id="form3" class="form-control">
            <label for="form3">Your Id</label>
        </div>

        
		<div class="md-form">
			<i class="fa fa-user prefix"></i>
		    <input style="margin-left: 30px;" type="text" id="date-picker-example" class="form-control datepicker">
		    <label for="date-picker-example">Enter Your Name</label>
		</div>


        <div class="text-center">
            <button class="btn btn-deep-orange">Sign Up</button>
        </div>

    </div>
</div>
<!--/Form without header-->


        </div>
    </div>

@endsection