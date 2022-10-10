<?php

//Incluir a conexão
include_once("conexao.php")

//Obtendo os dados que vem do front com o Angular
$obterDados = file_get_contents("php://input"); //vai ser manipulado em PHP e vem através de um INPUT
/* file_get_contents tem como finalidade ler o conteúdo de um arquivo. Mas também pode ser usado para ler urls. */

//Extrair os dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;

$sql = "DELETE FROM cursos WHERE idCurso = $idCurso ";
mysqli_query($conexao,$sql); //executando a query

?>