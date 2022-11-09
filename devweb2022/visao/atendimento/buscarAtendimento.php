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
    <h2>Buscar Atendimento</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id Atendimento</th>
                <th scope="col">Cliente</th>
                <th scope="col">Funcionario</th>
                <th scope="col">Serviço</th>
                <th scope="col">data</th>
            </tr>
        </thead>
        <tbody>

            <?php
            try {
                $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
            } catch (PDOException $e) {
                die("Não foi possível conectar. " . $e->getMessage());
            }
            try {
                $resultado = $conexao->query("SELECT a.idAtendimento, c.nome, f.nome, t.nome, a.data  FROM atendimento AS a
                 INNER JOIN cliente AS c ON c.idCliente = a.idCliente  inner join funcionario as f on f.idFuncionario = a.idFuncionario
                 inner join tiposervico as t on t.idTipoServico = a.idTipoServico   ORDER BY a.data");


                if ($resultado->rowCount() > 0) {
                    while ($linha = $resultado->fetch()) {
                        echo "<tr>";
                        echo "<td>" . $linha[0] . "</td>";
                        echo "<td>" . $linha[1] . "</td>";
                        echo "<td>" . $linha[2] . "</td>";
                        echo "<td>" . $linha[3] . "</td>";
                        echo "<td>" . $linha[4] . "</td>";
                        
                        echo "</tr>";
                    }
                } else {
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