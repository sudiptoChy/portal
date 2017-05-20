@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
		  	
        <div class="card" style="height: 580px;">
    		<div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3 style="color: black; padding-top: 10px; padding-top: 170px;">Sign Up</h3>
            <hr>
        </div>

        <!--Body-->

        <form method="POST" action="">
            <div class="form-group">
              <label name="title">Your Id:</label>
              <input style="border: 1px solid #66afe9; width: 97%;" id="title" name="title" class="form-control" placeholder="Enter Your Id">
            </div>

            <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                <label>Select Date: </label>
                <input style="border: 1px solid #66afe9; width: 190%;" class="form-control" type="text" readonly />
                <span style="display: table;" class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>

        </form>

        <div class="text-center">
            <a href="{{ route('signuptwo') }}"><button class="btn btn-primary btn-lg" style="width: 99%; height: 40px; margin-left: -3px;">Next</button></a>
        </div>

    </div>
</div>
<!--/Form without header-->


        </div>
    </div>

@endsection