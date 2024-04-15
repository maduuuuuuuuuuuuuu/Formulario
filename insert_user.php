<?php
//recebendo dados do formulário

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$email = $_POST['email'];
$senha = $_POST['senha'];


//inserindo dados no banco

include 'conexao.php';

//dados para iniciar no banco
$insert = "INSERT INTO tb_user VALUES (NULL, '$nome', '$setor', '$email', '$senha')";

//inserindo dados no bando de dados utulizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso";



?>