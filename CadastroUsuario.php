<?php
ini_set('default_charset', 'utf-8');
if (isset($_POST["Voltar"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG/farmácia.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;700&display=swap" rel="stylesheet">
    <script src="script.js"></script>
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
        <form method="post" id="Form" action="cadastrar.php">
            <div>
                <img src="IMG/Perfil_Usuario.png" id="ImgAvatar">
                <h2 id="Acessar">CADASTRAR USÚARIO</h2>
            </div>
            <div class="SubContainer">
                <p>Nome Completo:</p>
                <input type="text" required name="nome" id="nome">
                <p></p>
            </div>
            <div id="ParteInformacoes">

                <div id="InfoLabelCPF">
                    <label>CPF:</label>
                </div>
                <div id="InfoLabelDTN">
                    <label>Data de Nascimento:</label>
                </div>
                <div id="InfoLabelCell">
                    <label>Telefone ou Celular</label>
                </div>
                <div id="InfoImgCell">
                    <img src="IMG/Celular.png" id="ImgCell">
                </div>
                <div id="InfotxtCpf">
                    <input type="text" required name="cpf" id="Cpf" oninput="mascara_CPF()" maxlength="14">
                    <p></p>
                </div>
                <div id="InfotxtDTN">
                    <input type="date" required name="Data" id="Data">
                    <p></p>
                </div>
                <div id="InfotxtCell">
                    <input type="text" required name="Celular" id="Cell" oninput="mascara_Cell()" maxlength="14">
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>Cep:</p>
                <input type="text" required name="" id="cep" oninput="mascara_cep()" maxlength="9">
                <p></p>
            </div>
            <div>
                <p>Nos conte o que você tem: </p>
                <textarea name="" required id="" cols="70" rows="2" style="resize: none; border-radius: 10px; width: 96%; margin-left: 2%;"></textarea>
            </div>
            <div>
                <p id="PerguntaPronome">Como podemos te chamar:</p>
                <div>
                    <input type="radio" name="pronome" id="ele">
                    <label for="ele">Ele</label>
                    <input type="radio" name="pronome" id="ela">
                    <label for="ela">Ela</label>
                    <p></p>
                </div>
            </div>
            <div class="SubContainer">
                <p>E-mail:</p>
                <input type="text" required name="email" id="email">
                <p></p>
            </div>
            <div class="SubContainer">
                <p>Senha:</p>
                <input type="password" required name="password" id="password">
                <p></p>
            </div>
            <div>
                <input type="submit" value="Cadastrar" id="BtnCadastro">
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
                <a href="home.html">
                    <li>Suporte +</li>
                </a>
                <a href="CadastroAliado.html">
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

    <script>
        function validarFormulario() {
            var nome = document.getElementById('nome').value;
            var cpf = document.getElementById('cpf').value;
            var cep = document.getElementById('cep').value;
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;

            if (nome === "") {
                alert("Por favor, preencha o campo Nome Completo.");
                return false;
            }

            if (cpf === "") {
                alert("Por favor, preencha o campo CPF.");
                return false;
            }

            if (cep === "") {
                alert("Por favor, preencha o campo CEP.");
                return false;
            }

            if (email === "") {
                alert("Por favor, preencha o campo E-mail.");
                return false;
            }

            if (senha === "") {
                alert("Por favor, preencha o campo Senha.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>