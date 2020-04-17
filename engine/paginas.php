<?php

include "../engine/conexao.php"; 
include "../engine/functions.php";


$id = $_GET['id'];
$idu = $_GET['idu'];



if($id == "1"){
echo "<div class=\"item\">";
include("../include/pag/index.php");
echo "</div>";
}

if($id == "2"){
	echo "<div class=\"item\">";
include("../include/pag/discografia.php");
echo "</div>";
}


if($id == "3"){
	echo "<div class=\"item\">";
include("../include/pag/blog.php");
echo "</div>";
}

if($id == "4"){
	echo "<div class=\"item\">";
include("../include/pag/fotos.php");
echo "</div>";
}

if($id == "5"){
	echo "<div class=\"item\">";
include("../include/pag/index.php");
echo "</div>";
}

if($id == "6"){
	echo "<div class=\"item\">";
include("../include/pag/videos.php");
echo "</div>";
}

if($id == "7"){
	echo "<div class=\"item\">";
include("../include/pag/contato.php");
echo "</div>";
}

if($id == "8"){
	echo "<div class=\"item\">";
include("../include/pag/ver.php");
echo "</div>";
}

?>