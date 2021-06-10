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
                    <p>Agora cadastre seu veiculo!</p>
                </div>
                <form action="cadVeiculo.php" method="post" style="margin-left:130px;">
                    <label for="placa">Placa do veiculo</label>
                    <input type="text" name="placa" id="placa" placeholder="Digite a placa do veiculo">
                    <label for="ano">Ano do veículo</label>
                    <input type="date" name="ano" id="ano" placeholder="Ano do veiculo">
                    <label for="propietario">Proprietario</label>
                    <select name="propietario" id="propietario">
                        <?php getPropietarios();?>
                    </select>
                    <label for="marca">Marca</label>
                    <select name="marca" id="marca">
                        <?php getAllMarca();?>
                        
                    </select>
                    <label for="municipio">Município</label>
                    <select name="municipio" id="municipio">
                        <?php getAllMunicipio();?>
                    </select>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria">
                        <?php getAllCategoria();?>
                    </select>
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