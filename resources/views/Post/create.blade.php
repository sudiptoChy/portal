@include('Partials._head')
@include('Partials._nav')

<div class="maincontent padding-top-130">
    <div class="container">
    <div class="row">

    <div class="col-md-12">

   		<h1> Create New Post </h1>
      <hr>
          <form method="POST" action="{{ route('post.store') }}">
            <div class="form-group">
              <label name="title">Title:</label>
              <input id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
              <label name="title">Slug:</label>
              <input id="slug" name="slug" class="form-control" required>
            </div>

            <!-- Viewing Categories-->

            <div class="form-group">
              <label name="title">Category:</label>
               <select class="form-control" name="category_id" required="true">
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
              <label name="body">Post Body:</label>
              <textarea id="body" name="body" rows="10" class="form-control" required autofocus=""></textarea>
            </div>

            <div class="form-group">
	            <input type="submit" value="Create Post" class="btn btn-primary btn-lg">
	            <input type="hidden" name="_token" value="{{ Session::token() }}">
            </div>
			</form>

    </div>

    </div>
  </div>
  </div>


@include('Partials._footer')
@include('Partials._javascripts')
  <script type="text/javascript">
    $('.select2-multi').select2();
  </script>
