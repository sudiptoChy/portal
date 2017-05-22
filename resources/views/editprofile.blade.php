@extends('Partials.main')

@section('title' , '| Edit Profile')

@section('content')

<div style="margin-top: 20px;" class="row">
  <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Edit Profile</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-3">
                  <div class="avatar" style="margin-left: 20px; margin-top: 5px;">
                      <img src="/uploads/avatars/{{$user->avatar}}" class="img-circle img-responsive">
                  </div>

                  <div>
                    <form enctype="multipart/form-data" action="{{route('update.avatar')}}" method="POST"> 
                      <input type="file" name="avatar">
                      <input type="hidden" name="_token" value="{{ Session::token() }}">
                      <input type="submit" class="btn btn-md btn-default" value="Submit">
                    </form>
                  </div>
                </div>

              <div class="col-md-8">
                <form method="POST" action="">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="col-sm-2">
                            <label style="margin-top: 15px;" class="label-control">Name:</label>
                          </div>
                          <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Jaber Ahmed">
                          </div>

                          <div class="col-sm-2">
                            <label style="margin-top: 15px;" class="label-control">Name:</label>
                          </div>
                          <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Jaber Ahmed">
                          </div>

                          <div class="col-sm-2">
                            <label style="margin-top: 15px;" class="label-control">Name:</label>
                          </div>
                          <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Jaber Ahmed">
                          </div>

                          <div class="col-md-10 col-md-offset-2">
                            <button class="btn btn-success"> Update</button>
                            <button class="btn btn-primary"> Back</button>
                          
                          <a style="margin-bottom: 5px;" href="{{ route('password.change') }}" data-original-title="Edit Profile" data-toggle="tooltip" type="button" class="btn btn-md btn-default">Change Password</a>

                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>

@endsection