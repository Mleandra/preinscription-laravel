@extends("template")
@section("content")

    <div class="banner-area menu-reduire">
        <div class="banner-text-petit">
            <h2>Preinscription</h2>
        </div>
    </div>

    <div class="section-description">

    </div>

    <div class="section-3 card-panel grey lighten-5" style="text-align:left;">

        <div class="row" style="align-items: flex-start;"></div>
        <p> <b style="font-size: 30px;"> Vos informations </b> <a class="waves-effect waves-light btn modal-trigger" href="#modal1">ici</a></p>
        <p class="container">
        <h5 class="teal-text text-lighten-2">Procedure de preinscription en ligne </h5>
        <ul>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Vous etes deja sur le site de preinscription</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Lire attentivement les istructions jusqu'a la fin</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Une fois fini cliquez sur "se preinscire"</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>puis lire encore et remplir les differents champs</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Verifier ces informations et enregistrer en cliquant sur"Valider"</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Apres validation imprimer la fiche obtenue qui contient votre unique identifian</li>
        </ul>
        <h5 class="teal-text text-lighten-2">Procédure de dépôt physique du dossier </h5>
        <ul>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Se rendre ensuite à la Faculté choisie le jour du rendez-vous muni des pièces suivantes pour le dépôt du dossier physique</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Copie Certifiée Conforme du Relevé de Notes du Baccalauréat</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Copie Certifiée Conforme du Probatoire/GCE-O Level ou de l’Attestation de Réussite</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Copie Certifiée Conforme du diplôme de Licence ou son équivalent pour l’accès à la Faculté des Sciences de l’Education/li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Copie certifiée conforme de l’Acte de naissance</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Reçu de paiement des frais de préinscription qui s'élèvent à 10 000 FCFA</li>
        </ul>
        <h5 class="teal-text text-lighten-2">Validation du dossier </h5>

        Faire absolument valider votre dossier dans une salle informatique qui vous sera indiquée lors du dépôt du dossier dans la faculté choisie<br>
        <b style=" color:red"> Ne pas prendre le risque d'aller valider votre dossier hors du campus ou dans les bureaux non indiqués</b>

        <h5 class="teal-text text-lighten-2">Lieux de paiements des frais </h5>
        Les frais de préinscription se payent à MTN Mobile Money, Express Union ou dans les comptes indiqués à cet effet dans la banque UBA.
        <h5 class="teal-text text-lighten-2">Bon à savoir </h5>
        <ul>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Seuls les baccalauréats délivrés par l’Office du Baccalauréat du Cameroun ou admis en équivalence et les GCE délivrés par le GCE Board ou les GCE admis en équivalence sont acceptés à l’Université de Yaoundé I ; les Brevets de Techniciens ne sont pas reçus</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Les listes d’admission à l’Université de Yaoundé I, sous réserve de l’authentification des diplômes, seront communiquées dès le 07septembre 2020</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>Les visites médicales, sans frais supplémentaires, s’effectueront au cours du 1er mois du 1er semestre selon le programme qui sera établi dans chaque Etablissement. Ceux des nouveaux étudiants qui n’auront pas fait leurs visites médicales seront suspendus</li>
            <li><i class="tiny material-icons teal-text text-lighten-2">brightness_1</i>La rentrée universitaire aura lieu le 14 septembre 2020</li>

        </ul>
        </p>
        <p><b style="font-size: 30px;">commencez la procedures  </b> <a class="waves-effect waves-light btn modal-trigger" href="{{route("form")}}">se preinscire</a> </p>
    </div>



    </div>
    </div>
    <div id="modal1" class="modal">


                <form method="post">
                    {{csrf_field()}}
                    <div class="modal-content">
                            <h4>Consuter vos informations</h4>
                            <p>pour ce faire entrer le code mensionné sur votre fiche </p>
                            <br>
                        <div class="input-field col s12">
                            <input type="text" id="code-input" class="code" name ="code">
                            <label for="code-input">entrer votre code </label>
                        </div>
                  </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-red btn-flat">annuler</a>
                        <button  type="submit" class="modal-close waves-effect waves-green btn-flat">envoyer</button>
                    </div>
                </form>
            </div>
@endsection
@section("modalScript")
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
    </script>

@endsection
