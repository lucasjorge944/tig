<?php 
header("Content-Type: text/html; charset=UTF-8");
?>
<html lang="en">
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/styles.css'); ?>">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Itsetore</a>
				</div>
				<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuário</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Produto</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Cliente</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Transações
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Vender</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Histórico</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Relatórios
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Vendas</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Vendas x Cliente</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Vendas x Vendedor</a></li>
							</ul>
						</li>					
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Marcus Flavio
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configurações</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="home"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container-fluid stats">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1>Gestão de Usuários<small></small></h1>
					<hr>
					<ol class="breadcrumb">
					  <li>
					  	<a href="dashboard"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard </a> / <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Gestão de Usuário
					  </li>
					</ol>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Cadastro de Usuário</h3>
					  </div>
					  <div class="panel-body">
					    <form>
						  <div class="form-group">
						    <label for="txtNome">Nome Completo</label>
						    <input type="text" class="form-control" id="txtNome" placeholder="Nome do Usuário">
						  </div>
						  <div class="form-group">
						    <label for="txtSenha">Senha</label>
						    <input type="password" class="form-control" id="txtSenha" placeholder="Senha do Usuário">
						    <label for="txtSenha2">Digite sua senha novamente</label>
						    <input type="password" class="form-control" id="txtSenha2" placeholder="Digite sua senha novamente">
						  </div>
						  <div class="form-group">
						    <label for="txtNome">Tipo de Usuário</label>
						    <select class="form-control">
							  <option>Vendedor</option>
							  <option>Administrador</option>
							</select>
						  </div>
						  <button type="button" class="btn btn-success btn-block">Cadastrar</button>
						</form>	
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">Usuários Cadastrados</h3>
					  </div>
					  <div class="panel-body">
					  	<table class="table table-condensed table-responsive table-hover">
					  		<thead>
					  			<tr>
					  				<th>Nome</th>
					  				<th>Usuário</th>
					  				<th>Tipo</th>
					  				<th></th>
					  			</tr>
					  		</thead>
					  		<tbody>
					  			<tr>
					  				<td>Fulano</td>
					  				<td>fulano</td>
					  				<td>Vendedor</td>
					  				<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditUser"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelUser"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalResetPass"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></td>
					  			</tr>
					  			<tr>
					  				<td>Fulano</td>
					  				<td>fulano</td>
					  				<td>Vendedor</td>
					  				<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditUser"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelUser"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalResetPass"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></td>
					  			</tr>
					  			<tr>
					  				<td>Fulano</td>
					  				<td>fulano</td>
					  				<td>Vendedor</td>
					  				<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditUser"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelUser"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalResetPass"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></td>
					  			</tr>
					  			<tr>
					  				<td>Fulano</td>
					  				<td>fulano</td>
					  				<td>Vendedor</td>
					  				<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditUser"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelUser"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalResetPass"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></td>
					  			</tr>
					  			<tr>
					  				<td>Fulano</td>
					  				<td>fulano</td>
					  				<td>Vendedor</td>
					  				<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEditUser"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalDelUser"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalResetPass"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></td>
					  			</tr>
					  		</tbody>
					  	</table>	
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>


