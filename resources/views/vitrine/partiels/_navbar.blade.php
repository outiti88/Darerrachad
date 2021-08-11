
<header id="header-v1" class="navbar-wrapper">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1>
                                    <a href="index.html">
                                        <img style="top: -15px;
                                        position: relative;" src="{{ url('/vitrine/images/darerrachad-logo2.png')}}" alt="DAR-ERRACHAD" />
                                    </a>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        <a href="tel:+212522274817"><i class="fa fa-phone"></i>+212 522 27 48 17</a>
                                        <span>/</span>
                                        <a href="mailto:contact@darerrachad.com"><i class="fa fa-envelope"></i>contact@darerrachad.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-collapse hidden-sm hidden-xs">
                            <ul class="nav navbar-nav">

                                <li @if ($page=='home')
                                class="active"
                                @endif >
                                    <a href="{{ route('vitrine.index') }}">Accueil</a>
                                </li>
                                <li  @if ($page=='book')
                                class="active dropdown"
                                @else
                                class="dropdown"
                                @endif>
                                    <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{ route('vitrine.book.index') }}">Nos Livres</a>
                                    <ul class="dropdown-menu">
                                        <li><a  href="{{ route('vitrine.book.filter', ['category' => 'Religieux']) }}" >Religieux</a></li>
                                        <li><a  href="{{ route('vitrine.book.filter', ['category' => 'Enfant']) }}" >Enfants</a></li>
                                        <li><a  href="{{ route('vitrine.book.filter', ['category' => 'Scolaire']) }}" >Scolaires</a></li>
                                    </ul>
                                </li>
                                <li @if ($page=='freeBooks')
                                class="active"
                                @endif>
                                    <a  href="{{ route('vitrine.book.free') }}">Livres Gratuits</a>
                                </li>
                                <li @if ($page=='speciality')
                                class="active"
                                @endif ><a href="{{ route('vitrine.speciality.index') }}">Spécialités</a></li>
                                <li @if ($page=='news')
                                class="active"
                                @endif>
                                    <a  href="{{ route('vitrine.news.index') }}">Actualités</a>
                                </li>


                                <li @if ($page=='contact')
                                class="active"
                                @endif ><a href="{{ route('vitrine.contact.index') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu hidden-lg hidden-md">
                    <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                    <div id="mobile-menu">
                        <ul>
                            <li class="mobile-title">
                                <h4>Bienvenue Chez DAR ERRACHAD</h4>
                                <a  href="{{ route('vitrine.index') }}" class="close"></a>
                            </li>
                            <li>
                                <a  href="{{ route('vitrine.index') }}">Accueil</a>
                            </li>
                            <li>
                                <a  href="{{ route('vitrine.book.index') }}">Livres</a>
                                <ul>
                                        <li><a style="padding-left: 30px; font-size:0.9em;"  href="{{ route('vitrine.book.index') }}">Religieux</a></li>
                                        <li><a style="padding-left: 30px; font-size:0.9em;"  href="{{ route('vitrine.book.index') }}">Enfants</a></li>
                                        <li><a style="padding-left: 30px; font-size:0.9em;"  href="{{ route('vitrine.book.index') }}">Scolaires</a></li>
                                </ul>
                            </li>
                            <li><a  href="{{ route('vitrine.book.index') }}">Livres Gratuits</a></li>
                            <li><a href="{{ route('vitrine.speciality.index') }}">Spécialités</a></li>
                            <li><a  href="{{ route('vitrine.news.index') }}">Actualités</a></li>
                            <li><a  href="{{ route('vitrine.contact.index') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
