<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style3.css">
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
            <input type="submit" id="Voltar" value="Entrar" onclick="window.location.href='login.php'">
            <input type="submit" id="Voltar" value="Cadastrar" onclick="window.location.href='CadastroUsusario.html'">
        </form>
    </header>

    <main>
        <div id="ContainerP1">
            <div>
                <img src="IMG/PilulasRemedios.png" id="PilulasRemedios">
            </div>
            <div id="Texto1">
                <h1>OTIMIZE A SUA ROTINA</h1>
            </div>
            <div>
                <img src="IMG/MulherRemedio.png" id="MulherRemedio">
            </div>
        </div>
        <div id="ContainerP2">
            <div>
                <img src="IMG/APK_Medique_se.png" id="ImgApk">
            </div>
            <div>
                <div id="AcesseApp">
                    <a href="#" id="AcesseApp_a">Acesse o app</a>
                </div>
                <div id="InfoApp">
                    <h1>Baixe o nosso app, para ter um controle efetivo de seus medicamentos. 
                        Com ele podemos te ajudar com sua rotina. </h1>
                </div>
            </div>
        </div>
        <div>
            <img src="IMG/Medique_se_bem.png" id="ImgMedique">
        </div>
        <div id="InfoNos">
            <h1>SOBRE NÓS</h1>
            <h1>Um grupo escolar, que decidiu pesquisar mais sobre a 
                rotina de medicamentos das pessoas, e apartir de estudos criaram o MEDIQUE-SE BEM,  pensando nesta ideia desde o zero. percorrem uma jornada 
                até chegar em cada pessoa, e fazer a diferença em sua vida.</h1>
        </div>
        <div id="ContainerP3">
            <h1>FEITO PARA TODAS IDADES</h1>
            <div id="BarraAzul"></div>
        </div>
        <div id="ContainerP4">
            <div id="BarraAzul2"></div>
            <h1>MEDIQUE-SE BEM, foi criado para auxilar a todos em suas rotina, 
                até quem não toma medicamentos pode utilizar de nossos recursos para organizar sua “rotina medica”. desenvolvemos recursos para que você tenha 
                todo o seu percurso medico salvo e seguro com si, e organizao. </h1>
                <div>
                    <img src="IMG/IdosaRemedio.png" id="IdosaRemedio">
                    <img src="IMG/CriancaAdolescenteRemedio.png" id="CriancaAdolescenteRemedio">
                </div>
        </div>
    </main>
    <footer>
        <div id="Links">
            <ul>
                <a href="home.html">
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