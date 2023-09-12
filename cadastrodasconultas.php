<?php
require_once "conexao.php";
$usuarios = $database->usuarios;

$consultas = $database->Consultas;

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$plano_saude = $_POST['plano_saude'];
$data_consulta = $_POST['data_consulta'];
$hora_consulta = $_POST['hora_consulta'];

$consulta_local = $consultas->insertOne(
    [
        "nome" => $nome,
        "data_nascimento" => $data_nascimento,
        "endereco" => $endereco,
        "telefone" => $telefone,
        "email" => $email,
        "plano_saude" => $plano_saude,
        "data_consulta" => $data_consulta,
        "hora_consulta" => $hora_consulta
    ]
);

header("Location: /home.php");