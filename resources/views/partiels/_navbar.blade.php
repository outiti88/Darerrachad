<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="/"><img style="height: 100%; width: 70%;" src="images/logo1.png"
            alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="/"><img src="images/logo.png" alt="logo" /></a>
</div>
<div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="fas fa-bars"></span>
    </button>



    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">
                <span class="btn btn-primary">+ Ajouter un Livre</span>
            </a>
        </li>

        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="{{ Auth::user()->image }}" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="{{ route('profil.index') }}">
                    <i class="fas fa-cog text-primary"></i>
                    Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                    <i class="fas fa-power-off text-primary"></i> Deconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="fas fa-bars"></span>
    </button>
</div>
