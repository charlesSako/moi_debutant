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
    <link rel="stylesheet" href="syle.css">
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
                                   <a class="dropdown-item" href="#foot"><strong>Informations</strong></a>
                               </div>
                           </li>

                       </ul>
                       <!--debut du 1er modal-->
                       <div class="signe col-md-2">
                         <button type="button" class="boutsign" data-toggle="modal" data-target="#registration"><i class="fas fa-user-plus"></i>Sign up</button>
                         </div>
                         <div class="signe col-md-2">
                          <button type="button" class="boutsign" data-toggle="modal"  data-target="#login"><i class="fas fa-sign-in-alt"></i>Sign in</button>
                         <!--div class="container center"-->
                          </div>

                       <form class="form-inline my-2 my-md-0">
                           <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Recherche">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                       </form>
                   </div>
               </nav>
           </div>
       </header>
       <div class="menu-overlay"></div>
       <br>

       <section id="lab_video_slider">
         <div class="container-fluid">
           <div class="row">
             <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

             <!-- Link Swiper's CSS -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/css/swiper.min.css">

             <!-- Swiper -->
             <div class="swiper-container">
               <div class="swiper-wrapper">
                 <div id="slide_one" class="swiper-slide">

                  <img src="nidoeuf.jpg" alt="slider" style="width:1100px; height:650px;">

                 </div>

                 <div id="slide_two" class="swiper-slide">
         <div id="lab_video_text_overlay">
           <div class="container">
             <h2>Nos oeufs de cailles</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie</p>
             <a href="#" class="btn btn-warning">Learn About Us</a>

           </div>
         </div>
         <!-- end #lab_overlay -->

                    <img src="oeufcail.jpg" alt="slider" style="width:1100px; height:650px;">
                 </div>

                 <div id="slide_three" class="swiper-slide">
                   <img src="slidep.jpg" alt="slider" style="width:1100px; height:650px;">
                    <!-- VIDEO -->

                   <!-- END VIDEO -->
                 </div>
               </div>
               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
               <!-- Add Arrows -->
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>

             <!-- Swiper JS -->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.2.5/js/swiper.min.js"></script>

             <!-- Initialize Swiper -->
             <script>
               var swiper = new Swiper('.swiper-container', {
                   pagination: '.swiper-pagination',
                   paginationClickable: true,
                   nextButton: '.swiper-button-next',
                   prevButton: '.swiper-button-prev',
                   spaceBetween: 30,
                   autoplay: 5000,
                   autoplayDisableOnInteraction: false
               });
             </script>
           </div>
           <!-- end .row -->
         </div>
         <!-- end .container-->
       </section>
         <!-- end #section -->
         <!-- details card section starts from here -->

         <!-- Modal connexion -->
         <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h1 class="modal-title" id="exampleModalLabel">Connexion</h1>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">×</span>
                 </button>
               </div>
               <div class="modal-body">
                 <div class="form">

                   <form  action="" method="post" name="login">
                     <input type="text" name="username" placeholder="Nom d'utilisateur" required />
                     <input type="password" name="password" placeholder="Mot de passe" required />
                     <input type="submit" name="submit" value="Connexion" />
                   </form>
                   <p>Pas encore inscrit? <a href="registration.php">S'inscrire ici</a></p>
                 <div>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
               </div>
             </div>

         </div>

       </div>

        </div>
          </div>
                                  <!-- Modal enregistrement -->
            <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h1 class="modal-title" id="exampleModalLabel">Inscription</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  </div>
                      <div class="modal-body">

                      <form name="registration" action="registration.php" method="post">
                      <input type="text" name="username" placeholder="Nom d'utilisateur" required />
                      <input type="email" name="email" placeholder="Email" required />
                      <input type="password" name="password" placeholder="Mot de passe" required />
                      <input type="submit" name="submit" value="Inscription" />
                      </form>
                      </div>
                                <div>
                                        <!--/div-->

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                          <!--button type="button" class="btn btn-primary">Save changes</button-->
                                        </div>

                                    </div>
                                  </div>
                                  </div>
                                  </div>
                                  <!--fin modal-->

