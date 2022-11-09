<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $nomeNoPHP = $_POST['nomeNoCad'];
    $valorNoPHP = $_POST['valorNoCad'];

    try {
        $sql = "INSERT INTO TipoServico (nome, valor) VALUES 
        ('$nomeNoPHP', '$valorNoPHP')";

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }
?>

<a href="/devweb2022/visao/tiposervico/cadastroDeTipoServico.php">Voltar</a>