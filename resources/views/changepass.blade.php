@extends('Partials._usermain')

@section('title' , '| Edit Profile')

@section('content')

<div style="margin-top: 20px;" class="row">
  <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Jaber Ahmed</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-3">
                  <div class="avatar" style="margin-left: 20px; margin-top: 5px;">
                      <img src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
                  </div>

                  <!-- <div>
                  <a style="margin-bottom: 5px;" href="#" data-original-title="Edit Profile" data-toggle="tooltip" type="button" class="btn btn-md btn-default">Change Password</a>
                  </div> -->
                </div>

              <div class="col-md-8">
                <form method="POST" action="#" class="form-horizontal">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                          <!-- <div class="col-sm-4">
                            <label style="margin-top: 15px;" class="label-control">Old Password:</label>
                          </div> -->
                          <div style="margin-top: 25px;" class="md-form col-sm-8">
                          <i class="fa fa-lock prefix"></i>
                            <input type="Password" name="oldpassword" class="form-control" placeholder="Old password">
                          </div>

                          <!-- <div class="col-sm-4">
                            <label style="margin-top: 15px;" class="label-control">New Password:</label>
                          </div> -->
                          <div class="md-form col-sm-8">
                          <i class="fa fa-lock prefix"></i>
                            <input type="password" name="newpassword" class="form-control" placeholder="New password">
                          </div>

                          <!-- <div class="col-sm-4">
                            <label style="margin-top: 15px;" class="label-control">Confirm Password:</label>
                          </div> -->
                          <div class="md-form col-sm-8">
                          <i class="fa fa-lock prefix"></i>
                            <input type="password" name="conpassword" class="form-control" placeholder="Confirm password">
                          </div>

                          <div class="col-md-10 col-md-offset-1">
                            <button class="btn btn-success"> Update</button>
                            <button class="btn btn-primary"> Back</button>
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