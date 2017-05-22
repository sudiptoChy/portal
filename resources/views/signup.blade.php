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

        {{-- <form method="POST" action="{{route('user.register-check')}}"> --}}
            <div class="form-group">
              <label name="title">Your Id:</label>
              <input type="text" style="border: 1px solid #66afe9; width: 97%;" name="id" class="form-control" placeholder="Enter Your Id" id="un">
            </div>

            <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
                <label>Select Date: </label>
                <input style="border: 1px solid #66afe9; width: 190%;" class="form-control" type="text" name="birthday" id="dob" />
                <span style="display: table;" class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>

            <input type="hidden"  id="token" value="{{csrf_token()}}">

            <div class="text-center">
            <button class="btn btn-primary btn-lg" style="width: 99%; height: 40px; margin-left: -3px;" id="submit">Next</button>
            {{csrf_field()}}
            </div>

       {{--  </form> --}}

    </div>
</div>
<!--/Form without header-->


        </div>
    </div>


@endsection

<script type="text/javascript">

</script>

