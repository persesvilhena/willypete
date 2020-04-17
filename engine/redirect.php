<?php
if(isset($_GET['p'])){$pag = $class->antisql($_GET['p']);} else {$pag = null;}
if(isset($_GET['idu'])){$idu = $class->antisql($_GET['idu']);} else {$idu = null;}
if(!isset($pag)) {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
	include "include/pag/index.php";
echo "</div>";
}

if($pag == "index") {
//echo "<style>#imghome{ display: none;}</style>";
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/index.php";
echo "</div>";
}

if($pag == "discografia") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/discografia.php";
echo "</div>";
}

if($pag == "blog") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/blog.php";
echo "</div>";
}

if($pag == "fotos") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/fotos.php";
echo "</div>";
}

if($pag == "videos") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/videos.php";
echo "</div>";
}

if($pag == "contato") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/contato.php";
echo "</div>";
}

if($pag == "ver") {
echo "<div class=\"item\" style=\"margin-top: 20px;\">";
include "include/pag/ver.php";
echo "</div>";
}


if($pag == "perses") {
echo "
<div class=\"item\">
	<center>
		<img class=\"img_style\" src=\"engine/imgs/eu.jpg\" width=\"300\">
	</center>
</div>
";
}

?>
<div style="clear: both;"></div>
<div style="height: 100px;"></div>