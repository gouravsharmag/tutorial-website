<?php 
session_start();
   
   if(!isset($_SESSION['user'])) {
    //    echo "<p align='center'>Want to login again</p>";
    // header("Location: login.php");  
   }
   else {
       $now = time();
       if($now > $_SESSION['expire']) {
           session_destroy();
           echo "<p align='center'>Session has been destroyed!!</p>";
           header("Location: login.php");  
       }
       else { 
           header("Location: add-article.php");
       }
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="new-css.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>