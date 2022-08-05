<?php 
function DbConnection(){
    $servername = "localhost";
    $username = "u657940708_user";
    $password = "Staging123$";
    $db = "u657940708_tutorial_web";

    // Create connection
    $DbConn = new mysqli($servername, $username, $password,$db);
    if ($DbConn->connect_error) {
            return false;
        }
        return $DbConn;
}
?>