<html>
<body>

<style>
        p{text-align: center;}
        input{text-align: center;}
        body{text-align: center;}
</style>

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
<p> </p>
  
Show all games made by PublisherID (<?php echo $_POST["name"]; ?>)

<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>

<?php

$name = $_REQUEST['name'];

$query = mysqli_query($conn, " SELECT * FROM Game WHERE publisherID = '$name'")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['title']}</td>
    <td>{$row['yearReleased']}</td>
    <td>{$row['userRating']}</td>
   </tr>";
}

?>
  
</table>

<p> </p>

Show all games with a user rating of (<?php echo $_POST["rating"]; ?>)

<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>
<?php

$rating = $_REQUEST['rating'];

$query = mysqli_query($conn, " SELECT * FROM Game WHERE userRating = '$rating'")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['title']}</td>
    <td>{$row['yearReleased']}</td>
    <td>{$row['userRating']}</td>
   </tr>";
}
?>

</body>
</html>
