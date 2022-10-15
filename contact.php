<?php 
include "connection.php";
$conn=DbConnection();
$query="select * from tutorial where deleted='0' limit 10";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" async="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<style>
.form-field input,.form-field textarea{
    height: 40px;
    border-radius: 5px;
    border: 1px solid grey;
    outline: none;
}
label{
    width: 10%;
}
textarea{
    height: 15rem !important;
    width: 35%;
}
input{
    width: 25%;
}
.submit{
    color: #fff;
    background: blue;
}
.btn-sub{
    
    width: 25rem;

}
@media only screen and (max-width: 768px) {
    label{
        width: 25%;
    }
    textarea{
        height: 15rem !important;
        width: 65%;
    }
    input{
        width: 65%;
    }
}
</style>
<body>
<button onclick="topFunction()" id="myBtn">⇧ TOP</button>
    <div id="page" style="margin:-8px;background-color:#ffffff;"><div id="container"> <div class="header">
        <table style="width:100%;height: 6rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="index.php" style="color:#000000;text-decoration:none;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
            <!-- <div style="float:left;width:12rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials <i class="fa fa-caret-down" style="font-size: 20px; display: inline;"></i></div>  -->
            <div style="float:left;width:3rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;"> <a href="blogs.php" style="color:#000;text-decoration:none;font-weight:600;">Blogs </a></div> 
</td></tr></tbody></table></div>
    <div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;padding-top:0.5rem;">
    <span style="float:left;padding-top:2px;"><a href="index.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a></span> 
    <span style="float:left;padding-top:2px;"><a href="blogs.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;">Blogs</a></span> 
    <span style="position: relative;right: 1.5rem;bottom: 2.5px;"><i class="fa-solid fa-bars" style="font-size: 30px;float: right;"></i></span>
</div>
    <div style="margin:0px;padding:0px;clear:both">
    </div>
    </div>
    <div id="link" style="clear:both"> <div class="ddsmoothmenu">
    <ul>
    <li><a class="home-a selected" href="index.php" ><i class="fa-solid fa-house-chimney" style="font-size: 26px;"></i></a></li>
    <?php for($i=0;$i<count($tutorial_name);$i++){?>
    <li><a href="content/<?php echo $tutorial_name[$i]['home_link'];?>"><?php echo $tutorial_name[$i]['name'];?></a>
    <?php }?>
    </li>
    </ul>
    <br style="clear: left">
    </div></div>
    <div class="mobilemenu" style="clear:both">

    
    </div>
    <div class="container">
    <div class="site-inner wrap">
        <main id="secondary" class="site-secondary">
                <article id="post-20" class="post-20 page type-page status-publish hentry">
                    <header class="entry-header"><h1 class="entry-title">Contact Us</h1></header>
                    <div class="entry-content"><p>If you have any suggestions regarding the tutorials on this website, please feel free to send us your feedback.</p></div>
                </article>
                <div class="contact-form">
                <form method="POST" id="upload_form" enctype="multipart/form-data">
                        <div class="form-field form-group"> 
                            <label for="contact_name">Name:</label> <input autofocus="true" type="text" name="contact_name" id="contact_name" value="" required=""> <small class="error"></small></div>
                            <div class="form-field form-group"> <label for="email">Email:</label> <input type="email" name="email" id="email" value="" required=""> <small class="error"></small></div>
                            <div class="form-field form-group"> <label for="message">Message: </label><textarea name="message" id="message" cols="30" rows="10" required=""></textarea><small class="error"></small>
                        </div>
                            <div class="form-field form-group"> <button type="button" class="btn btn-primary btn-sub" onClick="submitForm()">Send</button></div> 
                    </form>
                </div>
            </main>
        </div>
    </div>
    <div class="bg-info text-center text-white">
        <div class="container p-4">
            <span class="f-twitter">
                <section class="mb-0"><br><p><b>ApnaTutorial</b> is an online platform which is designed to learn new technologies with a highly interactive user interface.</p></section><section class=""><div class="row foot"><div class="col-lg-3 col-md-6 mb-1 mb-md-0">
                    <ul class="list-unstyled mb-0"><li><a class="foot-link" href="about.php" style="display: inherit;">About</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="privacy.php" style="display: inherit;">Privacy Policy</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="contact.php" style="display: inherit;">Contact Us</a></li></ul></div></div></section></div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2022 Copyright:<a class="text-white" href="/index.php">ApnaTutorial</a></div>
    </div>
    <script>
function submitForm(){

if ((!document.getElementById("contact_name").value) && (!document.getElementById("email").value)){
    alert("Fill Complete Details")
}
else{
    form = $("form#upload_form");
    var formData = new FormData(form[0]);
    formData.append('type', 'save');
    $.ajax({
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    url: "contactAjax.php",
    success: function (data) {
        alert("Request Submitted");
        window.location.href='index.php';
    },
    complete: function(data){
    },
});
}
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
</body>
</html>