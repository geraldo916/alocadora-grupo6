<?php

    function getCategoria($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM categoria WHERE idCategoria='$id' ORDER BY idCategoria");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['categoria_veiculo'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getAllCategoria(){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM categoria ORDER BY idCategoria");
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<option value='{$dados['idCategoria']}'>{$dados['categoria_veiculo']}</option>";
            } 
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getNomeEstado($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM estado WHERE idestado = '$id'");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['nomeEstado'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getAllMunicipio(){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM municipio ORDER BY idmunicipio");
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<option value='{$dados['idmunicipio']}'>".getNomeEstado($dados['estado_idestado'])."-{$dados['nomeDoMunicipio']}</option>";
            } 
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getAllMarca(){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM marca ORDER BY idveiculo");
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<option value='{$dados['idveiculo']}'>{$dados['marca']}</option>";
            } 
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getMarca($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM marca WHERE idveiculo='$id' ORDER BY idveiculo");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['marca'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getImagem($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM imagens WHERE idMarca='$id' ORDER BY id");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['imagem'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getFrota(){
        require('conexao.php');
        $query = mysqli_query($con,'SELECT *FROM veiculo ORDER BY idVeiculo');
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<div class='item'>
                <img src='imgs/".getImagem($dados['Marca_idveiculo'])."' alt=''>
                <div class='info'>
                    <h3>Categoria: ".getCategoria($dados['Categoria_idCategoria'])."</h3>
                    <h4>Marca: ".getMarca($dados['Marca_idveiculo'])."</h4>
                    <h4>Propietário: ".getNomePropietario($dados['Proprietario_iddono'])."</h4>
                    <div class='icons'>
                    </div>
                    <a href='http://localhost/Alocadora/veiculo_info.php/?id={$dados['idVeiculo']}'>Ver Mais</a>
                </div>
            </div>";
            }
           
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getNomeMunicipio($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM municipio WHERE idmunicipio='$id' ORDER BY idmunicipio");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['nomeDoMunicipio'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getDadosVeiculo($id,$coluna){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM veiculo WHERE idVeiculo= '$id' ORDER BY idVeiculo");
        if($query){
            $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
            return $dados[$coluna];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getVeiculo(){
        require('conexao.php');
        $id = $_GET['id'];
        $query = mysqli_query($con,"SELECT *FROM veiculo WHERE idVeiculo= '$id' ORDER BY idVeiculo");
        if($query){
            $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                echo "<td>
                    <img src='../imgs/".getImagem($dados['Marca_idveiculo'])."'>
                </td>
                <td>".getMarca($dados['Marca_idveiculo'])."</td>
                <td>".getNomePropietario($dados['Proprietario_iddono'])."</td>
                <td>{$dados['placaVeiculo']}</td>
                <td>".getCategoria($dados['Categoria_idCategoria'])."</td>
                <td>{$dados['anoVeiculo']}</td>
                <td>".getNomeMunicipio($dados['municipio_idmunicipio'])."</td>
                <td>".getNomeEstado($dados['municipio_estado_idestado'])."</td>";
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getNomePropietario($id){
        require('conexao.php');
        $query = mysqli_query($con,"SELECT *FROM proprietario WHERE iddono='$id' ORDER BY iddono");
        if($query){
                $dados = mysqli_fetch_array($query, MYSQLI_ASSOC);
                return $dados['nomedono'];
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getPropietarios(){
        require('conexao.php');
        $query = mysqli_query($con,'SELECT *FROM proprietario ORDER BY iddono');
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<option value='{$dados['iddono']}'>{$dados['nomedono']}</option>";
            }
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getMunicipios(){
        require('conexao.php');
        $query = mysqli_query($con,'SELECT *FROM municipio ORDER BY idmunicipio');
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<li><a href=''>{$dados['nomeDoMunicipio']}</a></li>";
            }
           
        }else{
            return "falha ao carregar os dados";
        }
    }

    

    function getDestinos(){
        require('conexao.php');
        $query = mysqli_query($con,'SELECT *FROM municipio ORDER BY id');
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<option value='{$dados['id']}'></option>";
            }
           
        }else{
            return "falha ao carregar os dados";
        }
    }

    function getEstados(){
        require('conexao.php');
        $query = mysqli_query($con,'SELECT *FROM estado ORDER BY idestado');
        if($query){
            while($dados = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                echo "<li><a href=''>{$dados['nomeEstado']}</a></li>";
            }
        }else{
            return "falha ao carregar os dados";
        }
        
    }
?>