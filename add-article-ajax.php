<?php 
$id = $_POST['id'];
include "connection.php";
$conn=DbConnection();
if($_POST['page_type']=='blog'){


    echo json_encode($topic_name);
    exit;
}
if($_POST['type'] == 'save'){
    $tutorial_name = $_POST['tutorial_name'];
    $topic_name = $_POST['topic_name'];
    $type = $_POST['type'];
    $description = $_POST['article'];
    $insert_query = "INSERT INTO post (tutorial_name, topic_name, type,  description) VALUES ('$tutorial_name', '$topic_name', '$type', '$description')";
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