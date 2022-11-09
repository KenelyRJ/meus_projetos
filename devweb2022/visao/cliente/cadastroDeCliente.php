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
    <h2>Cadastro de Cliente</h2>
    <form action="/devweb2022/banco/bdoSalvarCliente.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputCpf">CPF</label>
                <input type="text" class="form-control" id="inputCpf" placeholder="CPF" name="cpf">
            </div>
            <div class="form-group col-md-3">
                <label for="inputNascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="inputNascimento" placeholder="Data de Nascimento"
                    name="dataNascimento">
            </div>
            <div class="form-group col-md-3">
                <label for="inputLogin">Login</label>
                <input type="text" class="form-control" id="inputLogin" name="login">
            </div>
            <div class="form-group col-md-3">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
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
</div>
</body>

</html>