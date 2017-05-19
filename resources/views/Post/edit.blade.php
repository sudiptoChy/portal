@extends('Partials.main')

@section('title' , '| Edit post')

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
			<div class="col-md-8">
			      <form method="POST" action="{{ route('post.update', $post->slug) }}" enctype="multipart/form-data">
			        <div class="form-group">
			          <label name="title">Title:</label>
			          <input id="title" name="title" class="form-control" value="{{ $post->title }}">
			        </div>

			        <div class="form-group">
			              <label name="title">Category:</label>
			               <select class="form-control" name="category_id" required="true">
			                    <option value="{{ $post->category_id }}">{{$post->category->name}}</option>
			                        @foreach($categories as $category)
			                          <option name="category_id" value="{{ $category->id }}">{{ $category->name }}
			                          </option>
			                        @endforeach
			                </select>
			          </div>

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
			              <label name="feature-image">Update Feature Image: </label>
			              <input type="file" name="feature-image">
			            </div>

			        <div class="form-group">
			          <label name="body">Post Body:</label>
			          <textarea id="body" name="body" rows="10" class="form-control">{{ $post->body }}</textarea>
			        </div>


			        <div class="form-group">
              			<label class="control-label">Attach a file(Docs or PDF)</label>
              			<input id="attached_file" name="attached_file" class="file" type="file">
            		</div>

			    <div class="col-md-4">
			      <div class="well">
			        <dl class="horizontal">
			          <dt>Created at:</dt>
			          <dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
			        </dl>

			        <dl class="horizontal">
			          <dt>Last Updated:</dt>
			          <dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
			        </dl>
			        <hr>

			        <div class="row">
			          <div class="col-sm-6">
			            <a href="#" class="btn btn-danger btn-block">Cancel</a>
			          </div>

			          <div class="col-sm-6">
			            <input type="submit" value="Save Changes" class="btn btn-success  btn-lg">
			            <input type="hidden" name="_token" value="{{ Session::token() }}">
			    	</form>
          </div>
        </div>

      </div>
    </div>
    	</div>
  	</div>
 </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $('.select2-multi').select2();
    $('.select2-multi').val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
  </script>
@endsection