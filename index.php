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
            <div class="principal">
                <div class="tittle">
                    <h1>Faça sua reserva on-line!</h1>
                </div>
                
                <div class="formulario" style="text-align:center;">
                    <div class="tittle">
                        <p>Vamos lá, Cadastre o seu veiculo</p>
                    </div>
                    <a class="cadastrar" href="cadastrar.php">Cadastrar Veiculo</a>
                </div>
            </div>
        </div>
    </div>

    <div class="nossa-frota">
        <div class="container">
            <div class="tittle">
                <h2>Nossa Frota</h2>
            </div>
            <div class="car-itens">
                <?php getFrota(); ?>
            </div>
        </div>
    </div>

    <div class="nossas-rotas">
        <div class="container">
            <div class="tittle">
                <h2>Nossas Rotas</h2>
            </div>
            <div class="municipios">
                <h2>Municípios</h2>
                <div class="lista">
                    <ul>
                        <?php getMunicipios(); ?>
                    </ul>
                </div>
            </div>
            <div class="estados">
                <h2>Provincias</h2>
                <div class="lista">
                    <ul>
                        <?php getEstados(); ?>
                    </ul>
                </div>
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