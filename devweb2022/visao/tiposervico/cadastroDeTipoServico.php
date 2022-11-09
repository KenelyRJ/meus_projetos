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
    <h2>Cadastro de Tipo Serviço</h2>
    <form action="/devweb2022/banco/bdoSalvarTipoServico.php" method="POST">
        <div class="row">
            <div class="form-group col-md-9">
                <label for="nomeid">Nome Serviço</label>
                <input class="form-control" type="text" id="nomeid" name="nomeNoCad" />
            </div>
            <div class="form-group col-md-3">
                <label for="valorid">Valor</label>
                <input class="form-control" type="number" id="valorid" name="valorNoCad" />
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Salvar" />
    </form>
</div>
</body>

</html>