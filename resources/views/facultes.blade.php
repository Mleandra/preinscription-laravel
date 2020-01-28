@extends('templatesAdmin')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Facultes</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item active">Faculte</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Liste des facultes</div>
            <a href="#" class="btn btn-primary" >Ajouter</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($etudiants as $etudiant)
                            <tr>
                            <td>{{$etudiant->nom}}</td>

                            <td><a href="#" class="btn btn-primary">Voir</a></th>
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
