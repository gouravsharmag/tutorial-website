<?php
include "connection.php";
$name = $_POST['name'];
$description = $_POST['description'];
$color = $_POST['bkgcolor'];
$category = $_POST['category'];
$DbConn = DbConnection();
$insert_query = "INSERT INTO tutorial (name, description,color,category_id) VALUES ('$name', '$description','$color','$category' )";
$DbConn->query($insert_query);
$tutorial_id_query = "SELECT id FROM tutorial WHERE name = '$name'";
$tutorial_id_query = $DbConn->query($tutorial_id_query);
$tutorial_id_data = $tutorial_id_query->fetch_assoc();
$tutorial_id = $tutorial_id_data['id'];
$count=0;
foreach ($_POST['topic_name'] as $list ) {
    if(substr($list, 0, 2 ) === "H-"){
        $name = str_replace('H-','',$list);
        $heading_insert_query = "INSERT INTO tutorial_list (tutorial_id, type, name) VALUES ('$tutorial_id', 'heading', '$name')";
        $DbConn->query($heading_insert_query);  
    }
    else{
        $url = $_POST['name']."-".str_replace(' ', '-', strtolower($list));
        if($count==0){
            $query = "update tutorial set home_link='$url' where id='$tutorial_id'"; 
            $DbConn->query($query);
        }
        $name = $list;
        $count++;
        $topic_insert_query = "INSERT INTO tutorial_list (tutorial_id, type, name,topic_url) VALUES ('$tutorial_id', 'topic', '$name','$url')";
        $DbConn->query($topic_insert_query);
    }
}
?>