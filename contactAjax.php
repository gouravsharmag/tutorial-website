<?php
include "connection.php";
$conn=DbConnection();
if($_POST['type']=='save'){
    $contact_name = $_POST['contact_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $insert_query = "INSERT INTO contact (name, email, message) VALUES ('$contact_name', '$email', '$message')";
    $conn->query($insert_query);
    echo json_encode($$contact_name);
    exit;
}

?>