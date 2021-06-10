<?php
    require_once("conexao.php");
    $id = $_POST['id'];
    $placa = $_POST['placa'];
    $ano = $_POST['ano'];
    $propietario = $_POST['proprietario'];
    $categoria = $_POST['categoria'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];
    $marca = $_POST['marca'];
    $query = mysqli_query($con,"UPDATE veiculo SET(placaVeiculo='$placa',anoVeiculo='$ano',Propietario_iddono='$propietario', Marca_idveiculo = '$marca',municipio_idmunicpio = '$muncipio',municipio_estado_idestado = '$estado',Categoria_idCategoria='$categoria')");
?>