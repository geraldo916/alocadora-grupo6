<?php
    require_once("conexao.php");
    $placa = $_POST['placa'];
    $ano =$_POST['ano'];
    $dono =$_POST['propietario'];
    $marca = $_POST['marca'];
    $municipio = $_POST['municipio'];
    $categoria = $_POST['categoria'];

    function getMunicipioEstadoId(){
        $municipio = $_POST['municipio'];
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM municipio WHERE idmunicipio='$municipio' ORDER BY idmunicipio");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['estado_idestado'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    $estado = getMunicipioEstadoId();
    echo $estado;
    $query = mysqli_query($con,"INSERT INTO veiculo(placaVeiculo,anoVeiculo,Proprietario_iddono,Marca_idveiculo,municipio_idmunicipio,municipio_estado_idestado,Categoria_idCategoria) VALUES('$placa','$ano','$dono','$marca','$municipio','$estado','$categoria')");
    if($query){
        header("Location:http://localhost/Alocadora/");
    }else{
        echo "Falha ao cadastrar";
    }
?>