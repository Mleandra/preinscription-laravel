<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulaire de preinscription</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/w3.css">
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <style>
        select{
            display: block;
            width: 100%;
            border:0 0 1px 0;
            padding: 0;
            margin: 0;
            position: relative;

        }
        .select-wrapper input.select-dropdown, .caret{
            display: none;
        }

        </style>

</head>
<body>
<header>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</header>
<div class="row ">
    <div class="col s12  grey darken-4">
        <ul  class="tabs tabs-fixed-width grey darken-4" >
            <li class="tab "><a   class="active formlinks grey-text text-lighten-3 " href="#infos">information sur l'etat civile</cite></a></li>
            <li class="tab "><a class="formlinks grey-text text-lighten-3" href="#filiation">filiation et information d'ungence</a></li>
            <li class="tab "><a  class="formlinks grey-text text-lighten-3"href="#facultes">facultes et domaines d'etudes</a></li>
            <li class="tab"><a   class="formlinks grey-text text-lighten-3 " href="#diplome">diplome presenté</a></li>
            <li class="tab "><a   class="formlinks grey-text text-lighten-3 " href="#autre">autre details</a></li>
        </ul>
    </div>
</div>

<form  class="container" action="{{route('form')}}" method="POST" id="form">
   {{ csrf_field() }}
    <div id="infos" class="container ">
        <div class="formcontainer  ">

            <h3 class="teal-text text-lighten-2 w3-container ">information sur l'etat civil</h3>
            <hr>

            <br>
            <label for="fnom">nom de famille:</label>
            <input  value="{{ old('nom') }}"class="w3-input w3-animate-input infos"  type="text"   style="width: 50%;"placeholder="Entrer votre nom" name="nom" required>
            <br>
            <label for="prenom">Prenom:</label>
            <input value="{{ old('prenom') }}" type="text" class="w3-input w3-animate-input infos"   style="width: 50%;" placeholder="Entrer votre" name="prenom" required>
            <br>
            <label for="date de naissance">Date de naissance:</label>
            <input type="text" class="datepicker  w3-input w3-animate-input infos"  style="width: 50%;"name="date_naissance" value="{{ old('date_naissance') }}" requireds>
            <br>
            <label for="lieu naissance">lieu de naissance:</label>
            <input type="text" class="w3-input w3-animate-input infos"   class="" style="width: 50%;" placeholder="lieu de naissance" name="lieu_naissance" value="{{ old('lieu_naissance') }}" required>
            <br>
            <div class="input-field col s12">

                <select id="sexe"  class="w3-select  infos"  " style="width: 50%;" name="sexe" required>
                    <option value="" selected disabled></option>
                    <option value="F">Feminin</option>
                    <option value="M">Masculin</option>
                </select>
                <label for="sexe">sexe:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="etat" name="etat_civil"   class="infos" style="width: 50%;"required>
                    <option value="" selected disabled></option>
                    <option value="Marié">Marié(e)</option>
                    <option value="celibataire">celibataire</option>
                </select>
                <label>Etat matrimonial:</label>
            </div>
            <br>

            <div class="input-field col s12">
                <select id="langue"    style="width: 50%;"name="langue" required  class="infos">
                    <option  value="" selected disabled></option>
                    <option value="anglais">Anglais</option>
                    <option value="francais">Francais</option>
                </select>
                <label>Premiere langue de travail:</label>
            </div>
            <br>
            <label for="adresse">Adresse:</label>
            <input type="text" value="{{ old('adresse') }}" placeholder="Adresse" name="adresse" class="w3-input w3-animate-input infos"   style="width: 50%;" required>
            <br>

            <label for="Telephone">Telephone:</label>
            <input type="text" value="{{ old('telephone') }}" placeholder="telephone"   class="w3-input w3-animate-input infos" style="width: 50%;" name="telephone" required>
            <br>
            <label for="mail">Email:</label>
            <input type="email"  value="{{ old('email') }}" class="w3-input w3-animate-input infos"  style="width: 50%;"placeholder="Email" name="email" required>
            <br>

            <span class="btn waves-effect waves-light teal right" onclick="Next('infos')">Suivant
                <i class="material-icons right">send</i>
            </span>
            <br> <br>
        </div>
    </div>

    <div id="filiation" class="container">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 w3-container">filiation et information d'urgence</h3>
            <hr>
            <div class="input-field col s12">

                <select id="pays" name="pays"  class="filiation" style="width:50%;" required>
                    <option selected disabled > </option>
                    @foreach($pays as $pay)
                    <option value="{{$pay->id}}">{{$pay->nom}}</option>
                    @endforeach

                </select>
                <label>nationalité:</label>
            </div>
            <br>
            <div class=" input-field col s12">

                <select id="region" name="region" class="filiation"   style="width:50%;" required>
                    <option ></option>

                </select>
                <label>region d'origine:</label>
            </div>
            <div class="input-field" id="nouvelle-region" style="display:none">
            <label for="new-region">Region:</label>
            <input type="text" value="{{ old('new_region') }}" placeholder="Precisez la region" name="new-region" class="filiation w3-input w3-animate-input"   style="width: 50%;" required>
            </div>
            <br>
            <label for="pnom">Nom du pere:</label>
            <input type="text" class="w3-input w3-animate-input filiation"  style="width: 50%;" placeholder="Entrer le nom de votre pere" name="nom_pere"  value="{{ old('nom_pere') }}">
            <br>
            <label for="fnom">Profession du pere :</label>
            <input type="text" class="w3-input w3-animate-input filiation"  style="width: 50%;" placeholder="profession" name="profession_pere" value="{{ old('profession_pere') }}">
            <br>
            <label for="mnom">nom de la mere:</label>
            <input type="text"  class="w3-input w3-animate-input filiation"  style="width: 50%;" placeholder="Entrer le nom de votre mere" name="nom_mere" value="{{ old('nom_mere') }}">
            <br>
            <label for="fnom">profession de la mere:</label>
            <input type="text" class="w3-input w3-animate-input filiation"  style="width: 50%;" placeholder="profession" name="profession_mere" value="{{ old('profession_mere') }}">
            <br>
            <label for="fnom">personne a contactée en cas d'urgence:</label>
            <input type="text" class="w3-input w3-animate-input filiation"  style="width: 50%;"name="nom_urgence" required value="{{ old('nom_urgence') }}">
            <br>
            <label for="fnom"><b>telephone de la personne:</b></label>
            <input type="text" class="w3-input w3-animate-input filiation" style="width: 50%;" name="tel_urgence" required value="{{ old('tel_urgence') }}">
            <br>
            <label for="fnom"><b>ville de residence de la personne:</b></label>
            <input type="text" class="w3-input w3-animate-input filiation" style="width: 50%;" name="ville_urgence" required value="{{ old('ville_urgence') }}">
            <br>
            <span class="btn waves-effect waves-light teal right" onclick="Next('filiation')">Suivant
                <i class="material-icons right">send</i>
            </span>
        </div>
    </div>

    <div id="facultes" class="container ">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 w3-container">facultes et domaines d'etudes</h3>
            <hr>
            <div class="input-field col s12">

                <select id="faculte" name="faculte"   class="facultes" style="width:50%;" required>
                    <option selected disabled> </option>
                    @foreach($facultes as $pay)
                        <option value="{{$pay->id}}">{{$pay->nom}}</option>
                    @endforeach

                </select>
                <label>facultes:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="choix1" name="choix1"   class="w3-select facultes" style="width:50%;"required>
                    <option value="" selected disabled></option>

                </select>
                <label>1er choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="choix2" name="choix2"  class="w3-select facultes" style="width:50%;" required>
                    <option  value="" selected disabled></option>

                </select>
                <label>2eme choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="choix3" name="choix3"  class="w3-select facultes" style="width:50%;" required>
                    <option value="" selected disabled></option>
                    <
                </select>
                <label>3eme choix de domaines:</label>
            </div>
            <br>
            <div class="input-field col s12">

                <select id="niveaux" name="niveau"   class="w3-select facultes" style="width:50%;" required>
                    <option selected disabled > </option>
                    @foreach($niveaux as $pay)
                        <option value="{{$pay->id}}">{{$pay->intitule}}</option>
                    @endforeach

                </select>
                <label>niveau d'inscription d'etudes:</label>
            </div>
            <br><br>
            <span class="btn waves-effect waves-light teal right" onclick="Next('facultes')">Suivant
                <i class="material-icons right">send</i>
            </span>
            <br> <br>
        </div>
    </div>

    <div id="diplome" class="container">
        <h3 class="teal-text text-lighten-2 w3-container">diplome presente</h3>
        <hr>
        <div class="input-field col s12">

            <select id="typeDiplome" name="type_diplome" class="diplome"  style="width: 50%;"required>
                <option selected disabled > </option>
                @foreach($diplomes as $pay)
                    <option value="{{$pay->id}}">{{$pay->type}}</option>
                @endforeach

            </select>
            <label>diplome presenté:</label>
        </div>
        <label for="annee">Année d'obtention:</label>
        <input type="text" class="w3-input w3-animate-input diplome"  style="width: 50%;" name="annee_diplome" required value="{{ old('annee_diplome') }}">
        <br>
        <label for="registration">Registration/exam number:</label>
        <input type="text" class="w3-input w3-animate-input diplome"  style="width: 50%;"  name="exam_number" required value="{{ old('exam_number') }}">
        <br>
        <label for="jury">information sur le jury:</label>
        <input type="text" class="w3-input w3-animate-input diplome"  style="width: 50%;"  name="infos_jury" required value="{{ old('infos_jury') }}">
        <br>
        <label for="issuer">Matricule dilplome:</label>
        <input type="text" class="w3-input w3-animate-input diplome"  style="width: 50%;"  name="issuer" >

        <br>
        <label for="issuerDate">Date de delivrance:</label>
        <input type="text" class=" datepicker  w3-input w3-animate-input diplome"  style="width: 50%;"  name="date_delivrance" required value="{{ old('date_delivrance') }}">

        <br>
        <label for="paper">nombrer de papier reussie</label>
        <input type="number" class=" diplome w3-input " name="paper" >

        <br>
        <span class="btn waves-effect waves-light teal right" onclick="Next('diplome')">Suivant
            <i class="material-icons right">send</i>
        </button>

        <br> <br>
    </div>

    <div id="autre" class="container">
        <div class="formcontainer w3-container">
            <h3 class="teal-text text-lighten-2 " > information de paiement</h3>
            <div class="input-field col s12">
                <select id="paiement" name="paiement"   class="" style="width:50%;" required>
                    <option > </option>
                    @foreach($paiements as $pay)
                        <option value="{{$pay->id}}">{{$pay->operateurs}}</option>
                    @endforeach
                </select>
                <label>Branches de paiement:</label>
            </div>
            <br>

            <label for="transaction">N° de transaction:</label>
            <input type="text" class="w3-input w3-animate-input" style="width: 50%;" name="transaction" required value="{{ old('transaction') }}">

            <hr>
            <h3 class="teal-text text-lighten-2  w3-container">informations diverses</h3>
            <br>
            <label >
                <input type="checkbox"  class="sport" value="oui">
                <span> pratique sport</span>

            </label>
            <br>
            <div class="input-field col s12">
                <i class="material-icons prefix">textsms</i>
                <label for="desciption">sport precis</label>

                <textarea id="desciption" name="desciption"  class="materialize-textarea" data-length="30" ></textarea>
            </div>
            <br>
            <label >

                <input type="checkbox" name="art" value="oui">
                <span>Arts pratiqué</span>
            </label>
            <br>
            <label >
                <input type="checkbox" name="assurence" value="oui">
                <span>Sohaitez-vous souscrire a une police d'assurence?</span>
            </label>

            <hr>
            <h3 class="teal-text text-lighten-2 w3-container">information sur votre etat de santé</h3>
            <br>
            <label >
                <input type="checkbox" name="infection" value="oui">
                <span> Avez-vous une infection chronique</span>

            </label>
            <br>
            <label >
                <input type="checkbox" name="maladie" value="oui">
                <span> une maladie hereditaire</span>

            </label>

            <br>
            <label >
                <input type="checkbox" name="handicap" value="oui" >
                <span> Avez-vous un handicap</span>

            </label>
            <br>
            <label>
                <input type="checkbox" name="vaccin"  value="oui">
                <span>Avez-vous ete vacciné</span>

            </label>
            <br>
            <hr>
            <label >
                <input type="checkbox" name="valide"  value="oui">
                <span> declare tous ces données vrai et correcte</span>

            </label>
            <br>
            <br>
            <button class="btn waves-effect waves-light teal right" type="submit" name="action">valider
                <i class="material-icons right">send</i>
            </span>
            <br> <br>
        </div>
    </div>
