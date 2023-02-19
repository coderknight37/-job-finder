@auth("web")
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="http://127.0.0.1:8000/Administrator/img/undraw_profile.svg" width="40" height="40" class="rounded-circle" style="
                margin-bottom: -16px;
                position: relative;
                top: -11px;
            "> {{ auth("web")->user()->name }}</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="#">
            <form action="{{ route('user.logout') }}" method="post">
                @csrf
                @method("post")
                <input style="border: none; background-color: transparent" type="submit"  value="logout">
         </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
@endauth
@auth("company")
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="http://127.0.0.1:8000/Administrator/img/undraw_profile.svg" width="40" height="40" class="rounded-circle" style="
                margin-bottom: -16px;
                position: relative;
                top: -11px;
            "> {{ auth("company")->user()->name }}</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="#">
            <a class="dropdown-item" href="#">
                <form action="{{ route("company.logout") }}" method="post">
                    @csrf
                    @method("POST")
                    <input style="border: none; background-color: transparent" type="submit" value="logout">
             </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
@endauth

@auth("admin")
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="http://127.0.0.1:8000/Administrator/img/undraw_profile.svg" width="40" height="40" class="rounded-circle" style="
            margin-bottom: -16px;
            position: relative;
            top: -11px;
        "> {{ auth("admin")->user()->name }}</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="#">
            <a class="dropdown-item" href="#">
                <form action="{{ route('admin.logout') }}" method="post">
                    @csrf
                    @method("post")
                    <input style="border: none; background-color: transparent" type="submit"  value="logout">
             </form>
          </a>
        </div>
      </li>
    </ul>
  </div>
@endauth

