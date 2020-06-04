<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mon blog</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="calcul.css">
    <link rel="stylesheet" href="modal.css">
    <!--link rel="stylesheet" href="syle.css"-->
    <!--link rel="stylesheet" href="joli.css"-->
  </head>
  <body>
    <header class="bg-dark">
           <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">
                   <a class="navbar-brand" href="#wrapper active-element"><img src="logo.jpg" alt="logo" style="width:150px; height:50px;"></a>
                   <button class="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                       <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                               <a class="nav-link" href="SlidePushMenus/index.html"><font color="white"><strong>Menu</strong></font><span class="sr-only">(current)</span></a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#art"><font color="white"><strong>Articles</strong></font></a>
                           </li>
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <font color="white"><strong>Nos offres</strong></font>
                               </a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="#"><strong>Témoiganges clients</strong></a>
                                   <a class="dropdown-item" href="#"><strong>Qui sommes-nous?</strong></a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#foot"><strong>Infos</strong></a>
                               </div>
                           </li>
                       </ul>
                       <!--affichage de l'avatar et remplacement des boutons par avatar-->
                         <?php 
                           if (isset($_SESSION['username']))
                           {
                               //extension
                               $extensions_arr = array("jpg","jpeg","png","gif");
                            echo('<div class="signe col-md-2">
                            <img src="IMAGES/'.$_SESSION['avatar'].'" width="40px" height="35px"/></div>');
                            ?>
                             <div style="color:white;*"><?php echo ($_SESSION['username']);?></div>
                              
                            <?php
                            
                            echo '<div class="signe col-md-2">
                            <!--div class="dropdown-menu"-->

                            <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button"         data-toggle="dropdown">Option
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                    <li><a href="#">Mon compte</a></li>
                     <li><a href="logout.php">Deconnexion</a></li>
                        </ul>
                        </div>
                        </div>
                        </div>';
                           }
                           else {
                            echo '<div class="signe col-md-2"><a href="registration.php"><button class="btn btn-primary btn-lg" data-toggle="" data-target="registration.php">S\'inscrire</button></a></div> ';
                            echo '<div class="signe col-md-2"><a href="login.php"><button class="btn btn-primary btn-lg" data-toggle="" data-target="#login">Connexion</button></a></div> ';
                           }
                           ?>
                         <!--div class="container center">
                          </div-->

                       <form class="form-inline my-2 my-md-0">
                           <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                       </form>
                   </div>
               </nav>
           </div>
       </header>
       <div class="menu-overlay"></div>
     </body>  
</html>       