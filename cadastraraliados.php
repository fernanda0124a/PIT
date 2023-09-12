<?php
require_once "./conexao.php";

$aliado = $database->Aliado;

$nomecompleto = $_POST['nomecompleto'];
$cpf = $_POST['Cpf'];
$Celular = $_POST['Cell'];
$Cep = $_POST['cep'];
$email = $_POST['Email'];
$senha = $_POST['senha'];


$aliados = $aliado->insertOne(
    [
        "nomecompleto" => $nomecompleto,
        "Cpf" => $cpf,
        "Cell" => $Celular,
        "cep" => $Cep,
        "Email" => $email,
        "senha" => $senha        
    ]
);

header("Location: /home.php");

?>