@extends('vitrine.racine')

@section('title')
   Nos Livres
@endsection

@section('content')


@include('vitrine.partiels._header')


<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="books-full-width">
                @if (session()->has('bonkSent'))
                    <div class="alert alert-success" role="alert">
                        Le livre a été bien envoyé sur cette adresse email {{ session()->get('bonkSent') }}.
                    </div>
                @endif
                <div class="container" style="margin-bottom: 40px">
                    <!-- Start: Search Section -->
                    <section class="search-filters">
                            <div class="container">
                                <div class="filter-box">
                                    <h3>Cherchez votre livre facilement!</h3>
                                    <form action="{{route('vitrine.book.search')}}" method="get">
                                        <div class="col-md-9 col-sm-6">
                                            <div class="form-group">
                                                <label class="sr-only" for="keywords">Que cherchez vous?</label>
                                                <input class="form-control" placeholder="Que cherchez vous?" id="keywords" name="keywords" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="submit" value="Recherche">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    <!-- End: Search Section -->

                    <div class="filter-options margin-list" >
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <select name="orderby">
                                    <option selected="selected">Triez par Défaut</option>
                                    <option>Triez par Type</option>
                                    <option>Triez par Titre</option>
                                    <option>Triez par Livres</option>
                                    <option>Triez par Popularité</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="booksmedia-fullwidth">
                        <ul>
                            @forelse ($books as $index => $book)
                            <li>
                                <figure>
                                    <a href=""><img src="{{ $book->image }}" alt="Book"></a>
                                    <figcaption>
                                        <header>
                                            <h4>{{ $book->name }}</h4>
                                            <p><strong>Auteur:</strong> {{ $book->name }}</p>
                                            <p><strong>Code:</strong>  {{ $book->code }}"</p>
                                        </header>
                                        <p>{{ $book->abstract }}</p>
                                        <div class="actions">
                                            <ul>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                        <i class="fa fa-print"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Share">
                                                        <i class="fa fa-share-alt"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            @empty
                            <tr>
                                <td colspan="10" style="text-align: center">Aucun livre enregistrée!</td>
                            </tr>
                        @endforelse

                        </ul>
                    </div>
                    <nav class="navigation pagination text-center">
                        <h2 class="screen-reader-text">Page Navigation</h2>
                        <div class="nav-links">
                            {{$books ->appends($data) -> links()}}
                        </div>
                    </nav>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
