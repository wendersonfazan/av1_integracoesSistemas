<?php include_once 'topo.php'; ?>

<div class="main-content">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Salvar CEP</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="salvarCep.php" method="POST">
                <div class="form-group">
                    <label>Digite o CEP</label>
                    <input type="number" name="cep" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php">
                    <button type="button" class="btn btn-info">Voltar</button>
                </a>
            </form>
        </div>
    </div>
</div>

<?php include_once 'rodape.php'; ?>