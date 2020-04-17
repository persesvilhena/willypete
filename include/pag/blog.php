<?php
	echo "
	<span class=\"titulo\">Blog</span>
	<br>
	<hr width=\"100%\">
	<br>

	<table>
	<tr><td style=\"border: 1px solid #cccccc; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; padding: 10px; background: #ccc;\">Data</td><td style=\"border: 1px solid #cccccc; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; padding: 10px; width: 100%; background: #ccc;\">Titulo</td></tr>
	";
	$sql = mysql_query("SELECT * FROM blog ORDER BY id asc LIMIT 25");
 	while($rsql=mysql_fetch_array($sql)){
 		echo "<tr>
 			<td style=\"border: 1px solid #cccccc; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; padding: 10px;\">
 			" . $rsql['data'] . "
 			</td>
 			<td style=\"border: 1px solid #cccccc; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; padding: 10px; width: 100%;\">
 			<a href=\"#pfdialog\" name=\"pfmodal\" class=\"botao\" onclick=\"CarregaPagina('8','" . $rsql['id'] . "'); window.history.pushState('Object', 'Categoria JavaScript', '/index.php?p=ver&idu=" . $rsql['id'] . "');\">" . $rsql['titulo'] . "
 			</td>
 		</tr>";
 	}

	echo "</table>
	";
?>