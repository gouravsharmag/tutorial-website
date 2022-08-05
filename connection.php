<?php 
function DbConnection(){
    $servername = "localhost:6706";
    $username = "u657940708_tutorial";
    $password = "Staging123$";
    $db = "u657940708_tutorial";

    // Create connection
    $DbConn = new mysqli($servername, $username, $password,$db);
    if ($DbConn->connect_error) {
            // $this->logs .= "DB Connection failed: " . $DbConn->connect_error."\n";
            $GLOBALS['log']->fatal("DB Connection failed: " . $DbConn->connect_error);
            return false;
        }
        return $DbConn;
}
?>