</form>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        var pays = $('#pays')
        var faculte = $('#faculte')
        var region = $('#region')




        const add =(id, val, text) => {
            var a = $('#'+id)
            a.append($("<option></option>").attr("value",val).text(text))
        }
        pays.on('change', function () {
            $.ajax(
                {
                    url : ' {{route("region")}}/' + this.value,
                    dataType: 'json',
                    success: function (response) {
                        $('#region')
    .find('option')
    .remove()
    .end()
                        var options = []
                        region.append($("<option></option>").attr("selected",true).attr("disabled",true).attr("selected",true).text("Selectionnez"))
                        $.each(response.pays, function (index, value) {
                            console.log(value.nom)
                           add('region', value.id, value.nom)
                        });
                        if (response.pays.length < 1) {
                            add('region', 0, 'Autre')
                        }

                    }

                }
            )
        })
        region.on('change', function () {
            input = $('input[name="new-region"]')
         if(this.value ==0) {
         $('#nouvelle-region').show()
         input.attr( "required", true );
         } else {
            $('#nouvelle-region').hide()
            input.removeAttr( "required" )
         }
        })
        faculte.on('change', function () {

            $.ajax(
                {
                    url : ' {{route("filieres")}}/' + this.value,
                    dataType: 'json',
                    success: function (response) {
                        var options = []
                        $('#choix1')
    .find('option')
    .remove()
    .end()
    $('#choix2')
    .find('option')
    .remove()
    .end()
    $('#choix3')
    .find('option')
    .remove()
    .end()
                        $.each(response.filieres, function (index, value) {
                            console.log(value.nom)

                           add('choix1', value.id, value.nom)
                           add('choix2', value.id, value.nom)
                           add('choix3', value.id, value.nom)
                        });

                    }

                }
            )
        })
        $(document).ready(function(){
            $('.tabs').tabs(
                {/*swipeable : true,*/

                }
            );
            $('select').formSelect();
            $('.datepicker').datepicker(
                {format : 'yyyy-mm-dd',
                    yearRange : 60

                }
            );
            $(' textarea#desciption').characterCounter();
        });
        function Next(value) {
    var blnNext = true;
    var form = document.getElementById('form');
    var div = document.getElementById(value);
    var inputs = div.querySelectorAll('.'+value);
    console.log(value)

    for (index = 0; index < inputs.length; ++index) {
        if (!inputs[index].validity.valid) {
            console.log(inputs[index])
            blnNext = false;
            form.querySelectorAll('button[type="submit"]')[0].click(); //Force the form to try and submit so we get error messages
        }
    }
    if (blnNext) {
        if (value == 'infos') {
            document.getElementsByClassName('tab')[1].querySelector('.formlinks').click()
        }
        if (value == 'filiation') {
            document.getElementsByClassName('tab')[2].querySelector('.formlinks').click()
        }
        if (value == 'facultes') {
            document.getElementsByClassName('tab')[3].querySelector('.formlinks').click()
        }
        if (value == 'diplome') {
            document.getElementsByClassName('tab')[4].querySelector('.formlinks').click()
        }
        blnNext = false

}}
    </script>

</body>
</html>
