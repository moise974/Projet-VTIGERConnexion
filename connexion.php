<?php 
//session_start();
?>
<html>
<head>
<title>My Form</title>
<link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styleform.css">
</head>
<body>
<fieldset>
	<legend>Connexion a Vtiger</legend>
<?php

// Open form and set URL for submit form
echo form_open('vtwsclient/vtigerapi');

// Show Name Field in View Page
echo form_label("Nom d'utilisateur VTIGER :", 'u_name');

echo form_input($data= array(
'name' => 'u_name',
'class' => 'input_box'
));



echo "<br/>";
echo form_label("User access key : ", 'userak');
echo form_password("userak");



echo "<br/>";
echo "<br/>";


echo form_submit($data = array('type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'));

echo "<br/>";
echo "<br/>";
echo validation_errors();

// Close Form
echo form_close();

?>

</fieldset>

	<br/>
QC9bTDKkWKIrZhH
<br/>
admin:FQnrHsam1TTHKXQL
<br/>
</body>
</html>