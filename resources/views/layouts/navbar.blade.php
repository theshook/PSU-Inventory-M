<!-- Page Content  -->
@include('flash-message')

<div id="content">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span>Toggle Sidebar</span>
      </button>
      <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i>
      </button>

      <div class="d-inline-block">
          <ul class="nav navbar-nav" style=" position: absolute;
          left: 50%;
          transform: translatex(-50%);">
            <li class="nav-item active">
              <strong>{{ $title }}</strong>
            </li>
          </ul>    
      </div>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
          @yield('navbar_content')
        </ul>
      </div>
    </div>
  </nav>