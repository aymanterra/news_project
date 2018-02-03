
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/">News Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      @if (auth()->user()->hasPermission('access.adminpanel'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="dropdown01" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin Panel</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            @if (auth()->user()->hasPermission('view.users'))
              <a class="dropdown-item" href="/admin/users">Users</a>
            @endif

            @if (auth()->user()->hasPermission('view.roles'))
              <a class="dropdown-item" href="/admin/roles">Roles</a>
            @endif

            @if (auth()->user()->hasPermission('view.news'))
              <a class="dropdown-item" href="/admin/news">Manage News</a>
            @endif
          </div>
        </li>
      @endif
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
