<?php
include_once 'topo.php';

try {
    $conn = new PDO('mysql:host=localhost;dbname=buscarcep', "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $data = $conn->query('SELECT * FROM cep');    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
} 
?>

<div class="main-content">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Cep's</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Cep</th>
                        <th>Logradouro</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Localidade</th>
                        <th>Uf</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $value) :?>
                    <tr>
                        <td>
                            <?= $value['cep']; ?>
                        </td>
                        <td>
                            <?= $value['logradouro']; ?>
                        </td>
                        <td>
                            <?= $value['complemento']; ?>
                        </td>
                        <td>
                            <?= $value['bairro']; ?>
                        </td>
                        <td>
                            <?= $value['localidade']?>
                        </td>
                        <td>
                            <?= $value['uf']   ?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <div class="col-md-4">
                <a class="btn btn-primary" href="index.php" role="button"> <i class="fas fa-arrow-right"></i> <h2>Voltar</h2> </a>
            </div>
        </div>
    </div>
</div>