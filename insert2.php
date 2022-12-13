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
echo "Connected successfully,"

?>


<?php
 $name =  $_REQUEST['name'];

$sql = "INSERT INTO Genre (name) VALUES ('$name')";
 
  if(mysqli_query($conn, $sql)){
            echo "data stored in the database successfully.";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

?>

<p> Return to home </p>

<form action="home.php" method="post">

<input type="submit">

</form>

</body>
</html>
  
