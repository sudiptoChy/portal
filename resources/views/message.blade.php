@extends('Partials._usermain')

@section('title' , '| User')

@section('content')

    <div class="row">
        <div class="col-md-12">

  <div class="card testimonial-card-message">

    <div style="padding-top: 20px;">
        <table class="table">
          <thead>
          <tr>
            <th>No</th>
            <th>Message</th>
            <th>From</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
      <tr style="font-weight: normal;">
        <td>01</td>
        <td>I will contact with you very soon..</td>
        <td>Tajul Islam</td>
        <td type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View</td>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                          <div class="form-group">
                            <h5>Message:</h5>
                            <p style="font-weight: normal;">At W3Schools you will find complete references about tags, attributes, events, color names, entities, character-sets, URL encoding, language codes, HTTP messages, and more.</p>
                          </div>
                           <form>
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Replay:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send</button>
                      </div>
                    </div>
                  </div>
                </div>
        <td type="button" class="btn btn-danger">Delete</td>
      </tr>
      <tr style="font-weight: normal;">
        <td>02</td>
        <td>I will contact with you very soon..</td>
        <td>Mohsin Ahmed</td>
        <td type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View</td>
        <td type="button" class="btn btn-danger">Delete</td>
      </tr>
      <tr style="font-weight: normal;">
        <td>03</td>
        <td>I will contact with you very soon..</td>
        <td>Sudipto Chowdhury</td>
        <td type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View</td>
        <td type="button" class="btn btn-danger">Delete</td>
      </tr>
      <tr style="font-weight: normal;">
        <td>04</td>
        <td>I will contact with you very soon..</td>
        <td>Jaber Ahmed</td>
        <td type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">View</td>
        <td type="button" class="btn btn-danger">Delete</td>
      </tr>
    </tbody>
      </table>
    </div>
</div>

            
        </div>
    </div>
@endsection