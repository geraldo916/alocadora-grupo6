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
            <div class="principal">
                <div class="tittle">
                    <h1>Faça sua reserva on-line!</h1>
                </div>
                
                <div class="formulario" style="text-align:center;">
                    <div class="tittle">
                        <p>Vamos lá, Cadastre o seu veiculo</p>
                    </div>
                    <div class="botoes">
                        <a class="cadastrar" href="http://localhost/Alocadora/editar.php/?id=<?php echo $_GET['id']; ?>">Editar</a>
                        <form action="http://localhost/Alocadora/deletarVeiculo.php/" method="GET" onsubmit="confirmacao(event,this)">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <button type="submit" class="cadastrar" >Apagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="carro-section" style="margin-top:40px">
        <div class="container">
            <div class="carro-info">
                <table style="font-size: 1.3rem;" class="table table-bordered">
                    <thead>
                        <th>Imagem</th>
                        <th>Marca</th>
                        <th>Propietario</th>
                        <th>Placa</th>
                        <th>Categoria</th>
                        <th>Ano</th>
                        <th>Município</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        <?php getVeiculo(); ?>
                    </tbody>
                </table>
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

    <script>
        function confirmacao(e,form){
            e.preventDefault();
            var res = confirm("Tem certeza que quer eliminar");
            if(res==true){
                form.submit();
            }
        }
    </script>
</body>
</html>