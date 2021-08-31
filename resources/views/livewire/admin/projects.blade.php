<div style="padding:30px">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Project</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="saveProject" enctype="multipart/form-data">
          <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
            @endif
            <div class="form-group">
              <label for="Email">Title:</label>
              <input type="text" class="form-control" wire:model="title" placeholder="Project Title: ">
              @error('title') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="Description">Description:</label>
              <textarea class="form-control" wire:model="description" cols="30" rows="7" placeholder="Project Description: "></textarea>
              @error('description') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group" wire:ignore>
              <label for="Content">Content:</label>
              <textarea class="form-control" wire:model="content" id="content" name="content" cols="30" rows="10" placeholder="Project Content: ">{{ $content }}</textarea>
              @error('content') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">

              <label for="image">Image:</label>
              @if($viewMode)
              <img src="{{ asset('images/uploads/'.$photo) }}" alt="" width="400">>

              @elseif($photo)
              <img src="{{ $photo->temporaryUrl() ?? '' }}" alt="" width="600" style="padding: 10px">
              @endif
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" wire:model="photo" class="custom-file-inpt" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose Cover Photo</label>
                </div>
              </div>
              <div wire:loading wire:target="photo" style="color:darkgreen">Uploading...</div>
              @error('photo') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            @if(!$viewMode)
            <button type="submit" wire:click.prevent="saveProject" class="btn btn-primary">Save Project</button>
            @else
            <button type="submit" class="btn btn-success">Edit Project</button>
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
            Fill out this form to add new project
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
          <h4>All Projects</h4>
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
              @forelse($projects as $project)
              <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ str_limit($project->description, 110) }}</td>
                <td>
                  <button type="submit" wire:click="loadProjectInfoToForm({{ $project }})" class="btn btn-outline-success">Edit</button>
                  <button type="submit" wire:click="deleteProject({{ $project }})" class="btn btn-outline-danger">Delete</button>
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