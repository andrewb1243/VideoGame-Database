<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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

  <p id="para">List all multiplayer video games that come from Nintendo?</p>


<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Game WHERE publisherID = 0 AND multiplayer = 1")
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

<p id="para">Which video game is the oldest?</p>

<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Game WHERE yearReleased=(SELECT MIN(yearReleased) FROM Game)")
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

<p id="para">List of Publishers:</p>


<table border="1" align="center">
<tr>
  <td>Publisher ID</td>
  <td>Publisher Name</td>
  <td>Established In</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Publisher")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['publisherID']}</td>
    <td>{$row['name']}</td>
    <td>{$row['revenue']}</td>
   </tr>";
  
  }

?>

</table>

<p>           </p>

<p>Show all games made by ___ publisher (Use Publisher ID) </p>

<form action="results.php" method="post">

Publisher ID: <input type="text" name="name"><br>
<input type="submit">

</form>

</body>
</html>
