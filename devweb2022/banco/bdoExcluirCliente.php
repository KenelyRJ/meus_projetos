<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idCliente = $_POST['idCliente'];

    try {
        $sql = "delete from cliente where idCliente = " . $idCliente;

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }

    header('location: /devweb2022/visao/cliente/buscarCliente.php');
?>