@extends('racine')

@section('title')
    Gestion des Livres
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
            Le livre {{ session()->get('bookAdded') }} a été Ajouté avec succèss.
        </div>
    @endif
    @if (session()->has('bookDeleted'))
        <div class="alert alert-danger" role="alert">
            Le livre {{ session()->get('bookDeleted') }} a été Suprimé.
        </div>
    @endif
    @if (session()->has('bookUpdated'))
        <div class="alert alert-success" role="alert">
            Le livre {{ session()->get('bookUpdated') }} a été bien Modifié.
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
                                            <img src="{{ $book->image }}" alt="image" />
                                        </td>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td>{{ $book->edition }}</td>
                                        <td>{{ $book->type }}</td>
                                        <td>{{ $book->created_at }}</td>
                                        <td>
                                            <button data-toggle="modal" data-target="#exampleModal-{{ $book->id }}"
                                                class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                            <!-- Delete Confirmation Modal starts -->
                                            <div class="modal fade" id="exampleModal-{{ $book->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel-3">Livre :
                                                                {{ $book->name }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Êtes vous sûr de vouloir supprimer ce livre ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form method="POST"
                                                                action="{{ route('book.destroy', ['book' => $book->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" type="button"
                                                                    class="btn btn-danger">Submit</button>
                                                            </form>
                                                            <button type="button" class="btn btn-light"
                                                                data-dismiss="modal">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Delete Confirmation Modal starts -->


                                            {{-- ********************************** modal Edit  Book***************************************** --}}
                                            <button class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#exampleModal4-{{ $book->id }}"><i
                                                    class="fas fa-edit"></i></button>
                                            <div class="modal fade" id="exampleModal4-{{ $book->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg " role="document" style="width: 50%;">
                                                    <div class="modal-content">
                                                        <form class="cmxform" id="commentForm" method="POST"
                                                            action="{{ route('book.update', $book->id) }}"
                                                            enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="ModalLabel">Modifier
                                                                    Le livre: {{ $book->name }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <fieldset>
                                                                    <div class="row">
                                                                        <div class="form-group col-12">
                                                                            <label for="cname">Nom du livre (*)</label>
                                                                            <input id="cname" class="form-control"
                                                                                name="name" minlength="2" type="text"
                                                                                value="{{ $book->name }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-4">
                                                                            <label for="category">Categorie (*)</label>
                                                                            <select id="category" name="category"
                                                                                class="js-example-basic-single w-100"
                                                                                style="width: 100%" required>
                                                                                <option value="{{ $book->category }}"
                                                                                    selected>{{ $book->category }}
                                                                                </option>
                                                                                <option value="Enfant">Enfant</option>
                                                                                <option value="Scolaire">Scolaire</option>
                                                                                <option value="Religieux">Religieux</option>
                                                                                <option value="Autres">Autres</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-4">
                                                                            <label for="theme">Thème (*)</label>
                                                                            <input id="theme" class="form-control"
                                                                                value="{{ $book->theme }}" type="text"
                                                                                name="theme" required>
                                                                        </div>
                                                                        <div class="form-group col-4">
                                                                            <label for="edition">Edition (*)</label>
                                                                            <input id="edition" class="form-control"
                                                                                value="{{ $book->edition }}" type="text"
                                                                                name="edition" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-4">
                                                                            <label for="format">Format (*)</label>
                                                                            <select id="format" name="format"
                                                                                class="js-example-basic-single w-100"
                                                                                style="width: 100%" required>
                                                                                <option value="{{ $book->format }}"
                                                                                    checked> {{ $book->format }}
                                                                                </option>
                                                                                <option>17x24</option>
                                                                                <option>14x20</option>
                                                                                <option>8x12</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-4">
                                                                            <label for="type">Type (*)</label>
                                                                            <select id="type" name="type"
                                                                                class="js-example-basic-single w-100"
                                                                                style="width: 100%" required>
                                                                                <option value="{{ $book->type }}"
                                                                                    checked> {{ $book->type }}
                                                                                <option>Couverture</option>
                                                                                <option>Papier</option>
                                                                                <option>Cellophane</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-4">
                                                                            <label for="paper">Papier (*)</label>
                                                                            <select id="paper" name="paper"
                                                                                class="js-example-basic-single w-100"
                                                                                style="width: 100%" required>
                                                                                <option value="{{ $book->paper }}"
                                                                                    checked> {{ $book->paper }}
                                                                                <option value="jaune">Jaune</option>
                                                                                <option value="blanc">Blanc</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-12">
                                                                            <label for="image">Image (*)</label>
                                                                            <input id="image" name="image" type="file"
                                                                                class="dropify form-control"
                                                                                value="{{ $book->image }}"
                                                                                accept="image/png, image/jpeg"
                                                                                data-height="50">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-12" id="pdfBlock{{ $book->id }}" @if ($book->isFree != 1)
                                                                            style="display: none" 
                                                                        @endif >
                                                                            <label for="pdf">Fichier PDF</label>
                                                                            <input id="pdf" name="pdf" type="file"
                                                                                class="dropify form-control"
                                                                                value="{{ $book->pdf }}"
                                                                                accept="application/pdf"
                                                                                data-height="50">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-12">
                                                                            <label for="abstract">Résumé</label>
                                                                            <textarea name="abstract" id="abstract"
                                                                                class="form-control" maxlength="100"
                                                                                rows="2"
                                                                                placeholder="Un résumé de 100 caractères au maximum.">{{ $book->abstract }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group  form-check col-6">
                                                                            <label class="form-check-label" for="isFree{{ $book->id }}">
                                                                              <input onclick="myFunction2({{ $book->id }})" type="checkbox" class="form-check-input" name="isFree" id="isFree{{ $book->id }}" @if ($book->isFree)
                                                                              checked
                                                                          @endif  >
                                                                              Gratuit
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-group  form-check col-6">
                                                                            <label class="form-check-label" for="Favoris">
                                                                              <input type="checkbox" class="form-check-input" name="isFavoris" id="Favoris" @if ($book->isFavoris)
                                                                                  checked
                                                                              @endif >
                                                                              Favoris
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="submit" value="Modifier"
                                                                    class="btn btn-success">
                                                                <button class="btn btn-light"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- ********************************** END modal Edit  Book***************************************** --}}


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
            $(window).on('load', function() {
                $('#modalSubscriptionForm').modal('show');
            });

        </script>
    @endif
@endsection
