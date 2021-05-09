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
            Gestion des Prospects
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Darrerachad</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gesion des Prospects</li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Prospects</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Adresse</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->firstName }}</td>
                                        <td>{{ $lead->lastName }}</td>
                                        <td>{{ $lead->phone }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->adresse }}</td>
                                        <td>{{ $lead->created_at }}</td>
                                        <td>
                                            <label class="badge badge-info">{{ $lead->status }}</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary"><i
                                                    class="fas fa-ellipsis-v"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan=" 10" style="text-align: center">Aucun livre enregistrée!
                                        </td>
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
