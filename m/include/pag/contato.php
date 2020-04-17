<?php
$mensagem_erro = "";

if(isset($_POST["cadastrar"])) { 
	
	if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["assunto"]) && !empty($_POST["descricao"])) { 
		
		$nome = $class->antisql($_POST["nome"]);
		$email = $class->antisql($_POST["email"]); 
		$assunto = $class->antisql($_POST["assunto"]); 
		$descricao = $class->antisql($_POST["descricao"]); 

		
			
			$insert = mysql_query("insert into contato (nome, email, assunto, descricao) values('$nome', '$email', '$assunto', '$descricao');") or die(mysql_error()); // Insiro os dados no BD
			
			if($insert) { // Verifico se a query foi executada com sucesso. Se sim, define mensagem de sucesso.
				
				$mensagem_erro = "Mensagem enviada com sucesso!<br>Assim que possível entraremos em contato!";
			}
		
		
	}
	else { // Se houver algum campo em branco, define mensagem de erro
	
		$mensagem_erro = "Por favor, preencha os campos corretamente!";
		
	}	
	echo "
	<div class=\"item\">
	<center>
	<span class=\"texto\">" . $mensagem_erro . "</span><br><br>
	<a class=\"botao\"  href=\"index.php\">Voltar a página inícial</a> 
	</center>
	</div>
	";	
}else{

	echo "
	<span class=\"titulo\">Contato</span>
		<br>
		<hr width=\"100%\">
		<br>
		<center>
		<form method=\"post\" action=\"\">
			<table width=\"100%\">
			<tr>
				<td><span class=\"texto\">Nome: </span></td>
</tr>
			<tr>
				<td><input id=\"nome\" class=\"input\" type=\"text\" name=\"nome\" onblur=\"validaNome();\" style=\"width: 100%;\"></td>
			</tr>
			<tr>
				<td><span class=\"texto\">Email: </span></td>
</tr>
			<tr>
				<td><input id=\"email\" class=\"input\" type=\"text\" name=\"email\" onblur=\"validaEmail();\" style=\"width: 100%;\"></td>
			</tr>
			<tr>
				<td><span class=\"texto\">Assunto: </span></td>
</tr>
			<tr>
				<td><input id=\"assunto\" class=\"input\" type=\"text\" name=\"assunto\" onblur=\"validaAssunto();\" style=\"width: 100%;\"></td>
			</tr>
			<tr>
				<td><span class=\"texto\">Descrição: </span></td>
</tr>
			<tr>
				<td><textarea id=\"descricao\" class=\"input\" type=\"text\"  style=\"width: 100%;\" rows=\"12\" name=\"descricao\" onblur=\"validaDescricao();\"></textarea></td>
			</tr>
			<tr>
				<td><div align=\"right\"><button id=\"cadastrar\" class=\"botao\" type=\"submit\" name=\"cadastrar\" value=\"Cadastrar\"><span class=\"texto\">Enviar</span></button></div></td>
			</tr>
			</table>
		</form>
		</center>
	
	";
}
?>