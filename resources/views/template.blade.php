<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <title>Université de Yaoundé 1 – Sapientia – Collativa – Cognitio</title>
</head>
<body>
<div id="menu-area">
    <div class="logo">
        <a href="#">
            <img src="images/uy1.png" alt="">
        </a>
    </div>
    <ul>
        <li><a href="{{route("home")}}">Acceuil</a></li>
        <li><a href="{{route("preinscription")}}">Preinscription</a></li>
        <li><a href="{{route("login")}}" >Se connecter</a></li>
    </ul>
</div>
 @yield('content')






<footer class="page-footer grey darken-4">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">

                <h5 class="white-text teal-text text-lighten-2"> <i class=" material-icons teal-text text-lighten-2 ">forums</i >News letter  </h5>

                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input  id="firstname" type="text" class="validate">
                            <label for="firstname">Votre Nom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nmail" type="email" class="validate">
                            <label for="nmail">Votre mail</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light teal center" type="submit" name="action">souscrire
                        <i class="material-icons right">send</i>
                </form>

            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text teal-text text-lighten-2">Liens utiles</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="http://www.uy1.uninet.cm/">UY1</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://facsciences.uy1.cm/">Facultés des sciences</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://www.falsh.uninet.cm/">Facultés des lettres</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">facultés des sciences de l'education</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Text
        </div>
    </div>
</footer>


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script src="js/index.js"></script>
<script>
    $(document).ready(function() {
        $('.loginForm').modal();
    }
</script>
@yield('modalScript')

</body>
</html>
