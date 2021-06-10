<?php
    require_once('conexao.php');
    $id = $_GET['id'];
    $query = mysqli_query($con,"DELETE FROM veiculo WHERE  idVeiculo = '$id'");
    if($query){
        echo "<script>alert('Apagdo')</script>";
        header('Location: http://localhost/Alocadora/');
    }else{
        echo "Falha ao cadastrar";
    }
    
?>