@extends('layouts.main') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Update User</div>

        <div class="card-body">
        <form method="POST" action="/users/{{ $user->id }}">
            @method('DELETE')
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 text-md-right">Name:</label>
              <div class="col-md-6">
                  {{ $user->name }}
              </div>
            </div>

            <div class="form-group row">
              <label for="email" class="col-md-4 text-md-right">{{ __('E-Mail Address') }}:</label>

              <div class="col-md-6">
                  {{ $user->email }}
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 text-md-right">Created At:</label>

              <div class="col-md-6">
                  {{ $user->created_at }}
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 text-md-right">Updated At:</label>

              <div class="col-md-6">
                  {{ $user->updated_at }}
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-10 offset-md-2">
                <a href="/users/" class="btn btn-link">Back</a>
                <a href="/users/{{ $user->id }}/edit" class="btn btn-secondary">Edit User Info</a>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                    Delete User Info
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection