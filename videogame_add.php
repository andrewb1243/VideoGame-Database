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
  
<p> Click to add a game! </p>

<?php

echo '<form action="addgame.php" method="post">
<input type="submit"/>
</form>';


?>

<p> Click to add a genre! </p>

<?php

echo '<form action="addgenre.php" method="post">
<input type="submit"/>
</form>';


?>

<p> Click to add a publisher! </p>

<?php
  
<?php

echo '<form action="addpublisher.php" method="post">
<input type="submit"/>
</form>';


?>

</body>
</html>
 
