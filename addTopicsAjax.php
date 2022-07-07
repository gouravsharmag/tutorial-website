<?php
include "connection.php";
$name = $_POST['name'];
$description = $_POST['description'];
$color = $_POST['bkgcolor'];
$DbConn = DbConnection();
$insert_query = "INSERT INTO tutorial (name, description,color) VALUES ('$name', '$description','$color' )";
$DbConn->query($insert_query);
$tutorial_id_query = "SELECT id FROM tutorial WHERE name = '$name'";
$tutorial_id_query = $DbConn->query($tutorial_id_query);
$tutorial_id_data = $tutorial_id_query->fetch_assoc();
$tutorial_id = $tutorial_id_data['id'];
foreach ($_POST['topic_name'] as $list ) {
    if(substr($list, 0, 2 ) === "H-"){
        $name = str_replace('H-','',$list);
        $heading_insert_query = "INSERT INTO tutorial_list (tutorial_id, type, name) VALUES ('$tutorial_id', 'heading', '$name')";
        $DbConn->query($heading_insert_query);  
    }
    else{
        $name = $list;
        $topic_insert_query = "INSERT INTO tutorial_list (tutorial_id, type, name) VALUES ('$tutorial_id', 'topic', '$name')";
        $DbConn->query($topic_insert_query);
    }
}
?>