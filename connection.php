<?php 
function DbConnection(){
    $servername = "localhost:6706";
    $username = "root";
    $password = "";
    $db = "tutorial_website";

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