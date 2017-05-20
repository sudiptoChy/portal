@extends('Partials._usermain')

@section('title' , '| User Profile')

@section('content')


 <div style="margin-top: 30px;" class="row">
    <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-info" style="margin-bottom: 320px;">
          <div class="panel-heading">
            <h3 class="panel-title" style="font-weight: bold;">Send Message</h3>
          </div>
          <div class="panel-body">
          <form method="" action="" class="form-group">
            <label>Send Message:</label>
            <textarea class="form-control" name="message" type="text"></textarea>
            <a href=""><button class="btn btn-primary pull-right" type="submit" style="margin-bottom: 15px; margin-top: 0px;">Send Message</button></a>
          </form>
          </div>
        </div>

    </div>
  </div>


@endsection