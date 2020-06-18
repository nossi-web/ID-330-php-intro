<?php
/********
 * filename: ConnectDB.php
 * author:
 * description:
 */

 include("assets/classes/ConnectDB.php");

 $connection = new ConnectDB();

 echo $connection->connect();

 echo "<br>";
 echo "<br>";

 $queryString = "SELECT * FROM users.user";

 $result = $connection->query($queryString);
echo "<pre>";
 var_dump($result);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      var_dump($row);
      echo "<br>";
      echo "<br>";
  }
} else {
  echo "0 results";
}


echo "</pre>";

 echo "<br>";
 echo "<br>";

 echo $connection->close();