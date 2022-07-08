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
</style>
</head>
<body>

    <button onclick="topFunction()" id="myBtn" style="display: none;">⇧ SCROLL TO TOP</button>
    <div id="page" style="margin:-8px;background-color:#f5f5f4;"><div id="container"> <div class="header">
        <table style="width:100%;height: 7rem;background-color: #fff;"> 
        <tbody><tr> <td> 
            <div style="clear:both;float:left;width:200px;margin-top:15px;margin-left:20px"> <a href="/"><img src="web_logo.png" alt="Javatpoint Logo"></a> </div> 
            <div style="float:left;width:8rem;margin-top:2rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;cursor:pointer;">Tutorials </div> 
            <div style="float:left;width:3rem;margin-top:2rem;margin-left:20px;color:black;font-weight:bold;font-size:20px;"> <a href="blogs" style="color:#000;text-decoration:none;">Blogs </a></div> 
</td></tr></tbody></table></div>
    <div class="headermobile">
    <div style="margin-top:10px;padding:0px;text-align:left;">
    <span style="float:left"><input type="image" src="https://www.javatpoint.com/images/menuhome64.png" alt="Go To Top" onclick="showmenu()"></span>
    <span style="float:left"><a href="https://www.javatpoint.com"><img src="apna_tutorial_logo.png" alt="Javatpoint Logo"></a></span>
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

    <ins class="adPushupAds" data-adpcontrol="hqdgs" data-ver="2" data-siteid="37780" data-ac="PHNjcmlwdCBhc3luYyBzcmM9Ii8vcGFnZWFkMi5nb29nbGVzeW5kaWNhdGlvbi5jb20vcGFnZWFkL2pzL2Fkc2J5Z29vZ2xlLmpzIj48L3NjcmlwdD4KPCEtLSBDbV8zMDB4MjUwX01vYl8xNC85IC0tPgo8aW5zIGNsYXNzPSJhZHNieWdvb2dsZSIKICAgICBzdHlsZT0iZGlzcGxheTppbmxpbmUtYmxvY2s7d2lkdGg6MzAwcHg7aGVpZ2h0OjI1MHB4IgogICAgIGRhdGEtYWQtY2xpZW50PSJjYS1wdWItNDY5OTg1ODU0OTAyMzM4MiIKICAgICBkYXRhLWFkLXNsb3Q9IjcwMTQyNzI1MTkiPjwvaW5zPgo8c2NyaXB0PgooYWRzYnlnb29nbGUgPSB3aW5kb3cuYWRzYnlnb29nbGUgfHwgW10pLnB1c2goe30pOwo8L3NjcmlwdD4=" data-push="1"></ins><script data-cfasync="false" type="text/javascript">(function (w, d) { for (var i = 0, j = d.getElementsByTagName("ins"), k = j[i]; i < j.length; k = j[++i]){ if(k.className == "adPushupAds" && k.getAttribute("data-push") != "1") { ((w.adpushup = w.adpushup || {}).control = (w.adpushup.control || [])).push(k); k.setAttribute("data-push", "1");} } })(window, document);</script>
    </div>
    <!-- left bar -->
    <div id="menu">


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
            <?php for($j=0;$j<count($category);$j++){?>
                <div class="row" style="margin-bottom:3rem;">
                <div style="background-color: #D9EEE1;display: flow-root;padding-left: 1rem;padding-bottom:2rem;">
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
                        <div style="height:40px;">
                            <h5 class="w3-text-dark-grey"><?php echo $tutorial[$i]['description'];?></h5>
                        </div>
                        <a href="/tutorial-website/content/<?php echo $tutorial[$i]['home_link'];?>" class="w3-button tut-button black-color w3-margin-bottom">Learn <?php echo $tutorial[$i]['name'];?></a>
                    </div>
                </div>
                <?php }?>
                </div>
                </div>
        <?php }?>
    </div>
    <script>
        function showmenu(){
            $("#menu").show();
            $("#menu").css({width:"100%"});
        }
    </script>
    </body>
</html>