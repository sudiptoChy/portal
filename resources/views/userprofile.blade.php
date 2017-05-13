@extends('Partials._usermain')

@section('title' , '| User Profile')

@section('content')

    <div style="margin-top: 20px;" class="row">

      <div class="col-lg-10 col-lg-offset-1">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title" style="font-weight: bold;">User Profile</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3">
                <div class="avatar" style="margin-top: 15px;">
                    <img src="{{asset('images/dummy.jpg')}}" class="img-circle img-responsive">
                </div>

              <div class="">
              <span class="">
                  <a href="{{route('profile.edit')}}" data-original-title="Edit Profile" data-toggle="tooltip" type="button" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Profile </a>
              </span>
          </div>
              </div>
              <div class="col-md-7">
                <table class="table table-inverse table-hover">
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
                        <td>+8801965238949</td>  
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
          
        </div>
    </div>
      
    </div>
@endsection