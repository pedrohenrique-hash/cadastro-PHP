<?php
// cookie
$name_client = $_POST['name_client'];

$email_client = $_POST['email_client'];

$state_clinet = $_POST['state_clinet'];

$login_client = $_POST['login_client'];

$password_client = $_POST['password_client'];

$confirm_password_client = $_POST['confirm_password_client'];


$email_client = str_replace(" ", "", $email_client);

$email_client = str_replace("/", "", $email_client);

$email_client = str_replace("@.", "@", $email_client);

$email_client = str_replace(".@", "@", $email_client);

$email_client =str_replace(",",".", $email_client);

$email_client = str_replace(";", ".", $email_client);

$erro = 0;

if(empty($name_client)){

	$erro = 1;
	$message = "Por favor, digite seu nome corretamente.";

}

elseif(strlen($email_client)<8 || substr_count($email_client, "@") != 1 || 
substr_count($email_client, ".")==0){

	$erro = 1;
	$message = "Por favor, Digite seu e-mail corretamente.";

}

elseif(strlen($state_clinet) != 2){
	
	$erro = 1;
	$message = "Por favor, escolha seu estado";

}

elseif(strlen($login_client) < 5 || strlen($password_client) > 15){
	
	$erro = 1;
	$message = "A senha não pode conter espaço em branco.";

}

elseif($password_client != $confirm_password_client){
	
	$erro = 1;
	$message = "Você digitou duas senhas diferentes. :-(";
}

if($erro){

	echo"<html><body>";
	echo "<p align = center> $message</p>";
	echo"<p align=center><<a href='javascript:history.back()'>Voltar</a> </p> ";
	echo "</body></html>";

}
else{
	echo "<html><body>";
	echo "<p align = center> Seu cadastro foi realizado com sucesso! </p>";
	echo "</body></html>";
}


?>