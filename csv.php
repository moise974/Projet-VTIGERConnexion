<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
    <link rel = "stylesheet" type = "text/css" href = " http://192.168.1.4/CodeIgniter/application/views/css/style.css">
</head>
<body>
<br/>
<br/>

<?php 
echo form_open('vtwsclient/vtigercsvexport');?>


<fieldset>
	<legend>Choix de la table</legend>
<br/>
<SELECT name="choix_table" id="table" size="1">
<OPTION value="Contacts">contacts
<OPTION value="Accounts">account name
<OPTION value="Vendors">vendors
</SELECT>


<input type="submit" value="Envoyer" />
</fieldset>
<?php echo form_close(); ?>



<h3>Le fichier CSV a bien été généré</h3>

</body>

</html>