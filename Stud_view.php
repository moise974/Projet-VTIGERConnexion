<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styletab.css">
   </head>
	
   <body> 
      <br/>
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<th>Numéro</th>"; 
            echo "<th>Login</th>"; 
            echo "<th>Name</th>"; 
            echo "<th>Modifier</th>"; 
            echo "<th>Supprimer</th>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>"; 
               echo "<td>".$r->login."</td>"; 
               echo "<td>".$r->name."</td>"; 
               echo "<td><a href = 'http://172.30.0.61/CodeIgniter/index.php?/stud/edit/"
                  .$r->login."'>Modifier</a></td>"; 
               echo "<td><a href = 'http://172.30.0.61/CodeIgniter/index.php?/stud/delete/"
                  .$r->login."'>Supprimer</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
      <br/>
      <br/>
      <a class="link" href="http://172.30.0.61/CodeIgniter/index.php?/stud/add_view">Ajouter</a>
   </body>
	
</html>