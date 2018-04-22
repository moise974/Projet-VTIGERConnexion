<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>

<br/>
<h2>Bienvenue <?php echo $_SESSION["user_name"];?>! </h2>
<?php 
if(isset($username))
{
	echo "Votre nom d'utilisateur est : ".$username;
	echo "<br/>";
	echo "Votre clé d'utilisateur est : ".$useraccesskey;
}

?>


</body>
</html>