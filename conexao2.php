<?php

$hostname = "adrianogeraldo.c6pg5gf58ezz.us-east-1.rds.amazonaws.com";
$bancodedados = "AdrianoGeraldo";
$usuario = "root";
$senha = "mackenzie";

$conexao2 = new mysqli($hostname, $usuario, $senha, $bancodedados);
//if ($conexao2 ->connect_errno){
    //echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}
//else{
    //echo "Conexão efetuada com sucesso";
//}