<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $selectCliente= $_POST['selectCliente'];
    $selectFuncionario = $_POST['selectFuncionario'];
    $selectServico = $_POST['selectServico'];
    $data = $_POST['data'];
   // $selectTipoServico = $_POST['funcionario'];

    try {
        $sql = "INSERT INTO atendimento (idCliente, idFuncionario, idTipoServico, data) VALUES  ('".$selectCliente."', '".$selectFuncionario."',  '".$selectServico."', '".$data."' )";

        $conexao->exec($sql);
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }
?>

<a href="/devweb2022/visao/atendimento/cadastroDeAtendimento.php"> Voltar</a>