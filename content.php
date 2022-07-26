<?php 
 $servername = "localhost:6706";
 $username = "root";
 $password = "";
 $db = "tutorial_website";
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
$topic = substr($topic, strpos($topic, ' ') + 1);    
$query="select * from post where topic_name='$topic'";
$data=$conn->query($query);
$content = array();
while($row = $data->fetch_assoc()){
    $content[] = $row;
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style.css" async="">
    <link rel="stylesheet" type="text/css" href="https://cdn.tiny.cloud/1/no-api-key/tinymce/6.0.3-5/skins/ui/oxide/content.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn">⇧ SCROLL TO TOP</button>
    <div id="page" style="margin:-8px;background-color:#ffffff;"><div id="container"> <div class="header">
        <table style="width:100%;height: 6rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:15rem;margin-top:1.6rem;margin-left:20px;font-size: 20px;color:#000000"> <a href="../" style="color:#000000;text-decoration:none;"><span style="background:red;padding: 3px 5px;border-radius: 50%;">A</span>pnaTutorial</a> </div> 
            <!-- <div style="float:left;width:12rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials <i class="fa fa-caret-down" style="font-size: 20px; display: inline;"></i></div>  -->
            <div style="float:left;width:3rem;margin-top:1.6rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;"> <a href="blogs.php" style="color:#000;text-decoration:none;">Blogs </a></div> 
</td></tr></tbody></table></div>
<div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;">
    <span style="float:left"><input type="image" src="https://www.javatpoint.com/images/menuhome64.png" alt="Go To Top" onclick="showmenu()"></span>
    <span style="float:left"><a href="https://www.javatpoint.com"><img src="https://www.javatpoint.com/images/logo/jtp_logo.png" alt="Javatpoint Logo"></a></span>
    </div>
    <div style="margin:0px;padding:0px;clear:both">
    <script>
    (function() {
        var cx = '005383125436438536544:y1edweedxwi';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();
    </script>
    <div id="___gcse_1"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id2"><table cellspacing="0" cellpadding="0" id="gs_id51" class="gstl_51 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti51" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id2" dir="ltr" spellcheck="false" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;"></td><td class="gsib_b"><div class="gsst_b" id="gs_st51" dir="ltr"><a class="gsst_a" href="javascript:void(0)" title="Clear search box" role="button" style="display: none;"><span class="gscb_a" id="gs_cb51" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-nooverlay"><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-refinementsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Sort by:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div></div></div></div>

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

    <ins class="adPushupAds" data-adpcontrol="hqdgs" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBDbV8zMDB4MjUwX01vYl8xNC85IC0tPgo8aW5zIGNsYXNzPSJhZHNieWdvb2dsZSIKICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUtYmxvY2s7d2lkdGg6MzAwcHg7aGVpZ2h0OjI1MHB4IgogICAgIGRhdGEtYWQtY2xpZW50PSJjYS1wdWItNDY5OTg1ODU0OTAyMzM4MiIKICAgICBkYXRhLWFkLXNsb3Q9IjcwMTQyNzI1MTkiPjwvaW5zPgo8c2NyaXB0PgooYWRzYnlnb29nbGUgPSB3aW5kb3cuYWRzYnlnb29nbGUgfHwgW10pLnB1c2goe30pOwo8L3NjcmlwdD4=" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
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
    <div id="leftad" style="margin-left:20px">

    <div id="17c09743-0b89-427c-ba64-e09f6a1745a2" class="_ap_apex_ad">
    <script>
            var adpushup = window.adpushup = window.adpushup || {};
            adpushup.que = adpushup.que || [];
            adpushup.que.push(function() {
                adpushup.triggerAd("17c09743-0b89-427c-ba64-e09f6a1745a2");
            });
        </script>
    </div>
    </div>
    </div>
    <div class="onlycontent">

    <div class="onlycontentad">
    <div id="9bbcb75d-b5e2-40e1-a811-e7680d1f59a4" class="_ap_apex_ad">
    <script>
            var adpushup = window.adpushup = window.adpushup || {};
            adpushup.que = adpushup.que || [];
            adpushup.que.push(function() {
                adpushup.triggerAd("9bbcb75d-b5e2-40e1-a811-e7680d1f59a4");
            });
        </script>
    </div>
    </div>
    <div class="onlycontentinner">
    <table style="width:100%;">
<tbody><tr><td>
<div id="bottomnextup">
<?php if($prev==0){ ?>
<a class="next" href="<?php echo $prev_url_main;?>">← prev</a>
<?php } if($next==1){ ?>
<a class="next" href="<?php echo $next_url?>">next →</a>
<?php } ?>
</div>
<?php echo $content[0]['description'];?>
<!-- <h4 class="n">NOTE: It is recommended to write all tags in lower-case for consistency, readability, etc.</h4> -->
<!-- <div class="nexttopicdiv">
<span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="html-text-editors">HTML text Editors</a></span>
</div> -->

<br><br>
<div id="bottomnext">
<?php if($prev==0){ ?>
<a style="float:left" class="next" href="<?php echo $prev_url_main;?>">← prev</a>
<?php } if($next==1){ ?>
<a style="float:right" class="next" href="<?php echo $next_url?>">next →</a>
<?php } ?>
</div>
<br><br>
</td></tr></tbody></table>
    </div>
    <script>
        function showmenu(){
            $("#menu").show();
            $("#menu").css({width:"100%"});
        }
    </script>
    </body>
</html>