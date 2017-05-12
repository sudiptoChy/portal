@extends('Partials._usermain')

@section('title' , '| User')

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
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>CSE</td>
                      </tr>
                      <tr>
                        <td>Name:</td>
                        <td>Jaber Ahmed</td>
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td>02/02/1992</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender:</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address:</td>
                        <td>Vatalia,Sylhet</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>jaber.hexit@gmail.com</td>
                      </tr>
                      <tr>
                        <td>Phone Number:</td>
                        <td>+8801965238949<br><br>+8801731941512
                        </td>  
                      </tr>
                      <tr>
                        <td>Rating:</td>
                        <td>4.5</td>  
                      </tr>
                     
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
          <div class="panel-footer">
              <a href="message.html" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
              <span class="pull-right">
                  <a href="edit.html" data-original-title="Edit Profile" data-toggle="tooltip" type="button" class="btn btn-md btn-warning"><i class="fa fa-edit"></i></a>
              </span>
          </div>
        </div>
    </div>
      
    </div>
@endsection