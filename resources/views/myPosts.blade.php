@extends('Partials.main')

@section('title' , '| home')

@section('content')

    <div class="row">
      <div class="col-md-10">
        <h1> All Posts </h1>
      </div>
   </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created at</th>
          <th>Action</th>
          <th></th>
          <th></th>
        </thead>

        <tbody>
          @foreach ($postsByUser->posts as $post)
            <tr>
              <th> {{ $post->id }} </th>
              <td> {{ $post->title }} </td>
              <td> {!! substr($post->body, 0, 50) !!} {{ strlen($post->body) > 50 ? "..." : ""}} </td>
              <td> {{ date('M j, Y h:i a', strtotime($post->created_at)) }}</td>
              <td> 
                <a href="{{ route('post.show', $post->slug) }}" class="btn btn-default">View</a>
                <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection