<?php 

/*

função include()

    include(): inclui o arquivo passado como parâmetro. Se o arquivo não for encontrado, o PHP irá lançar um "warning", mas dará continuidade na execução.

    include_once(): o funcionamento dessa função é igual ao da função include(), porém, o arquivo só será importado caso o mesmo ainda não tenha sido.
*/

//Incluir o arquivo conexão.php
include_once("conexao.php");

//comando SQL
$sql = "SELECT * FROM cursos";

//Executa uma consulta no banco de dados e retorna um boolean
$executar = mysqli_query($conexao,$sql);

//Vetor
$cursos = [];

//Índice
$indice = 0;

//Laço
while ($linha = mysqli_fetch_assoc($executar)) { //percorrendo o banco por linha
    /* 
    mysqli_fetch_assoc: é usado com o resultado de mysqli_query. O que esta função faz 
    é criar um array que representa a linha do dado retornado do banco de dados. Tem que ser chamada várias vezes. 
    Na primeira chamada, retorna a primeira linha como array, na segunda chamada, retorna a segunda linha como array.
    */
    $cursos [$indice]['idCurso'] = $linha['idCurso'];
    $cursos [$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos [$indice]['valorCurso'] = $linha['valorCurso'];
    $indice++;
}

/*JSON - Retorna uma string contendo a representação JSON do arquivo cursos. Se o parâmetro for um array ou objeto , ele será serializado 
recursivamente. */
json_encode(['cursos'=>$cursos]);


//echo '<pre>';
//var_dump($cursos);
/*
var_dump -> tem um resultado semelhante semelhante ao print_r, mas para além dos valores apresenta também a informação 
sobre o tipo de valores.
*/

?>