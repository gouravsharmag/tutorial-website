<?php 
$id = $_POST['id'];
include "connection.php";
$conn=DbConnection();
if($_POST['page_type']=='blog'){
    $name = $_POST['name'];
    $content = $_POST['article'];
    $keywords = $_POST['keywords'];
    $meta_description = $_POST['meta_description'];
    $blog_insert_query = "INSERT INTO blog (blog_name, content, created_at,keywords,meta_description) VALUES ('$name', '$content', NOW(),'$keywords','$meta_description')";
    $conn->query($blog_insert_query);
    echo json_encode($name);
    exit;
}
if($_POST['type']=='getContent'){
    $tutorial_name = $_POST['tutorial_name'];
    $topic_name = $_POST['topic_name'];
    $tutorial_query = "SELECT description FROM post WHERE tutorial_name = '$tutorial_name' and topic_name='$topic_name'";
    $tutorial_query = $conn->query($tutorial_query);
    $tutorial_data = $tutorial_query->fetch_assoc();
    $tutorial_data = $tutorial_data['description'];
    echo json_encode($tutorial_data);
    exit;
}
if($_POST['type'] == 'save'){
    $tutorial_name = $_POST['tutorial_name'];
    $topic_name = $_POST['topic_name'];
    $type = $_POST['type'];
    $description = $_POST['article'];
    $keywords = $_POST['keyword'];
    $meta_description = $_POST['meta_description'];
    $insert_query = "INSERT INTO post (tutorial_name, topic_name, type,  description,keywords,meta_description) VALUES ('$tutorial_name', '$topic_name', '$type', '$description','$keyword','$meta_description')";
    $conn->query($insert_query);
}
else{
    $query="select * from tutorial_list where type!='heading' and tutorial_id='$id'";
    $data=$conn->query($query);
    $topic_name = array();
    while($row = $data->fetch_assoc()){
        $topic_name[] = $row;
    }
    echo json_encode($topic_name);
    exit;
}
?>