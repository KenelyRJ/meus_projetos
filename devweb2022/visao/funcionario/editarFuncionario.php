<html>

<head>
    <link rel="stylesheet" href="/devweb2022/recursos/bootstrap-4.1/css/bootstrap.min.css">
    <script src="/devweb2022/recursos/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="/devweb2022/recursos/bootstrap-4.1/js/popper.min.js"> </script>
    <script src="/devweb2022/recursos/bootstrap-4.1/js/bootstrap.min.js"> </script>
</head>

</body>
<div class="container">
    <?php include("../../menu.php") ?>
    <h2>Editar Funcionario</h2>
    <form action="/devweb2022/banco/bdoEditarFuncionario.php" method="POST">
        <?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idFuncionario = $_POST['idFuncionario'];

    try {
        $resultado = $conexao->query("SELECT * FROM funcionario where idFuncionario = " . $idFuncionario); 
        if ($resultado->rowCount() > 0) {
            $linha = $resultado->fetch();
        ?>
        <div class="row">
            <input type="hidden" name="idFuncionario" value="<?php echo $linha['idFuncionario']; ?>">
            <div class="form-group col-md-9">
                <label for="nomeid">Nome</label>
                <input class="form-control" type="text" id="nomeid" 
                    value="<?php echo $linha['nome'];?>" name="nomeNoPHP" />
            </div>
            <div class="form-group col-md-3">
                <label for="cargoid">cargo</label>
                <input class="form-control" type="text" id="cargoid" 
                    value="<?php echo $linha['cargo'];?>" name="cargo" />
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input class="form-control" type="text" id="cpf" name="cpf" 
                value="<?php echo $linha['cpf'];?>"  /> </br></br>
            </div>
            <div class="form-group col-md-2">
                <label for="dataNascimento">Data de Nascimento</label>
                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" 
                value="<?php echo $linha['dataNascimento'];?>"  /> </br></br>
            </div>
        </div>
        <?php
        }else{
            echo "Nada Encontrado"; 
        }
        unset($resultado);
    } catch (PDOException $e) {
        die("Não foi possível executar o sql. " . $e->getMessage()); 
    }
    ?>

        <input class="btn btn-primary" type="submit" value="Salvar" />
    </form>
</div>
</body>

</html>