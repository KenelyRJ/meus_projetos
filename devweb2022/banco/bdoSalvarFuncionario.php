<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['dataNascimento'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $administrador = 0;
    if($_POST['administrador'] == 'on'){
        $administrador = '1';
    }

    try {
        $sql = "INSERT INTO Funcionario (nome, cargo, cpf, dataNascimento, login, senha, administrador) VALUES ('$nome', '$cargo','$cpf','$dataNascimento', '$login', '$senha', '$administrador')";
        $conexao->exec($sql);
        echo "Inserido com sucesso.";
    } catch(PDOException $e) {
        die("Não foi possível executar o script: $sql. " . $e->getMessage());
    }
?>

<a href="/devweb2022/visao/funcionario/cadastroDeFuncionario.php">Voltar</a>