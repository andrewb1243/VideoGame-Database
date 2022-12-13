<!DOCTYPE html>
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
          body,h1 {font-family: "Fantasy"}
</style>

<p> Click to go to user defined queries! </p>

<?php

echo '<form action="userdefined.php" method="post">
<input type="submit"/>
</form>';


?>

<p> Click to enter your faviorte video game!</p>

<?php

echo '<form action="videogame_add.php" method="post">
<input type="submit"/>
</form>';


?>

<p id="para">List all multiplayer video games that come from Rockstar?</p>
  
 <table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Game WHERE publisherID = 2 AND multiplayer = 1")
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

<p id="para">Which video game is the oldest in the database currently?</p>

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

<p id="para">Which video game is the newest in the database currently?</p>
  
<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>


<?php

$query = mysqli_query($conn, " SELECT * FROM Game WHERE yearReleased=(SELECT MAX(yearReleased) FROM Game)")
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

<p id="para">What are the highest rated Nintendo games?</p>
 
<table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>


<?php

$query = mysqli_query($conn, " SELECT * FROM Game WHERE publisherID = 1 AND userRating = 10")
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
  
<p id="para">Sort the years the most games were released in ascending order:</p>


<table border="1" align="center">
<tr>
  <td>YearReleased</td>
</tr>

<?php

$query = mysqli_query($conn, "SELECT yearReleased from Game GROUP BY yearReleased ORDER BY COUNT(*) DESC ")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['yearReleased']}</td>
   </tr>";
}

?>

</table>

<p id="para">Show all games made for the Wii:</p>

  <table border="1" align="center">
<tr>
  <td>Title</td>
  <td>YearReleased</td>
  <td>UserRating</td>
</tr>

<?php

$query = mysqli_query($conn, "SELECT * FROM Game WHERE platformID = 0")
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
  

</body>
</html>

  
  

  
  
  
