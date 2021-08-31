<div style="padding:30px">
  <div class="row">
    @if($editMode)
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Board Member</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="editSetting" enctype="multipart/form-data">
          <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
            @endif
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" wire:model="name">
            </div>
            <div class="form-group">
              <label for="name">Information:</label>
              <textarea wire:model="value" class="form-control" cols="30" rows="7"></textarea>
              @error('value') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-success">Edit Setting</button>
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
            Update Setting Value
          </h5>
          <br>
          <p>
            Make Sure the following information is correct: <br> <br> <b>{{ $name }} Information</b>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (right) -->
    @endif
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-12" style="padding-top:30px">
      <div class="card">
        <div class="card-header">
          <h4>SITE SETTINGS</h4>
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
                <th>Name</th>
                <th>Value</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($settings as $setting)
              <tr>
                <td>{{ $setting->id }}</td>
                <td>{{ $setting->name }}</td>
                <td>{{ str_limit($setting->value, 70) }}</td>
                <td>
                  <button type="submit" wire:click="loadSettingInfoToForm({{ $setting }})" class="btn btn-outline-success">Edit</button>
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