$("#btnLogin").click(function(event) {	
	var usuario = document.getElementById("txtUsuario").value;
	var senha = document.getElementById("txtSenha").value;
	
	$.ajax({
		url: 'home/login',
		type: 'POST',
		data: {btnLogin: 'btnLogin', usuario: usuario, senha: senha},
	})
	.done(function(data) {
		if (data == 1){
        	window.location.assign('dashboard');
        }
        else{
        	alert('Usuário e Senha Digitados não Coincidem!');
        }
	})
	.fail(function() {
		//console.log("error");
	})
	.always(function() {
		//console.log("complete");
	});
	
});

$("#btnSair").click(function(event) {
	$.ajax({
		url: 'dashboard/sair',
		type: 'POST',
		data: {btnSair: 'btnSair'},
	})
	.done(function(data) {
		window.location.assign('home');
	})
	.fail(function() {
		
	})
	.always(function() {
		
	});
	
});