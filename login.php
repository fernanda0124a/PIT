<?php

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuarios = $database->usuarios;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuario_local = $usuarios->find(["email" => $email, "senha" => $password]);

    if (count($usuario_local->toArray()) > 0) {
        echo "<script>alert('Usuário encontrado')</script>";
        header("Location: /home.php");
    } else {
        echo "<script>alert('Usuário não encontrado')</script>";
        header("Location: /index.php");
    }

    if (isset($_POST["Voltar"])) {
        header("Location: index.php");
    }
    if (isset($_POST["Entrar"])) {
        header("Location: home.php");
    }
    if (isset($_POST["Cadastrar"])) {
        header("Location: CadastroUsuario.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style5.css">
    <link rel="shortcut icon" href="IMG/farmácia.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="Part1">
            <div id="LogoTipo">
                <h1>Medique-se</h1>
                <h1 id="Lado">BEM</h1>
            </div>
            <div id="Imagens">
                <img id="Medicamento1" src="IMG/Medicamentos2.png">
                <img id="Medicamento2" src="IMG/Remedios.png">
            </div>
        </div>
        <div id="Pesquisa">
            <input type="search" name="" id="BarraPesquisa">
            <img id="Lupa" src="IMG/LupaPesquisa.png">
        </div>
        <form method="post">
            <input type="submit" id="Voltar" name="Voltar" value="Voltar">
        </form>
    </header>

    <main>
        <form method="POST">
            <div id="Avatar">
                <img id="ImgAvatar" src="IMG/Perfil_Usuario.png">
                <h2>Acessar</h2>
            </div>
            <div id="Informacoes">
                <div class="Info">
                    <img id="ImgEmail" src="IMG/RemedioEmail.png">
                    <h3>E-mail</h3>
                </div>
                <input type="text" name="email" class="Imputs">
                <div class="Info">
                    <img id="ImgSenha" src="IMG/RemedioSenha.png">
                    <h3>Senha</h3>
                </div>
                <input type="password" name="password" class="Imputs">
            </div>
            <div id="Entrar">
                <input type="submit" name="Entrar" value="Entrar" id="BtnEntrar">
            </div>
            <div id="Cad_Rec">
                <input type="submit" name="Cadastrar" value="Cadastrar" class="subImput">
                <h4>ou</h4>
                <input type="submit" name="Recuperar" value="Esqueci a senha" class="subImput">
            </div>
        </form>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="#">
                    <li>Nós Conheça +</li>
                </a>
                <a href="#">
                    <li>Termos de uso +</li>
                </a>
                <a href="#">
                    <li>Suporte +</li>
                </a>
                <a href="#">
                    <li>Mais informações +</li>
                </a>
            </ul>
        </div>
        <div id="IconsFoot">
            <img src="IMG/Twitter.png" id="IconTwitter">
            <img src="IMG/Pinterest.png" id="IconPinterest">
            <img src="IMG/TikTok.png" id="IconTikTok">
            <img src="IMG/Instagram.png" id="IconInsta">
        </div>
    </footer>
</body>

</html>