<?php
require_once("conexao.php");
$query = $pdo->query("SELECT * from usuarios");
$res = $query ->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
$senha = '123';
$senha_crip = md5($senha);

if($linhas == 0){
   $pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_crip ='$senha_crip', nivel ='Administrador',ativo = 'Sim',foto ='sem-foto.jpg', telefone ='$telefone_sistema'");

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Condomínio</title>
	<link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
	<div class="login">
		<div class="form">
			<img src="img/logo.png" class="imagem">
			<form  method="post" action="autenticar.php" >
				<input type="email" name="usuario" placeholder="Seu Email">
				<input type="password" name="senha" placeholder="Senha">
				<button>Login</button>

			</form>
		</div>

	</div>


</body>
</html>
