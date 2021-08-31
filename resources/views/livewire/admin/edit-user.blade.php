<div style="padding:30px">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Update Your Profile</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="updateUser" enctype="multipart/form-data">
          <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
              {{ session('message') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-warning">
              {{ session('error') }}
            </div>
            @endif
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" wire:model="name" placeholder="Names: ">
              @error('name') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="name">Email:</label>
              <input type="email" class="form-control" wire:model="email" placeholder="Email Address: ">
              @error('email') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="form-group">
              <label for="name">Current Password:</label>
              <input type="password" class="form-control" wire:model="current_password">
              @error('current_password') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">New Password:</label>
                  <input type="password" class="form-control" wire:model="password">
                  @error('password') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Confirm New Password:</label>
                  <input type="password" class="form-control" wire:model="password_confirmation">
                  @error('password_confirmation') <span class="error" style="color: crimson;"> {{ $message }} </span> @enderror
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button wire:submit.prevent="updateUser" class="btn btn-success">Update Profile</button>
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
          Fill out this form to update your profile information.
          </h5>
          <br>
          <p>
            Make Sure you provide information: <br> <br> <b>Names</b> <br> <b>Email</b> <br> <b>Password</b>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (right) -->
  </div>
</div>