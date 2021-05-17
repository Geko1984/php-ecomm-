
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "phpecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "- Descrizione " . $row["descrizione"]."- Prezzo " . $row["price"]."- Id categoria ".  $row["category_id"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>