<?php
ini_set('default_charset', 'utf-8');
$nome_usuario = "Usuario Principal";

if(isset($_POST["CadastrarAliado"])){
    header("Location: CadastroAliado.php");
}

if(isset($_POST["Medicamentos"])){
    header("Location: CadastroRemedio.php");
}
if(isset($_POST["alarme"])){
    header("Location: alarme.php");
}
if(isset($_POST["remediostabela"])){
    header("Location: tabelaremedio.php");
}
if(isset($_POST["update"])){
    header("Location: menu.php");
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
                    <p>Usuario
                        <!--<?php echo $nome_usuario?>-->
                    </p>
                </button>
                <div class="dropdown-content">
                <input type="submit" value="Cadastrar Aliado" name="CadastrarAliado" class="sub" >
                    <input type="submit" value="Cadastrar Medicamentos" name="Medicamentos" class="sub">
                    <input type="submit" value="Cadastrar Alarme" name="alarme" class="sub">
                    <input type="submit" value="Alterar dados" name="update" class="sub">
                    <input type="submit" value="Tabela de remedios" name="remediostabela" class="sub">
                </div>
            </div>
        </form>
    </header>

    <main>
        <div id="Container">
            <div id="ContainerP1">
                <div>
                    <img src="IMG/MoçaRemedio.png" id="MocaRemedios">
                </div>
                <div id="Texto1">
                    <h1>ESTAMOS AQUI COM VOCÊ</h1>
                </div>
                <div>
                    <img src="IMG/Comprimidos2.png" id="Comprimidos2">
                </div>
            </div>
            <div id="ContainerP2">
                <div>
                    <img src="IMG/Tempo.png" id="Tempo">
                </div>
                <div id="Dados">
                    <h1 id="dados1">MEDICAMENTO B <span id="Cor">PENDETE</span></h1>
                    <h1 id="dados2">REMEDIO A</h1>
                    <h1 id="dados3">REMEDIO B</h1>
                    <h1 id="dados4">REMEDIO C</h1>
                    <div id="tempo1"><h4>12:30</h4></div>
                    <div id="tempo2"><h4>13:45</h4></div>
                    <div id="tempo3"><h4>14:45</h4></div>
                </div>
            </div>
            <div>
                <input type="submit" value="MEUS MEDICAMENTOS" id="Medicamentos">
            </div>
            <div id="ContainerP3">
                <div id="Barracinza">
                    <ul>
                        <li>Remédio A</li>
                        <li>Remédio B</li>
                        <li>Remédio B</li>
                    </ul>
                </div>
                <div id="Barracinza2">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <p id="Pquantidade">*quantidade atual”/*quantidade total*</p>
                </div>            
                <div id="Barracinza3">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <h4>02/25</h4>
                </div>
                <div id="Barracinza4">
                    <ul id="imagemList">
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/Pilula.png" class="Pilula"></li>
                        <li><img src="IMG/PilulaNula.png" class="Pilula"></li>
                    </ul>
                    <h4>05/25</h4>
                </div>                
            </div>
            <div id="Img3">
                <img src="IMG/Medique_se_bem.png" id="ImgMediqueSe">
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
            <div id="ImgFoot">
                <img src="IMG/Twitter.png" id="IconTwitter">
                <img src="IMG/Pinterest.png" id="IconPinterest">
                <img src="IMG/TikTok.png" id="IconTikTok">
                <img src="IMG/Instagram.png" id="IconInsta">
            </div>
        </div>
    </footer>
</body>

</html>