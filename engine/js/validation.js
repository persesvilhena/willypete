window.onload=initPage;function initPage(){document.getElementById("login").onblur=checkUsername;document.getElementById("senha").onblur=checkPassword;document.getElementById("senha1").onblur=checkPassword1;document.getElementById("email").onblur=validacaoEmail;document.getElementById("nome").onblur=validaNome;document.getElementById("sobrenome").onblur=validaSobrenome;document.getElementById("lglogin").onblur=botaoLogar;document.getElementById("lgsenha").onblur=botaoLogar;}function checkUsername(){request=createRequest();if(request==null){alert("Incapaz de criar a solicitacao");}else{var theName=document.getElementById("login").value;var username=escape(theName);var url="engine/checkName.php?username="+username;request.onreadystatechange=showUsernameStatus;request.open("GET",url,true);request.send(null);}}function showUsernameStatus(){if(request.readyState==4){if(request.status==200){if(request.responseText=="okay"){document.getElementById("login").className="input_ok";}else{document.getElementById("login").className="input_erro";}}}}function checkPassword(){var pass=document.getElementById("senha").value;if(pass.length>7){document.getElementById("senha").className="input_ok";}else{document.getElementById("senha").className="input_erro";}}function checkPassword1(){var pass1=document.getElementById("senha").value;var pass2=document.getElementById("senha1").value;if(pass1==pass2){document.getElementById("senha1").className="input_ok";}else{document.getElementById("senha1").className="input_erro";}}function validacaoEmail(){usuario=document.getElementById("email").value.substring(0,document.getElementById("email").value.indexOf("@"));dominio=document.getElementById("email").value.substring(document.getElementById("email").value.indexOf("@")+1,email.value.length);if((usuario.length>=1)&&(dominio.length>=3)&&(usuario.search("@")==-1)&&(dominio.search("@")==-1)&&(usuario.search(" ")==-1)&&(dominio.search(" ")==-1)&&(dominio.search(".")!=-1)&&(dominio.indexOf(".")>=1)&&(dominio.lastIndexOf(".")<dominio.length-1)){document.getElementById("email").className="input_ok";}else{document.getElementById("email").className="input_erro";}}function validaNome(){if(document.getElementById("nome").value==""){document.getElementById("nome").className="input_erro";}else{document.getElementById("nome").className="input_ok";}}function validaSobrenome(){if(document.getElementById("sobrenome").value==""){document.getElementById("sobrenome").className="input_erro";}else{document.getElementById("sobrenome").className="input_ok";}}