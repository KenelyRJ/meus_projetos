<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idFuncionario = $_POST['idFuncionario'];
    $nomeNoPHP = $_POST['nomeNoPHP'];
    $cargoNoPHP = $_POST['cargo'];
    $cpfNoPHP = $_POST['cpf'];
    $loginNoPHP = $_POST['dataNascimento'];
    $administrador = 0;
    if($_POST['administrador'] == 'on'){
        $administrador = '1';
    }

    try {
        $sql = "update funcionario set nome = '" . $nomeNoPHP . 
        "', cargo = '" . $cargoNoPHP ."', cargo = '" . $cargoNoPHP. "' where idFuncionario = " . $idFuncionario;

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }
    header('location: /devweb2022/visao/funcionario/buscarFuncionario.php');
?>