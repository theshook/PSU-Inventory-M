<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/dataTables.min.css') }}" rel="stylesheet">

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.min.js') }}"></script>

  {{-- Scrollbar Custom CSS --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <title>@yield('title', 'PSU Inventory System')</title>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar  -->
  @include('layouts.sidebar')

    <!-- Page Content  -->
    <div id="content">
  @include('layouts.navbar') @yield('content')
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script>
    $(document).ready(function () {

      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
      });

    });
  </script>
</body>

</html>