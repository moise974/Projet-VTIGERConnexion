<html>
<head>
<title>My Form</title>
<link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styletab.css">
</head>
<body>
	<br/>
	<br/>
    <h4>Table Vendeurs :</h4>
<!-- si choix = vendors -->
<div style="overflow-x:auto;">
<table border="5">
	<tr>
        <th>CATEGORY</th>
        <th>CITY</th>
        <th>COUNTRY</th>
        <th>CREATED TIME</th>
        <th>DESCRIPTION</th>
        <th>EMAIL</th>
        <th>GLACCT</th>
        <th>MODIFIED BY</th>
        <th>MODIFIED TIME</th>
        <th>PHONE</th>
        <th>POBOX</th>
        <th>POSTAL CODE</th>
        <th>ASSIGNED USER ID</th>
        <th>SOURCE</th>
        <th>STARRED</th>
        <th>STATE</th>
        <th>STREET</th>
        <th>TAGS</th>
        <th>VENDOR NAME</th>
        <th>VENDOR NO</th>
        <th>WEBSI</th>
        <th>id</th>

    </tr>

<?php 

	foreach ($choix as $key => $value) 
	{
		foreach ( $value as $clé => $value2) 
 		{ 
		
			?>

			<td><?php echo $value[$clé]; ?></td>

			<?php
		}
	}


	?>

</table>
</div>
<br/>
<a class="link" href="<?php echo site_url('vtwsclient/afficherform'); ?>">Retour aux formulaire</a>
</body>
</html>