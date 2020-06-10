<?php
    $host = 'postgresql2';
    $dbname = 'databasename';
    $username = 'databaseuser';
    $password = 'databasepassword';
 
  $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
   
  try{
     $conn = new PDO($dsn);
     
     if($conn){
      echo "Connecté à $dbname avec succès!";
     }
  }catch (PDOException $e){
     echo $e->getMessage();
  }
?>
