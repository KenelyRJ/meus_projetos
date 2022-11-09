<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idFuncionario = $_POST['idFuncionario'];

    try {
        $sql = "delete from funcionario where idfuncionario = " . $idFuncionario;

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }

    header('location: /devweb2022/visao/funcionario/buscarFuncionario.php');
?>