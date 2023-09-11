<?php
require_once "./conexao.php";

$aliado = $database->Aliado;

$nomecompleto = $_POST['Aliado'];
$cpf = $_POST['Aliado'];
$Celular = $_POST['Aliado'];
$Cep = $_POST['Aliado'];
$email = $_POST['Aliado'];
$senha = $_POST['Aliado'];


$aliados = $aliado->insertOne(
    [
        "nomecompleto" => $nomecompleto,
        "cpf" => $cpf,
        "Celular" => $Celular,
        "Cep" => $Cep,
        "email" => $email,
        "senha" => $senha        
    ]
);

header("Location: /home.php");

?>