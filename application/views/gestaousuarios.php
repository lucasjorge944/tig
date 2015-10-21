<?php 
header("Content-Type: text/html; charset=UTF-8");
?>
<html lang="en">
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
					<a class="navbar-brand" href="#">TIG 2015</a>
				</div>
				<div class="collapse navbar-collapse bs-example-js-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="gestaousuarios"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuário</a></li>
							</ul>
						</li>					
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li id="fat-menu" class="dropdown">
							<a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $sessao['nome']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Configurações</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="btnSair"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container-fluid stats">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1>Gestão de Usuários<small> </small></h1>
					<hr>
					<ol class="breadcrumb">
					  <li>
					  	<span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> 
					  	<a href="dashboard">Dashboard</a> / 					  	<span class="page-actual"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Gestão de Usuários</span>
					  </li>
					</ol>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastro de Usuário</h3>
					  </div>
					  <div class="panel-body">
					  	<form>
					  		<div class="form-group">
					  			<input type="text" class="form-control" id="txtNome" placeholder="Nome Completo">
					  		</div>
					  		<div class="form-group">
					  			<input type="text" class="form-control" id="txtUsuario" placeholder="Usuário">
					  		</div>
					  		<div class="form-group">
					  			<input type="password" class="form-control" id="txtSenha" placeholder="Digite sua senha">
					  			<input type="password" class="form-control" id="txtSenha2" placeholder="Digite novamento sua senha">
					  		</div>
					  		<div class="form-group">
					  			<select class="form-control" id="slcAcesso">
					  				<option value="A">Administrador</option>
					  				<option value="N">Normal</option>
					  			</select>
					  		</div>
					  		<button id="btnNovoUsu" type="button" class="btn btn-success btn-block">Salvar</button>
					  	</form>
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="panel panel-primary panel-usuarios">
						<div class="panel-heading">
							<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Usuários</h3>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Usuário</th>
											<th>Acesso</th>
											<th></th>
										</tr>
									</thead>
									<?php

									for ($i=0; $i < count($usuarios); $i++) { 
										echo "
									<tbody>
										<tr>
											<td>".$usuarios[$i]->nome."</td>
											<td>".$usuarios[$i]->usuario."</td>
											<td>".$usuarios[$i]->acesso."</td>
											<td>
												<button type='button' class='btn btn-info' aria-label='Left Align'>
  												<span class='glyphicon glyphicon-edit' aria-hidden='true'></span>
												</button>
												<button type='button' class='btn btn-danger' aria-label='Left Align'>
  												<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
												</button>
											</td>
										</tr>
									</tbody>
										";
									}									
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('includes/js/ajax.js'); ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>