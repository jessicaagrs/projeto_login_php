<?php

//acessando banco de dados
$usuario = 'root';
$senha = '193009';
$database = 'projetoLogin';
$host = 'localhost';

$mysqli = new mysqli ($host, $usuario, $senha, $database);

//verificando se houve erros

if($mysqli->error){
    die("Falha ao conectar ao banco de dados".$mysqli->error);
}
