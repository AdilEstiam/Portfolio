
<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= nl2br(htmlspecialchars($title)) ?></title>
        <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="public/css/1-col-portfolio.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
            <img alt="" src="public/img/logo.png">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil">Accueil
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="articles">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item">
                        <?php

                        if (!isset($_SESSION['user'])) {
                        ?>
                        <a class="nav-link" href='connexion'>Se connecter</a> </p>
                        <?php
                        } else {
                        ?>
                        <a class="nav-link" href='deconnexion'>Se déconnecter</a> </p>
                        <?php
                            }
                         ?>
                        </li>
                        

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="inset">
                                <?php
                                if (!empty($_SESSION['user'])) {
                                    ?>
                                    <a href='profile-<?=nl2br(htmlspecialchars($_SESSION['user']->idUser()))?>'>
                                        <img src="public/img/utilisateur.png">
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            
                        </li>
                    </ul>
                    
                </div>
                
            </div>
            
            <form action = "verif-form.php" method = "get">
                    <input type = "search" name = "terme">
                    <input type = "submit" name = "s" value = "Rechercher">
                    </form>
        </nav>
        <!-- This is a reverse engineering of the "Hyperspace"
     design from HTML5 Up! https://html5up.net/hyperspace -->


        <!-- Page Content -->
        <div class="container-fluid">

            <!-- Modal -->
            <div class="modal fade" id="centralModalSm" tabindex="-1"
                 role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <?php
                        if (isset($_SESSION['message'])) {
                            echo nl2br(htmlspecialchars($_SESSION['message']));
                        }
                        ?>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    
                    <div class="col-md-8 center">
                        <?php
                        if (!empty($_SESSION['user'])) {
                            if (strpos($_SESSION['user'] -> permAction(), 'writePostView') !== false) {
                                ?>
                                <p>
                                    <a class="btn btn-primary" href='redaction-article'>Publier un projet</a>
                                </p>
                                
                                <?php
                            }
                        }
                        ?>
                      
                    
                    
                    
    
            
                        <!-- Page Heading -->

                        <?= $content ?>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>

        <!-- Footer -->
        <br><br><br><br>
  <footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-4 col-md-3 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="#" target="_blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/?hl=fr" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 mb-4 mb-lg-0">
          <div class="text-color"><h6 class="text-uppercase font-weight-bold mb-4">Besoin d'aide ?</h6></div>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Contactez-nous</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Question fréquentes</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Nos conditions</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Mentions légales</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-3 mb-4 mb-lg-0">
        <div class="text-color"><h6 class="text-uppercase font-weight-bold mb-4">Estiam</h6></div>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Accueil</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Projets</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Contact</a></li>
            <li class="mb-2"><a href="#" class="text-muted">Connnexion</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 mb-lg-0">
        <div class="text-color"><h6 class="text-uppercase font-weight-bold mb-4" color="red">Newsletter</h6></div>
          <p class="text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
          <div class="p-1 rounded border">
            <div class="input-group">
              <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>

#button-addon1 {
  color: #FF5500;
}
i {
  color: #FF5500;
}
.form-control9::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}
.form-control.shadow-0:focus1 {
  box-shadow: none;
}
.text-color{
  color: #FF5500;
}
    </style>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">© 2022 Portfolio Estiam All rights reserved.</p>
      </div>
    </div>
  </footer>



        <!-- Bootstrap core JavaScript -->
        <script src="public/vendor/jquery/jquery.min.js"></script>
        <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <?php
        if (isset($_SESSION['show_message'])) {
            if ($_SESSION['show_message']) {
                $_SESSION['show_message'] = false;
                ?>
                <script type="text/javascript">
                    $('#centralModalSm').modal({
                        show: true
                    })
                </script>
                <?php
            }
        }
        ?>

    </body>

</html>
