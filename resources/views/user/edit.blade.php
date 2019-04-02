@extends('layouts.main') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Update User</div>

        <div class="card-body">
        <form method="POST" action="/users/{{ $user->user_no }}">
            @method('PATCH')
            @csrf

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

              <div class="col-md-6">
                <p class="form-control mb-0 pb-0">{{ $user->user_id }}</p>
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('user_fname') ? ' is-invalid' : '' }}" name="user_fname" value="{{ $user->user_fname }}"
                  required autofocus> 
                  @if ($errors->has('user_fname'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('user_fname') }}</strong>
                    </span> 
                  @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('user_lname') ? ' is-invalid' : '' }}" name="user_lname" value="{{ $user->user_lname }}"
                  required autofocus> 
                  @if ($errors->has('user_lname'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('user_lname') }}</strong>
                    </span> 
                  @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('user_mname') ? ' is-invalid' : '' }}" name="user_mname" value="{{ $user->user_mname }}"
                  required autofocus> 
                  @if ($errors->has('user_mname'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('user_mname') }}</strong>
                    </span> 
                  @endif
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this user?')">
                    Update user info
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