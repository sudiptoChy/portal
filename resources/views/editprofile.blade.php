@extends('Partials._usermain')

@section('title' , '| Edit Profile')

@section('content')

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Jaber Ahmed</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3">
                <img alt="user pic" src="images/jaber1.JPG" class="img img-circle img-responsive">
              </div>
              <div class="col-md-9 col-lg-9">
                <table class="table table-user-information">
                    <form class="form-horizontal">
                      <label class="control-label">Department: </label>
                      <input type="text" class="form-control" name="department" placeholder="CSE" />
                      <label>Name: </label>
                      <input type="text" class="form-control" name="name" placeholder="Jaber Ahmed" />
                      <label>Gender: </label>
                      <input type="text" class="form-control" name="gender" placeholder="Male" />
                      <label>Email: </label>
                      <input type="email" class="form-control" name="email" placeholder="jaber.hexit@gmail.com" />
                      <label>Address: </label>
                      <input type="text" class="form-control" name="address" placeholder="Medical Road,Sylhet" />
                      <label>Phone: </label>
                      <input type="text" class="form-control" name="name" placeholder="+8801965238949" />
                      <label>Rating: </label>
                      <input type="number" class="form-control" name="name" placeholder="4.0" />
                    </form>
                  </table>
              </div>
            </div>
          </div>
          <div class="panel-footer">
              <a href="message.html" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
              <span class="pull-right">
                  <a href="edit.html" data-original-title="Edit Profile" data-toggle="tooltip" type="button" class="btn btn-md btn-default">Update</a>
                  <a href="userprofile.html" data-original-title="Back To Profile" data-toggle="tooltip" type="button" class="btn btn-md btn-secondary">Back</a>
              </span>
          </div>
        </div>
    </div>
    </div>

@endsection