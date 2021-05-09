<ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{Auth::user()->image}}" alt="image"/>
        </div>
        <div class="profile-name">
          <p class="name">
            {{Auth::user()->name}}
          </p>
          <p class="designation">
            {{Auth::user()->roles()->get()->pluck('name')[0]}}
          </p>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fa fa-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('book.index')}}">
        <i class="fa fa-book menu-icon"></i>
        <span class="menu-title">Livres</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('lead.index')}}">
          <i class="far fa-address-book menu-icon"></i>
          <span class="menu-title">Prospects</span>
        </a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.users.index')}}">
        <i class="far fa-user  menu-icon"></i>
        <span class="menu-title">Utilisateurs</span>
      </a>
    </li>
  </ul>
