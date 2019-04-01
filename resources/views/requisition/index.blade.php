@extends('layouts.main')

@section('content')
<div class="float-right">
    <a href="/requisition/create" class="btn btn-link">Create New Requisition</a>
</div>

<div class="table-responsive-md">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>StockNo</th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($requisitions as $requisition)
        <tr>
          <td>{{ $requisition->stock_no }}</td>
          <td>{{ $requisition->qty }}</td>
          <td>{{ $requisition->unit }}</td>
          <td>{{ $requisition->description }}</td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <th>Stock No</th>
        <th>Quantity</th>
        <th>Unit</th>
        <th>Description</th>
      </tr>
    </tfoot>
  </table>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
@endsection