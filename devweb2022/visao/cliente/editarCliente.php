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
    <h2>Editar Cliente</h2>
    <form action="/devweb2022/banco/bdoEditarCliente.php" method="POST">
        <?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idCliente = $_POST['idCliente'];

    try {
        $resultado = $conexao->query("SELECT * FROM cliente where idCliente=" . $idCliente); 
        if ($resultado->rowCount() > 0) {
            $linha = $resultado->fetch();
        ?>
        <div class="row">
            <input type="hidden" name="idCliente" value="<?php echo $linha['idCliente']; ?>">
            <div class="form-group col-md-9">
                <label for="nomeid">Editar Cliente</label>
                <input class="form-control" type="text" id="nomeid" 
                    value="<?php echo $linha['nome'];?>" name="nomeNoPHP" />
            </div>
            <div class="form-group col-md-3">
                <label for="cpfid">cpf</label>
                <input class="form-control" type="text" id="cpfid" 
                    value="<?php echo $linha['cpf'];?>" name="cpfnoCad" />
            </div>
            <div class="form-group col-md-3">
                <label for="dataNascimentoid">dataNascimento</label>
                <input class="form-control" type="date" id="dataNascimentoId" 
                    value="<?php echo $linha['dataNascimento'];?>" name="dataNascimentonoCad" />
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