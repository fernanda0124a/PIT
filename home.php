<?php
ini_set('default_charset', 'utf-8');
$nome_usuario = "Usuario Principal";

if(isset($_POST["CadastrarAliado"])){
    header("Location: CadastroAliado.php");
}

if(isset($_POST["Medicamentos"])){
    header("Location: CadastroRemedio.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style4.css">
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
        <form action="" method="post">
            <div class="dropdown">
                <button class="dropdown-button">
                    <p>
                        <?php echo $nome_usuario ?>
                    </p>
                </button>
                <div class="dropdown-content">
                    <input type="submit" value="Cadastrar Aliado" name="CadastrarAliado" class="sub" >
                    <input type="submit" value="Alterar Dados" name="AlterarDados"class="sub">
                    <input type="submit" value="Cadastrar Medicamentos" name="Medicamentos" class="sub">
                </div>
            </div>
        </form>
    </header>

    <main>
        <div id="Container">
            <div id="Img1">
                <img src="IMG/APK_Medique_se.png" width="100%" height="100%">
            </div>
            <div id="Info">
                <h1>Acesse o app</h1>
                <p>Baixe o nosso app, para ter um controle efetivo de seus medicamentos.
                    Com ele podemos te ajudar com sua rotina. </p>
            </div>
            <div id="Img2">
                <img src="IMG/Remedios_comprimidos.png">
            </div>
            <div id="Img3">
                <img src="IMG/Medique_se_bem.png" width="100%" height="60%">
            </div>
            <div>
                <input type="submit" value="Meus medicamentos" id="ControleRemedios">
            </div>
            <div id="Img4">
                <img src="IMG/ControleRemedio.png" id="ImgControle">
            </div>
        </div>
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