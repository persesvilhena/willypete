<?php
	$sql = mysql_query("SELECT * FROM blog where id = '$idu'");
 	$rsql=mysql_fetch_array($sql);
	echo "
	<span class=\"titulo\">" . $rsql['titulo'] . "</span>
	<br>
	<hr width=\"100%\">
	<br>

	<span class=\"texto\">" . $rsql['mensagem'] . "</span>
	";
?>