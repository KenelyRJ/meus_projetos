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
    <h2>Buscar Cliente</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">cpf</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">login</th>
                <th scope="col">senha</th>

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
        $resultado = $conexao->query("SELECT * FROM cliente"); 
        if ($resultado->rowCount() > 0) {
            while ($linha = $resultado->fetch()) {
                echo "<tr>";
                echo "<td>" . $linha['idCliente'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['cpf'] . "</td>";
                echo "<td>" . $linha['dataNascimento'] . "</td>";
                echo "<td>" . $linha['login'] . "</td>";
                echo "<td>" . $linha['senha'] . "</td>";
                ?>
                <form method="POST" action="editarCliente.php">
                    <input type="hidden" name="idCliente" value="<?php echo $linha['idCliente']; ?>">
                    <td><input type="submit" class="btn btn-info" value="Editar"></td>
                </form>
                
                <form method="POST" action="/devweb2022/banco/bdoExcluirCliente.php">
                    <input type="hidden" name="idCliente" value="<?php echo $linha['idCliente']; ?>">
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