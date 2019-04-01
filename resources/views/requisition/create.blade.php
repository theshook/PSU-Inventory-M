@extends('layouts.main') 
@section('content')
<div class="col-md-8 mx-auto">
  <div class="card">
    <div class="card-header text-center">
      <h4>Requisition</h4>
    </div>
    <div class="card-body">
  @include('errors.requisition')
      <form method="POST" action="/requisition">
        @csrf
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="stock_no">Stock Number</label>
            <input type="number" min="1" class="form-control" name="stock_no" id="stock_no" placeholder="Stock Number" value="{{ old('stock_no') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="qty">Quantity</label>
            <input type="number" min="1" class="form-control" name="qty" id="qty" placeholder="Quantity" value="{{ old('qty') }}" required>
          </div>
          <div class="col-md-12 mb-3">
            <label for="unit">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" aria-describedby="inputGroupPrepend" value="{{ old('unit') }}"
              required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
          </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
        <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure you want to save this user?')">Create Requisition</button>
      </form>
    </div>
  </div>
</div>
@endsection