<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="css/icon.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/w3.css">
        <link rel="stylesheet" href="/css/fiche.css">
        <link rel="stylesheet" href="/css/materialize.min.css">
    </head>


    <body>
     <header>

     </header>
     <br>
     <div class="container">
         <button class="btn waves-effect waves-light blue center-block" type="submit" id="action" >Telecharger</button><br>
     </div><br>

     <div class="row col s12 container contenu"  id="contenu">
         <div><img class="img"src="/images/uy1.png"></div>
         <h3 style="text-align: center;"> Fiche de preinscription a <br>l'université de yaoundé 1
             année 2020/2021
         </h3>
         <hr>
         <div class=" col s6">
            <h5> Etat civil</h5>
            <hr>
         <p>nom(s) et prenom(s) :{{$etudiant->nom}} {{$etudiant->prenom}}</p>
            <p>date de naissance: {{$etudiant->date_naissance}}</p>
            <p>lieu de naissance :{{$etudiant->lieu_naissance}} </p>
         <p>sexe : {{$etudiant->sexe}}</p>
            <p>langue parler :{{$etudiant->langue}}</p>
            <p>Email :{{$etudiant->email}}</p>
            <p>telephone :{{$etudiant->telephone}}</p>
            <p>code:{{$etudiant->id}}</p>
            <p>date de rendez vous :<b> <?php $d=mktime(0, 0, 0, date("m")  , date("d")+14, date("Y"));echo date('d-m-y',$d)?></b></p>




            <h5>Filiation et etat d'urgence</h5>
            <hr>
            <p>Nationalité :{{$etudiant->region->pays->nom}}</p>
         <p>Region d'origine :{{$etudiant->region->nom}}</p>
            <p>Nom du père :{{$etudiant->nom_pere}}</p>
            <p>Profession du père:{{$etudiant->profession_pere}}</p>
            <p>Nom de la mère:{{$etudiant->nom_mere}}</p>
            <p>Profession de la mère :{{$etudiant->profession_mere}}</p>
             <p><u><b>Personne à contacter</b></u></p>
         <p>Nom(s) et Prenom(s) : {{$etudiant->nom_urgence}}</p>
             <p>Telephone:{{$etudiant->tel_urgence}}</p>
             <p>Ville :{{$etudiant->ville_urgence}}</p>

         </div>
         <div class=" col s6">
            <h5> Facultés et filière</h5>
             <hr>
            <p>Etablissement:{{$etudiant->choix1->faculte->nom}} </p>
            <p><u><b>Filière</b></u></p>
                <ul>
                    <li>1er Choix: {{$etudiant->choix1->nom}}</li>
                    <li>2eme Choix: {{$etudiant->choix2->nom}}</li>
                    <li>3eme Choix: {{$etudiant->choix3->nom}}</li>


                </ul>
                <p>Niveau : {{$etudiant->niveau->intitule}}</p><br>

            <h5>diplome</h5>
            <hr>
            <p>Type de diplome:{{$etudiant->diplome->type}} </p>
            <p>Année d'obtention:{{$etudiant->annee_diplome}} </p>
            <p>Moyenne:{{$etudiant->moyenne}} </p>
            <p>Infos jury:{{$etudiant->info_jury}} </p>
            <p>Matricule dilplome : {{$etudiant->exam_nomber}}</p>
            <p>Diplome delivrée par:{{$etudiant->delivreur}} </p>
            <p>Date de delivrance:{{$etudiant->date_delivrence}} </p>
            <br>

            <h5> Autres details</h5>
            <hr>
            <p><u><b>infos paiement</b></u><br>
                <ul>
                    <li>N° de transaction : {{$etudiant->transaction}}</li>
                    <li> Agence de paiement: {{$etudiant->payement->operateurs}}</li>
                </ul>
            </p>
            <p><u><b>infos supplemebtaires</b></u><br>
                <ul>
                    <li>Pratiquer  sport?: Oui</li>
                    <li>Pratiquer  Art?: Non</li>
                </ul>
            </p>


         </div>

     </div>

   <footer>

   </footer>

     <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
     <script type="text/javascript" src="/js/printThis.js"></script>
     <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script>

       $('#action').click(function () {
            $('.contenu').printThis();
       })
    </script>
    </body>

</html>
