

 <?php

   require 'authentification.php';
  
   $id = $_GET['id'];

   $cs = json_encode ($woocommerce->get('customers/'.$id)); 
   $cs = json_decode ($cs,true);

 ?>

<form  action='updatec.php'  method='POST'  >
   
  <label>username:</label><br>
  <input type="text" name="cusername" value ="<?php echo $cs['username']; ?>"> <br>

  <label>nom:</label><br>
  <input type="text" name="cnom" value ="<?php echo $cs['first_name']; ?>">

    <label>prenom:</label><br>
  <input type="text" name="cprenom"  value ="<?php echo $cs['last_name']; ?> ">

  <label>email:</label><br>
  <input type="text"  name="email" value ="<?php echo $cs['email']; ?>">

  <input type="hidden" value ="<?php echo $id; ?>"  name="id">

  <input type="submit" value="Modifier">

</form>
