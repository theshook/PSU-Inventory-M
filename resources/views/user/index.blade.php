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
          <th>ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Created At</th>
          <th>Updated At</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td><a href="/users/{{ $user->user_no }}" class="btn-link">{{ $user->user_id }}</a></td>
            <td>{{ $user->user_lname }}</td>
            <td>{{ $user->user_fname }}</td>
            <td>{{ $user->user_mname }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
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