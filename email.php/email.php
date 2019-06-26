<?php


if(isset(POST['email']) && !empty(POST['email'])){

nome = addslashes(POST['name']);
email = addslashes(POST['email']);
memsagem = addslashes(POST['message']);


to= "charlesvilela12@gmail.com";
subject= "Contato - Charles Vilela Br";
body= "Nome: ".nome."\r\n".
		"Email: ".email."\r\n".
		"Mensagem: ".mensagem;
header = "from:charlesvilela12@gmail.com"."\r\n"
		 ."Reply-To:".email."\r\n"
		 ."X=Mailer:PHP/".phpversion();

if(mail(to, subject, body, header)){

	echo ("Email enviado com sucesso!");
}

else{

	echo ("O Email não pode ser enviado!");
}





}

?>