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
echo form_open('vtwsclient/vtigercsvexport');?>


<fieldset>
	<legend>Choix de la colonne</legend>
<br/>
<SELECT name="choix_colonne" id="table" size="1">
<OPTION value="account_id">Account id
<OPTION value="assistant">assistant
<OPTION value="assistantphone">assistant phone
</SELECT>

<input type="submit" value="Envoyer" />
</fieldset>
<?php echo form_close(); ?>

<a class="link" href="<?php echo site_url('vtwsclient/vtigerchoixtable'); ?>">Retour aux choix de la table</a>

</body>

</html>