<?php
session_start();
// Change this to your connection info.
include "connection.php";
$conn=DbConnection();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
    //    session_register("myusername");
       $_SESSION['user'] = $myusername;
        // Taking current system Time
        $_SESSION['start'] = time(); 
        // Destroying session after 1 minute
        $_SESSION['expire'] = $_SESSION['start'] + (24 * 216000) ; 
        header('Location: add-article.php');
    }else {
        header('Location: index.php');
       $error = "Your Login Name or Password is invalid";
    }
 }
// if ( !isset($_POST['username'], $_POST['password']) ) {
// 	// Could not get the data that should have been sent.
// 	exit('Please fill both the username and password fields!');
// }