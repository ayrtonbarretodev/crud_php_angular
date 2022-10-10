<?php 

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