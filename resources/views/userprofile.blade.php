@extends('Partials.main')

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
                        <td>Name:</td>
                        <td>{{ $user->name }}</td>
                      </tr>

                      <tr>
                        <td>ID:</td>
                        <td>{{ $user->student_id }}</td>
                      </tr>

                      <tr>
                        <td>Date of Birth:</td>
                        <td>{{ $user->birthday }}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <tr>
                        <td>Rating:</td>
                        <td>{{ $user->rating }}</td>  
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