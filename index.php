<?php 
include "connection.php";
$conn=DbConnection();
$query="select * from tutorial limit 10";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
$query="select category.id,category.name from tutorial join category on tutorial.category_id=category.id group by category_id";
$data=$conn->query($query);
$category = array();
while($row = $data->fetch_assoc()){
    $category[] = $row;
}
$query="select id, blog_name, LEFT(content, 200)as content,content_text, created_at from blog limit 10";
$data=$conn->query($query);
$blogs = array();
while($row = $data->fetch_assoc()){
    $blogs[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<!-- Google tag (gtag.js) -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5338048986508074"
     crossorigin="anonymous"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K83LNDKS4F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K83LNDKS4F');
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="ApnaTutorial is an online platform which is designed to learn new technologies with a highly interactive user interface.">
    <title>ApnaTutorial</title>
    <meta name="google-site-verification" content="AcSLi73S8pGgjoyHDsYNtHgz7Ac6ZTOjE2hLtpZWx0U" />
    <meta name="Keywords" content="Apna tutorial, apnatutorial, Tutorials, Blogs,web development, programming, Data science,HTML,Javascript,Python,css,PHP,Website,Technology,learning,code,tips,Courses,MYSQL,Databases,C,Java">
    <link rel="stylesheet" type="text/css" href="style.css" async="">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.tutorial-name{
    padding: 0.5rem 0.5rem 3rem;
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
    font-size: 17px;
}
@media screen and (min-width: 1025px) and (max-width: 1441px){
div.onlycontent {
    width: 65%;
}
}
@media screen and (min-width: 100px) and (max-width: 700px){
div.righthome {
    width: 90%;
}
}
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn">⇧ TOP</button>
    <div id="page" style="margin:-8px;background-color:#ffffff;"><div id="container"> <div class="header">
        <table style="width:100%;height: 6rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="../" style="color:#000000;text-decoration:none;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
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
    <div id="link" style="clear:both"> <div class="ddsmoothmenu">
    <ul>
    <li><a class="home-a selected" href="" ><i class="fa-solid fa-house-chimney" style="font-size: 26px;"></i></a></li>
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
    <div class="onlycontent">

   
    <div class="onlycontentinner">
            <?php for($j=0;$j<count($category);$j++){?>
                <div class="row">
                <div style="display: flow-root;padding-left: 1rem;padding-bottom:1rem;">
                <h2 style="padding-left:1rem;"><?php echo $category[$j]['name'];?></h2>
                <?php 
                $category_id = $category[$j]['id'];
                $query="select * from tutorial where category_id='$category_id'";
                $data=$conn->query($query);
                $tutorial = array();
                while($row = $data->fetch_assoc()){
                    $tutorial[] = $row;
                }
                for($i=0;$i<count($tutorial);$i++){?>
                <div class="col-md-4 col-lg-4" style="color:black;">
                    <div class="tutorial-name" style="background-color:<?php echo $tutorial[$i]['color'];?>;">
                        <h2 style="font-size:25px;font-weight:700"><?php echo $tutorial[$i]['name'];?></h2>
                        <div style="height:50px;">
                            <h5 class="w3-text-dark-grey"><?php echo $tutorial[$i]['description'];?></h5>
                        </div>
                        <a href="/content/<?php echo $tutorial[$i]['home_link'];?>" class="w3-button tut-button black-color w3-margin-bottom">Learn <?php echo $tutorial[$i]['name'];?></a>
                    </div>
                </div>
                <?php }?>
                </div>
                </div>
        <?php }?>
    </div>
                </div>
                </div>
    <div class="righthome">
        <h1 class="bloghead">Blogs</h1>
        <?php for($l=0;$l<count($blogs);$l++){
            $url = str_replace(' ', '-', strtolower($blogs[$l]['blog_name']));?>
        <div class="content-div">
            <a href="blog-content/<?php echo $url;?>" style="text-decoration:none">
            <h3 style="font-weight:bold;"><?php echo $blogs[$l]['blog_name'];?></h3>
            <div class="content-blog"><?php echo $blogs[$l]['content_text'];?></div>
            <div>
                <span class="white-space-wrap">
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
        </hr>
        <?php }?>

    </div>
    <div class="bg-info text-center text-white">
        <div class="container p-4">
            <span class="f-twitter">
                <section class="mb-0"><br><p><b>ApnaTutorial</b> is an online platform which is designed to learn new technologies with a highly interactive user interface.</p></section><section class=""><div class="row foot"><div class="col-lg-3 col-md-6 mb-1 mb-md-0">
                    <ul class="list-unstyled mb-0"><li><a class="foot-link" href="about.php" style="display: inherit;">About</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="privacy.php" style="display: inherit;">Privacy Policy</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="contact.php" style="display: inherit;">Contact Us</a></li></ul></div></div></section></div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright:<a class="text-white" href="/index.php">ApnaTutorial</a></div>
    </div>
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