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
    <link rel="stylesheet" href="registration.css">
    </head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_POST['valider'])){
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirmation = $_POST['password_confirmation'];
	$trn_date = date("Y-m-d H:i:s");
	$nomphoto = $_FILES['photo']['name'];
	$fichierTemporaire=$_FILES['photo']['tmp_name'];
	move_uploaded_file($fichierTemporaire,'./IMAGES/'.$nomphoto);
if ($password != $password_confirmation) {
        echo "Les deux mot de passe sont différents !";
}
else {
        

        $query = "INSERT INTO users (firstname, lastname, username, email, password, password_confirmation, trn_date, avatar)
VALUES ('$firstname','$lastname', '$username', '$email', '".md5($password)."', '".md5($password_confirmation)."','$trn_date','$nomphoto')";
        $result = mysqli_query($don, $query) or die ('erreur SQL !'.$query.'<br/>'.mysqli_error($don));
        if($result){
            echo "<div class='form'>
<h3>Vous avez été enregistrés avec succès.</h3>";
header('location:login.php');
        }
		else
		{
	
		//   echo "<div class=form>
		//   <h3>Veuillez remplir les champs!</h3>";
		//   header("location:registration.php")	 
        }  
        
}
    }
?>

<form  action="registration.php" method="post" enctype="multipart/form-data">
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Veuillez vous enregistrer</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstname" id="first_name" class="form-control input-sm" placeholder="First Name" required="required">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="lastname" id="last_name" class="form-control input-sm" placeholder="Last Name" required="required">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="username" id="username" class="form-control input-sm" placeholder="username" required="required">
			    			</div>

							<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="required">
			    			</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="required">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required="required">
			    					</div>
			    				</div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="avatar">Image perso<span class="small">(facultatif)</span></label>
                                                    <input type="file" name="photo" /><br />
			    			</div>
			    			
			    			<input type="submit" value="Register" name='valider' class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    </form>

 <!-- <div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post" enctype="multipart/form-data">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<label for="avatar">Image perso<span class="small">(facultatif)</span></label>
<input type="file" name="photo" /><br />
<input type="submit" name="submit" value="Register" />
</form>
</div> -->


</body>
</html>