<section class="details-card bloc" id=art>
    <div class="container fluid">
      <div class="row">
        <div class="col-md-4 xs-4"></div>

      <div class="frazarticle col-md-4 xs-4">
        <h1>Nos articles</h1>
      </div>
      <div class="col-md-4 xs-4"></div>


      </div>
        <div class="row">
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="pané.jpg" alt="" style="width:350px; height:260px;">
                        <span><h4>Volaile</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Poulet Pané</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">lire plus</a>
                            <!--debut du modal-->
                            <!--div class="container">
  <!-Trigger the modal with a button -->
  <a href="#"><button type="button" class="btn-card" data-toggle="modal" data-target="#exampleModal">Acheter</button></a>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="calculator">Calculatrice de Part</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="container">

            <div id="calculator">
              <form>
                <p>Nos différents services</p>
                <p>
                  <select id="article" onchange="myFunction()">
                    <option disabled selected value="0">Faites votre choix</option>
                    <option value="1">Poulet Roti</option>
                    <option value="2">Poulet de Chair</option>
                    <option value="3">Poulet Bicyclette</option>
                    <option value="4">Pondeuses</option>
                    <option value="5">Poulet Pané</option>
                    <option value="6">Coq Metissé</option>
                  </select>
                </p>
                <p>Prix unitaire de nos produits</p>
                <p>
                  <input
                    id="pu"
                    type="number"
                    placeholder="montant de la facture"
                    disabled= "disabled"
                  />
                  F CFA
                </p>
                <p>
                  <input
                    id="quant"
                    type="text"
                    placeholder="Quantité"
                    onkeyup="myFunction()"
                  />
                </p>

              </form>

              <p>Montant total</p>
              <form onsubmit="myFunction()" action="fel.html" method="post">

              <input id="tot" type="onsubmit" placeholder="Total" />
              <button type="onsubmit" id="calculate">Confirmer</button>
              </form>
            </div>
            <!--calculator end-->

          </div>
          <!--container end-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!--/div-->

            </div>
            </div>
            </div>
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="rotie.jpg" alt="roti" style="width:350px; height:260px;">
                        <span><h4>Volaile2</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Poulet Roti</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Lire plus</a>
                            <a href="calcul.html" class="btn-card">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="chair.jpg" alt="chair" style="width:350px; height:260px;">
                        <span><h4>Volaile3</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Poulet de Chair</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Lire plus</a>
                            <a href="calcul.html" class="btn-card">Acheter</a>

                    </div>
                </div>
            </div>

    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="bicyclette.jpg" alt="" style="width:350px; height:260px;">
                        <span><h4>Volaile4</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Poulet Bicyclette</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Lire plus</a>
                            <a href="calcul.html" class="btn-card">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="pondeuse.jpg" alt="" style="width:350px; height:260px;">
                        <span><h4>Volaile5</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Pondeuses</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Lire plus</a>
                            <a href="calcul.html" class="btn-card">Acheter</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 xs-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="coq.jpg" alt="" style="width:350px; height:260px;">
                        <span><h4>Volaile6</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>Coq Metissé</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                            <a href="#" class="btn-card">Lire plus</a>
                            <a href="calcul.html" class="btn-card">Acheter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details card section starts from here -->
<section class="contemoin">
  <div class="row">
    <div class="col-md-1"></div>
  <div class="col-md-5 Temoignage xs-4">

    <h2>Témoignage</h2>
    <div class="image">
      <img src="carta1.jpg" alt="carta1">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
    nulla pariatur.  Excepteur sint occaecat cupidatat non proident,
       sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="col-md-1 xs-4"></div>

    <div class="col-md-4 contact xs-4">
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 xs-4 col-md-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 xs-4">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6 xs-4">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 xs-4">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 xs-4">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 xs-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
</div>
<div class="col-md-1 xs-4"></div>
</div>
</section>

<footer>
  <div class="container" id=foot>
    <div class="row">
      <div class="col-md-3 xs-4">
        <div class="footer-logo">
          <img src="logo.jpg" alt="logo">
          <h3>Suivez-nous sur</h3>
        </div>
        <div class="soical-media">
          <img src="facebook.png" style="width:45px; height:35px;">
          <img src="youtube.png" style="width:50px; height:40px;">
          <img src="instagram.png" style="width:50px; height:40px;">
          <img src="linke.jpg" style="width:50px; height:40px;">
        </div>
      </div>
      <div class="col-md-3 xs-4">
        <div class="improtent"><h2>Liens importants</h2>
        </div>
        <div class="fotter-menu">
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Histoire de la marque</a></li>
            <li><a href="#">Nos produits</a></li>
            <li><a href="#">Où nous trouver?</a></li>
            <li><a href="#">Coaching Vip</a></li>
            <li><a href="#">Revendeurs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>

          </ul>
        </div>

      </div>
      <div class="col-md-3 xs-4">
          <div class="improtent"><h2>Contactez nous</h2></div>
            <address>
                <img src="local1.png" style="width:40px; height:30px;"><p>Notre siège le plus proche
                    </p>

              <img src="mail.png" alt= "mail" style="width:40px; height:30px;"><p>beco1717@gmail.com</p>
              <img src="call.png" style="width:40px; height:30px;"><p>+225 08939810</p>
            </address>
              <div class="fotter-menu">
                  <ul>
                    <li><a href="#">Livraison</a></li>
                    <li><a href="#">Retour </a></li>
                    <li><a href="#">Termes</a></li>
                    </ul>
                    </div>
          </div>
      <div class="col-md-3 xs-4">
          <div class="improtent"><h2>Carte</h2></div>
          <div class="map">
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=10zjEQbAG03gCWgfAM3R-adedHXRoeHIu" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
      </div>
    </div>
  </div>
</footer>

<section id="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 xs-4">
        <p>© 2020</p>
      </div>
    </div>
  </div>
    </div>
</section>
  <div class="container">
    <div class="row">
      <div class="col-md-2 xs-4"></div>
      <div class="col-md-8 xs-4">
<h2 class="ayush">Ferme Dorée</h2>
    </div>
    <div class="col-md-2 xs-4"></div>
  </div>
    </div>

<script src="java1.js"></script>
<script  src="calculate.js"></script>
<script src="joli.js"></script>


  </body>
</html>
