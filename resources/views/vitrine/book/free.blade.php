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
                            @forelse ($books as $index => $book)
                            <article>
                                <div class="grid-item blog-item">
                                    <div class="post-thumbnail">
                                        <div class="post-date-box">
                                            <div class="post-date">
                                                <a class="date"  data-toggle="modal" data-target="#exampleModal{{$index}}">PDF</a>
                                            </div>
                                        </div>
                                        <a  data-toggle="modal" data-target="#exampleModal{{$index}}" ><img class="freeBook" alt="blog" src="{{url($book->image)}}" /></a>
                                    </div>
                                    <div class="post-detail">
                                        <header class="entry-header">
                                            <div class="blog_meta_category">
                                                <span class="arrow-right"></span>
                                                <a  href="{{ route('vitrine.book.filter', ['category' => $book->category]) }}" rel="category tag">{{$book->category}}</a>
                                            </div>
                                            <h3 class="entry-title"><a href="">{{$book->name}}</a></h3>
                                            <div class="entry-meta">
                                                <span><i class="fa fa-user"></i> <a href="{{ route('vitrine.book.index') }}">Dar Errachad</a></span>
                                            </div>
                                        </header>
                                    </div>
                                </div>
                            </article>

                            <div class="modal fade" id="exampleModal{{$index}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Remlissez le formulaire suivant pour recevoir le livre sur votre E-mail</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form method="POST" action="{{route('vitrine.contact.store')}}">
                                        @csrf
                                        <input type="hidden" name="freeBookToSend" class="form-control" value="{{$book->id}}" id="freeBookToSend">
                                        <div class="modal-body">
                                        <div class="form-group">
                                          <label for="firstName" class="col-form-label">Nom:</label>
                                          <input type="text" name="firstName" class="form-control" id="firstName">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName" class="col-form-label">Prénom:</label>
                                            <input type="text" name="lastName" class="form-control" id="lastName">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="email" name="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-form-label">Téléphone:</label>
                                            <input type="text" name="phone" class="form-control" id="phone">
                                        </div>
                                        <div class="form-group">
                                          <label for="adresse" class="col-form-label">Adresse:</label>
                                          <textarea name="adresse" class="form-control" id="adresse"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Recevoir le livre</button>
                                    </div>
                                </form>

                                  </div>
                                </div>
                              </div>
                            @empty
                            <tr>
                                <td colspan="10" style="text-align: center">Aucun livre enregistrée!</td>
                            </tr>
                        @endforelse
                        
                            </div>
                            <div style="padding-bottom : 50px">
                                <div class="nav-links">
                                    {{$books -> links()}}
                                </div>
                            </div> 
<!--                                <a href="#" id="loadmore">Button Plus de livres PDF</a>-->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
