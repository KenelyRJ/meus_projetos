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
    <h2>Editar Tipo Serviço</h2>
    <form action="/devweb2022/banco/bdoEditarTipoServico.php" method="POST">
        <?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }

    $idTipoServico = $_POST['idTipoServico'];

    try {
        $resultado = $conexao->query("SELECT * FROM TipoServico where idTipoServico=" . $idTipoServico); 
        if ($resultado->rowCount() > 0) {
            $linha = $resultado->fetch();
        ?>
        <div class="row">
            <input type="hidden" name="idTipoServico" value="<?php echo $linha['idTipoServico']; ?>">
            <div class="form-group col-md-9">
                <label for="nomeid">Nome Serviço</label>
                <input class="form-control" type="text" id="nomeid" 
                    value="<?php echo $linha['nome'];?>" name="nomeNoCad" />
            </div>
            <div class="form-group col-md-3">
                <label for="valorid">Valor</label>
                <input class="form-control" type="number" id="valorid" 
                    value="<?php echo $linha['valor'];?>" name="valorNoCad" />
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