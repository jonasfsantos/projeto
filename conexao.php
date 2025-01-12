<?php 

//definir fuso horário
date_default_timezone_set('America/Sao_Paulo');

// dados conexao bd local
$servidor = 'localhost';
$banco = 'projeto';
$usuario = 'root';
$senha = '';

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");

     

} catch (Exception $e) {
	echo 'Erro ao conectar ao banco de dados! <br>' .$e;

}

//variaveis globais

$nome_sistema = 'Nome Sistema';
$email_sistema = 'jonas@gmail.com';
$telefone_sistema = '(12)99727-4097';

 ?>






