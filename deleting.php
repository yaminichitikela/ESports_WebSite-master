<html>
<head>
  <title>Classic Shave Entry Results</title>
</head>
<body>
<h1>Classic Shave Entry Results</h1>
<?php
  // create short variable names
 
  $Product_ID=$_POST['Product_ID'];
 
  

  if ( !$Product_ID  ) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
   
    $Product_ID = addslashes($Product_ID);
    
  }

  @ $db = new mysqli('localhost', 'grammaa2_aldo', 'Grammatica101!!', 'grammaa2_Classic_Shave_database');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }
$query = "DELETE FROM Product WHERE Product_ID='$Product_ID'";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." product deleted into database.";
  } else {
  	  echo "An error has occurred.  The item was not deleted.";
  }

  $db->close();
?>
</body>
</html>
