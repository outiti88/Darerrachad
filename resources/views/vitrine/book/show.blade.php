@extends('vitrine.racine')

@section('title')
   Livre Details
@endsection

@section('content')


@include('vitrine.partiels._header')

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail">
                                            <div class=""></div>
                                            <img src="{{$book->image}}" alt="Book Image">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content">
                                            <h2>{{$book->name}}</h2>
                                            <p><strong>Edition:</strong> {{$book->edition}}</p>
                                            <p><strong>Thème:</strong> {{$book->theme}}</p>
                                            <p><strong>Format Graduate:</strong> {{$book->format}}</p>
                                            <p><strong>Type:</strong> {{$book->type}}</p>
                                            <p><strong>Catégorie:</strong>{{$book->category}}</p>
                                            <p><strong>Papier:</strong> {{$book->paper}}</p>

                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Like">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Mail">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Print">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 ">
                                        <div class="post-right-content">
                                            <h4>Disponible Maintenant</h4>
                                            <p><strong>Date d'ajout:</strong> {{$book->created_at}}</p>
                                            <p><strong>Appelez #:</strong> +212 522 27 48 17</p>
                                            <a href="tel:+212522274817" class="btn btn-dark-gray">Appelez nous</a>
                                            <a href="mailto: contact@darerrachad.com" class="btn btn-dark-gray">Email</a>
                                            <a href="{{ route('vitrine.index') }}" class="btn btn-dark-gray">Accueil</a>
                                            <a href="{{ route('vitrine.book.index') }}" class="btn btn-dark-gray">Revenir à la liste</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <p><strong>Resumé:</strong> {{$book->abstract}} </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
        <div class="booksmedia-fullwidth">
            <div class="container">
                <h2 class="section-title text-center">Livres Populaires</h2>
                    <span class="underline center"></span>
                    <p class="lead text-center">Choisis par nos chers clients</p>
                        <ul class="popular-items-detail-v2">

                            @forelse ($favorisBooks as $index => $book)
                            <li>
                                <a href="{{ route('vitrine.book.show', ['book' => $book->id]) }}">
                                    <figure>
                                        <img src="{{$book->image}}" alt="Book">
                                        <figcaption>
                                            <header>
                                                <h4><a href="#.">The Habit</a></h4>
                                                <p><strong>Auteur:</strong>  M. Mohammed Dieuri</p>
                                                <p><strong>Code:</strong>  9781581573268</p>
                                            </header>
                                            <p>Resumé, description ou un text présentatif.</p>
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Instagram">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            @empty

                            @endforelse

                        </ul>
            </div>
        </div>

        <!-- Start: Social Network -->
        @include('vitrine.partiels._socialMedia')
        <!-- End: Social Network -->

@endsection
