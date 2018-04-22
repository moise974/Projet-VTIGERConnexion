<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
    <link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styleform.css">
</head>
<body>
<br/>
<br/>

<?php 
echo form_open('vtwsclient/vtigerchoixtable');?>


<fieldset>
	<legend>Choix de la table a exporter</legend>
<br/>
<SELECT name="choix_table" id="table" size="1">
	<OPTION value="Contacts">contacts
	<OPTION value="Accounts">account name
	<OPTION value="Vendors">vendors
</SELECT>

   Limite d'affichage:
<SELECT name="limit" id="table" size="1">
	<OPTION value="1">1
	<OPTION value="5">5
	<OPTION value="10">10
	<OPTION value="20">20
	<OPTION value="50">50
	<OPTION value="100">100
</SELECT>

<input type="submit" value="Envoyer" />
</fieldset>
<?php echo form_close(); ?>



</body>

</html>
