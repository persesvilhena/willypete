<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
	header("Location: http://m.willypete.com.br/");
}

if(isset($_GET['i1'])){$i1 = $class->antisql($_GET['i1']);} else {$i1 = null;}
if(isset($_GET['i2'])){$i2 = $class->antisql($_GET['i2']);} else {$i2 = null;}
if(isset($_GET['i3'])){$i3 = $class->antisql($_GET['i3']);} else {$i3 = null;}
if(isset($_GET['i4'])){$i4 = $class->antisql($_GET['i4']);} else {$i4 = null;}
if(isset($_GET['p1'])){$p1 = $class->antisql($_GET['p1']);} else {$p1 = null;}
if(isset($_GET['p2'])){$p2 = $class->antisql($_GET['p2']);} else {$p2 = null;}
if(isset($_GET['p3'])){$p3 = $class->antisql($_GET['p3']);} else {$p3 = null;}
if(isset($_GET['p4'])){$p4 = $class->antisql($_GET['p4']);} else {$p4 = null;}
if(isset($_GET['z1'])){$z1 = $class->antisql($_GET['z1']);} else {$z1 = null;}
if(isset($_GET['z2'])){$z2 = $class->antisql($_GET['z2']);} else {$z2 = null;}

include "engine/conexao.php"; 
//date_default_timezone_set("Brazil/East");
include "engine/functions.php";

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Description" CONTENT="Banda Willy Pete - Muzambinho">
<meta name="author" content="Willy Pete">
<meta name="keywords" content="Willy Pete, Willy, Pete, banda willy pete, willy pete band, banda">
<link rel="shortcut icon" type="image/png" href="/engine/imgs/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="http://willypete.com.br/engine/imgs/favicon.png"/>
<link rel="stylesheet" type="text/css" href="engine/css/style.css">
<script src="engine/js/jquery.js" type="text/javascript" async></script>
<script src="engine/js/utils.js" type="text/javascript" async></script>
<script src="engine/js/validation.js" type="text/javascript" async></script>
<script src="engine/js/thumbnails.js" type="text/javascript" async></script>
<script src="engine/js/script.js" type="text/javascript" async></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71171338-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4538361451781734",
    enable_page_level_ads: true
  });
</script>

<title>Willy Pete</title>

</head>
<body>
<h1>Willy Pete</h1>
<h2>Banda Willy Pete</h2>
<h3>Banda Willy Pete Muzambinho</h3>

<div id="pfmask"></div>

<div id="center">
	<div id="imghome" style="z-index: 1;">
		<center>
		<img src="engine/imgs/home.png">
		</center>
	</div>
</div>


<div id="center" style="margin-top: 0px;">
	<div id="menu" style="position: relative; left: 0px; top: 14px; width: 1002px;  text-align: justify;" align="left">
		<?php include "include/pag/cabeca.php";?>
	</div>
	<div id="corpo" style="margin-top: 30px;">
		<?php include "engine/redirect.php"; ?>
	</div>
</div>


<div id="boxes">
	<div id="pfdialog" class="pfwindow">
		<div align="right">
			<a href="#" class="pfclose"><img src="engine/imgs/cancela.png"></a>
		</div>
		<div id="conteudobox" align="left">

		</div>
	</div>
</div>
</body>
</html>