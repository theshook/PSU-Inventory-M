@extends('layouts.main') 
@section('navbar_content')
<li class="nav-item">
    <a class="btn btn-outline-dark" href="/users/create">Create New User</a>
</li>
@endsection

@section('content')
<div class="table-responsive-md">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td><a href="/users/{{ $user->id }}" class="btn btn-link">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Created At</th>
          <th>Updated At</th>
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