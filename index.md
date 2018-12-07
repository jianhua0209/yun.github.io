  

<!DOCTYPE html>

<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>全民vip视频</title>

<link href="./favicon.ico" rel="shortcut icon" />

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=10.0,user-scalable=1"><!--样式-->

<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js?Z62" type="text/javascript"></script><!--关闭用-->

    <!-- UC强制全屏 -->

    <meta name="full-screen" content="yes">

    <!-- QQ强制全屏 -->

    

  <meta name="keywords" content="vip视频解析,vip视频在线解析,vip解析,万能vip视频解析,vip视频全能解析,vip视频,手机vip视频解析,手机在线解析vip视频,优酷vip解析,爱奇艺vip解析,腾讯vip解析,乐视vip解析,芒果vip解析">

  <meta name="description" content="全民解析VIP视频免费看，在线解析，vip视频解析，优酷vip解析，爱奇艺vip解析，腾讯vip解析，乐视vip解析，芒果vip解析方便广大用户VIP视频服务，">

  <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <link href="./stylee.css" type="text/css" rel="stylesheet">

  <!--script language="javascript">alert('☞☞哈哈哈')</script-->

  

  

  

  

<style>

.maskbox{width:100%;height:100%;background:rgba(0,0,0,0.7);display: none;position: absolute;z-index:1000;top:0;left:0;}

