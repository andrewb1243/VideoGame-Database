<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "andrewDB";
$db = "videoGames";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<style>
        p{text-align: center;}
        input{text-align: center;}
        body{text-align: center;}
</style>
  
  
<p>ADD YOUR GENRE:  </p>

<form action="insert2.php" method="post">
<p> </p>

NAME: <input type="text" name="name"><br>
<p> </p>

<input type="submit">
</form>
