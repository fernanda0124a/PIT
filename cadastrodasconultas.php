<?php
require_once "conexao.php";
$usuarios = $database->usuarios;

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$plano_saude = $_POST['plano_saude'];
$data_consulta = $_POST['data_consulta'];
$hora_consulta = $_POST['hora_consulta'];


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