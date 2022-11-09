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
    <h2>Buscar Tipo Serviço</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome Serviço</th>
                <th scope="col">Valor do Serviço</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>

            <?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } 
    catch(PDOException $e){
        die("Não foi possível conectar. " . $e->getMessage());
    }
    try {
        $resultado = $conexao->query("SELECT * FROM tiposervico"); 
        if ($resultado->rowCount() > 0) {
            while ($linha = $resultado->fetch()) {
                echo "<tr>";
                echo "<td>" . $linha['idTipoServico'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['valor'] . "</td>";
                ?>
                <form method="POST" action="editarTipoServico.php">
                    <input type="hidden" name="idTipoServico" value="<?php echo $linha['idTipoServico']; ?>">
                    <td><input type="submit" class="btn btn-info" value="Editar"></td>
                </form>
                
                <form method="POST" action="/devweb2022/banco/bdoExcluirTipoServico.php">
                    <input type="hidden" name="idTipoServico" value="<?php echo $linha['idTipoServico']; ?>">
                    <td><input type="submit" class="btn btn-danger" value="Excluir"></td>
                </form>
                <?php 
                echo "</tr>";
            } 
        }else{
            echo "Nada Encontrado"; 
        }
        unset($resultado);
    } catch (PDOException $e) {
        die("Não foi possível executar o sql. " . $e->getMessage()); 
    }
    ?>
        </tbody>
    </table>
</div>
</body>

</html>