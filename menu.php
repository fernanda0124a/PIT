<?php
ini_set('default_charset', 'utf-8');
if(isset($_POST["Voltar"])){
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="CSS/style7.css">
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
        <div id="MainP1">
            <form method="post" id="Form">
                <div>
                    <img src="IMG/Perfil_Usuario.png" id="ImgAvatar">
                    <h2 id="Acessar">Alterar Dados do Usuário</h2>
                </div>
                <div class="SubContainer">
                    <p>Nome Completo:</p>
                    <input type="text" name="" id="Nome">
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
                        <input type="text" name="CPF" id="Cpf" oninput="mascara_CPF()" maxlength="14">
                        <p></p>
                    </div>
                    <div id="InfotxtDTN">
                        <input type="date" name="Data" id="Data">
                        <p></p>
                    </div>
                    <div id="InfotxtCell">
                        <input type="text" name="Celular" id="Cell" oninput="mascara_Cell()" maxlength="14">
                        <p></p>
                    </div>
                </div>
                <div class="SubContainer">
                    <p>Cep:</p>
                    <input type="text" name="" id="cep" oninput="mascara_cep()" maxlength="9">
                    <p></p>
                </div>
                <div>
                    <p>Nos conte o que você tem: </p>
                    <textarea name="" id="" cols="70" rows="2"
                        style="resize: none; border-radius: 10px; width: 96%; margin-left: 2%;"></textarea>
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
                    <input type="text" name="" id="Email">
                    <p></p>
                </div>
                <div class="SubContainer">
                    <p>Senha:</p>
                    <input type="text" name="" id="">
                    <p></p>
                </div>
                <div>
                    <input type="submit" value="Salvar" id="BtnCadastro">
                </div>
            </form>
        </div>
        <div id="MainP2">
            <form method="post" id="Form2">
                <div>
                    <img src="IMG/RemedioCadastro.png" id="ImgAvatar2">
                    <h2 id="Acessar">Alterar Dados do Remédios</h2>
                </div>
                <div class="SubContainer">
                    <p>APELIDO DO MEDICAMENTO:</p>
                    <input type="text" name="ApelidoMedicamento" id="ApelidoMedicamento">
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
                    <p>NOME DO MEDICAMENTO:</p>
                    <input type="text" name="NomeMedicamento" id="NomeMedicamento">
                    <p></p>
                </div>
                <div class="SubContainer">
                    <p>Quantidade:</p>
                </div>
                <div id="ContainerQuantidade">
                    <div class="">
                        <p>Caixas:</p>
                        <input type="text" name="QuantidadeCaixas" class="Quantidade">
                        <p></p>
                    </div>
                    <div class="">
                        <p>Comprimidos:</p>
                        <input type="text" name="QuantidadeComprimidos" class="Quantidade">
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
                    <input type="submit" value="Salvar" id="BtnCadastro2">
                </div>
            </form>
        </div>
        <div id="MainP3">
            <form method="post" id="Form3">
                <div>
                    <img src="IMG/Perfil_Usuario.png" id="ImgAvatar">
                    <h2 id="Acessar">Alterar Dados do ALIADO</h2>
                </div>
                <div class="SubContainer">
                    <p>Nome Completo:</p>
                    <input type="text" name="" id="Nome">
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
                        <input type="text" name="CPF" id="Cpf" oninput="mascara_CPF()" maxlength="14">
                        <p></p>
                    </div>
                    <div id="InfotxtDTN">
                        <input type="date" name="Data" id="Data">
                        <p></p>
                    </div>
                    <div id="InfotxtCell">
                        <input type="text" name="Celular" id="Cell" oninput="mascara_Cell()" maxlength="14">
                        <p></p>
                    </div>
                </div>
                <div class="SubContainer">
                    <p>Cep:</p>
                    <input type="text" name="" id="cep" oninput="mascara_cep()" maxlength="9">
                    <p></p>
                </div>
                <div>
                    <p id="PerguntaTipoRelacao">Qual sua relação com o Usuário</p>
                    <div>
                        <input type="radio" name="relacao" id="responsavel">
                        <label for="responsavel">Responsável</label>
                        <input type="radio" name="relacao" id="n_responsavel">
                        <label for="n_responsavel">Não Responsável</label>
                        <p></p>
                    </div>
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
                    <input type="text" name="" id="Email">
                    <p></p>
                </div>
                <div class="SubContainer">
                    <p>Senha:</p>
                    <input type="text" name="" id="">
                    <p></p>
                </div>
                <div>
                    <input type="submit" value="Salvar" id="BtnCadastro3">
                </div>
            </form>
        </div>
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
</body>

</html>