@extends('templatesAdmin')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Filieres</h1>
        <ol class="breadcrumb mb-4">

            <li class="breadcrumb-item active">Fillieres</li>

        </ol>

        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>Liste des filieres</div>
            <a class="btn btn-primary " data-toggle="collapse" href="#form-1" role="button" aria-expanded="false" aria-controls="form-1">Ajouter</a>
            <div  class="card-body collapse" id="form-1">
                <form method="post">
                    <div class="form-row">
                        {{csrf_field()}}
                        <div class="col-md-6">
                            <div class="form-group"><label class="small mb-1" for="inputPassword">Nom de la filière</label><input class="form-control py-4"  type="text" platceholder="nom filiere"  name="filiere"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label class="small mb-1" for="facultés">Facultés</label>
                                <select class="form-control custom-select custom-select-lg" id="facultés" name="faculte">
                                    <option selected >none</option>
                                    @foreach($facultes as $pay)
                                        <option value="{{$pay->id}}">{{$pay->nom}}</option>
                                    @endforeach

                                </select>
                            </div>
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
                            <th>Faculte</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($etudiants  as $etudiant)
                            <tr>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->faculte->nom}}</td>
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
