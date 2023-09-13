<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "./conexao.php";
$medicacao = $database->Medicamentos;


$usuario_dono = $_POST['usuario'];
$medicamento = $_POST['NomeMedicamento'];
$quantidade = $_POST['quantidade'];
$horario = $_POST['horario'];
$descricao = $_POST['Efeitos'];
$quantidadedecaixas = $_POST['quantidadeCaixas'];
$quantidadedecomprimidos = $_POST['quantidadeComprimidos'];
$filtro = ["NomeMedicamento" => $medicamento]; 


$atualizacao = [
    '$set' => [
        "usuario_dono" => $usuario_dono,
        "NomeMedicamento" => $medicamento,
        "quantidade" => $quantidade,
        "horario" => $horario,
        "Efeitos" => $descricao,
        "quantidadeComprimidos" => $quantidadedecomprimidos,
        "quantidadeCaixas" => $quantidadedecaixas
    ]
];

$user = $medicacao->findOne($filtro);


$resultado = $medicacao->updateOne($filtro, $atualizacao);

var_dump($resultado->getModifiedCount());

if ($resultado->getModifiedCount() != null && $resultado->getModifiedCount() > 0) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Nenhum documento foi atualizado. Verifique se o filtro corresponde a um documento existente.";
}


header("Location: /home.php");