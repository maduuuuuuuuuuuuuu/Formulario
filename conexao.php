<?php
//dados para a conxão do banco

$servidor = "localhost";
$user = "root";
$password = "root";
$banco = "bd_sistema";

//conectando no banco de dados utilizando a função mysql

$conexao = new mysqli($servidor, $user, $password, $banco);


?>