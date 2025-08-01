<?php

$servername = 'localhost';
$username = '';
$password = '';

// Create connection
//$conn = mysqli_connect($servername, $username, $password);
/*
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "Connected successfully";
echo "Connected successfully";
*/





?>


<?php
/*
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



$sql = 'SELECT * FROM `tb_test`';
$result = mysqli_query($conn, $sql);


echo $sql;
echo $result;

yA@_122110#abd

*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
	echo 'Connected';
}



$sql = "SELECT * FROM `tb_test`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	  
	  $id_[] = $row["id"];
	  
	  
	  
    echo "id: " . $row["id"]. " - Name: " . $row["test_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

print_r($id_);



?>








