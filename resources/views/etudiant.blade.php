@extends('templatesAdmin')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Etudiants</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item active">Etudiants</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Liste etudiants</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>date de naissance</th>
                            <th>niveau</th>
                            <th>diplome</th>
                            <th>nationalite</th>
                            <th> agence de paiement</th>
                            <th>code payement</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($etudiants as $etudiant)
                            <tr>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->date_naissance}}</td>
                            <td>{{$etudiant->niveau->intitule}}</td>
                            <td>{{$etudiant->diplome->type}}</td>
                            <td>{{$etudiant->region->pays->nom}}</td>
                            <td>{{$etudiant->payement->operateurs}}</td>
                            <td>{{$etudiant->transaction}}</td>
                            <td><a href="{{route('etudiant.voir', $etudiant->id)}}" class="btn btn-primary">Voir</a></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
