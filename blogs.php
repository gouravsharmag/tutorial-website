<?php 
include "connection.php";
$conn=DbConnection();
$query="select * from tutorial limit 10";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
$query="select * from blog limit 10";
$data=$conn->query($query);
$blogs = array();
while($row = $data->fetch_assoc()){
    $blogs[] = $row;
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" async="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.tutorial-name{
    padding: 0.5rem 0 3rem;
    border-radius: 5px;
    text-align: center;
    margin-bottom: 2rem;
}
.tut-button{
    background: #282A35;
    padding: 10px 20px;
    border-radius: 15px;
    color: #fff;
    font-weight: bold;
    font-size:15px;
}
.tut-button:hover{
    color:#fff;
    text-decoration: none;
    background: #000;
}
.ddsmoothmenu ul li a {
    font-size: 17px;
}
.ddsmoothmenu ul li a.home-a{
    position: relative;
    bottom: 0.5rem;
    padding-left: 2rem;
    padding-right: 1.5rem;

}
body{
    overflow-x: hidden;
}
.righthome{
    width: 29%;
    float: left;
    margin-left: 15px;
    margin-top: 0px;
    margin-bottom: 10px;
}
.bloghead{
    background: #D9EEE1;
    color:#000;
    font-size: 20px;
    border-left: 10px solid #282A35;
    padding: 10px 5px;
}
.content-blog{
    color: #777;
}
.time-blog{
    position: relative;
    top: 4px;
}
div.onlycontent{
    margin: 0% 1% 0% 2%;
}
.bg-info{
    width: 100%;
    display: flow-root;
}
@media screen and (min-width: 1025px) and (max-width: 1441px){
div.onlycontent {
    width: 65%;
}
}
.blogs_content{
    margin-bottom: 3rem;
}
.blog_div{
    border-bottom: 1px solid #b7a9a9;
    margin: 0% 1%;
    height: 10rem;
}
#container{
    background: #fff;
}
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn">⇧ TOP</button>
    <div id="page" style="margin:-8px;background-color:#ffffff;"><div id="container"> <div class="header">
        <table style="width:100%;height: 6rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="index.php" style="color:#000000;text-decoration:none;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
            <!-- <div style="float:left;width:12rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials <i class="fa fa-caret-down" style="font-size: 20px; display: inline;"></i></div>  -->
            <div style="float:left;width:3rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;"> <a href="blogs.php" style="color:#000;text-decoration:none;font-weight:100;">Blogs </a></div> 
</td></tr></tbody></table></div>
    <div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;padding-top:0.5rem;">
    <span style="float:left;padding-top:2px;"><a href="index.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a></span> 
    <span style="position: relative;right: 1.5rem;bottom: 2.5px;"><i class="fa-solid fa-bars" style="font-size: 30px;float: right;"></i></span>
</div>
    <div style="margin:0px;padding:0px;clear:both">
    </div>
    </div>
    <div id="link" style="clear:both"> <div class="ddsmoothmenu" style="z-index: 99;">
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
    <!-- left bar -->
    <div class="container blogs_content">
    <!-- <div class="row"> -->
        <?php for($l=0;$l<count($blogs);$l++){ 
            if($l==0){
             echo   '<div class="row">' ; 
            }
            if($l%3==0){
                echo   '</div><div class="row">' ; 
            }?>
        <div class="col-md-8">
            <div class="blog_div">
                <a style="text-decoration:none;"href="blog-content/<?php echo str_replace(' ', '-', strtolower($blogs[$l]['blog_name']));?>">
            <h3 style="font-weight:bold;"><?php echo $blogs[$l]['blog_name'];?></h3>
            <div class="content-blog"><?php echo $blogs[$l]['content'];?></div>
            <div><span class="white-space-wrap">
				<span class="metropolis-regular-font-family fs13 line-height-20px color-hex-seven custom-font-weight-normal">1 year ago</span>
                </span>
                <span class="time-blog">
                    <svg class="star-15px_svg__svgIcon-use" width="15" height="15" viewBox="0 0 15 15">
                        <path d="M7.44 2.32c.03-.1.09-.1.12 0l1.2 3.53a.29.29 0 0 0 .26.2h3.88c.11 0 .13.04.04.1L9.8 8.33a.27.27 0 0 0-.1.29l1.2 3.53c.03.1-.01.13-.1.07l-3.14-2.18a.3.3 0 0 0-.32 0L4.2 12.22c-.1.06-.14.03-.1-.07l1.2-3.53a.27.27 0 0 0-.1-.3L2.06 6.16c-.1-.06-.07-.12.03-.12h3.89a.29.29 0 0 0 .26-.19l1.2-3.52z">
                        </path>
                    </svg>
                </span>
            </div>
        </a>
        </div>
        </div>
        <?php 
    }?>

    </div>
        </div>
    <div class="bg-info text-center text-white">
        <div class="container p-4">
            <span class="f-twitter">
                <section class="mb-0"><br><p><b>ApnaTutorial</b> is an online platform which is designed to learn new technologies with a highly interactive user interface.</p></section><section class=""><div class="row foot"><div class="col-lg-3 col-md-6 mb-1 mb-md-0">
                    <ul class="list-unstyled mb-0"><li><a class="foot-link" href="/about" style="display: inherit;">About</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="/privacy" style="display: inherit;">Privacy Policy</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="/contact" style="display: inherit;">Contact Us</a></li></ul></div></div></section></div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright:<a class="text-white" href="">ApnaTutorial</a></div>
    </div>
    <script>
        function showmenu(){
            $("#menu").show();
            $("#menu").css({width:"100%"});
        }
        var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
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