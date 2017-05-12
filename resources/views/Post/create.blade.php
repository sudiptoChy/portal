@extends('Partials.main')

@section('title' , '| create post')

@section('stylesheet')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
      tinymce.init({ 
        selector:'textarea',
        plugins: "link code fullscreen media emoticons insertdatetime",
        media_dimensions: false,
      });
    </script>
@endsection

@section('content')

    <div class="row">

    <div class="col-md-12">

   		<h1> Create New Post </h1>
      <hr>
          <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            <div class="form-group">
              <label name="title">Title:</label>
              <input id="title" name="title" class="form-control" required>
            </div>
            <!-- Viewing Categories-->

            <div class="form-group">
              <label name="title">Category:</label>
               <select class="form-control" name="category_id" required="true">
                        <option disabled selected value>Select a category</option>
                        @foreach($categories as $category)
                          <option name="category_id" value="{{ $category->id }}">{{ $category->name }}
                          </option>
                        @endforeach
                </select>
            </div>

            <!-- Viewing Tags-->

            <div class="form-group">
              <label name="title">Tags:</label>
               <select class="form-control select2-multi" multiple="multiple" name="tags[]" required="true">
                        @foreach($tags as $tag)
                          <option name="tag_id" value="{{ $tag->id }}"> {{ $tag->name }}
                          </option>
                        @endforeach
                </select>
            </div>

            <div class="form-group">
              <label name="feature-image"> Feature Image: </label>
              <input type="file" name="feature-image">
            </div>

            <div class="form-group">
              <label name="body">Post Body:</label>
              <textarea id="body" name="body" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
	            <input type="submit" value="Create Post" class="btn btn-primary btn-lg">
	            <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
			</form>

    </div>

  </div>
@endsection

@section('scripts')

  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>

@endsection



