<div style="padding:30px">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add New Board Member</h3>
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
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Firstname:</label>
                  <input type="text" class="form-control" wire:model="firstName" placeholder="Firstname: ">
                  @error('firstName') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Lastname:</label>
                  <input type="text" class="form-control" wire:model="lastName" placeholder="Lastname: ">
                  @error('lastName') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Email:</label>
              <input type="text" class="form-control" wire:model="email" placeholder="Email Address: ">
              @error('email') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="name">Position:</label>
              <input type="text" class="form-control" wire:model="position" placeholder="Position: ">
              @error('position') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">

              <label for="image">Image:</label>
              @if($edit)
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
            @if(!$edit)
            <button type="submit" wire:click.prevent="saveMember" class="btn btn-primary">Save Project</button>
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
            Fill out this form to add new Member
          </h5>
          <br>
          <p>
            Make Sure you provide information: <br> <br> <b>Firstname</b> <br> <b>Lastname</b> <br> <b>Email</b> <br> <b>Position</b> <br> <b> Photo </b>
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
          <h4>Board Members</h4>
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
                <th>Email</th>
                <th>Position</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($members as $member)
              <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->names }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->position }}</td>
                <td>
                  <button type="submit" wire:click="loadMemberInfoToForm({{ $member }})" class="btn btn-outline-success">Edit</button>
                  <button type="submit" wire:click="deleteMember({{ $member }})" class="btn btn-outline-danger">Delete</button>
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