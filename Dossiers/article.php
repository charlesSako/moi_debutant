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
  <?php include("db.php"); ?>
   
    
   <?php 
     $sql = "SELECT * FROM  articlesf WHERE statut=1";
    $result = mysqli_query($don, $sql); 
    // $sql = "SELECT * FROM articles"
    ?> 
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h2>NOS ARTICLES</h2></div>
          <div class="col-md-4"></div>
      </div>
      <div class="row">

      <?php while($row = mysqli_fetch_assoc($result))
    {
      $image=$row['photo'];
      $nom=$row['nom'];
      $description=$row['description'];
      $prix=$row['prix'];
      $num=$row['prix'];
      ?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">
          <div class="thumbnail">
            <div class="card-img">
            <?php echo '<img src="IMAGES/'.$image.'" alt="photo" width:"310px" height:"260px">';?>
            <span><h4><?php echo($num);?></h4></span>
            </div>
            <div class="card-desc">
              <h3> <?php echo($nom); ?></h3>
              <p> <?php echo($description); ?></p>
              <a href="#" class="btn-card">Lire plus</a>
              <a href="#"><button type="button" <?php $num; ?> class="btn-card" data-toggle="modal" data-target="#exampleModal">Acheter</button></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div> 
     </div>
     </div>
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
            </div>
            </div>
            </div>
            </div>
            </div>

            
<!-- </html> -->