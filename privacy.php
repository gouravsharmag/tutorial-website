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
    height: 12rem !important;
    width: 30%;
}
input{
    width: 25%;
}
.submit{
    color: #fff;
    background: blue;
}.entry-content{
    font-size: 20px;
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
                    <header class="entry-header"><h1 class="entry-title">Privacy & Policies</h1></header>
                    <div class="entry-content">
                        <p>

This page is used to inform website visitors regarding our policies with the collection, use and disclosure of personal information if anyone decided to use our service.
If you choose to use our service, then you agree to the collection and use of information in relation with this policy. The personal information that we collect are used for providing and improving the service. We will not use or share your information with anyone except as described in this privacy policy.
The terms used in this privacy policy have the same meanings as in our terms and conditions which is accessible at website URL, unless otherwise defined in this privacy policy.
    </p>
    <b>Information Collection and Use :</b>
<p>We will never ask for your personal information except the information generated by the google analytics i.e login information.
</p>
<b>Log Data :</b>
<p>
We want to inform you that whenever you visit our service, we collect information that your browser sends to us that is called log data. This log data may include information such as your computer's internet protocol i.e IP address, browser version, pages of our service that you visit, the time and date you visit, the time spent on those pages, and other statistics.
    </p>
<b>Cookies :</b>
<p>
Cookies are the files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer's hard drive.
Our website use these cookies to collect information and to improve our service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our service.</p>
    </p></div>
                </article>
            </main>
        </div>
    </div>
    <div class="bg-info text-center text-white">
        <div class="container p-4">
            <span class="f-twitter">
                <section class="mb-0"><br><p><b>ApnaTutorial</b> is an online platform which is designed to learn new technologies with a highly interactive user interface.</p></section><section class=""><div class="row foot"><div class="col-lg-3 col-md-6 mb-1 mb-md-0">
                    <ul class="list-unstyled mb-0"><li><a class="foot-link" href="about.php" style="display: inherit;">About</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="privacy.php" style="display: inherit;">Privacy Policy</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="contact.php" style="display: inherit;">Contact Us</a></li></ul></div></div></section></div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright:<a class="text-white" href="/index.php">ApnaTutorial</a></div>
    </div>
</body>
</html>