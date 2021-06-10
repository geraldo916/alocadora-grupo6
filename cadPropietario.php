<?php
    require_once("conexao.php");
    $nome = $_POST['nome'];
    $endereco =$_POST['endereco'];
    $bairro =$_POST['bairro'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data'];
    $query = mysqli_query($con,"INSERT INTO proprietario(nomedono,endereco,bairro,telefone,dataNascimentoprop) VALUES('$nome','$endereco','$bairro','$telefone','$data_nascimento')");
    if($query){
        header("Location:http://localhost/Alocadora/veiculo.php");
    }else{
        echo "Falha ao cadastrar";
    }
?>