<?php 
$query="select * from tutorial";
$servername = "localhost:6706";
$username = "root";
$password = "";
$db = "tutorial_website";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
$data=$conn->query($query);
$tutorial = array();
while($row = $data->fetch_assoc()){
    $tutorial[] = $row;
}
// print_r($tutorial);
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
<style>
.tutorial-name{
    margin:0rem 2rem 2rem 0rem;
    border-radius: 5px;
    text-align: center;
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
</style>
    </head>
<body onload="highlightlink()">

<button onclick="topFunction()" id="myBtn" style="display: none;">⇧ SCROLL TO TOP</button>
<div id="page" style="margin:-8px;background-color:#f5f5f4;"><div id="container"> <div class="header"><table style="width:100%;margin-bottom:5px"> <tbody><tr> <td> <div style="clear:both;float:left;width:230px;margin-top:15px;margin-left:20px"> <a href="https://www.javatpoint.com"><img src="https://static.javatpoint.com/images/logo/jtp_logo.png" alt="Javatpoint Logo"></a> </div> <div style="float:left;width:60%;"><script> (function() { var cx = '005383125436438536544:y1edweedxwi'; var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true; gcse.src = 'https://cse.google.com/cse.js?cx=' + cx; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s); })();</script><div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table cellspacing="0" cellpadding="0" class="gsc-search-box"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table cellspacing="0" cellpadding="0" id="gs_id50" class="gstl_50 gsc-input" style="width: 100%; padding: 0px;"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" id="gsc-i-id1" style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;" dir="ltr" spellcheck="false"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" style="display: none;" title="Clear search box" role="button"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-nooverlay"><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-refinementsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table cellspacing="0" cellpadding="0" class="gsc-above-wrapper-area-container"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td><td class="gsc-orderby-container"><div class="gsc-orderby-invisible"><div class="gsc-orderby-label gsc-inline-block">Sort by:</div><div class="gsc-option-menu-container gsc-inline-block"><div class="gsc-selected-option-container gsc-inline-block"><div class="gsc-selected-option">Relevance</div><div class="gsc-option-selector"></div></div><div class="gsc-option-menu-invisible"><div class="gsc-option-menu-item gsc-option-menu-item-highlighted"><div class="gsc-option">Relevance</div></div><div class="gsc-option-menu-item"><div class="gsc-option">Date</div></div></div></div></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div></div></div></div> </div> </td> </tr></tbody></table> </div>
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
<div id="link" style="clear:both"> <div class="ddsmoothmenu">
<ul>
<li><a href="https://www.javatpoint.com">Home</a></li>
<li><a href="react-native-tutorial">React Native</a>
</li><li><a href="reactjs-tutorial" class="selected">ReactJS</a></li>
<li><a href="typescript-tutorial">TypeScript</a>
</li><li><a href="javascript-tutorial">JavaScript</a></li>
<li><a href="jquery-tutorial">jQuery</a></li>
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
        <div class="row">
            <?php for($i=0;$i<count($tutorial);$i++){?>
        <div class="col-md-5 col-lg-5 tutorial-name" style="color:black;background-color:#FFC0C7;padding:24px">
            <h2 style="font-size:45px;font-weight:700"><?php echo $tutorial[$i]['name'];?></h2>
            <div style="height:40px;">
            <h5 class="w3-text-dark-grey"><?php echo $tutorial[$i]['description'];?></h5>
            </div>
            <a href="/php/default.asp" class="w3-button tut-button black-color w3-margin-bottom">Learn PHP</a>
        </div>
        <?php }?>
    </div>
    </div>
    <script>
        function showmenu(){
            $("#menu").show();
            $("#menu").css({width:"100%"});
        }
    </script>
    </body>
</html>