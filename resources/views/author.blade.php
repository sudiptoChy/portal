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

            	<h5 style="padding-bottom: 10px;">Rating: 8</h5>
                <h5 style="margin-top: -8px; padding-bottom: 10px;">Total Post: 10</h5>

            </div>	
              <hr>

            <div class="card-footer">
               <button style="margin-left: 400px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever=""><i class="fa fa-send" aria-hidden="true"> Send Message </i></button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text" style="height: 100px;" "></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><i class="fa fa-send" aria-hidden="true"> Send message </i></button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!--/.Card-->
    </div>
  </div>


@endsection