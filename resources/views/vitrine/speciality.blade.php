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


                    <div class="row" style="margin-top:60px">
                        <div class="col-md-9 col-md-push-3">
                            <div class="news-list-detail">
                                <div class="news-list-box">
                                    <div class="single-news-list">
                                        <section class="newsletter section-padding" style="display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        padding: 20px;">
                                                        <div class="center-content">
                                                            <h2 class="section-title">DISTIBUTION</h2>
                                                            <span class="underline center"></span>
                                                            <p class="lead">DAR ERRACHAD est avec vous, là où vous êtes!</p>

                                                        </div>
                                                        <div class="center-content" style="width: 80%">
                                                            <img src="images/MAP.png" alt="Nous sommes partout le MENA" />
                                                        </div>
                                                        {{-- <div class="center-content" style="width: 90%">
                                                            <img src="images/MAP_REDUITE.png" alt="Nous sommes partout le MENA" />
                                                        </div> --}}
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-pull-9">
                            <aside id="secondary" class="sidebar widget-area center-content" style="padding: 20px;">
                                <div class="center-content">
                                    <h2 class="section-title">EDITION</h2>
                                    <span class="underline center"></span>

                                </div>
                                <div class="widget widget_search">
                                    <h4 class="widget-title" style="margin:0" data-control>Plus de 1000 livres multidisciplinaires</h4>
                                    <span class="underline center"></span>
                                    <div class="widget_categories">
                                        <ul>
                                            <li>Cultures générales</li>
                                            <li>Jeunesse</li>
                                            <li>Islamique</li>
                                            <li>Langue arabe</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget_related_search">
                                    <h4 class="widget-title" style="margin:0" data-control>Conception</h4>
                                    <span class="underline center"></span>
                                    <h4 class="widget-title" style="margin:0" data-control>Mise en pages et coordination</h4>
                                    <span class="underline center"></span>
                                </div>
                                <div class="widget widget_tag_cloud">
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@include('vitrine.partiels._socialMedia')

@endsection
