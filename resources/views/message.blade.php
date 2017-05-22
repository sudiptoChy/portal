@extends('Partials.main')

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
         @foreach($messages as $message)
          <tbody>
          <tr style="font-weight: normal;">
            <td>#</td>
            <td>{{ substr(strip_tags($message->body), 0, 35) }} {{ strlen(strip_tags($message->body)) > 35 ? "..." : ""}}</td>
            <td><a href="{{ route('author', $message->user->id) }}"> {{ $message->user->name }} </a> </td>
            <td>
             <a href="{{route('user.message_show', $message->id)}}" type="button" class="btn btn-primary" data-whatever="">View</a>
            </td>
            <td type="button" class="btn btn-danger">Delete</td>
          </tr>
      @endforeach
    </tbody>
      </table>
    </div>
</div>
            
        </div>
    </div>
@endsection