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
    <!--link rel="stylesheet" href="registration.css">
    
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="syle.css"-->
    <link rel="stylesheet" href="login.css">
  </head>
<body>
<?php
include "db.php";
?>

<?php

// If form submitted, insert values into the database.
if (isset($_POST['connexion']))
{
  $username = mysqli_real_escape_string($don, $_POST['username']);
  $password = mysqli_real_escape_string($don, $_POST['password']);
  //verifier si l'utilisateur existe dans la base de donnée
  $query = "SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";
  $result = mysqli_query($don, $query) or die(mysql_error());
  $resultrow = mysqli_fetch_array($result);
  $rows = mysqli_num_rows($result);
         if($rows==$id && $password==$_POST['password'])
  {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['avatar'] = $resultrow['avatar'];
    header("Location: index.php");
  } elseif($password!=$resultrow['password']) {

    echo "<div class='form'>
       <h3> username/password is incorrect.</h3>
       <br/> click here to <a href='login.php'>Login</a></div>";
   // echo "erreur";
  }
  // else
  // {
  // 
  // }
}else{

?> 

<form class="form-horizontal ggg" method="post" action="">
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <div class="col-md-12">
        <label for="pwd">username :</label>
        <input required class="form-control input" type="text" name="username" >
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="pwd">Mot de Passe :</label>
    <div class="input-group">
      <input required class="form-control input" type="password" name="password">
    </div>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="signin"></label>
  <div class="controls">
    <input type="submit" id="signin_button" name="connexion" class="btn btn-primary btn-block" value ="Connexion">
    <input type="reset" id="Annuler" name="Annuler" class="btn btn-default btn-block" onclick="cloceModalLogin();" value="Annuler">
  </div>
</div>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</form>

</div>
<?php } ?>
</body>
</html>