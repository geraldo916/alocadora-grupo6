<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
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
                    <p>Edite o seu veiculo!</p>
                </div>
                <form action="update.php" method="post" style="margin-left:130px;">
                    <label for="placa">Placa do veiculo</label>
                    <input type="text" name="placa" id="placa" placeholder="Digite a placa do veiculo" value="<?php echo  getDadosVeiculo($_GET['id'],'placaVeiculo')?>">
                    <label for="ano">Ano do veículo</label>
                    <input type="text" name="ano" id="ano" placeholder="Ano do veiculo" value="<?php echo  getDadosVeiculo($_GET['id'],'anoVeiculo')?>">
                    <label for="propietario">Proprietario</label>
                    <select name="propietario" id="propietario" >
                        <option value="<?php echo getDadosVeiculo($_GET['id'],'Proprietario_iddono')?>"><?php echo  getNomePropietario(getDadosVeiculo($_GET['id'],'Proprietario_iddono'))?></option>
                        <?php getPropietarios();?>
                    </select>
                    <label for="marca">Marca</label>
                    <select name="marca" id="marca">
                        <option value="<?php echo getDadosVeiculo($_GET['id'],'Marca_idveiculo')?>"><?php echo  getMarca(getDadosVeiculo($_GET['id'],'Marca_idveiculo'))?></option>
                        <?php getAllMarca();?>
                    </select>
                    <label for="municipio">Município</label>
                    <select name="municipio" id="municipio">
                        <option value="<?php echo getDadosVeiculo($_GET['id'],'municipio_idmunicipio'); ?>">
                            <?php echo getNomeEstado(getDadosVeiculo($_GET['id'],'municipio_estado_idestado'));
                                echo ' - ';
                                echo  getNomeMunicipio(getDadosVeiculo($_GET['id'],'municipio_idmunicipio'));
                            ?>
                        </option>
                        <?php getAllMunicipio();?>
                    </select>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria">
                        <option value="<?php echo getDadosVeiculo($_GET['id'],'Categoria_idCategoria'); ?>"><?php echo getCategoria(getDadosVeiculo($_GET['id'],'Categoria_idCategoria'))?></option>
                        <?php getAllCategoria();?>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
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