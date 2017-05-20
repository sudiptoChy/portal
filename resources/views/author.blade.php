@extends('Partials._usermain')

@section('title' , '| User Profile')

@section('content')


 <div style="margin-top: 5px;" class="row">
    <div class="col-md-10 col-md-offset-1">
 
<!--Card-->
        <div class="card testimonial-card-1">

            <div class="card-up-down default-color-dark">
            </div>

            <!--Avatar-->
            <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="img img-circle img-responsive">
            </div>

            <div class="card-block-1">
                <!--Name-->
                <h4 class="card-title">Tajul Islam Jony</h4>
                <h4>1301020020</h4>
                <h4>tajul.cse2015@gmail.com</h4>
                <!--Quotation-->
            </div>
            <hr>
            <div style="text-align: center;" class="rate">
            	<h2><span class="label label-md label-primary"><i class="fa fa-star" aria-hidden="true"> 4.5 </i></span></h2>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
              <h2 ><span class="label label-md label-primary"> Total Post(s): 10 </span></h2>
            </div>
            	
              <hr>

            <div class="card-footer">
               <a href="{{ route('authormessage') }}"><button style="margin-left: 400px;" type="button" class="btn btn-primary" d><i class="fa fa-send" aria-hidden="true"> Send Message </i></button></a>

           <!--      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" action="{{ route('author.sendMessage', ['from_user_id' => 2, 'to_user_id' => 2] )}}">
                      <div class="modal-body">
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text" style="height: 100px;" "></textarea>
                          </div>
                      </div>
                      <div class="modal-footer">

                        <button type="button" class="btn btn-primary"><i class="fa fa-send" aria-hidden="true"> Send message </i></button>
                        </form>
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div> -->

            </div>
        </div>
        <!--/.Card-->
    </div>
  </div>

@endsection