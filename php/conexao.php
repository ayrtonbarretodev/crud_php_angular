<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

//Variáveis de acesso
$url = "localhost"; //url do banco
$usuario = "root";
$senha = "";
$base = "api"; //nome do banco

//Conexão
$conexao = mysqli_connect($url, $usuario,$senha,$base);

//Arrumar caracteres especiais
mysqli_set_charset($conexao,"utf8");

?>