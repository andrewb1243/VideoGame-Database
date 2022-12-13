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
 $year = $_REQUEST['year'];
 $rating = $_REQUEST['rating'];
 $genre = $_REQUEST['genre'];
 $plat = $_REQUEST['plat'];
 $pub = $_REQUEST['pub'];
 $mul = $_REQUEST['mul'];

$sql = "INSERT INTO Game VALUES ('$name','$year','$rating','$genre','$plat','$pub','$mul')";

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
 
