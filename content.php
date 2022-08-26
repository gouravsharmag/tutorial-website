<?php 
$servername = "localhost";
$username = "u657940708_user";
$password = "Staging123$";
$db = "u657940708_tutorial_web";
 $url = explode("-", $_GET['alias'], 2);
 $name_tutorial = $url[0];
 // Create connection
$conn = new mysqli($servername, $username, $password,$db);
$tutorial_id_query = "SELECT id FROM tutorial WHERE name = '$name_tutorial'";
$tutorial_id_query = $conn->query($tutorial_id_query);
$tutorial_id_data = $tutorial_id_query->fetch_assoc();
$tutorial_id = $tutorial_id_data['id'];
$query="select * from tutorial_list where tutorial_id='$tutorial_id'";
$data=$conn->query($query);
$tutorial_list = array();
while($row = $data->fetch_assoc()){
    $tutorial_list[] = $row;
}
$query="select * from tutorial limit 10";
$data=$conn->query($query);
$tutorial_name = array();
while($row = $data->fetch_assoc()){
    $tutorial_name[] = $row;
}
$topic = str_replace('-', ' ', strtolower($_GET['alias']));  
$topic_title = $topic;
$topic = substr($topic, strpos($topic, ' ') + 1);    
$query="select * from post where topic_name='$topic'";
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
    <title><?php echo ucfirst("$topic_title");?></title>
    <meta name="Keywords" content="<?php echo $content[0]['keywords'];?>">
    <link rel="stylesheet" type="text/css" href="../style.css" async="">
    <link rel="stylesheet" type="text/css" href="https://cdn.tiny.cloud/1/no-api-key/tinymce/6.0.3-5/skins/ui/oxide/content.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="/bootstrap/prism.css"> -->
    <script src="/bootstrap/prism.js"></script>
   
<style>
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
td,th{
    padding-left:1rem;
    border: 0.5px solid grey!important;
    font-family: sans-serif;
}
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
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn">⇧ SCROLL TO TOP</button>
    <div id="page" style="margin:-8px;background-color:#ffffff;"><div id="container"> <div class="header">
        <table style="width:100%;height: 6rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="../" style="color:#000000;text-decoration:none;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
            <!-- <div style="float:left;width:12rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials <i class="fa fa-caret-down" style="font-size: 20px; display: inline;"></i></div>  -->
            <div style="float:left;width:3rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;"> <a href="/blogs.php" style="color:#000;text-decoration:none;font-weight:100;">Blogs </a></div> 
</td></tr></tbody></table></div>
    <div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;padding-top:0.5rem;">
    <span style="float:left;padding-top:2px;"><a href="index.php" style="color:#000000;text-decoration:none;padding-left: 1.5rem;"><span style="background:#0fc6b0;padding: 3px 6px;border-radius: 50%;">A</span>pnaTutorial</a></span> 
    <span style="position: relative;right: 1.5rem;bottom: 2.5px;" onclick="showmenu()"><i class="fa-solid fa-bars" style="font-size: 30px;float: right;"></i></span>
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
    <li><a class ="selected" href="<?php echo $tutorial_name[$i]['home_link'];?>"><?php echo $tutorial_name[$i]['name'];?></a>
<?php } else{?>
    <li><a href="<?php echo $tutorial_name[$i]['home_link'];?>"><?php echo $tutorial_name[$i]['name'];?></a>
    <?php }}?>
    </li>
    </ul>
    <br style="clear: left">
    </div></div>
    <div class="mobilemenu" style="clear:both">

    
    </div>
    <!-- left bar -->
    <div id="menu">
    <?php 
    $count =0;
    $prev = 0;
    $flag = 0;
    $next_url = '';
    $next = 1;
    $prev_url = '';
    for($i=0;$i<count($tutorial_list);$i++){
        
        $row = $tutorial_list[$i];
        if($row['type'] =='heading'){
        ?>
        <div class="leftmenu2">
            <h2 class="spanh2"><span class="spanh2"><?php echo $row['name'];?></span></h2>
        </div>
        <?php }
        else{
            if($row['topic_url']==$_GET['alias']){
                if($count == 0){
                    $prev = 1;
                }
                $prev_url_main = $prev_url;
                $next = 0;
                $flag = 1;
        ?>
         <div class="leftmenu">
            <a class="active" href="<?php echo $row['topic_url'];?>"><?php echo $row['name'];?></a>
        </div>
        <?php }
        else{
            if($flag == 1)
            $next_url = $row['topic_url'];
            $prev_url = $row['topic_url'];
        ?>
        <div class="leftmenu">
            <a href="<?php echo $row['topic_url'];?>"><?php echo $row['name'];?></a>
        </div>
        <?php $flag =0;$count++;$next = 1;}}}
        ?>
   
    </div>
    <div class="onlycontent">

   
    <div class="onlycontentinner">
<h1><?php echo $content[0]['topic_name'];?></h1>
<div id="bottomnextup">
<?php if($prev==0){ ?>
<a class="next" href="<?php echo $prev_url_main;?>">← prev</a>
<?php } if($next==1){ ?>
<a class="next" href="<?php echo $next_url?>">next →</a>
<?php } ?>

</div>
<?php echo htmlspecialchars_decode(str_replace('%012', '\n', $content[0]['description']));?>

<br><br>
<div id="bottomnext">
<?php if($prev==0){ ?>
<a style="float:left" class="next" href="<?php echo $prev_url_main;?>">← prev</a>
<?php } if($next==1){ ?>
<a style="float:right" class="next" href="<?php echo $next_url?>">next →</a>
<?php } ?>
</div>
<br><br>
<p class="feedback"><span style="color: #000" data-mce-style="color: #000;">If you have any queries or suggestions then please mail us to</span>&nbsp;<a href="mailto:queries@apnatutorial.com" data-mce-href="mailto:queries@apnatutorial.com">
    <span style="color: rgb(224, 62, 45);" data-mce-style="color: rgb(224, 62, 45);">queries@apnatutorial.com</span></a>
    <span style="color: #000;" data-mce-style="color: #000;">. Would love to hear any response from you to make ApnaTutorial better.</span>
</p>
    </div>
    <script>
        var show =1;
        function showmenu(){
            if(show==1){
                $("#menu").show();
            $("#menu").css({width:"100%"});
            show =0;
            }else{
                $("#menu").hide();
                show=1;
            }
           
        }
    </script>
     <script src="/bootstrap/prism.js"></script>
    </body>
</html>