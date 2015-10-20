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
	<div class="login">
		<center><h3><img src="<?php echo base_url('includes/imgs/tiglogo.png'); ?>" class="img-rounded img-responsive"></h3></center>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" id="txtUsuario" placeholder="Usuário">
				<input type="password" class="form-control" id="txtSenha" placeholder="Senha">
			</div>
			<button id="btnLogin" type="button" class="btn btn-info btn-block">Entrar</button>
		</form>
	</div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('includes/js/ajax.js'); ?>"></script>