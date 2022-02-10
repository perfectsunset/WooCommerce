


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

    <?php
         require 'authentification.php';
        
         $customers = json_encode($woocommerce->get('customers'));
         $customers = json_decode( $customers,true);
     ?>

  <h1>liste des Clients </h1>

   <a href="addcustomer.php">Ajouter client</a>
   <br>
 
  <table>
  <tr>
    
    <th>username</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>action</th>
  </tr>

  <?php
    foreach($customers  as $cust )
    {
        echo ' <tr>';
                echo '<td>' .$cust ['username']. '</td>';
                echo '<td>' .$cust['first_name']. '</td>';
                echo '<td>' .$cust['last_name']. '</td>';
                echo '<td>' .$cust['email']. '</td>';

                echo '<td>  <a href="updatecustomer.php?id='.$cust['id'].'"> Update</a> 
                      <a href="deletecustomer.php?id='.$cust['id'].'">Delete</a> </td>';
        echo ' <tr>';
     }

  ?>
   
</table>

</body>
</html>