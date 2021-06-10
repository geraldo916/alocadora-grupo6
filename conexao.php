<?php
    $usuario = 'root';
    $senha = '';
    $host = 'localhost';
    $db = 'webcarro';

    $con = mysqli_connect($host,$usuario,$senha,$db);
    if(!$con){
        echo "falha ao se conectar com o banco de dados";
    }
?>