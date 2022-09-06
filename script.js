// mudar os nomes das função

function valida_dados(name_form){

	if(name_form.name_client.value == ""){
		
		alert("Por favor digite o nome");
		
		return false;
	}

	if(name_form.email_client.value == "" || name_form.email_client.value.indexOf('@',0) == -1 ||
	 name_form.email_client.value.indexOf('.',0)==-1){
		
		alert("Email invalido.");
		return false;
	}

	if(name_form.state_clinet.selecteIndex == 0){
		
		alert("Por favor selecione o estado");
		return false;

	}

	if(name_form.login.valeuindexOf(' ',0) != -1){

		alert('A senha não pode conter  espaço em branco');
		return false;

	}
	if(name_form.password.value.length < 5 || name_form.password.value.length > 15){
			
			alert("A senha não pode conter espaço em branco");
			return false;

	}

	if(name_form.password.value.indexOf(' ', 0) != -1){
		
		alert("Senhas não pode conter espaço em branco");
		return false;

	}

	if(name_form.password.value != name_form.confirm_password.value){
		alert("Senha não conferem. Você digitou duas senhas diferentes.");
		return false;
	}
	return true;

}