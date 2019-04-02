@extends('layouts.main') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Update User</div>

        <div class="card-body">
        <form method="POST" action="/users/{{ $user->user_no }}">
            @method('DELETE')
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">User ID</label>
              <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="user_id" value="{{ $user->user_id }}" disabled>
              </div>
            </div>

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="user_fname" value="{{ $user->user_fname }}" disabled>
                  </div>
              </div>
                      
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="user_lname" value="{{ $user->user_lname }}" disabled>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control" name="user_mname" value="{{ $user->user_mname }}" disabled>
                  </div>
              </div>

            <div class="form-row mb-0 mx-auto">
              <div class="col-md-4 mb-2">
                <a href="/users/" class="btn btn-link">Back</a>
              </div>
              <div class="col-md-4 mb-2">
                <a href="/users/{{ $user->user_no }}/edit" class="btn btn-secondary">Edit User Info</a>
              </div>
              <div class="col-md-4 mb-2">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                    Delete User Info
                </button>
              </div>
                
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection