<?php
require_once "conexao.php";
$usuarios = $database->usuarios;

$email = $_POST['email'];
$password = $_POST['password'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$nome = $_POST['nome'];
$cep = $__POST['cep'];


$usuario_local = $usuarios->insertOne(
    ["email" => $email,
     "senha" => $password,
     "cpf" => $cpf,
     "data_de_nascimento" => $data_de_nascimento,
     "telefone" => $telefone,
     "descricao" => $descricao,
     "nome" => $nome,
     "cep" => $cep
    ]
);


header("Location: /home.php");