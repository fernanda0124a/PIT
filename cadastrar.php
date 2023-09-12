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



require_once "conexao.php";
$usuarios = $database->usuarios;

// Obtém os valores do formulário
$email = $_POST['email'];
$password = $_POST['password'];
$cpf = $_POST['cpf'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$nome = $_POST['nome'];
$cep = $_POST['cep']; // Corrigido o nome da variável

// Define um filtro para encontrar o documento que você deseja atualizar
$filtro = ["email" => $email]; // Use um campo único, como o email, para encontrar o documento

// Define as atualizações que você deseja aplicar
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

// Executa a operação de atualização
$resultado = $usuarios->updateOne($filtro, $atualizacao);

if ($resultado->getModifiedCount() > 0) {
    echo "Dados atualizados com sucesso!";
} else {
    echo "Nenhum documento foi atualizado. Verifique se o filtro corresponde a um documento existente.";
}


header("Location: /home.php");