.qdbox{display:none;padding:15px 0;width:90%;border:3px solid #58bc8d;border-radius:10px;background:#fff;position:fixed;z-index:1001;top:30%;left:5%;margin-top:-113px;}

.qdbox .text-green{color:#58bc8d;}

.btn-lottery{width:120px;text-align:center;color:#fff;background:#58bc8d;font-size:16px;}

.text-center{text-align: center}

</style>

<div id="mask" style="display:none;"></div>

<div class="maskbox" style="display: block;"></div>

<div class="qdbox" style="display: block;">

<div class="text-center text-green font18" id="show_title" style="text-align: center"><strong>惊喜派送</strong></div>

<div class="text-center ptb15" id="show_pic" style="width: 100%;text-align: center;"><img src="http://i.um8.net/i/ff/weixin.jpg" style="width: 80%; display: inline; visibility: visible;" zsrc="/images/01.jpg"></div>

<div class="pt10" id="show_message" style="padding-left: 5px;text-align: center">

<p>关注“我爱影院”微信公众号<br>即可免费收看VIP电影~~</p>

<!--p>签到有机会获得最高<span style="color: red;font-weight: bold;">200元现金</span>红包，月未还有<span style="color: red;font-weight: bold;">高档手机</span>大奖，还等什么，快来关注我吧。</p-->

</div>

<div class="text-center"><button class="btn btn-lottery" onclick="hideDiage()">确定</button></div>

</div>

<script>

var uid = '0';

var isShow = false;

function loadXMLDoc() {

if (uid == '' || uid == '0' || isShow) {

return;

}

var xmlhttp;

if (window.XMLHttpRequest) {

xmlhttp = new XMLHttpRequest();

}

else {// code for IE6, IE5

xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange = function () {

if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

var result = xmlhttp.responseText;

result = eval("(" + result + ")");

}

};

xmlhttp.open("GET", "/plugin.php?id=ydss_robot:user_jifen", true);

xmlhttp.send();

}

function closeJinfen(){

document.getElementById("fwin_dsu_paulsign").style.display='none';

}

function showActivity(){

var xmlhttp;

if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp = new XMLHttpRequest();

}

else {// code for IE6, IE5

xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange = function () {

if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

var result = xmlhttp.responseText;

result = eval("(" + result + ")");

if (result.state == "show") {

showDiage();

isShow =true;

}

loadXMLDoc();

}

};

xmlhttp.open("GET", "/plugin.php?id=ydss_robot:user_jifen"+"&"+"action=showActivity"+"&"+"t"+Math.random(), true);

xmlhttp.send();

}

showActivity();

function showDiage(){

$(".maskbox").fadeIn();

$(".qdbox").fadeIn();

}

function hideDiage(){

$(".maskbox").fadeOut();

$(".qdbox").fadeOut();

}

</script>

  <!--禁止右键代码-->	<script>

    document.oncontextmenu=new Function("event.returnValue=false;"); //禁止右键功能

    document.onkeydown=MM_KeyPress;

    function  MM_KeyPress(num){

        //防止系统退格键

        var keycode = event.keyCode;

        if(keycode ==8)//屏蔽退格健

        {

            event.keyCode = 0;

            return;

        }

        if(keycode >=122 && keycode <=123)//屏蔽f12功能键

        {

            event.keyCode = 0 ;

            event.returnValue=false;

            return;

        }

    }

</script>

<script>function fuckyou(){

      window.close(); //关闭当前窗口(防抽)

     window.location="about:blank"; //将当前窗口跳转置空白页

}

  function ck() {

    console.profile();

    console.profileEnd();

    //我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！

    if(console.clear) { console.clear() };

                        if (typeof console.profiles =="object"){

    return console.profiles.length > 0;

                        }

}

function hehe(){

if( (window.console && (console.firebug || console.table && /firebug/i.test(console.table()) )) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)){

  fuckyou();

}

if(typeof console.profiles =="object"&&console.profiles.length > 0){

fuckyou();

}

}

hehe();

window.onresize = function(){

if((window.outerHeight-window.innerHeight)>200)

//判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵

   fuckyou();

}</script>

<!--禁止右键代码-->

  

  

  

  

   <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>

   </head>

<body background="./bj.png">

  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7 center-block" style="float: none;">

<table class="table table-bordered">

    <tbody>

		<tr>

            <td>

<div id="homeso">

<img id="imgsrc" src="http://i.um8.net/i/tu/images/logo.png">

</div>

      </tbody>

	  </table>

	 <div class="col-md-14 column">

    <div class="panel panel-default">

     <div id="kj" class="panel-body">

     <iframe allowFullScreen="ture" src="http://i.um8.net/tool/bing" id="player" width="100%" height="200" allowTransparency="true" frameborder="0" scrolling="no"></iframe>	 

     </div>

    </div>

   </div>

   <div class="col-md-14 column">  

    <form method="get" id="1233911832"></form>

     <div class="input-group" style="width: 100%;display:none ">

      <span class="input-group-addon input-lg" style="width: 80px;">选择接口</span>

      <select class="form-control input-lg" id="jk">

	  <option value="" selected="">选择</option></select>

     </div>

     

     <div class="input-group" style="width: 100%; ">

      <span class="input-group-addon input-lg" style="width: 80px;">频道选择</span>

      <select class="form-control input-lg" type="search" placeholder="" id="url">

   <option value="http://stream1.grtn.cn/zjpd/sd/live.m3u8?_upt=d1063fae1511877342">广东珠江频道</option> 

     <option value="http://stream1.grtn.cn/ggpd/playlist.m3u8?_upt=67f934841510287651">广东公共频道</option> 

     <option value="http://stream1.grtn.cn/xwpd/playlist.m3u8?_upt=">广东新闻频道</option> 

     <option value="http://nclive.grtn.cn/tvs4/sd/live.m3u8?_upt=4fbd1f881536140700">广东影视频道</option> 

     <option value="http://live.hn0746.com/hnws/sd/live.m3u8">湖南卫视</option> 

     <option value="http://pullhls6.inke.cn/live/1543807858498442/playlist.m3u8">TVB翡翠台 超清</option> 

     <option value="http://zhibo.hkstv.tv/livestream/zb2yhapo/playlist.m3u8">香港卫视</option> 

     <option value="http://aldirect.hls.huya.com/huyalive/29106097-2689453724-11551115788685410304-2847687506-10057-A-1525422901-1_1200.m3u8">香港电影频道</option> 

     <option value="http://202.69.69.180:443/webcast/bshdlive-pc/playlist.m3u8">耀才财经</option> 

     <option value="http://live-cdn.xzxwhcb.com/hls/r86am856.m3u8">环球电视台</option> 

     <option value="http://stream.mastvnet.com/MASTV/sd/live.m3u8">澳亚卫视</option> 

     <option value="http://218.38.152.69:1935/da_live/72136989/mp4:ch001/playlist.m3u8">韩国KoreaTV</option> 

     <option value="http://amdlive.ctnd.com.edgesuite.net/arirang_1ch/smil:arirang_1ch.smil/playlist.m3u8">韩国阿里郎</option> 

     <option value="http://thaipbs-live.cdn.byteark.com/live-en/playlist_720p/index.m3u8">泰国PBS直播</option> 

     <option value="http://cctv5.txty.5213.liveplay.myqcloud.com/live/cctv1_txty.m3u8">CCTV1综合</option> 

     <option value="http://hbpx.chinashadt.com:2036/live/px3.stream/playlist.m3u8">CCTV2财经</option> 

     <option value="http://hnmc.chinashadt.com:3036/live/1003.stream/playlist.m3u8">CCTV3综艺</option> 

     <option value="http://192.240.127.34:1935/live/cs11.stream/playlist.m3u8">卫星剧场</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2655537474-11405446604132450304-2704233350-10057-A-0-1.m3u8">陈翔六点半节目</option> 

     <option value="http://aldirect.hls.huya.com/huyalive/30765679-2523417493-10837995606589308928-2777071594-10057-A-0-1_1200.m3u8">爱情公寓</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685313-10568562945082523648-2789274524-10057-A-0-1.m3u8">周星驰电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460686034-10568566041753944064-2789274542-10057-A-0-1.m3u8">林正英电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685774-10568564925062447104-2789253840-10057-A-0-1.m3u8">周润发电影直播</option>

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1.m3u8">成龙电影直播</option> 

     <option value="http://al.hls.huya.com/huyalive/94525224-2460686093-10568566295157014528-2789253848-10057-A-0-1.m3u8">李连杰电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2467341872-10597152648291418112-2789274550-10057-A-0-1.m3u8">刘德华电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689406282-11550912026846953472-2789274558-10057-A-0-1.m3u8">洪金宝电影直播</option>       

     <option value="http://tx.hls.huya.com/huyalive/29169025-2686219938-11537226783573147648-2847699096-10057-A-1524024759-1.m3u8">甄子丹电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29169025-2686220040-11537227221659811840-2713685416-10057-A-1524041498-1.m3u8">古天乐电影直播</option>    

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689447600-11551089486305689600-2789274568-10057-A-1525420695-1.m3u8">惊悚电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689286606-11550398022340837376-2789274544-10057-A-0-1.m3u8">丧尸电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29359996-2689475864-11551210879261343744-2847699104-10057-A-1525430092-1.m3u8">灾难电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/30765679-2499070088-10733424298371842048-2789274548-10057-A-1521102596-1.m3u8">科幻电影直播</option> 

  

</select>     </div>

     

     <div>

      <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">Go-点击开始播放</button>

     </div>

     

	<div class="layui-container">

		<div class="layui-row layui-col-space15">

			<div class="layui-col-md8" style="background-color:rgba(255,255,255,0.5); width: 100%;">

				<?php include "qk.php";?>

			</div>

		</div>

	</div>

		<fieldset class="layui-elem-field layui-field-title"	style="margin: 25px 0 20px; border-top: 5px solid #2E8B57;" align="center">

      

      

			<form method="post" id="soform" style="text-align: center;float: none" action="http://i.um8.net/i/vip/seacher.php">

<input tabindex="2" class="form-control input-lg" id="button" name="sousuo" type="text" placeholder="请输入电影名字 如：战狼" value="">

<button id="button" tabindex="3" class="btn btn-success btn-lg btn-block" type="submit"><i class="fa">搜索</i></button>

</form>

		<br>  

<br><br>&copy; Powered by <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=i@iisfu.top" style="text-decoration:none;">iisfu</a>

   </div>

     

</div></body></html>

  

<!DOCTYPE html>

<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>全民vip视频</title>

<link href="./favicon.ico" rel="shortcut icon" />

<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=10.0,user-scalable=1"><!--样式-->

<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js?Z62" type="text/javascript"></script><!--关闭用-->

    <!-- UC强制全屏 -->

    <meta name="full-screen" content="yes">

    <!-- QQ强制全屏 -->

    

  <meta name="keywords" content="vip视频解析,vip视频在线解析,vip解析,万能vip视频解析,vip视频全能解析,vip视频,手机vip视频解析,手机在线解析vip视频,优酷vip解析,爱奇艺vip解析,腾讯vip解析,乐视vip解析,芒果vip解析">

  <meta name="description" content="全民解析VIP视频免费看，在线解析，vip视频解析，优酷vip解析，爱奇艺vip解析，腾讯vip解析，乐视vip解析，芒果vip解析方便广大用户VIP视频服务，">

  <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <link href="./stylee.css" type="text/css" rel="stylesheet">

  <!--script language="javascript">alert('☞☞哈哈哈')</script-->

  

  

  

  

<style>

.maskbox{width:100%;height:100%;background:rgba(0,0,0,0.7);display: none;position: absolute;z-index:1000;top:0;left:0;}

.qdbox{display:none;padding:15px 0;width:90%;border:3px solid #58bc8d;border-radius:10px;background:#fff;position:fixed;z-index:1001;top:30%;left:5%;margin-top:-113px;}

.qdbox .text-green{color:#58bc8d;}

.btn-lottery{width:120px;text-align:center;color:#fff;background:#58bc8d;font-size:16px;}

.text-center{text-align: center}

</style>

<div id="mask" style="display:none;"></div>

<div class="maskbox" style="display: block;"></div>

<div class="qdbox" style="display: block;">

<div class="text-center text-green font18" id="show_title" style="text-align: center"><strong>惊喜派送</strong></div>

<div class="text-center ptb15" id="show_pic" style="width: 100%;text-align: center;"><img src="http://i.um8.net/i/ff/weixin.jpg" style="width: 80%; display: inline; visibility: visible;" zsrc="/images/01.jpg"></div>

<div class="pt10" id="show_message" style="padding-left: 5px;text-align: center">

<p>关注“我爱影院”微信公众号<br>即可免费收看VIP电影~~</p>

<!--p>签到有机会获得最高<span style="color: red;font-weight: bold;">200元现金</span>红包，月未还有<span style="color: red;font-weight: bold;">高档手机</span>大奖，还等什么，快来关注我吧。</p-->

</div>

<div class="text-center"><button class="btn btn-lottery" onclick="hideDiage()">确定</button></div>

</div>

<script>

var uid = '0';

var isShow = false;

function loadXMLDoc() {

if (uid == '' || uid == '0' || isShow) {

return;

}

var xmlhttp;

if (window.XMLHttpRequest) {

xmlhttp = new XMLHttpRequest();

}

else {// code for IE6, IE5

xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange = function () {

if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

var result = xmlhttp.responseText;

result = eval("(" + result + ")");

}

};

xmlhttp.open("GET", "/plugin.php?id=ydss_robot:user_jifen", true);

xmlhttp.send();

}

function closeJinfen(){

document.getElementById("fwin_dsu_paulsign").style.display='none';

}

function showActivity(){

var xmlhttp;

if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

xmlhttp = new XMLHttpRequest();

}

else {// code for IE6, IE5

xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

}

xmlhttp.onreadystatechange = function () {

if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

var result = xmlhttp.responseText;

result = eval("(" + result + ")");

if (result.state == "show") {

showDiage();

isShow =true;

}

loadXMLDoc();

}

};

xmlhttp.open("GET", "/plugin.php?id=ydss_robot:user_jifen"+"&"+"action=showActivity"+"&"+"t"+Math.random(), true);

xmlhttp.send();

}

showActivity();

function showDiage(){

$(".maskbox").fadeIn();

$(".qdbox").fadeIn();

}

function hideDiage(){

$(".maskbox").fadeOut();

$(".qdbox").fadeOut();

}

</script>

  <!--禁止右键代码-->	

<script>

    document.oncontextmenu=new Function("event.returnValue=false;"); //禁止右键功能

    document.onkeydown=MM_KeyPress;

    function  MM_KeyPress(num){

        //防止系统退格键

        var keycode = event.keyCode;

        if(keycode ==8)//屏蔽退格健

        {

            event.keyCode = 0;

            return;

        }

        if(keycode >=122 && keycode <=123)//屏蔽f12功能键

        {

            event.keyCode = 0 ;

            event.returnValue=false;

            return;

        }

    }

</script>

<script>function fuckyou(){

      window.close(); //关闭当前窗口(防抽)

     window.location="about:blank"; //将当前窗口跳转置空白页

}

  function ck() {

    console.profile();

    console.profileEnd();

    //我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！

    if(console.clear) { console.clear() };

                        if (typeof console.profiles =="object"){

    return console.profiles.length > 0;

                        }

}

function hehe(){

if( (window.console && (console.firebug || console.table && /firebug/i.test(console.table()) )) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)){

  fuckyou();

}

if(typeof console.profiles =="object"&&console.profiles.length > 0){

fuckyou();

}

}

hehe();

window.onresize = function(){

if((window.outerHeight-window.innerHeight)>200)

//判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵

   fuckyou();

}</script>

<!--禁止右键代码-->

  

  

  

  

   <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>

   </head>

<body background="./bj.png">

  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-7 center-block" style="float: none;">

<table class="table table-bordered">

    <tbody>

		<tr>

            <td>

<div id="homeso">

<img id="imgsrc" src="http://i.um8.net/i/tu/images/logo.png">

</div>

      </tbody>

	  </table>

	 <div class="col-md-14 column">

    <div class="panel panel-default">

     <div id="kj" class="panel-body">

     <iframe allowFullScreen="ture" src="http://i.um8.net/tool/bing" id="player" width="100%" height="200" allowTransparency="true" frameborder="0" scrolling="no"></iframe>	 

     </div>

    </div>

   </div>

   <div class="col-md-14 column">  

    <form method="get" id="1233911832"></form>

     <div class="input-group" style="width: 100%;display:none ">

      <span class="input-group-addon input-lg" style="width: 80px;">选择接口</span>

      <select class="form-control input-lg" id="jk">

	  <option value="" selected="">选择</option></select>

     </div>

     

     <div class="input-group" style="width: 100%; ">

      <span class="input-group-addon input-lg" style="width: 80px;">频道选择</span>

      <select class="form-control input-lg" type="search" placeholder="" id="url">

   <option value="http://stream1.grtn.cn/zjpd/sd/live.m3u8?_upt=d1063fae1511877342">广东珠江频道</option> 

     <option value="http://stream1.grtn.cn/ggpd/playlist.m3u8?_upt=67f934841510287651">广东公共频道</option> 

     <option value="http://stream1.grtn.cn/xwpd/playlist.m3u8?_upt=">广东新闻频道</option> 

     <option value="http://nclive.grtn.cn/tvs4/sd/live.m3u8?_upt=4fbd1f881536140700">广东影视频道</option> 

     <option value="http://live.hn0746.com/hnws/sd/live.m3u8">湖南卫视</option> 

     <option value="http://pullhls6.inke.cn/live/1543807858498442/playlist.m3u8">TVB翡翠台 超清</option> 

     <option value="http://zhibo.hkstv.tv/livestream/zb2yhapo/playlist.m3u8">香港卫视</option> 

     <option value="http://aldirect.hls.huya.com/huyalive/29106097-2689453724-11551115788685410304-2847687506-10057-A-1525422901-1_1200.m3u8">香港电影频道</option> 

     <option value="http://202.69.69.180:443/webcast/bshdlive-pc/playlist.m3u8">耀才财经</option> 

     <option value="http://live-cdn.xzxwhcb.com/hls/r86am856.m3u8">环球电视台</option> 

     <option value="http://stream.mastvnet.com/MASTV/sd/live.m3u8">澳亚卫视</option> 

     <option value="http://218.38.152.69:1935/da_live/72136989/mp4:ch001/playlist.m3u8">韩国KoreaTV</option> 

     <option value="http://amdlive.ctnd.com.edgesuite.net/arirang_1ch/smil:arirang_1ch.smil/playlist.m3u8">韩国阿里郎</option> 

     <option value="http://thaipbs-live.cdn.byteark.com/live-en/playlist_720p/index.m3u8">泰国PBS直播</option> 

     <option value="http://cctv5.txty.5213.liveplay.myqcloud.com/live/cctv1_txty.m3u8">CCTV1综合</option> 

     <option value="http://hbpx.chinashadt.com:2036/live/px3.stream/playlist.m3u8">CCTV2财经</option> 

     <option value="http://hnmc.chinashadt.com:3036/live/1003.stream/playlist.m3u8">CCTV3综艺</option> 

     <option value="http://192.240.127.34:1935/live/cs11.stream/playlist.m3u8">卫星剧场</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2655537474-11405446604132450304-2704233350-10057-A-0-1.m3u8">陈翔六点半节目</option> 

     <option value="http://aldirect.hls.huya.com/huyalive/30765679-2523417493-10837995606589308928-2777071594-10057-A-0-1_1200.m3u8">爱情公寓</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685313-10568562945082523648-2789274524-10057-A-0-1.m3u8">周星驰电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460686034-10568566041753944064-2789274542-10057-A-0-1.m3u8">林正英电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685774-10568564925062447104-2789253840-10057-A-0-1.m3u8">周润发电影直播</option>

     <option value="http://tx.hls.huya.com/huyalive/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1.m3u8">成龙电影直播</option> 

     <option value="http://al.hls.huya.com/huyalive/94525224-2460686093-10568566295157014528-2789253848-10057-A-0-1.m3u8">李连杰电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/94525224-2467341872-10597152648291418112-2789274550-10057-A-0-1.m3u8">刘德华电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689406282-11550912026846953472-2789274558-10057-A-0-1.m3u8">洪金宝电影直播</option>       

     <option value="http://tx.hls.huya.com/huyalive/29169025-2686219938-11537226783573147648-2847699096-10057-A-1524024759-1.m3u8">甄子丹电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29169025-2686220040-11537227221659811840-2713685416-10057-A-1524041498-1.m3u8">古天乐电影直播</option>    

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689447600-11551089486305689600-2789274568-10057-A-1525420695-1.m3u8">惊悚电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29106097-2689286606-11550398022340837376-2789274544-10057-A-0-1.m3u8">丧尸电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/29359996-2689475864-11551210879261343744-2847699104-10057-A-1525430092-1.m3u8">灾难电影直播</option> 

     <option value="http://tx.hls.huya.com/huyalive/30765679-2499070088-10733424298371842048-2789274548-10057-A-1521102596-1.m3u8">科幻电影直播</option> 

  

</select>     </div>

     

     <div>

      <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">Go-点击开始播放</button>

     </div>

     

	<div class="layui-container">

		<div class="layui-row layui-col-space15">

			<div class="layui-col-md8" style="background-color:rgba(255,255,255,0.5); width: 100%;">

				<?php include "qk.php";?>

			</div>

		</div>

	</div>

		<fieldset class="layui-elem-field layui-field-title"	style="margin: 25px 0 20px; border-top: 5px solid #2E8B57;" align="center">

      

      

			<form method="post" id="soform" style="text-align: center;float: none" action="http://i.um8.net/i/vip/seacher.php">

<input tabindex="2" class="form-control input-lg" id="button" name="sousuo" type="text" placeholder="请输入电影名字 如：战狼" value="">

<button id="button" tabindex="3" class="btn btn-success btn-lg btn-block" type="submit"><i class="fa">搜索</i></button>

</form>

		<br>  

<br><br>&copy; Powered by <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=i@iisfu.top" style="text-decoration:none;">iisfu</a>

   </div>

     

</div></body></html>
