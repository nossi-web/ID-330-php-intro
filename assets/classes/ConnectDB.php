<?php
/********
 * filename: ConnectDB.php
 * author:
 * description:
 */

 class ConnectDB {

    // Database connection credentials
    private $_servername = "localhost";
    private $_username = "root";
    private $_password = "root";

    // object to hold the mysqli
    private $_connection;

    function __construct() 
    {
        
    }

    function connect() {

        // Create new connection
        $this->_connection = new mysqli($this->_servername, $this->_username, $this->_password);

        // Check connection status
        if ($this->_connection->connect_error) {
            return "Connection failed: " . $this->_connection->connect_error;
        } else {
            return "Connection established. Have a niec dae!";
        }

    }

    function close() {

        // close the connection 
        $this->_connection->close();

        return "Connection closed. How very responsible of you";
    }

    function query($queryString) {

        return $this->_connection->query($queryString);

    }


 }

?>
