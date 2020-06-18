<?php
/********
 * filename: ConnectDB.php
 * author:
 * description:
 */

 include("assets/classes/ConnectDB.php");

 $connection = new ConnectDB();

 echo $connection->connect();

 echo $connection->close();