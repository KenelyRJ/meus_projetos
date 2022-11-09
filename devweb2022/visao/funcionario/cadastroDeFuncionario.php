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
    <h2>Cadastro de Funcionário</h2>

    <form action="/devweb2022/banco/bdoSalvarFuncionario.php" method="POST">

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nomeid" name="nome" /> </br></br>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="cargo">Cargo</label>
                <input class="form-control" type="text" id="cargo" name="cargo" /> </br></br>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input class="form-control" type="text" id="cpf" name="cpf" /> </br></br>
            </div>
            <div class="form-group col-md-2">
                <label for="dataNascimento">Data de Nascimento</label>
                <input class="form-control" type="date" id="dataNascimento" name="dataNascimento" /> </br></br>
            </div>
            <div class="form-group col-md-2">
                <label for="login">Login</label>
                <input class="form-control" type="text" id="login" name="login" /> </br></br>
            </div>
            <div class="form-group col-md-2">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" id="senha" name="senha" /> </br></br>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="form-group form-check">
                    <input type="checkbox" name="administrador" class="form-check-input" id="administradorID">
                    <label class="form-check-label" for="administradorID">Administrador</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>

    </body>

</html>