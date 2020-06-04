<?php 
session_start();
include "db.php";
//requete pour afficher les users dans le menu deroulant des destinataires
$dest = "SELECT * FROM users WHERE statut <>'1'";
$destquery = mysqli_query($don, $dest) or die(mysqli_error($don));

//Affichage des infos de l'administrateur
$admin = "SELECT * FROM users WHERE statut ='1'";
$adminquery = mysqli_query($don, $admin) or die(mysqli_error($don));
$adminrow = mysqli_fetch_array($adminquery);
$id = $adminrow['id'];

//Envoie de message
if (isset($_POST['envoyer'])) {
    $expediteur = $adminrow['id'];
    $destinataire = $_POST['destinataire'];
    $titre = $_POST['titre'];
    $message = $_POST['message'];
    $etat = "non lu";
    $date = date("Y-m-d H:i:s");
    
    $sms = "INSERT INTO messages (id_expediteur, id_destinataire, titre, message, etat, date) VALUES ('$expediteur', '$destinataire', '$titre', '$message', '$etat','$date')";
    $smsquery = mysqli_query($don, $sms) or die($don);
}

//requete pour afficher les messages non lus de l'admin
$message = "SELECT * FROM messages WHERE etat ='non lu' AND id_destinataire = '$id'";
$messagequery = mysqli_query($don, $message) or die(mysqli_error($don));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
		<form action="" method="post" class="col-md-9 go-right">
			<h2>Messagerie</h2>
            <!-- afficher le nom de tous les utilisateurs de la DB en menu déroulant -->
			<div class="form-group">
            <label for="name">Destinataire</label>
            <select name="destinataire" class="form-control">
                <option value="" selected disabled>Destinataire</option>
                <?php while ($destinataire = mysqli_fetch_array($destquery)) {?>
                <option value="<?php echo ($destinataire['id']); ?>"><?php echo ($destinataire['username']); ?></option>
                <?php } ?>
            </select>
			
		</div>
		<div class="form-group">
            <label for="titre">Titre</label>
			<input id="titre" name="titre" type="text" class="form-control" required>
			
		</div>
		<div class="form-group">
            <label for="message">Message</label>
			<textarea id="message" name="message" class="form-control" required></textarea>
		</div>
        <input type="submit" value="ENVOYER" class="btn btn-success" name="envoyer">
		</form>
	</div><br><br>
    <div class="row">
    <!-- Affichage des message non lus reçus par l'administrateur -->
        <table class="table table-striped">
            <tr>
                <thead class="thead-light">
                    <th>Expediteur</th>
                    <th>date</th>
                    <th>Titre</th>
                    <th>Action</th>
                </thead>
            </tr>
            <?php while ($mesadmin = mysqli_fetch_array($messagequery)) {
                $idexp = $mesadmin['id_expediteur'];
                $nomexp = "SELECT * FROM clients WHERE id = '$idexp'";
                $nomquery = mysqli_query($connect, $nomexp);
                $nomrow = mysqli_fetch_array($nomquery);
                $nom = $nomrow['Pseudo'];
                ?>
            <tr>
                <tbody>
                    <td> <?php echo($nom); ?></td>
                    <td><?php echo($mesadmin['date']); ?></td>
                    <td><?php echo($mesadmin['titre']); ?></td>
                    <td><a href="read_message.php?id=<?php echo($mesadmin['id']); ?>"><button class="btn btn-primary">Lire</button></a></td>
                </tbody>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
</body>
</html>