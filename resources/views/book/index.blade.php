
@extends('racine')

@section('title')
   Gestion des Utilisateurs
@endsection

@section('style')
    <style>
        .page-link {
            color: #e85f03 !important;
        }
        .page-item.active .page-link {

            background-color: #e85f03 !important;
            border-color: #e85f03 !important;
            color: #fff !important;
        }
    </style>
@endsection


@section('content')

    <div class="page-header">
      <h3 class="page-title">
        Gestion des livres
      </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Darrerachad</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gestion des livres</li>
        </ol>
      </nav>
    </div>
    @if (session()->has('bookAdded'))
        <div class="alert alert-success" role="alert">
            Le livre {{session()->get('bookAdded')}} a été Ajouté avec succèss.
        </div>
    @endif
    @if (session()->has('bookDeleted'))
        <div class="alert alert-danger" role="alert">
            Le livre {{session()->get('bookDeleted')}} a été Suprimé.
        </div>
    @endif
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Livres</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                      <th>Image #</th>
                      <th>Nom de livre</th>
                      <th>Categorie</th>
                      <th>Edition</th>
                      <th>Type</th>
                      <th>Date de création</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($books as $index => $book)

                  <tr>
                    <td class="py-1">
                        <img src="{{$book->image}}" alt="image"/>
                      </td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->edition}}</td>
                    <td>{{$book->type}}</td>
                    <td>{{$book->created_at}}</td>

                    <td>
                      <button class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
                      <form method="POST" action="{{route('book.destroy',['book'=> $book->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                    </form>

                    </td>
                </tr>
                    @empty
                    <tr>
                        <td colspan="10" style="text-align: center">Aucun livre enregistrée!</td>
                    </tr>
                    @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



@endsection

@section('javascript')
    @if ($errors->any())
        <script type="text/javascript">
            $(window).on('load',function(){
                $('#modalSubscriptionForm').modal('show');
            });
        </script>
    @endif
@endsection
