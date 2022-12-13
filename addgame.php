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

<p>List of Publishers:</p>


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
    <td>{$row['year']}</td>
   </tr>";
}

?>

</table>


<p>List of Genres:</p>


<table border="1" align="center">
<tr>
  <td>Genre ID</td>
  <td>Genre Name</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Genre")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['genreID']}</td>
    <td>{$row['name']}</td>
   </tr>";
}

?>
  
</table>

<p>List of Platforms:</p>


<table border="1" align="center">
<tr>
  <td>Platform ID</td>
  <td>Platform Name</td>
  <td>Year Released</td>
</tr>

<?php

$query = mysqli_query($conn, " SELECT * FROM Platform")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['platformID']}</td>
    <td>{$row['name']}</td>
    <td>{$row['yearReleased']}</td>
   </tr>";
}
  ?>

</table>


<p>ADD YOUR GAME:  </p>

<form action="insert.php" method="post">
<p> </p>

TITLE: <input type="text" name="name"><br>
<p> </p>

YEAR RELEASED: <input type="text" name="year"><br>
<p> </p>

USER RATING: <input type="text" name="rating"><br>
<p> </p>

GENRE ID: <input type="text" name="genre"><br>
<p> </p>

PLATFORM ID: <input type="text" name="plat"><br>
<p> </p>

PUBLISHER ID: <input type="text" name="pub"><br>
 
<p> </p>

MULTIPLAYER? (1 = yes, 0 = no) <input type="text" name="mul"><br>


<p> </p>
<input type="submit">
</form>


</body>
</html>
  
