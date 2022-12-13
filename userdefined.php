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
    <td>{$row['year']}</td>
   </tr>";
}

?>

</table>

<p>Show all games made by ___ publisher (Use Publisher ID) </p>

<form action="results.php" method="post">

Publisher ID: <input type="text" name="name"><br>
<p> </p>

<p>Show all games with a score of ___ user rating (1-10) </p>

<p> </p>

User rating: <input type="text" name="rating"><br>
<p> </p>
<input type="submit">

</form>

</body>
</html>
