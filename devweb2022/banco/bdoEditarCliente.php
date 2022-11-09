<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idCliente = $_POST['idCliente'];
    $nomeNoPHP = $_POST['nomeNoPHP'];
    $cpfNoPHP = $_POST['cpf'];
    $loginNoPHP = $_POST['login'];


    try {
        $sql = "update Cliente set nome = '" . $nomeNoPHP . 
        "', cpf = '" . $cpfNoPHP . "' where idCliente = " . $idCliente;

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }
    header('location: /devweb2022/visao/cliente/buscarCliente.php');
?>