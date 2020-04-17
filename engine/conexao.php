<?php

header('Content-Type: text/html; charset=utf-8');
@mysql_pconnect("localhost", "root", "senha");
mysql_select_db("willypete");
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
		   
class SistemaLogin { // Defino a classe principal do sistema
	
	//function antisql($sql) { // Função Anti-SQL
	//	$sql = get_magic_quotes_gpc() == 0 ? addslashes($sql) : $sql;
	//	$sql = trim($sql);
	//	$sql = strip_tags($sql);
	//	$sql = mysql_escape_string($sql);
	//	return preg_replace("@(--|\#|\*|;|=)@s", '', $sql);
	//}
	function antisql($sql) {
    $sql = addslashes($sql);
    return $sql;
	}
}
$class = new SistemaLogin;
$tabela = "user";
?>
