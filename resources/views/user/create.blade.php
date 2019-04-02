@extends('layouts.main') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Register') }}</div>
              <div class="card-body">
                  <form method="POST" action="/users">
                      @csrf

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">User ID</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ old('user_id') }}" required autofocus>

                              @if ($errors->has('user_id'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('user_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('user_fname') ? ' is-invalid' : '' }}" name="user_fname" value="{{ old('user_fname') }}" required autofocus>

                              @if ($errors->has('user_fname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('user_fname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('user_lname') ? ' is-invalid' : '' }}" name="user_lname" value="{{ old('user_lname') }}" required autofocus>

                              @if ($errors->has('user_lname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('user_lname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('user_mname') ? ' is-invalid' : '' }}" name="user_mname" value="{{ old('user_mname') }}" required autofocus>

                              @if ($errors->has('user_mname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('user_mname') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-row mb-0">
                          <div class="col-md-2 mb-2">
                              <a href="/users" class="btn btn-link">{{ __('Back') }}</a>
                          </div>
                          <div class="col-md-6 mb-2">
                                <button type="submit" class="btn btn-primary mb-2">
                                    {{ __('Create User') }}
                                </button>
                            </div>
                      </div>
                  </form>
                  @include('errors.requisition')
              </div>
          </div>
      </div>
  </div>
</div>
@endsection