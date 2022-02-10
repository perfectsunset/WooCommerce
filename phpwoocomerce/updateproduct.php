
 <?php

   require 'authentification.php';
  
   $id = $_GET['id'];

   $prod = json_encode ($woocommerce->get('products/'.$id)); 
   $prod = json_decode ($prod,true);

 ?>

<form  action='updatep.php'  method='POST'  >
   
  <label>nom:</label><br>
  <input type="text" name="pnom" value ="<?php echo $prod['name']; ?>"> <br>

  <label>quantité:</label><br>
  <input type="text" name="pquantity" value ="<?php echo $prod['stock_quantity']; ?>">

    <label>prix:</label><br>
  <input type="text" name="pprix"  value ="<?php echo $prod['regular_price']; ?> ">

  <label for="lname">categorie:</label><br>
  <input type="text"  name="pcategorie" value ="<?php echo $prod['categories'][0]['name']; ?>">

  <input type="hidden" value ="<?php echo $id; ?>"  name="id">

  <input type="submit" value="Modifier">

</form>
