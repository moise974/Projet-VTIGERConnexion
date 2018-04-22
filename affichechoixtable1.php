<html>
<head>
<title>My Form</title>
<link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styletab.css">

</head>
<body>
	<br/>
	<br/>
<h4>Table Contact :</h4>

<!-- si choix = contacts -->
<div style="overflow-x:auto;">
<table border="5">
	<tr>
        <th>ACCOUNT ID </th>
        <th>ASSISTANT  </th>
        <th>ASSISTANT PHONE  </th>
        <th>BIRTHDAY  </th>
        <th>CONTACT NO  </th>
        <th>CREATED TIME</th>
        <th>DEPARTMENT</th>
        <th>DESCRIPTION</th>
        <th>DO NOT CALL</th>
        <th>EMAIL</th>
        <th>EMAIL OPTOUT</th>
        <th>FAX</th>
        <th>FIRST NAME</th>
        <th>HOME PHONE</th>
        <th>IMAGE NAME</th>
        <th>IS CONVERTED FROM LEAD</th>
        <th>LAST NAME</th>
        <th>LEAD SOURCE</th>
        <th>MAILING CITY</th>
        <th>MAILING COUNTRY</th>
        <th>MAILING POBOX</th>
        <th>MAILING STATE</th>
        <th>MAILING STREET</th>
        <th>MAILING ZIP</th>
        <th>MOBILE</th>
        <th>MODIFIED BY</th>
        <th>MODIFIED TIME</th>
        <th>NOTIFY OWNER</th>
        <th>OTHER CITY</th>
        <th>OTHER COUNTRY</th>
        <th>OTHER PHONE</th>
        <th>OTHER POBOX</th>
        <th>OTHER STATE</th>
        <th>OTHER STREET</th>
        <th>OTHER ZIP</th>
        <th>PHONE</th>
        <th>PORTAL</th>
        <th>REFERENCE</th>
        <th>CONTACT ID</th>
        <th>SALUTATION TYPE</th>
        <th>SECONDARY EMAIL</th>
        <th>ASSIGNED USER ID</th>
        <th>SOURCE</th>
        <th>STARRED</th>
        <th>SUPPORT END DATE</th>
        <th>SUPPORT START DATE</th>
        <th>TAGS</th>
        <th>TITLE</th>
        <th>ID</th>
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
          //echo count($value);
          
	?>
	</table>
</div>

<br/>
<a class="link" href="<?php echo site_url('vtwsclient/afficherform'); ?>">Retour aux formulaire</a>
</body>
</html>