<div style="padding:30px">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Partner</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="saveMember" enctype="multipart/form-data">
          <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
            @endif
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" wire:model="name" placeholder="Partner Name: ">
              @error('name') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="name">Link:</label>
              <input type="text" class="form-control" wire:model="link" placeholder="Partner Link: ">
              @error('link') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">

              <label for="image">Logo:</label>
              @if($edit)
              <img src="{{ asset('images/uploads/'.$logo) }}" alt="" width="400">>

              @elseif($logo)
              <img src="{{ $logo->temporaryUrl() ?? '' }}" alt="" width="600" style="padding: 10px">
              @endif
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" wire:model="logo" class="custom-file-inpt" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose Logo Photo</label>
                </div>
              </div>
              <div wire:loading wire:target="logo" style="color:darkgreen">Uploading...</div>
              @error('logo') <span class="error" style="color:crimson">{{ $message }}</span> @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            @if(!$edit)
            <button type="submit" wire:click.prevent="savePartner" class="btn btn-primary">Save Partner</button>
            @else
            <button type="submit" class="btn btn-success">Edit Partner</button>
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
            Fill out this form to add new Partner
          </h5>
          <br>
          <p>
            Make Sure you provide information: <br> <br> <b>Name</b> <br> <b>Link/Website</b> <br> <b>Logo</b> <br>
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
          <h4>All Partners</h4>
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
                <th>Link</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($partners as $partner)
              <tr>
                <td>{{ $partner->id }}</td>
                <td>{{ $partner->name }}</td>
                <td>{{ $partner->link }}</td>
                <td>
                  <button type="submit" wire:click="loadPartnerInfoToForm({{ $partner }})" class="btn btn-outline-success">Edit</button>
                  <button type="submit" wire:click="deletePartner({{ $partner }})" class="btn btn-outline-danger">Delete</button>
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