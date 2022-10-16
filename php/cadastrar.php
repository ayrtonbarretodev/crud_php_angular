<?php
//Incluir a conexão
include("conexao.php");

//Obtendo os dados que vem do front com o Angular
$obterDados = file_get_contents("php://input"); //vai ser manipulado em PHP e vem através de um INPUT
/* file_get_contents tem como finalidade ler o conteúdo de um arquivo. Mas também pode ser usado para ler urls. */

//Extrair os dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$nomeCurso = $extrair->nomeCurso;
$valorCurso = $extrair->valorCurso;

$sql = "INSERT INTO cursos (nomeCurso,valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao,$sql); //executando a query

//Exportar os dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

echo json_encode($curso);


?>