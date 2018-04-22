<html>
<head>
<title>My Form</title>
<link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styletab.css">

</head>
<body>

<br/>
<br/>
	<h4>Recherche compte :</h4>
<div style="overflow-x:auto;">
<table border="5">
	<tr>
		<th>ACCOUNT NAME </th>
		<th>ACCOUNT NO </th>
		<th>ACCOUNT TYPE </th>
		<th>ANNUAL REVENUE </th>
		<th>BILL CITY </th>
		<th>BILL CODE </th>
		<th>BILL COUNTRY </th>
		<th>BILL POBOX </th>
		<th>BILL STATE </th>
		<th>BILL STREET </th>
		<th>CREATED TIME </th>
		<th>DESCRIPTION   </th>
		<th>EMAIL n°1</th>
		<th>EMAIL n°2  </th>
		<th>EMAIL optout  </th>
		<th>employees  </th>
		<th>fax  </th>
		<th>industry  </th>
		<th>IS CONVERTED FROM LEAD </th>
		<th>MODIFIED BY </th>
		<th>MODIFIED TIME </th>
		<th>NOTIFY OWNER </th>
		<th>OTHER PHONE </th>
		<th>OWNER SHIP </th>
		<th>ACCOUNT ID </th>
		<th>PHONE </th>
		<th>RATING </th>
		<th>SHIP CITY</th>
		<th>SHIP CODE </th>
		<th>SHIP COUNTRY   </th>
		<th>SHIP POBOX</th>
		<th>SHIP STATE </th>
		<th>SHIP STREET </th>
		<th>SIC CODE  </th>
		<th>ASSIGNED USER ID </th>
		<th>SOURCE  </th>
		<th>STARRED </th>
		<th>TAGS </th>
		<th>TICKER SYMBOL  </th>
		<th>WEBSITE </th>
		<th>ID  </th>
	</tr>
	<?php 
	foreach ($nom as $key => $value) 
	{
		/*foreach ( $value as $key2 => $value2) 
 		{ 
			echo $key2 . ' - ';
 		}
		*/
  		?>
	<tr>
	<td><?php echo $value['accountname']; ?></td>
	<td><?php echo $value['account_no']; ?></td>
	<td><?php echo $value['accounttype']; ?></td>
	<td><?php echo $value['annual_revenue']; ?></td>
	<td><?php echo $value['bill_city']; ?></td>
	<td><?php echo $value['bill_code']; ?></td>
	<td><?php echo $value['bill_country']; ?></td>
	<td><?php echo $value['bill_pobox']; ?></td>
	<td><?php echo $value['bill_state']; ?></td>
	<td><?php echo $value['bill_street']; ?></td>
	<td><?php echo $value['createdtime']; ?></td>
	<td><?php echo $value['description']; ?></td>
	<td><?php echo $value['email1']; ?></td>
	<td><?php echo $value['email2']; ?></td>
	<td><?php echo $value['emailoptout']; ?></td>
	<td><?php echo $value['employees']; ?></td>
	<td><?php echo $value['fax']; ?></td>
	<td><?php echo $value['industry']; ?></td>
	<td><?php echo $value['isconvertedfromlead']; ?></td>
	<td><?php echo $value['modifiedby']; ?></td>
	<td><?php echo $value['modifiedtime']; ?></td>
	<td><?php echo $value['notify_owner']; ?></td>
	<td><?php echo $value['otherphone']; ?></td>
	<td><?php echo $value['ownership']; ?></td>
	<td><?php echo $value['account_id']; ?></td>
	<td><?php echo $value['phone']; ?></td>
	<td><?php echo $value['rating']; ?></td>
	<td><?php echo $value['ship_city']; ?></td>
	<td><?php echo $value['ship_code']; ?></td>
	<td><?php echo $value['ship_country']; ?></td>
	<td><?php echo $value['ship_pobox']; ?></td>
	<td><?php echo $value['ship_state']; ?></td>
	<td><?php echo $value['ship_street']; ?></td>
	<td><?php echo $value['siccode']; ?></td>
	<td><?php echo $value['assigned_user_id']; ?></td>
	<td><?php echo $value['source']; ?></td>
	<td><?php echo $value['starred']; ?></td>
	<td><?php echo $value['tags']; ?></td>
	<td><?php echo $value['tickersymbol']; ?></td>
	<td><?php echo $value['website']; ?></td>
	<td><?php echo $value['id']; ?></td>
	</tr>
	</table>
</div>
<br/>
		<?php	
	}
	?>
<br/>
<a class="link" href="<?php echo site_url('vtwsclient/afficherform'); ?>">Retour aux formulaire</a>
</body>
</html>