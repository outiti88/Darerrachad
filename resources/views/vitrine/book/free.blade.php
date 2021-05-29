@extends('vitrine.racine')

@section('title')
   Nos Livres
@endsection

@section('content')


@include('vitrine.partiels._header')


<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="blog-main-list">
                <div class="container">
                    <div class="row">
                        <div class="blog-page grid">
                            <article>
                                <div class="grid-item blog-item">
                                    <div class="post-thumbnail">
                                        <div class="post-date-box">
                                            <div class="post-date">
                                                <a class="date" href="#.">PDF</a>
                                            </div>
                                        </div>
                                        <a href="blog-detail.html"><img alt="blog" src="{{url('/vitrine/images/pdf_img/pdf_01.jpg.jpg')}}" /></a>
                                    </div>
                                    <div class="post-detail">
                                        <header class="entry-header">
                                            <div class="blog_meta_category">
                                                <span class="arrow-right"></span>
                                                <a href="#." rel="category tag">Religieux</a>
                                            </div>
                                            <h3 class="entry-title"><a href="blog-detail.html">PDF 01</a></h3>
                                            <div class="entry-meta">
                                                <span><i class="fa fa-user"></i> <a href="#">Dar Errachad</a></span>
                                            </div>
                                        </header>

<!--
                                        <footer class="entry-footer">
                                            <a class="btn btn-default" href="blog-detail.html">Téléchargez</a>
                                        </footer>
-->
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="grid-item blog-item">
                                    <div class="post-thumbnail">
                                        <div class="post-date-box">
                                            <div class="post-date">
                                                <a class="date" href="#.">PDF</a>
                                            </div>
                                        </div>
                                        <a href="blog-detail.html"><img alt="blog" src="{{url('/vitrine/images/pdf_img/pdf_02.jpg')}}" /></a>
                                    </div>
                                    <div class="post-detail">
                                        <header class="entry-header">
                                            <div class="blog_meta_category">
                                                <span class="arrow-right"></span>
                                                <a href="#." rel="category tag">Scolaires</a>
                                            </div>
                                            <h3 class="entry-title"><a href="blog-detail.html">PDF 02</a></h3>
                                            <div class="entry-meta">
                                                <span><i class="fa fa-user"></i> <a href="#">Dar Errachad</a></span>
                                            </div>
                                        </header>

<!--
                                        <footer class="entry-footer">
                                            <a class="btn btn-default" href="blog-detail.html">Téléchargez</a>
                                        </footer>
-->
                                    </div>
                                </div>
                            </article>
                            <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">PDF</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog" src="{{url('/vitrine/images/pdf_img/pdf_03.jpg')}}" /></a>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Enfants</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">PDF 03</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Dar Errachad</a></span>
                                                </div>
                                            </header>

<!--
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Téléchargez</a>
                                            </footer>
-->
                                        </div>
                                    </div>
                                </article>
                            </div>
<!--                                <a href="#" id="loadmore">Button Plus de livres PDF</a>-->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
