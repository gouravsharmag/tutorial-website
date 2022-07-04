<?php 
$id = $_POST['id'];
include "connection.php";
$conn=DbConnection();
$query="select * from tutorial_list where type!='heading' and tutorial_id='$id'";
$data=$conn->query($query);
$topic_name = array();
while($row = $data->fetch_assoc()){
    $topic_name[] = $row;
}
echo json_encode($topic_name);
exit;
?>