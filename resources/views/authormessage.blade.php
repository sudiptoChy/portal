@extends('Partials.main')

@section('title' , '| User Profile')

@section('content')


 <div style="margin-top: 30px;" class="row">
    <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-info" style="margin-bottom: 320px;">
          <div class="panel-heading">
            <h3 class="panel-title" style="font-weight: bold;">To: {{ $author->name }}</h3>
          </div>
          <div class="panel-body">
          <form method="POST" action="{{route('message_post', $author->id )}}" class="form-group">
            <label>Send Message:</label>
            <textarea style="height: 193px; width: 915px;" class="form-control" name="message" type="text" required="true"></textarea>
            <a href=""><button class="btn btn-primary pull-right" type="submit" style="margin-bottom: 15px; margin-top: 0px;">Send Message</button></a>
            <input type="hidden" name="_token" value="{{Session::token()}}">
          </form>
          </div>
        </div>

    </div>
  </div>


@endsection