<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>KimMóvel</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
            <a href="http://localhost/Alocadora/" style="text-decoration:none;color:#fff;">
                    <h1>Kim<span>Movel</span></h1>
                </a>
            </div>
            <div class="cidade"><h3>Angola</h3></div>
        </div>
    </header>
    <div class="banner">
        <div class="container">
            <div class="formulario"style="color:#fff;display:block;">
                <div class="tittle" style="color:#fff;">
                    <p>Cadastra-se como Propietário</p>
                </div>
                <form action="cadPropietario.php" method="post" style="margin-left:130px;">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereco">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro">
                    <label for="telefone">Telefone</label>
                    <input type="number" name="telefone" id="telefone" placeholder="Digite seu telefone" max-length="9">
                    <label for="data">Data de Nascimento</label>
                    <input type="date" name="data" id="data" placeholder="data_nacimento" max-length="9">
                    <button class="ok cadastrar" type="submit" value="OK"><div>Cadastrar</div></button>
                </form>
            </div>
            
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="radape">
                <p style="margin:0;">Desenvolvido por: Grupo 6</p>
                <p style="margin:0;">Todos os Direitos Reservados</p>
            </div>
        </div>
    </footer>
</body>
</html>