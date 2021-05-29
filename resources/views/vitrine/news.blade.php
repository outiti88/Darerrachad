@extends('vitrine.racine')

@section('title')
   Actualités
@endsection

@section('content')

@include('vitrine.partiels._header')

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="main-news-list">
                <div class="container">

                    <!-- Start: Search Section -->
                    <section class="search-filters">

                    </section>
                    <!-- End: Search Section -->

                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="news-list-detail">
                                <div class="news-list-box">
                                    <div class="single-news-list">
                                        <div class="social-content">
                                            <div class="social-media">
                                                <ul>
                                                    <li><a href="#." target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#." target="_blank"><i class="fa fa-rss"></i></a></li>
                                                    <li><a href="#." target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figure>
                                            <img src="{{url('vitrine/images/news-event/img_news_00.jpg')}}" alt="News &amp; Event">
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="content_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Evénement</a>
                                                </div>
                                                <ul class="news-event-info">
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-calendar"></i>
                                                            12 Février 2020
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-map-marker"></i>
                                                            Maroc
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h2>La 26ème édition du Salon International de l’Edition</h2>
                                                <p>Proin tincidunt molestie urna, non fringilla est pretium et. Proin dignissim porttitor quam, eget gravida ante accumsan et. Cras quis commodo massa. Nullam id mauris vel arcu ultricies hendrerit. Praesent hendrerit posuere risus, quis iaculis erat auctor non. Fusce bibendum in lorem ac pharetra. Mauris bibendum placerat massa non pellentesque. Maecenas interdum, nisl quis molestie gravida, sapien dui dictum urna, at pretium odio massa ut nibh. Nam sit amet eros ultricies leo ultrices sodales nec vel dui. Mauris imperdiet turpis sit amet lobortis efficitur. Mauris commodo nunc non risus auctor finibus. Ut egestas urna quis elit egestas, ac bibendum orci maximus. Maecenas risus magna, mollis et purus sit amet, pellentesque tempor lacus. Quisque dictum tortor ac est auctor, ut dapibus risus rutrum. Quisque porttitor turpis in sagittis porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean egestas consequat porttitor. </p>
                                                <p>Praesent lorem felis, fringilla in feugiat a, pretium in erat. Mauris ultricies rhoncus justo, quis sollicitudin risus rutrum sed. Cras sit amet odio eget felis dignissim elementum sit amet a justo. Suspendisse sodales sem et fermentum luctus. Phasellus quis sapien tellus. Aenean sit amet est purus. Vestibulum justo risus, pharetra in sem eu, bibendum iaculis nisl. Aliquam pulvinar tellus vel ornare ultrices. Nam cursus varius egestas. Cras sed varius nulla, non volutpat diam. Sed ultricies dolor purus, vitae consectetur dolor imperdiet non. </p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-pull-9">
                            <aside id="secondary" class="sidebar widget-area">
                                <div class="widget widget_search">
                                    <h4 class="widget-title" data-control>Trouvez un livre</h4>
                                    <form method="get" action="#." class="form-horizontal search-form">
                                        <input class="form-control" id="inputEmail" placeholder="Rechercher" value="" name="s" type="text">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget widget_related_search">
                                    <h4 class="widget-title" data-control>Liens Rapides</h4>
                                    <div class="widget_categories">
                                        <ul>
                                            <li><a href="index.html">Accueil</a></li>
                                            <li><a href="books.html">Livres</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="contact.html">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_tag_cloud">
                                    <h4 class="widget-title" data-control>Catégories Livres</h4>
                                    <ul>
                                        <li><a href="#">Réligieux</a></li>
                                        <li><a href="#">Enfants</a></li>
                                        <li><a href="#">Scolaire</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection
