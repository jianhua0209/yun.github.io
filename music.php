<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");

//分割线内是可以修改的部分
//*******************************我是淫荡的分割线*******************************//

$bati = "音乐试听外链站";//网站标题
$lxfs = "QQ：10000";//网站底部联系方式

//统计代码
$tjdm = '
<script type="text/javascript" src="http://js.users.51.la/18968191.js"></script>
';

//*******************************我是淫荡的分割线*******************************//

//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
//下面代码请勿修改，否则可能会出现致命错误！
$ururll = "//".$_SERVER["SERVER_NAME"].$_SERVER['PHP_SELF'];
$weburl = str_replace("index.php","",$ururll);//主页地址
$error = "<script>alert('地址错误或者音乐不存在!');top.location.href='?home'</script>";
$no_img = "http://ww1.sinaimg.cn/images/default_d_large.gif";//mv未加载图片
if(isset($_GET['v'])){
//*******************************播放页面*******************************//
	$le = substr($_GET['v'],-11,-10);
	$id = substr($_GET['v'],-10).substr($_GET['v'],0,-11);
	switch ($le) {
		case "M":
		//*******************************音乐播放页面*******************************//
		$p3_url= "http://m.kugou.com/app/i/getSongInfo.php?hash=".$id."&cmd=playInfo";
		$kg_krc = "http://m.kugou.com/app/i/krc.php?cmd=100&timelength=243000&hash=".$id;
		$p3_data = curl_get($p3_url);
		$p3_json = json_decode($p3_data,true);
		$song_url = $p3_json['url'];
		$song_name = $p3_json['fileName'];
		$album_img = $p3_json['album_img'];
		$imgUrl = $p3_json['imgUrl'];
		if(empty($song_url)){exit($error);}
		if(empty($imgUrl)){$imgUrl = $no_img;}
		$song_img = str_replace("{size}","400",$imgUrl);
		$title = $song_name.",在线试听,".$bati;
		$krc = curl_get($kg_krc);
		$main = '<script>$(document).ready(function(){$("#jquery_jplayer_1").jPlayer({ready: function (event) {$(this).jPlayer("setMedia", {mp3:"'.$song_url.'",});},timeupdate: function(event) { if(event.jPlayer.status.currentTime==0){time = "";}else {time = event.jPlayer.status.currentTime;} }, play: function(event) {$.lrc.start($("#lrc_content").val(), function() {return time;}); },ended:function(event){$("#lrc_list").removeAttr("style").html("<li>歌曲播放完毕！</li>");}, swfPath: "https://cdn.staticfile.org/jplayer/2.9.2/jplayer",	solution:"html, flash",	supplied: "mp3",wmode: "window"	});});</script><textarea id="lrc_content" name="textfield" cols="70" rows="10" style="display:none;">'.$krc.'</textarea><div class="mt10"><span class="img_border"><i><img src="'.$song_img.'" alt="'.$song_name.'" class="z360z"></i></span><br><h1 class="ph1">'.$song_name.'</h1><div id="jquery_jplayer_1" class="jp-jplayer"></div><div id="jp_container_1" class="jp-audio"> <div class="jp-type-single"> <div class="jp-gui jp-interface"><ul class="jp-controls"><li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li><li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li><li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li><li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li><li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li></ul><div class="jp-progress"><div class="jp-seek-bar"><div class="jp-play-bar"></div></div></div><div class="jp-volume-bar"><div class="jp-volume-bar-value"></div></div><div class="jp-time-holder"><div class="jp-current-time"></div> <div class="jp-duration"></div><ul class="jp-toggles"><li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li><li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li></ul></div></div> <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div> </div></div><div class="content"> <ul id="lrc_list">	<li>'.$song_name.'</li> </ul></div><li style="margin:5px;"><a href="'.$song_url.'" target="_blank" class="btn">下载线路1</a> <a href="'.$song_url.'" target="_blank" class="btn">下载线路2</a></li></div>';
		break;
		case "V":
		//*******************************视频播放页面*******************************//
		$x_url = "http://m.kugou.com/app/i/mv.php?cmd=100&ext=mp4&hash=".$id;
		$data = curl_get($x_url);
		preg_match('/songname":"(.*?)",/is', $data, $nm2);
		preg_match('/singer":"(.*?)",/is', $data, $nm1);
		preg_match('/mvicon":"(.*?)",/is', $data, $img);
		preg_match_all('/downurl":"(.*?)",/is', $data, $mp4);
		preg_match_all('/backupdownurl":\["(.*?)"\]/is', $data, $bmp4);
		$song_name = $nm1[1]." - ".$nm2[1];
		$mv_url = stripslashes($mp4[1][0]);
		if(empty($mv_url)){exit($error);}
		$title = $song_name.",mv视频在线观看,".$bati;
		$song_img = stripslashes(str_replace("{size}","400",$img[1]));
		$a=array("流畅","标清","高清","超清");
		for($i = 0; $i < 3; $i++){
			$downurla = stripslashes($mp4[1][$i]);
			$downurlb = stripslashes($bmp4[1][$i]);
			if($downurla){
			$down .= "<li style=\"margin:5px 5px;\">".$a[$i]."： <a href=\"".$downurla."\" target=\"_blank\" class=\"btn\">下载线路1</a> <a href=\"".$downurlb."\" target=\"_blank\" class=\"btn\">下载线路2</a></li>";
			}
		}
		$main = "<script type=\"text/javascript\"> function player(url) { var frameid = Math.random(); window.webmvplayer = '<video width=\"100%\" height=\"100%\" controls=\"controls\" autoplay=\"autoplay\" poster=\"$song_img\" object-fit:fill><source src=\"'+url+'\" type=\"video/mp4\"><embed id=\"webmvplayer\" name=\"webmvplayer\" src=\"http://static.kgimg.com/common/swf/video/videoPlayer.swf\" height=\"100%\" width=\"100%\" allowscriptaccess=\"always\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" flashvars=\"skinurl=http%3a%2f%2fstatic.kgimg.com%2fcommon%2fswf%2fvideo%2fskin.swf&amp;aspect=true&amp;url='+url+'&amp;autoplay=true&amp;fullscreen=true&amp;initfun=flashinit\" type=\"application/x-shockwave-flash\" wmode=\"Transparent\" allowfullscreen=\"true\"></embed></video><script>window.onload = function() { parent.document.getElementById(\''+frameid+'\').height = document.body.scrollWidth*0.565+\'px\'; }<'+'/script>';	document.write('<iframe id=\"'+frameid+'\" src=\"javascript:parent.webmvplayer;\" frameBorder=\"0\" scrolling=\"no\" width=\"100%\" frameborder=\"0\" vsspace=\"0\" hspace=\"0\" marginwidth=\"0\" marginheight=\"0\"></iframe>'); } </script><div class=\"main\"><h2 style=\"margin-bottom:10px;width:100%;white-space:nowrap;overflow:hidden;\"><a href=\"?v=".$_GET['v']."\" title=\"".$song_name."\">".$song_name."</a></h2></div>
		<div style=\"text-align:center;max-width:640px;min-width:320px;margin:10px auto;background-color:#fff;\"><script type=\"text/javascript\">player('".$mv_url."');</script>		
		<li style=\"margin:5px 5px;\">浏览器下载视频请<a href=\"http://player.youku.com/embed/XMjk4MDE3MTIwMA?autoplay=true\" target=\"_blank\" style=\"color:red;\">观看教程</a></li>".$down."</div>";
		break;
		default:
		exit($error);
	}
	$main .= random().mv();
}elseif(isset($_GET['l'])){
//*******************************列表页面*******************************//
	$l=$_GET['l'];
	$web = '1';
	switch ($l){
		case "1":
		$peg = "网络红歌,最新最好听的网络歌曲，根据网络歌曲人气智能排序网络歌曲排行榜！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=23784&page=1";
		break;
		case "2":
		$peg = "TOP排行榜,平民化的音乐和歌手，让音乐更贴近你的生活！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=8888&page=1";
		break;
		case "3":
		$peg = "劲爆DJ舞曲,动感十足！经典劲爆歌曲，流行劲爆，英文劲爆，韩国劲爆歌曲全都有！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=70&page=1";
		break;
		case "4":
		$peg = "恋爱的歌,献给热恋中的你们，让爱情变得更加甜美！";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=67&page=1";
		break;
		case "5":
		$peg = "洗脑神曲,神曲之所以被称为神曲，不仅仅是因为旋律，更多的是因为大众喜欢。";
		$url = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=300&rankid=24574&page=1";
		break;
		case "6":
		$peg = "美拍视频";
		$web = 'meipai';
		break;
		default:
		exit($error);
	}
    if($web=='meipai'){
		$title = $peg." - ".$bati;
		$main = '<div class="plr10"><script type="text/javascript" src="http://mp34.butterfly.mopaasapp.com/meipai.php" charset="utf-8"></script></div>';
	}else{
		$data = curl_get($url);
		$json = json_decode($data,true);
		$title = $peg." - ".$bati;
		$count_json = count($json['data']['info']);
		$main = "<div class=\"plr10\"><div class=\"h1\">".$peg."</div><div id=\"wlsong\"><ul>";
		for($i = 0; $i < $count_json; $i++){
			$k = $i + 1;
			$name = $json['data']['info'][$i]['filename'];
			$hash = $json['data']['info'][$i]['hash'];
			$href = substr($hash,10)."M".substr($hash,0,10);
			$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"?v=".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"?v=".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
		}
		$main .= "</ul></div></div>";
	}
}elseif((isset($_GET['mp3']))xor(isset($_GET['mp4']))){
//*******************************搜索页面*******************************//
	if(empty($_GET['p'])){
		$p = "1";
	}elseif(preg_match("/^\+?[1-9][0-9]*$/",$_GET['p'])){
		$p = $_GET['p'];
	}else{
		exit($error);
	}
	if(isset($_GET['mp3'])){
		$w = htmlspecialchars($_GET['mp3']);
		$api ="http://songsearch.kugou.com/song_search_v2?keyword=".$w."&page=".$p."&platform=WebFilter";
		$btn ="<a class=\"btn\">MP3</a>&nbsp;<a class=\"btn\" href=\"?mp4=".$w."\">MP4</a>";
		$title = "《".$w."》的mp3音乐搜索结果,".$bati;
		$data = curl_get($api);
		$json = json_decode($data,true);
		$nums = $json['data']['total'];
		$num = $json['data']['pagesize'];
		$list = $json['data']['lists'];
		$tota = count($list);
		$pnum = ceil($nums/$num);
		$main = "<div class=\"main\"><div style=\"float:left;\">".$btn."</div><div style=\"float:right;\"><a class=\"btn\">共".$pnum."页</a>&nbsp;<select  onchange=\"javascript:location.href=this.options[this.selectedIndex].value\"><option disabled selected hidden>第".$p."页</option>";
		for($i = $p-4; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<option value=\"?mp3=".$w."&p=".$i."\" >第".$i."页</option>";
			}
		}
		$main .= "</select></div></div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
		for ($i=0;$i<$tota;$i++){
		$k = $i + 1;
		$nnmm = $list[$i]['FileName'];
		$name = str_ireplace($w,"<font color='red'>".$w."</font>",$nnmm);//关键字红色显示
		$hash = $list[$i]['FileHash'];
		$href = substr($hash,10)."M".substr($hash,0,10);
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"?v=".$href."\" target=\"_mp34\" title=\"".$nnmm."\">".$name."</a><a class=\"fr\" href=\"?v=".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
		}
		$main .= "</ul></div></div>";
	}else{
		$w = htmlspecialchars($_GET['mp4']);
		$api = "http://mvsearch.kugou.com/mv_search?keyword=".urlencode($w)."&page=".$p."&pagesize=21";
		$btn ="<a class=\"btn\" href=\"?mp3=".$w."\">MP3</a>&nbsp;<a class=\"btn\">MP4</a>";
		$title = "《".$w."》的mv视频搜索结果,".$bati;
		$data = curl_get($api);
		$json = json_decode($data,true);
		$nums = $json['data']['total'];
		$num = $json['data']['pagesize'];
		$list = $json['data']['lists'];
		$tota = count($list);
		$pnum = ceil($nums/$num);
		$main = "<div class=\"main\"><div style=\"float:left;\">".$btn."</div><div style=\"float:right;\"><a class=\"btn\">共".$pnum."页</a>&nbsp;<select  onchange=\"javascript:location.href=this.options[this.selectedIndex].value\"><option disabled selected hidden>第".$p."页</option>";
		for($i = $p-4; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<option value=\"?mp4=".$w."&p=".$i."\" >第".$i."页</option>";
			}
		}
		$main .= "</select></div></div><ul class=\"mv_list\">";
		for ($i=0;$i<$tota;$i++){
			$nnmm = $list[$i]['FileName'];
			$name = str_ireplace($w,"<font color='red'>".$w."</font>",$nnmm);//关键字红色显示
			$pppp = $list[$i]['Pic'];
			$mpic = "http://imge.kugou.com/mvhdpic/240/".substr($pppp,0,8)."/".$pppp;
			$hash = $list[$i]['MvHash'];
			$href = substr($hash,10)."V".substr($hash,0,10);
			if($nnmm){
				$main .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$nnmm."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$name."</span></a></li>";
			}
		}
		$main .= "</ul>";
	}
}elseif(isset($_GET['m'])){
//*******************************MV页面*******************************//
	$p=$_GET['m'];
	if(preg_match("/^\+?[1-9][0-9]*$/",$p)){
		$mvurl = "http://www.kugou.com/mvweb/html/index_9_".$p.".html";
		$data = curl_get($mvurl);
		preg_match('/id="mvNum">(.*?)<\/label>/is',$data,$total);
		preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
		$num = "20";
		$nums = $total[1];
		$pnum = ceil($nums/$num);
		if($p > $pnum){	exit($error); }
		$main = "<div class=\"main\"><div style=\"float:left;\">热舞MV大放送！</div><div style=\"float:right;\"><a class=\"btn\">共".$pnum."页</a>&nbsp;&nbsp;<select  onchange=\"javascript:location.href=this.options[this.selectedIndex].value\"><option disabled selected hidden>第".$p."页</option>";
		for($i = $p-4; $i<$p+5; $i++){
			if(($i>0)&&($i<=$pnum)){
				$main .= "<option value=\"?m=".$i."\" >第".$i."页</option>";
			}
		}
		$main .= "</select></div></div>";
		$title = "热舞MV大放送 第".$p."页 - ".$bati;
		$main .= "<ul class=\"mv_list\">";
		preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
		preg_match_all('/src="(.*)"/', $mvlist[1], $img);
		for($i = 0; $i < 18; $i++){
			$gq = $name[1][$i];
			$mpic = $img[1][$i];
			$hash = substr(strrchr($mpic,"/"),1,32);
			$href = str_replace("=","",base64_encode("mv$".$hash));
			if($mpic){
				$main .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";
			}
		}
		$main .= "</ul></div></div>";
	}else{
		exit($error);
	}
}else{
	$title = $bati;
	$main = mv().bang();
}
function decode($str){
	$tsr = substr($str,0,4);
	$rts = substr($str,4);
	$res = "";
	for ($i = 1; $i <= strlen($tsr); $i++){
		$res .= substr($tsr, -$i, 1);
	}
	$s = hexdec($res);
	$k = str_split($s);
	$k1 = substr_replace($rts,"",$k[0],$k[1]);
	$k2 = substr_replace($k1,"",-($k[2]+$k[3]),-$k[2]);
	$k3 = base64_decode($k2);
	return $k3;
}
function mv(){
	global $no_img;
	$output = "<div class=\"main\"><div class=\"lr\">热门推荐</div><div class=\"fr\"><a href=\"?m=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><ul class=\"mv_list\">";
	$kbang = "http://www.kugou.com/mvweb/html/index_13_".rand(1,300).".html";
	$data = curl_get($kbang);
	preg_match('/class="mvlist">(.*?)<\/div>/is',$data,$mvlist);
	preg_match_all("/<span>(.*)<\/span>/", $mvlist[1], $name);
	preg_match_all('/src="(.*)"/', $mvlist[1], $img);
	$su = rand(0,5);
	for($i = $su; $i < $su+15; $i++){
		$gq = $name[1][$i];
		$mpic = $img[1][$i];
		$hash = substr(strrchr($mpic,"/"),1,32);
		$href = substr($hash,10)."V".substr($hash,0,10);
		if($mpic){
			$output .= "<li><a href=\"?v=".$href."\" target=\"_mp34\" title=\"".$gq."\"><img src=\"".$mpic."\" onerror=\"this.src='".$no_img."'\"><span>".$gq."</span></a></li>";
		}
	}
	$output .= "</ul>";
return $output;
}
function bang(){
	$kbang = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=500&rankid=6666&page=1";
	$data = curl_get($kbang);
	$json = json_decode($data,true);
	$num = $json['data']['total'];
	$time = date('Y-m-d H:i:s',$json['data']['timestamp']);
	$main = "<div class=\"main\"><div class=\"lr\">网络歌曲飙升榜</div><div class=\"fr\"><a href=\"?l=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
	for($i = 0; $i < $num; $i++){
		$k = $i + 1;
		$hash = $json['data']['info'][$i]['hash'];
		if($hash){
			$name = $json['data']['info'][$i]['filename'];
			$href = "?v=".substr($hash,10)."M".substr($hash,0,10);
		}
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
	}
	$main .= "</ul></div></div>";
return $main;
}
function random(){
	$kbang = "http://mobilecdn.kugou.com/api/v3/rank/song?pagesize=500&rankid=23784&page=1";
	$data = curl_get($kbang);
	$json = json_decode($data,true);
	$num = $json['data']['total'] - 20;
	$su = rand(0,$num);
	$dd = rand(5,15);
	$main = "<div class=\"main\"><div class=\"lr\">猜你喜欢</div><div class=\"fr\"><a href=\"?l=1\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></div></div><div class=\"plr10\"><div id=\"wlsong\"><ul>";
	$k = 0;
	for($i = $su; $i < $su + 20; $i++){
		$k = $k + 1;
		$hash = $json['data']['info'][$i]['hash'];
		if($i==$su+$dd){
			$name = '推荐 - 便捷影视传媒';
			$href = 'http://i6x.cn/';
		}elseif($hash){
			$name = $json['data']['info'][$i]['filename'];
			$href = "?v=".substr($hash,10)."M".substr($hash,0,10);
		}
		$main .= "<li><span class=\"numb\">".$k."</span><a class=\"gname\" href=\"".$href."\" target=\"_mp34\" title=\"".$name."\">".$name."</a><a class=\"fr\" href=\"".$href."\" target=\"_mp34\"><i class=\"fa fa-play-circle fa-3x\" aria-hidden=\"true\"></i></a></li>";
	}
	$main .= "</ul></div></div>";
return $main;
}
function curl_get($url,$web){
	$temp = parse_url($url);
	$header = array (
	"Host: {$temp['host']}",
	"Referer: http://{$temp['host']}/"
	);
	if($web=='1'){
		$Agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36";
		$Cookie = "";
	}else{
		$Agent = $_SERVER['HTTP_USER_AGENT'];
	}
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_USERAGENT, $Agent);
	curl_setopt($ch, CURLOPT_COOKIE,$Cookie);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $output = curl_exec($ch);
    curl_close($ch);
return $output;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,maximum-scale=1,user-scalable=no">
<meta name="copyright" name="音乐试听外链站 v1.5"/>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title><?php echo $title?></title>
<meta name="keywords" content="<?php echo $title?>,QQ空间背景音乐,音乐外链,歌曲外链,mp3外链,视频外链,背景音乐链接,外链,音乐外链网" />
<meta name="description" itemprop="description" content="<?php echo $title?>,音乐试听外链站免费提供音频试听，你可以分享给你的好友。同时生成的音乐外链链接支持引用到各大博客，网站，还可免费设置QQ空间背景音乐，免去你寻找歌曲链接地址的苦恼。" />
<link href="https://cdn.staticfile.org/jplayer/2.2.0/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/* 公共部分 */
*{margin:0;border:0;list-style-type:none;}a{text-decoration:none;cursor:pointer;color:#333;}h1,h2,h3,h4,h5,h6,select{font-size:100%;}.fr{float:right;}.lr{float:left;}.mt10{max-width:640px;min-width:320px;margin:10px auto;text-align:center;}body{background-color:#eee}
/* 顶部 */
#header{top:0px;max-width:640px;min-width:320px;margin:0px auto;}.new_top,.n_nav,#menu{filter: progid:DXImageTransform.Microsoft.Gradient(startColorStr='#0896fc',endColorStr='#077ddd',gradientType='0');background:-webkit-linear-gradient(top, rgba(8, 150, 252, 1), rgba(7, 126, 221, 1));}.new_top{height:45px;}.new_top img{height:45px;max-width:30%;float:left;margin-left:2%;}.sousuobox{float:right;margin-top:8px;}.sousuobox #keyword{float:left;width:70%;height: 25px;line-height:25px;text-indent:10px;border-radius:25px 0 0 25px;}.sousuobox #serch{float:left;height:27px;background:#0273c7;border-radius:0 26px 26px 0;cursor:pointer;color:#fff;}
/* 内容 */
.main{background-color:#fff;height:60px;line-height:60px;text-align:left;padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;}#wlsong ul{color:#0763BF;padding:0;}#wlsong ul li{border-bottom: 1px solid #F2F2F2;height:60px;line-height:60px;overflow:hidden}#wlsong ul li img{margin:10px;margin-top:20px;float:left;width:41px;height:41px;}.numb{float:left;display:inline-block;text-align:left;height:60px;overflow:hidden;text-indent: 0.5em;width:40px;color:#FA3B00;}.gname{width:65%;display:inline-block;text-align:left;height:60px;overflow:hidden;color: #044CB8;float:left;}#wlsong ul li i{line-height:60px;color:#5888D0;margin-right:10px;}a:hover.gname{color:#ff0000;}.h1{border-bottom:1px solid #D9DEE1;color:#FA3B00;padding:10px;}.content {height:200px;overflow:hidden;padding:10px;background-color:#fff;padding-right:60px;}#lrc_list{margin:10px auto;}#lrc_list li{font:normal 14px/2.1 'microsoft yahei';text-align:center;}#lrc_list li.hover {color:red;font-weight:bold;}div.jp-audio{border:0px;margin:0px auto;}
/* MV */
.mv_list{background-color:#fff;max-width:640px;min-width:320px;overflow:hidden;clear:both;margin:0 auto;padding:0;text-align:center;}.mv_list a:hover{color:#ff0000;}.mv_list li{display:inline-block;width:29%;margin:10px 2%;}.mv_list span{float:left;overflow:hidden;width:100%;text-overflow: ellipsis;white-space:nowrap;height:24px;line-height:28px;}.mv_list img{width:100%;border-radius:10px;}.btn{padding:1px 5px;border-radius:5px;background-color:#0795FA;color:#fff;height:23px;}.btn:hover{background-color:#0795FA;color:#fff;cursor:pointer;}select{height:23px;border-radius:5px;background-color:#0795FA;color:#fff;}
/* 列表 */
.ph1{background-color:#fff;max-width:640px;min-width:320px;height:40px;overflow:hidden;line-height:40px;font-weight:700;}.img_border{display: inline-block;width:155px;height:155px;margin:10px auto;}.img_border i{border:10px solid #2A2B2D;border-radius:100px;display:inline-block;height:130px;}.img_border img{width:130px;height:130px;}.z360z{border-radius:120px;-webkit-animation:rotating 5s linear infinite;animation:rotating 5s linear infinite}@-webkit-keyframes rotating{from{-webkit-transform:rotate(0);-moz-transform:rotate(0);-ms-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotating{from{-webkit-transform:rotate(0);-moz-transform:rotate(0);-ms-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-ms-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}.plr10{padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;background-color:#fff;}
/* 底部 */
.bottom{position:fixed;height:45px;z-index:999;bottom:0;left:0;width:100%;padding-top:10px;}.bottom a{color:#fff;text-decoration:none;}.n_nav{height:45px;max-width:640px;min-width:320px;text-align:center;margin:0px auto;}.n_nav ul li{ float:left; width:30%;height:45px;line-height:45px;}#menu_box{position:fixed;z-index:999;bottom:45px;left:0;width:100%;}#menu{overflow:hidden;max-width:640px;min-width:320px;text-align:center;margin:0px auto;}#menu ul li{width:30%;float:left;margin:10px 0px;}#menu ul li a{color:#fff;text-decoration:none;}
</style>
<script type="text/javascript" src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.staticfile.org/jplayer/2.9.2/jplayer/jquery.jplayer.js"></script>
<script type="text/javascript" src="https://qcloud.coding.net/u/59230756/p/atool/git/raw/master/jplayer.lrc.js"></script>
</head>
<body>
<!-- 顶部菜单 Start -->
<div id="header">
<!--[if IE]><div style="background:rgb(255,255,225);text-align:center;color:#333;padding:2px 20px;font-size:14px;overflow:hidden;height:40px;line-height:40px;">温馨提示：您的浏览器版本过低，请您升级至更快速安全的Chrome内核浏览器！<a style="text-decoration:none;color:#f00;" href="https://jifendownload.2345.cn/jifen_2345/p8_ki6x_v2.0.exe">点击下载最新版安全浏览器</a></div><![endif]-->
    <div class="new_top">
        <a href="<?php echo $weburl;?>" title="<?php echo $bati;?>"><img src="http://ww1.sinaimg.cn/small/6b229b76jw1fb0zomp6k1g203z014t8h.gif"/></a>
        <div class="sousuobox">
			<form method="get" name="get_key" onsubmit="return getkey();"> 
			<input type="text" name="mp3" id="keyword" placeholder="输入关键字搜索"/>
			<input type="submit" id="serch" value="搜索"></input>
			</form>
        </div>
    </div>
</div>
<?php echo $main;?>
<script type="text/javascript">
function getkey(){
	if(get_key.keyword.value==""){
		alert("请输入歌曲名称!");
		get_key.keyword.focus();
		return false;
	}
}
function opens(){
	if(showdiv = document.getElementById('menu_box').style.display=='none'){
		document.getElementById('menu_box').style.display='block';
	}else{
		document.getElementById('menu_box').style.display='none';
	}
}
</script>
<div style="margin-top:45px;"></div>
<div id="menu_box" style="display:none;">
	<div id="menu">
	   	<ul>
    	<li><a href="?l=1">网络红歌</a></li>
        <li><a href="?l=2">TOP排行榜</a></li>
        <li><a href="?l=3">DJ舞曲</a></li>
        <li><a href="?l=4">恋爱的歌</a></li>
        <li><a href="?l=5">洗脑神曲</a></li>
        <li><a href="?l=6">美拍视频</a></li>
        <li><a target="_blank" href="http://mp34.butterfly.mopaasapp.com/tv.php">万部影片</a></li>
        <li><a target="_blank" href="http://mp34.butterfly.mopaasapp.com/upimg.html">图片外链</a></li>
		</ul>
	</div>
</div>
<div class="bottom"> 
	<div class="n_nav">
	    <ul id="nnav">
		<li><a href="<?php echo $weburl;?>"><i class="fa fa-home"></i>&nbsp;首页</a></li>
		<li><a href="javascript:void(0)" onClick="opens()"><i class="fa fa-music"></i>&nbsp;榜单</a></li>
		<li><a href="?m=1"><i class="fa fa-film"></i>&nbsp;高清MV</a></li>
		</ul>
	</div>
<p><script type="text/javascript">var datatime=new Date(); document.write("&copy; 2010-"+datatime.getFullYear()+".");</script>   <a target="_blank" href="http://member.down.admin5.com/uploads/userup/1718/1.zip">下载本站源码</a></p>
<p style='display:none'><?php echo $tjdm;?></p>
</div>
</body>
</html>