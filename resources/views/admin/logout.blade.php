<div class="user-area dropdown float-right">
    <a href="#" class="dropdown-toggle active gap-2" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
        <span>{{ Session::get('studname') }}
        </span>
    </a>
    <div class="user-menu dropdown-menu">
        <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i>Logout</a>
    </div>
</div>