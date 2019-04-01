<!-- Sidebar  -->
<nav id="sidebar">
  <div class="sidebar-header">
    <h3>PSU</h3>
    <strong>IS</strong>
  </div>

  <ul class="list-unstyled components">
    <li>
      <a href="#userSubmenu" id="userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-user"></i><i class="hide-text">{{ ucfirst(trans(Auth::user()->name)) }}</i>
      </a>
      <ul class="collapse list-unstyled" id="userSubmenu">
        <li>
          <a href="{{ route('logout') }}" onclick="logout()">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </li>
  </ul>

  <ul class="list-unstyled components">
    <li {{ $title == 'Home' ? 'class=active' : '' }}>
      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-home"></i>Home
      </a>
      <ul class="collapse list-unstyled" id="homeSubmenu">
        <li><a href="#">Home 1</a></li>
        <li><a href="#">Home 2</a></li>
        <li><a href="#">Home 3</a></li>
      </ul>
    </li>
    <li {{ $title == 'Users' ? 'class=active' : '' }}>
      <a href="/users/" ><i class="fas fa-users-cog"></i>Users</a>
    </li>
    <li>
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-copy"></i>Pages
      </a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </li>
    <li>
      <a href="#"><i class="fas fa-image"></i>Portfolio</a>
    </li>
    <li>
      <a href="#"><i class="fas fa-question"></i>FAQ</a>
    </li>
    <li>
      <a href="#"><i class="fas fa-paper-plane"></i>Contact</a>
    </li>
  </ul>
</nav>

<script>
  function logout() {
    event.preventDefault();
    if (confirm('Are You Sure?')){
      document.getElementById('logout-form').submit();
    }
  }
</script>