@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
    <div class="col-xs-3">
        <i style="margin-left: 570px; margin-top: 40px; color: #333;" class="fa fa-user fa-5x"></i>
        <h3 style="color: #333; margin-left: 500px; font-size: 20px; width: 300px;">Sign Up to ResearchPortal</h3>
    </div>
    </div>

    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            
        <div style="border-radius: 5px; height: 330px; margin-bottom: 70px; padding-top: 65px; margin-top: 10px; margin-left: -10px;" class="card">
            <div class="card-block">

        <!--Body-->

        {{-- <form method="POST" action="{{route('user.register-check')}}"> --}}
            <div class="form-group">

              <label style="margin-left: 80px; font-size: 15px; color: #24292e; font-weight: bold;" name="title">Your Id:</label>
              <input style="border: 1px solid #66afe9; width: 69%; border-radius: 5px; margin-left: 65px;" type="text" name="id" class="form-control" placeholder="Enter Your Id" id="un"> 
            </div>

            <div id="datepicker" class="input-group date from-group" data-date-format="yyyy-mm-dd">
                <label style="margin-left: 80px; font-size: 15px; color: #24292e; font-weight: bold;">Select Date: </label>
                <input style="border: 1px solid #66afe9; width: 75%; margin-left: 65px; border-radius: 5px;"  class="form-control" type="text" name="birthday" id="dob"/>
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            </div>


            <div class="form-group">

            <button class="btn btn-orange" style="width: 74%; height: 40px; margin-left: 65px; border-radius: 5px; margin-top: 16px;" id="submit"> <span class="center">Next <span></button>

            <input type="hidden" id="token" value="{{csrf_token()}}">
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

