<!DOCTYPE html>
<html>

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title>FORTNOUL - Rejoins l'aventure !</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

  <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center nabvar-color" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="who.html">Qui sommes-nous ?</a>
                <a class="nav-item nav-link" href="contact.html">Contactez-nous</a>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <article class="col-xs-12 col-sm-12 col-lg-12">
                    <h1>FORTNOUL</h1>
                </article>
                <article class="col-xs-12 col-sm-6 col-lg-6">
                    <h2>Bienvenue jeune fourtnouleur</h2>
                    <p>Oyé, Oyé ! FORTNOUL est un nouveau jeu en ligne Open World qui va révolutionner le monde du jeu sur mobile grâce à son nouveau moteur engine 3DX++ et ses graphismes grandeur nature compatible avec hololens. D'ores et déjà élu "Meilleur jeu de l'année" par jeuxvideo.com et micromania, FORTNOUL est en passe de devenir le jeu le plus attendu du siècle ! La sortie ? C'est pour bientôt...
                        <br>
                        <br> Si tu ne veux rien louper, laisse-nous te tenir au courant :
                    </p>
                </article>
                <article class="col-xs-12 col-sm-5 col-lg-5">
                    <img class="iphone" src="img/iphone_fortnoute.png">
                </article>
            </div>
            <article class="col-xs-12 col-sm-6 col-lg-6">
                <img class="appstore" src="img/appstore.svg" />
            </article>

            <!-- DB STATUS -->
            <?php
               $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
               if(!empty($_GET['message'])) {
                if ($host == 'marginiediril.com/?message=success') {
                   echo "<script>alert('Votre mail a bien était enregistré ! Merci');</script>";
                 }
                 elseif ($host == 'marginiediril.com/?message=error'){
                   echo "<script>alert('Une erreur est survenue !');</script>";
                 }
               }
               ?>

               <!-- CHECK MAILER -->
                <div class="form-group row">
                    <form action="php/db.php" method="post" class="form-inline" onsubmit="submitForm(event)">
                        <div class="form-group mx-sm-12 mb-2">
                            <input type="email" class="form-control" placeholder="Ton mail" aria-describedby="emailStatus" name="usermail"/>
                        </div>
                </div>

                <!-- CHECK SENDER -->
                <div class="form-group row">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" />
                            <label class="form-check-label" for="gridCheck">
                                J'accepte les CGU
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" id="sendBtn" class="btn btn-primary mb-2" onclick="validate()">Envoyer</button>
                    </form>
                </div>
        </div>
    </div>
    </div>

    <!-- FOOTER -->
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="col-3 ml-auto">
            <h4>Follow Us</h4>
            <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="container text-center">
            <small>Copyright &copy; Marginie Diril<br/>3W Academy</small>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        function validate() {
            var gridCheck = document.getElementById("gridCheck");
            if (gridCheck.checked) {} else {
                alert("Veuillez accepter les CGU.");
                event.preventDefault();
            }
        }
    </script>
</body>

</html>