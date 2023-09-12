<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "./conexao.php";

$medicacao = $database->Medicamentos;

$usuario_dono = $_POST['usuario'];
$medicamento = $_POST['NomeMedicamento'];
$quantidade = $_POST['quantidade'];
$horario = $_POST['horario'];
$descricao = $_POST['descricao'];
$quantidadedecaixas = $_POST['quantidadeCaixas'];
$quantidadedecomprimidos = $_POST['quantidadeComprimidos'];

$medicamentos_local = $medicacao->insertOne(
    [
        "usuario_dono" => $usuario_dono,
        "NomeMedicamento" => $medicamento,
        "quantidade" => $quantidade,
        "horario" => $horario,
        "descricao" => $descricao,
        "quantidadeComprimidos" => $quantidadedecomprimidos,
        "quantidadeCaixas" => $quantidadedecaixas
    ]
);

header("Location: /home.php");



