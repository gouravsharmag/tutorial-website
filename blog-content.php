<?php 
$servername = "localhost";
$username = "u657940708_user";
$password = "Staging123$";
$db = "u657940708_tutorial_web";
 $url = explode("-", $_GET['alias'], 2);
 $name_blog = $url[0];
 // Create connection
$conn = new mysqli($servername, $username, $password,$db);
// $tutorial_id_query = "SELECT id FROM tutorial WHERE name = '$name_blog'";
// $tutorial_id_query = $conn->query($tutorial_id_query);
// $tutorial_id_data = $tutorial_id_query->fetch_assoc();
// $tutorial_id = $tutorial_id_data['id'];
// $query="select * from tutorial_list where tutorial_id='$tutorial_id'";
// $data=$conn->query($query);
// $tutorial_list = array();
// while($row = $data->fetch_assoc()){
//     $tutorial_list[] = $row;
// }
$query="select id, blog_name, LEFT(content, 200)as content,content_text, created_at from blog limit 10";
$data=$conn->query($query);
$blogs = array();
while($row = $data->fetch_assoc()){
    $blogs[] = $row;
}
$query="select * from tutorial where deleted='0' limit 10";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
$topic = str_replace('-', ' ', strtolower($_GET['alias']));
$query="select * from blog where blog_name='$topic'";
$data=$conn->query($query);
$content = array();
while($row = $data->fetch_assoc()){
    $content[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="<?php echo $content[0]['meta_description'];?>">
    <title><?php echo ucfirst("$topic");?></title>
    <meta name="Keywords" content="<?php echo $content[0]['keywords'];?>">
    <link rel="stylesheet" type="text/css" href="../style.css" async="">
    <link rel="stylesheet" type="text/css" href="https://cdn.tiny.cloud/1/no-api-key/tinymce/6.0.3-5/skins/ui/oxide/content.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="/bootstrap/prism.js"></script>
    <link rel="icon" type="image/x-icon" href="/favicon.png">
<style>
    /* .App {
  text-align: center;
} */

.single-blog-post .sr-facebook a, .single-blog-post .sr-twitter a, .single-blog-post .sr-linkedin a, .author-page .sr-facebook a, .author-page .sr-twitter a, .author-page .sr-linkedin a, .archives-page .sr-facebook a, .archives-page .sr-twitter a, .archives-page .sr-linkedin a {
    width: 25px;
    height: 25px;
    line-height: 25px;
}
.socializer .sr-facebook a, .socializer .sr-facebook a:visited {
    color: #1977f3;
    border-color: #1977f3;
    background-color: #1977f3;
}
.single-blog-post .sr-facebook a, .single-blog-post .sr-twitter a, .single-blog-post .sr-linkedin a, .author-page .sr-facebook a, .author-page .sr-twitter a, .author-page .sr-linkedin a, .archives-page .sr-facebook a, .archives-page .sr-twitter a, .archives-page .sr-linkedin a {
    width: 25px;
    height: 25px;
    line-height: 25px;
}
.tutorial-name{
    margin:0rem 2rem 2rem 0rem;
    border-radius: 5px;
    text-align: center;
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
.tut-button{
    background: #282A35;
    padding: 10px 20px;
    border-radius: 15px;
    color: #fff;
    font-weight: bold;
    font-size:15px;
}
a.active{
    font-weight: 800 !important;
}
.language-markup{
    border: none;
    border-left: 10px solid #7f6969;
    background: #ddf6de;
}
#container{
    background: #ffffff;
}
h1 {
    font-size: 42px;
}
#bottomnextup{
    display: flex;
    justify-content: right;
}
.tut-button:hover{
    color:#fff;
    text-decoration: none;
    background: #000;
}
.imgPost {
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
}
.token.operator {
    color: #9a6e3a;
    background: hsl(24deg 20% 95%);
}
body{
overflow-x: hidden;
}
.sr-facebook a, .sr-facebook a svg {
    border-color: #1da1f2;
    background-color: #1da1f2;
    border-radius: 50%;
    font-size: 15px;
}
.sr-twitter a, .sr-twitter a svg {
    border-color: #1da1f2;
    background-color: #1da1f2;
    border-radius: 50%;
    font-size: 15px;
}
.bottom_tool, .socializer {
    margin-left: auto!important;
}
.sr-facebook, .sr-linkedin, .sr-twitter {
    padding-right: 0.2rem;
}
.archives-page .sr-facebook a, .archives-page .sr-linkedin a, .archives-page .sr-twitter a, .author-page .sr-facebook a, .author-page .sr-linkedin a, .author-page .sr-twitter a, .sr-facebook a, .sr-linkedin a, .sr-twitter a {
    width: 25px;
    height: 25px;
    line-height: 25px;
}
.socializer a {
    font-family: sans-serif!important;
    display: inline-block;
    border: 0;
    text-align: center;
    text-decoration: none;
    width: 25px;
    height: 27px;
    line-height: 18px;
    font-size: 20px;
    border-style: solid;
    box-sizing: content-box;
    transition: all .5s;
    -webkit-transition: all .2s;
    transition-timing-function: ease-out;
    -webkit-transition-timing-function: ease-out;
}

.righthome{
    width: 22%;
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
/* .content-blog{
    color: #777;
} */
.time-blog{
    position: relative;
    top: 4px;
}
div.onlycontent{
    margin: 1.5% 0% 0% 2%;
}
.bg-info{
    width: 100%;
    display: flow-root;
    font-size: 17px;
}
/* .socializer>* {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-block;
    position: relative;
} */
.socializer .sr-facebook a, .socializer .sr-facebook a:visited {
    color: #1977f3;
    border-color: #1977f3;
    background-color: #1977f3;
}
@media screen and (min-width: 1441px) and (max-width: 2200px){
div.onlycontent {
    width: 55%;
}}
@media screen and (min-width: 100px) and (max-width: 700px){
div.righthome {
    width: 90%;
}
}
td,th{
    padding-left:1rem;
    border: 0.5px solid grey!important;
    font-family: sans-serif;
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
.tut-button{
    background: #282A35;
    padding: 10px 20px;
    border-radius: 15px;
    color: #fff;
    font-weight: bold;
    font-size:15px;
}
a.active{
    font-weight: 800 !important;
}
.language-markup{
    border: none;
    border-left: 10px solid #7f6969;
    background: #ddf6de;
}
h1 {
    font-size: 42px;
}
#bottomnextup{
    display: flex;
    justify-content: right;
}
.tut-button:hover{
    color:#fff;
    text-decoration: none;
    background: #000;
}
body{
overflow-x: hidden;
}
<?php if($name_tutorial == 'CSS'){?>
    td,th{
    padding-left:1rem;
    border: 0.5px solid grey;
    font-family: sans-serif;
}
<?php } else{?>
    td,th{
    padding-left:1rem;
    border: 0.5px solid grey!important;
    font-family: sans-serif;
}
<?php }
?>

table{
    border:none !important
}
td p{
    word-break: break-word;
}
h1{
    margin-top: 0px !important;
}
h1,h2,h3,h4,h5,h6{
        color:#000;
    }
    p{
        color:#000;
    }
    body{
        color:#000;
    }
.token.operator {
    color: #9a6e3a;
    background: hsl(24deg 20% 95%);
}
span.spanh2{
    width: 97%;
    display: block;
    margin-top: 10px;
    float: left;
}
ul{
    list-style-type: disc;
}
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn">⇧ SCROLL TO TOP</button>
    <div id="page" style="margin: -8px 0px 0px 0px;background-color:#ffffff;">
    <div id="container"> 
        <div class="header">
            <table style="width:100%;height: 6rem;background-color: #fff;"> 
                <tbody>
                    <tr> 
                        <td> 
                            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="../" style="color:#000000;text-decoration:none;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
                            <!-- <div style="float:left;width:12rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials <i class="fa fa-caret-down" style="font-size: 20px; display: inline;"></i></div>  -->
                            <div style="float:left;width:3rem;margin-top:1.6rem;margin-left:20px;color:black;font-size:20px;"> <a href="../blogs.php" style="color:#000;text-decoration:none;">Blogs </a></div> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;padding-top:0.5rem;">
    <span style="float:left;padding-top:2px;padding-bottom: 8px;"><a href="index.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a></span> 
    <span style="float:left;padding-top:2px;"><a href="blogs.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;">Blogs</a></span> 
</div>
    <div style="margin:0px;padding:0px;clear:both">
    </div>
    </div>
    <div id="link" style="clear:both"> <div class="ddsmoothmenu" style="z-index: 99;">
    <ul>
    <li><a class="home-a" href="../" ><i class="fa-solid fa-house-chimney" style="font-size: 26px;"></i></a></li>
    <?php for($i=0;$i<count($tutorial_name);$i++){
        $tutorial = $tutorial_name[$i]['home_link'];
        $arr = explode("-", $tutorial, 2);
        $first = $arr[0];
        if($first == $name_tutorial){?>
    <li><a class ="selected" href="/content/<?php echo $tutorial_name[$i]['home_link'];?>"><?php echo $tutorial_name[$i]['name'];?></a>
<?php } else{?>
    <li><a href="/content/<?php echo $tutorial_name[$i]['home_link'];?>"><?php echo $tutorial_name[$i]['name'];?></a>
    <?php }}?>
    </li>
    </ul>
    <br style="clear: left">
    </div></div>
    <div class="mobilemenu" style="clear:both">

    
    </div>
    <!-- left bar -->
    <div id="menu">
   
   
    </div>
    <div class="onlycontent">

   
    <div class="onlycontentinner">
    <!-- <table style="width:100%;">
<tbody><tr><td> -->
<!-- <div id="bottomnextup">

</div> -->
<h1 style="font-weight:bold"><?php echo $content[0]['blog_name'];?></h1>
<div style="display: flex;">
<div>
    <img alt="" class="imgPost" src="/6095986ed3627-bpthumb.png">&nbsp;&nbsp;&nbsp;
</div>
<div>
<span style="color: rgb(219, 65, 119);">Rose</span>&nbsp;&nbsp;
<span style="position: relative;top: 10px;display:block;">Sept 15, 2021</span>
</div>
<!-- <div class="socializer sr-popup sr-40px sr-circle sr-opacity sr-pad sr-count-1">
    <span class="sr-facebook"><a rel="nofollow" href="https://www.facebook.com/share.php?u=https://www.blogstheworld.com/" target="_blank" title="Share this on Facebook" style="color: rgb(255, 255, 255);">
    <i class="fab fa-facebook-f" style="line-height: 1.5;"></i></a></span>
    <span class="sr-twitter"><a rel="nofollow" href="https://twitter.com/intent/tweet?text=%20-%20https://www.blogstheworld.com/%20" target="_blank" title="Tweet this !" style="color: rgb(255, 255, 255);">
    <i class="fab fa-twitter" style="line-height: 1.5;"></i></a></span>
    <span class="sr-linkedin"><a rel="nofollow" href="https://www.linkedin.com/sharing/share-offsite/?url=https://www.blogstheworld.com/" target="_blank" title="Add this to LinkedIn" style="color: rgb(255, 255, 255);">
    <i class="fab fa-linkedin-in"></i>    
</a></span>
</div> -->
</div>
<br>
<?php echo htmlspecialchars_decode($content[0]['content']);?>
<!-- <h4 class="n">NOTE: It is recommended to write all tags in lower-case for consistency, readability, etc.</h4> -->
<!-- <div class="nexttopicdiv">
<span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="html-text-editors">HTML text Editors</a></span>
</div> -->

<br><br>
<!--  -->
<br><br>
<!-- </td></tr></tbody></table> -->
    </div>
        </div>
    <div class="righthome">
        <h1 class="bloghead">Blogs</h1>
        <?php for($l=0;$l<count($blogs);$l++){?>
        <div class="content-div">
            <a href="<?php echo str_replace(' ', '-', strtolower($blogs[$l]['blog_name']));?>" style="text-decoration:none">
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
        <hr>
        <?php }?>

    </div>
    <div class="bg-info text-center text-white">
        <div class="container p-4">
            <span class="f-twitter">
                <section class="mb-0"><br><p><b>ApnaTutorial</b> is an online platform which is designed to learn new technologies with a highly interactive user interface.</p></section><section class=""><div class="row foot"><div class="col-lg-3 col-md-6 mb-1 mb-md-0">
                    <ul class="list-unstyled mb-0"><li><a class="foot-link" href="/about.php" style="display: inherit;">About</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="/privacy.php" style="display: inherit;">Privacy Policy</a></li></ul></div><div class="col-lg-3 col-md-6 mb-1 mb-md-0"><ul class="list-unstyled mb-0"><li><a class="foot-link" href="/contact.php" style="display: inherit;">Contact Us</a></li></ul></div></div></section></div>
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2022 Copyright:<a class="text-white" href="/index.php">ApnaTutorial</a></div>
    </div>
    <script>
        function showmenu(){
            $("#menu").show();
            $("#menu").css({width:"100%"});
        }
    </script>
    </body>
</html>