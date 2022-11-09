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
    <h2>Cadastro do Atendimento</h2>

    <?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=devweb2", "root", "");
    } catch (PDOException $e) {
        die("Não foi possível conectar. " . $e->getMessage());
    }

    ?>
    <form action="/devweb2022/banco/bdoSalvarAtendimento.php" method="POST">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="selectClienteid">Cliente</label>
                <select name="selectCliente" class="form-control" id="selectClienteid">
                    <?php
                    try {
                        $resultado = $conexao->query("SELECT * FROM cliente");
                        if ($resultado->rowCount() > 0) {
                            while ($linha = $resultado->fetch()) {
                                echo "<option value=\"" . $linha['idCliente'] . "\">" . $linha['nome']  . "</option>";
                            }
                        }
                    } catch (PDOException $e) {
                        die("Não foi possível conectar. " . $e->getMessage());
                    }
                    unset($resultado);
                    ?>

                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="selectfuncionarioid">Funcionario</label>
                <select name="selectFuncionario" class="form-control" id="selectfuncionarioid">
                    <?php
                    try {
                        $resultado = $conexao->query("SELECT * FROM funcionario");
                        if ($resultado->rowCount() > 0) {
                            while ($linha = $resultado->fetch()) {
                                echo "<option value=\"" . $linha['idFuncionario'] . "\">" . $linha['nome']  . "</option>";
                            }
                        }
                    } catch (PDOException $e) {
                        die("Não foi possível conectar. " . $e->getMessage());
                    } 
                    unset($resultado);
                    ?>

                </select>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="selectServicoid">Serviço</label>
                <select name="selectServico" class="form-control" id="selectServicoid">
                    <?php
                    try {
                        $resultado = $conexao->query("SELECT * FROM tiposervico");
                        if ($resultado->rowCount() > 0) {
                            while ($linha = $resultado->fetch()) {
                                echo "<option value=\"" . $linha['idTipoServico'] . "\">" . $linha['nome']  . "</option>";
                            }
                        }
                    } catch (PDOException $e) {
                        die("Não foi possível conectar. " . $e->getMessage());
                    }
                    unset($resultado);
                    ?>

                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="data">Data Agendamento</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Salvar" />
    </form>

</div>
</body>

</html>