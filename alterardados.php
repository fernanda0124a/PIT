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
$cep = $_POST['cep']; 
$filtro = ["cpf" => $cpf]; 


$atualizacao = [
    '$set' => [
        "senha" => $password,
        "cpf" => $cpf,
        "data_de_nascimento" => $data_de_nascimento,
        "telefone" => $telefone,
        "descricao" => $descricao,
        "nome" => $nome,
        "cep" => $cep
    ]
];

$user = $usuarios->findOne($filtro);


$resultado = $usuarios->updateOne($filtro, $atualizacao);

var_dump($resultado->getModifiedCount());

if ($resultado->getModifiedCount() != null && $resultado->getModifiedCount() > 0) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Nenhum documento foi atualizado. Verifique se o filtro corresponde a um documento existente.";
}