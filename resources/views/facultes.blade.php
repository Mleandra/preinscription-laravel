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
            <a class="btn btn-primary" data-toggle="collapse" href="#form-2" role="button" aria-expanded="false" aria-controls="form-2">Ajouter</a>
            <div  class="card-body collapse" id="form-2">
                <form method="post">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group"><label class="small mb-1" for="faculte">Nom de la faculte</label><input class="form-control py-4"  type="text" placeholder="nom faculté"  name="faculte"></div>
                        </div>

                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button class="btn btn-primary" type="submit">envoyer</button>
                    </div>

                </form>
            </div>
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
