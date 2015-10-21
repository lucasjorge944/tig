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

$("#btnNovoUsu").click(function(event) {
	var nome = document.getElementById("txtNome").value;
	var usuario = document.getElementById("txtUsuario").value;
	var senha = document.getElementById("txtSenha").value;
	var senha2 = document.getElementById("txtSenha2").value;
	var acesso = document.getElementById("slcAcesso").value;

	if (senha == senha2){
		$.ajax({
		url: 'gestaousuarios/gravarUsuario',
		type: 'POST',
		data: {btnNovoUsu: 'btnNovoUsu', nome: nome, usuario: usuario, senha: senha, acesso:acesso},
		})
		.done(function(data) {
			location.reload();
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
	}

	else{
		alert("As senhas digitadas não coincidem!");
	}

});


$(document).ready(function() {

	$.ajax({
		url: 'dashboard/seguidores',
		type: 'POST',
	})
	.done(function(data) {
		var seguidores = JSON.parse(data);

		new Morris.Line({
		  	// ID of the element in which to draw the chart.
		  	element: 'myfirstchart',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			data: [
				{ month: seguidores[0].data_hora, seguid: seguidores[0].numero_seguidores},
				{ month: seguidores[1].data_hora, seguid: seguidores[1].numero_seguidores},
				{ month: seguidores[2].data_hora, seguid: seguidores[2].numero_seguidores},
				{ month: seguidores[3].data_hora, seguid: seguidores[3].numero_seguidores},
				{ month: seguidores[4].data_hora, seguid: seguidores[4].numero_seguidores},
				{ month: seguidores[5].data_hora, seguid: seguidores[5].numero_seguidores}
			],
			// The name of the data record attribute that contains x-values.
			xkey: 'month',
			// A list of names of data record attributes that contain y-values.
			ykeys: ['seguid', 'rewet'],

			xLabels: 'month',
			// Labels for the ykeys -- will be displayed when you hover over the
			// chart.
			labels: ['Seguidores', 'Retweets']
		});
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});	

	new Morris.Donut({
	  	// ID of the element in which to draw the chart.
	  	element: 'mysecondchart',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: [
		{ label: '@g1', value: 5 },
		{ label: '@dilmabr', value: 2 },
		{ label: '@globo', value: 8}
		]
	});
});