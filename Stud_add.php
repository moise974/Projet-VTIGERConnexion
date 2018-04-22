<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
      <link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styletab.css">
      <link rel = "stylesheet" type = "text/css" href = " http://172.30.0.61/CodeIgniter/application/views/css/styleform.css">
   </head> 
   <body> 
      <br/>
      <br/>
      <fieldset>
         <legend>Ajouter</legend>
         <?php 
            echo form_open('Stud_controller/add_student');
            echo form_label('Login'); 
            echo form_input(array('id'=>'login','name'=>'login')); 
            echo "<br/>"; 
			
            echo form_label('Name'); 
            echo form_input(array('id'=>'name','name'=>'name')); 
            echo "<br/>"; 
			   echo "<br/>";
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?>
         </fieldset> 
         <br/>
      <a class="link" href="http://172.30.0.61/CodeIgniter/index.php?/Stud_controller">Retour à l'affichage</a>
   </body>
</html>