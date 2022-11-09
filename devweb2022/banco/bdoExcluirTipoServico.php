<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idTipoServico = $_POST['idTipoServico'];

    try {
        $sql = "delete from TipoServico where idTipoServico = " . $idTipoServico;

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }

    header('location: /devweb2022/visao/tiposervico/buscarTipoServico.php');
?>