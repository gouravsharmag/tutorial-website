<?php
include "connection.php";
$name = $_POST['name'];
// $count = $_POST['count'];
$description = $_POST['description'];
$DbConn = DbConnection();
$insert_query = "INSERT INTO tutorial (name, description) VALUES ('$name', '$description')";
$DbConn->query($insert_query);
foreach ($_POST['topic_name'] as $list ) {
    if(substr($_POST['topic_name'][0], 0, 2 ) === "H-"){
        
    }
}

?>