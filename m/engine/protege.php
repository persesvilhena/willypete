<?php

if(!empty($_COOKIE["login"]) && !empty($_COOKIE["senha"]) && !empty($_COOKIE["id"])){ // Verifico se existe cookies de login

	// Transformo os cookies em variáveis
	$login = $_COOKIE["login"];
	$senha = $_COOKIE["senha"];
	$id_gen = base64_decode($_COOKIE["id"]); // Decodifico o id do cookie
	
	// Consulto o BD para ver se os cookies são compatíveis com os dados SQL
	$auth_user = "SELECT * FROM $tabela WHERE id='$id_gen' AND login='$login' AND senha='$senha'";
	$autentica = mysql_query($auth_user); // Executo a busca
	$rs = mysql_fetch_array($autentica); // Defino o array dos resultados para a var $rs
	
	$id = $rs["id"]; // Retorno o id do BD
	
	$rConfirm = mysql_num_rows($autentica); // Var responsável por retornar o número de linhas da consulta
	
} 
if (isset($rConfirm) && $rConfirm > '0') { // Verifico se foram retornadas linhas referentes a consulta

	$mysqlq = mysql_query("SELECT * FROM $tabela WHERE id='$id'"); // Faço uma consulta para pegar os dados do user
	$row = mysql_fetch_array($mysqlq); // Var responsável pelo array de resultados da consulta em $mysqlq	
	$mysqlq2 = mysql_query("SELECT * FROM perfil WHERE id='$id'"); // Faço uma consulta para pegar os dados do user
	$row2 = mysql_fetch_array($mysqlq2); // Var responsável pelo array de resultados da consulta em $mysqlq	

} 
else { // Se não retornar nenhuma linha, redireciona o usuário para a página de login
	header ("Location: logar.php");
	exit();
}

?>