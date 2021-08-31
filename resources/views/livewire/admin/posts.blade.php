<div style="padding:30px">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Post</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="savePost" enctype="multipart/form-data">
          <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
            @endif
            <div class="form-group">
              <label for="Email">Title:</label>
              <input type="text" class="form-control" wire:model="title" placeholder="Post Title: ">
              @error('title') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="Description">Description:</label>
              <textarea class="form-control" wire:model="description" cols="30" rows="7" placeholder="Post Description: "></textarea>
              @error('description') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group" wire:ignore>
              <label for="Content">Content:</label>
              <textarea class="form-control" wire:model="content" id="content" name="content" cols="30" rows="10" placeholder="Post Content: ">{{ $content }}</textarea>
              @error('content') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">

              <label for="image">Image:</label>
              @if($viewMode)
              <img src="{{ asset('images/uploads/'.$image) }}" alt="" width="400">>

              @elseif($image)
              <img src="{{ $image->temporaryUrl() ?? '' }}" alt="" width="600" style="padding: 10px">
              @endif
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" wire:model="image" class="custom-file-inpt" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose Cover Image</label>
                </div>
              </div>
              <div wire:loading wire:target="image" style="color:darkgreen">Uploading...</div>
              @error('image') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            @if(!$viewMode)
            <button type="submit" wire:click.prevent="savePost" class="btn btn-primary">Save Post</button>
            @else
            <button type="submit" class="btn btn-success">Edit Post</button>
            @endif
          </div>
        </form>
      </div>

    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-4">
      <!-- Form Element sizes -->
      <div class="card card-success">
        <div class="card-body">
          <h5>
            Fill out this form to add new post
          </h5>
          <br>
          <p>
            Make Sure you provide information: <br> <br> <b>title</b> <br> <b>description</b> <br> <b>content</b> <br> <b> Image </b>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-12" style="padding-top:30px">
      <div class="card">
        <div class="card-header">
          <h4>All Posts</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          @if(session()->has('delete'))
          <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
          </div>
          @endif
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($posts as $post)
              <tr>
                <td>{{ $post->id }}</td>
                <td>{{ str_limit($post->title, 50) }}</td>
                <td>{{ str_limit($post->description, 60) }}</td>
                <td>
                  <button type="submit" wire:click="loadPostInfoToForm({{ $post }})" class="btn btn-outline-success">Edit</button>
                  <button type="submit" wire:click="deletePost({{ $post }})" class="btn btn-outline-danger">Delete</button>
                </td>
              </tr>
              @empty
              @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
</div>
@section('scripts')
<script>
  $('#content').summernote({
    height: 250,
    codemirror: {
      theme: 'monokai'
    },
    callbacks: {
      onChange: function(contents, $editable) {
        @this.set('content', contents);
      }
    }
  });
</script>
@endsection