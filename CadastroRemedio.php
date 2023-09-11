<?php
ini_set('default_charset', 'utf-8');
if(isset($_POST["Voltar"])){
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style2.css">
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
        <form method="post" id="Form" action="cadastrodemedicamento.php">
            <div>
                <img src="IMG/RemedioCadastro.png" id="ImgAvatar">
                <h2 id="Acessar">Cadastrar Remedios</h2>
            </div>
            <div class="SubContainer">
                <p>Nome do medicamento:</p>
                <input type="text" name="NomeMedicamento" id="NomeMedicamento">
                <p></p>
            </div>
            <div>
                <input type="radio" name="tipoManipulado" id="manipulado">
                <label for="manipulado">Manipulado</label>
                <input type="radio" name="tipoManipulado" id="n_manipulado">
                <label for="n_manipulado">Não manipulado</label>
                <p></p>
            </div>
            <div id="ContainerMiligramas">
                <p>MILIGRAMAS DO MEDICAMENTO:</p>
                <input type="text" name="MILIGRAMAS" id="Miligramas">
                <p></p>
            </div>
            <div>
                <p id="PerguntaTipoMEDICAMENTO">Tipo do Medicamento:</p>
                <div>
                    <input type="radio" name="Medicamento" id="generico">
                    <label for="generico">GENÉRICO</label>
                    <input type="radio" name="Medicamento" id="Original">
                    <label for="Original">Original</label>
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>Como quer que ele se chame:</p>
                <input type="text" name="ApelidoMedicamento" id="ApelidoMedicamento>
                <p></p>
            </div>
            <div class="SubContainer">
                <p>Quantidade:</p>
            </div>
            <div id="ContainerQuantidade">
                <div class="">
                    <p>Caixas:</p>
                    <input type="text" name="quantidadeCaixas" class="Quantidade">
                    <p></p>
                </div>
                <div class="">
                    <p>Comprimidos:</p>
                    <input type="text" name="quantidadeComprimidos" class="Quantidade">
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>Efeitos:</p>
                <input type="text" name="Efeitos" id="Efeitos">
                <p></p>
            </div>
            <div class="SubContainer">
                <p>FARMACEUTICA:</p>
                <input type="text" name="Farmaceutica" id="Farmaceutica">
                <p></p>
            </div>
            <div>
                <input type="submit" value="Cadastrar Medicamentos" id="BtnCadastro">
            </div>
        </form>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="">
                    <li>Nós Conheça +</li>
                </a>
                <a href="">
                    <li>Termos de uso +</li>
                </a>
                <a href="">
                    <li>Suporte +</li>
                </a>
                <a href="">
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